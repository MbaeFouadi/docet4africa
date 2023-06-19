<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $evenements=DB::table("evenements")->get();
        return view('admin.show_event',compact("evenements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add_event');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    

        $dates=date('d-m-Y', strtotime(\Carbon\Carbon::parse(now())));
        // $date=  date("d-m-Y"); 
    //    $dates= \Carbon\Carbon::parse(now());
        $imageName = $request->titre.'.'.$request->image->extension();
        $request->image->move(public_path('assets/events'), $imageName);

        DB::table("evenements")->insert([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "description"=>$request->description,
            "contenu"=>$request->contenu,
            "lieu"=>$request->lieu,
            "date"=>now(),
            "image"=>$imageName
        ]);

        return redirect("evenements");

    }

    /**
     * Display the specified resource.
     */
    public function show(evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(evenement $evenement)
    {
        //
    }
}
