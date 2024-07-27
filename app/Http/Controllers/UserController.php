<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       echo "All Users Data";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Add New Users Page";
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Add New Users Page $id"; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    echo "edit page $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "edit page $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
