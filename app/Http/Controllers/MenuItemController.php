<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use App\Models\Category;
use App\Models\MenuItem;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuItems = MenuItem::latest()->paginate(10);

        $categories = Category::all();

        return view('admin.menu-item.index', compact('menuItems', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuItemRequest $request)
    {

        $cloudinaryImage = $request->file('image')->storeOnCloudinary('warkopsans/menu-items');
        $url = $cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();

        MenuItem::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $url,
            'public_id' => $public_id,
        ]);

        return redirect()->route('menu-items.index')->with('success', 'Menu items created successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem)
    {

        if($request->hasFile('image')){
            Cloudinary::destroy($menuItem->public_id);
            $cloudinaryImage = $request->file('image')->storeOnCloudinary('warkopsans/menu-items');
            $url = $cloudinaryImage->getSecurePath();
            $public_id = $cloudinaryImage->getPublicId();

            $menuItem->update([
                'image' => $url,
                'public_id' => $public_id,
            ]);

        }

        $menuItem->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('menu-items.index')->with('success', 'Menu items updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menuItem)
    {
        Cloudinary::destroy($menuItem->public_id);
        $menuItem->delete();

        return redirect()->route('menu-items.index')->with('success', 'Menu items deleted successfully');
    }
}
