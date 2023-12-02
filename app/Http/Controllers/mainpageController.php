<?php

namespace App\Http\Controllers;

use App\Models\mainpage;
use Illuminate\Http\Request;

class mainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("mainpage");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mainpage $mainpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mainpage $mainpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mainpage $mainpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mainpage $mainpage)
    {
        //
    }
}
