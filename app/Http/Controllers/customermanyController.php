<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\customer_many;
use Illuminate\Http\Request;

class customermanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       /* $s1=customer_many::with("oldestorder")->get();
        return $s1;

        $s1=customer_many::with("latestorder")->find(4);
        return $s1;
        $s1=customer_many::with("maxorder")->get();
        return $s1;*/
        $s1=customer_many::with("order")->get();
        return $s1;
        
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
