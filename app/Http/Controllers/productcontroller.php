<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Customer;
use App\Models\user_product;
class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $s1=product::get();
        echo "
        <h3>Many Many Relationship</h3>
        <h4>Product List with Customers</h4>
        <table border='2px'>
            <tr>    
            <th>Id</th>
                <th>Name</th>
                <th>price</th>
                 <th>Customer Name</th>
                </tr>";
        foreach($s1 as $d)
        {
            echo "<tr>";
            echo"<td>".$d->p_id."</td>";
            echo"<td>".$d->p_name."</td>";
            echo"<td>".$d->p_price."</td>";
            foreach($d->customers as $c)
            {
                echo "<td>".$c->c_name."</td>";
            }
        }
        echo "</tr></table>";
        //return $s1;
       // return $s1->customers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $p1=product::find(3);
        $s1=[8,4];
        $p1->customers()->attach($s1);        
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
