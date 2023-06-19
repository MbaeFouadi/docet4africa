<?php

namespace App\Http\Controllers;

use App\Models\type_activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeActiviteController extends Controller
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

       

        DB::table("type_activite")->insert([
            "description"=>$request->description,
            
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(type_activite $type_activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_activite $type_activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type_activite $type_activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type_activite $type_activite)
    {
        //
    }
}
