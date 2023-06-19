<?php

namespace App\Http\Controllers;

use App\Models\actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $actualites=DB::table("actualites")->get();
        return view('admin.show_actualites',compact('actualites'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add_actualite');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     "titre"=>"required",
        //     "description"=>"required",
        //     "contenu"=>"required",
        //     "lieu"=>"required",
        //     "image"=>'required|image|mimes:jpeg,png,jpg|max:1048',
        // ]);
        $date=  date("d-m-Y"); 

        $imageName = $request->titre.'.'.$request->image->extension();
        $request->image->move(public_path('assets/actualites'), $imageName);

        DB::table("actualites")->insert([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "description"=>$request->description,
            "contenu"=>$request->contenu,
            "lieu"=>$request->lieu,
            "date"=>$date,
            "image"=>$imageName
        ]);

        return redirect("actualites");
    
    }

    /**
     * Display the specified resource.
     */
    public function show(actualite $actualite)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(actualite $actualite)
    {
        //
    }
}
