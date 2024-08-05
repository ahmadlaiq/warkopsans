<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Meja;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        $mejas = Meja::all();

        return view('admin.order.index', compact('orders', 'mejas'));
    }

    /**
     * Store the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Store Order
        $order = Order::create([
            'invoice_number' => 'WRSNS-' . time() . rand(10, 99),
            'meja_id' => $request->meja_id,
            'customer_name' => $request->customer_name,
            'customer_request' => $request->customer_request,
            'status' => 'pending',
            'total_amount' => $request->total,     
            'payment_method' => 'cash',
        ]);

        $totalAmount = 0;

        $detail_data = $request->data;

        foreach ($detail_data as $item => $value) {
            OrderItem::create([
                'order_id'         => $order->id,
                'menu_item_id'    => $value['menu_item_id'],
                'quantity'        => $value['quantity'],
                'price'           => $value['price'],
                'subtotal'       => $value['subtotal']
            ]);
        }

        return redirect()->route('waiting-room', $order->id)->with('success', 'Silahkan menunggu pesanan Anda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orderItems = $order->orderItems;
        return view('admin.order.show', compact('order', 'orderItems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        DB::beginTransaction();

        try {
            // Delete associated order items first
            $order->orderItems()->delete();

            // Delete the order
            $order->delete();

            // Commit the transaction
            DB::commit();

            return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();

            // Optionally, you can log the error or handle it as needed
            return redirect()->route('orders.index')->with('error', 'Failed to delete order');
        }
    }

    /**
     * Print the specified resource.
     */
    public function print(Order $order)
    {
        $orderItems = $order->orderItems;
        return view('admin.order.print', compact('order', 'orderItems'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeOrderItems(StoreOrderItemRequest $request)
    {
        OrderItem::create($request->validated());

        return redirect()->route('orders.show')->with('success', 'Order items added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateOrderItem(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        $orderItem->update($request->validated());

        return redirect()->route('orders.show')->with('success', 'Order item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOrderItem(OrderItem $orderItem)
    {
        $orderItem->delete();

        return redirect()->route('orders.show')->with('success', 'Order item deleted successfully');
    }
}
