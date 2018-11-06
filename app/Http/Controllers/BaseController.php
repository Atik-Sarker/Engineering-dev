<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\Logo;
use App\Gallery;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::where('status', true)->orderBy('created_at','desc')->get();

         $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();


         $ourClients = Logo::where([
            'type' => 2,
            'status' => true,
         ])->orderBy('created_at','desc')->get();

         $ourPartners = Logo::where([
            'type' => 3,
            'status' => true,
         ])->orderBy('created_at','desc')->get();

         $gallerys = Gallery::where(['status' => true,])->orderBy('created_at','desc')->get();

        return view('fontEnd.index', compact('sliders','ourClients','ourPartners', 'logo', 'gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
