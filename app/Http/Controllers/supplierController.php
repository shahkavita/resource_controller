<?php
namespace App\Http\Controllers;
use App\Models\supplier;
use App\Models\account;
use App\Models\account_history;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $s1=supplier::with('account')->with('history')->get();
       return $s1;
        echo "
        <h3>Has One  Through Relation</h3>
        <h4>Supplier List with Account and Account_history</h4>
        <table border='2px'>
            <tr>    
            <th>Id</th>
                <th>Name</th>
                <th>Account_number</th>
                 <th>History details</th>
                </tr>";
        foreach($s1 as $d)
        {
            echo "<tr>";
            echo"<td>".$d->s_id."</td>";
            echo"<td>".$d->name."</td>";
              echo"<td>".$d->history->a_number."</td>";
           // echo"<td>".$d->history->details."</td>";
        }
        echo "</tr></table>";
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
