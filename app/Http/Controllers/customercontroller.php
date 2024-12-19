<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\product;
use Illuminate\Http\Request;

class customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       /* $s1=Customer::paginate(5);
        return view('customerlist',['data'=>$s1]);*/
        $s1=Customer::get();
        echo "
        <h3>Many Many Relationship</h3>
        <h4>Customer List with Product</h4>
        <table border='2px'>
            <tr>    
            <th>Id</th>
                <th>Name</th>
                <th>Contact</th>
                 <th>Phone</th>
                 <th>Email</th>
                <th>City</th>
                </tr>";
        foreach($s1 as $d)
        {
            echo "<tr>";
            echo"<td>".$d->c_id."</td>";
            echo"<td>".$d->c_name."</td>";
            echo"<td>".$d->c_phone."</td>";
            echo"<td>".$d->c_email."</td>";
            echo"<td>".$d->c_city."</td>";
            foreach($d->product as $c)
            {
                echo "<td>".$c->p_name."</td>";
                echo "<td>".$c->p_price."</td>";
            }
        }
        echo "</tr></table>";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addcustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Customer::create([
            "c_name"=>$request->name,
            "c_email"=>$request->email,
            "c_phone"=>$request->phone,
            "c_address"=>$request->address,
            "c_city"=>$request->city
        ]);
        return redirect()->route('customerlist.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=Customer::find($id);
       // return $s1;
        return view('showcustomer',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $s1=Customer::find($id);
        
         return view('updatecustomer',compact('s1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $s1=Customer::where('c_id',$id)
           ->update([
            "c_name"=>$request->name,
            "c_email"=>$request->email,
            "c_phone"=>$request->phone,
            "c_address"=>$request->address,
            "c_city"=>$request->city
        ]);
        return redirect()->route('customerlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $s1=Customer::where('c_id',$id)
            ->delete();
            return redirect()->route('customerlist.index');    
    }
}
