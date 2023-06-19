<?php

namespace App\Http\Controllers;

use App\Models\activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        
        $request->validate([
         
            "description"=>"required",            
        ]);

       

        DB::table("activites")->insert([
            "description"=>$request->description,
            "type_id"=>$request->type_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, activite $activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(activite $activite)
    {
        //
    }
}
