<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('Dashboard.ManageItems', compact('items'));

    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::create([
            "item_name"              => $request->item_name,
            "item_calories"          => $request->item_calories,
            "item_fat"               => $request->item_fat,
            "item_protein"           => $request->item_protein,
            "item_carb"              => $request->item_carb,
        ]);

        return redirect('ManageItems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item,$id)
    {
        $items = Item::where('id', $id)->get()->first();
        return view('Dashboard.ManageItems', [
            "$items" => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item, $id)
    {
        Item::where('id', $id)->update([
           
            "item_name"              => $request->item_name,
            "item_calories"          => $request->item_calories,
            "item_fat"               => $request->item_fat,
            "item_protein"           => $request->item_protein,
            "item_carb"              => $request->item_carb,
           

        ]);
        return redirect('Dashboard/ManageItems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item,$id)
    {
        $items = Item::findOrFail($id);
        $items->delete();
        return redirect('Dashboard/ManageItems');
    }
}
