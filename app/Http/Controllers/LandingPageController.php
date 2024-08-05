<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\MenuItem;
use App\Models\Order;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $makanan = MenuItem::where('category_id', 1)->get();

        $minuman = MenuItem::where('category_id', 2)->get();

        $cemilan = MenuItem::where('category_id', 3)->get();

        $mejas = Meja::query()->where('status', 'available')->get();

        $menuItems = MenuItem::all();

        return view('user.index', compact('makanan', 'minuman', 'cemilan', 'mejas', 'menuItems'));
    }

    public function waitingRoom($id)
    {
        $order = Order::find($id);
        
        return view('user.waiting-room', compact('order'));
    }
}
