<?php

namespace App\Http\Controllers;
use App\Models\RecyrecyclingProduct;

use Illuminate\Http\Request;

class recyclingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = RecyrecyclingProduct::all();
        return view ('recycling_product.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recycling_product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        RecyrecyclingProduct::create($requestData);
        return redirect('member')->with('flash_message', 'product Added!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
