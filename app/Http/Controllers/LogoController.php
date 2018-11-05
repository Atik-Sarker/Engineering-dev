<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::orderBy('created_at', 'desc')->paginate(10);
        return view('backEnd.logo.manage', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|integer|max:4',
            'status' => 'required|integer|Boolean',
            'image' => 'required|image',
        ]);
        
        if($request->has('image'))
        {
         $path = $request->file('image')->store('logo');        
        }
        
        $logo = new Logo();
        
        $logo->type = $request->type;
        $logo->status = $request->status;
        $logo->image = $path;
        $logo->save();
        return redirect(route('logo.manage'))->with('status', 'logo add successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logos = Logo::findOrFail($id);
        
        return view('backEnd.logo.edit', compact('logos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'type' => 'required|integer|max:4',
            'status' => 'required|integer|Boolean',
        ]);
        $logo = Logo::findOrFail($id);

        // return $request->all();
        if($request->has('image'))
        {
            if (file_exists(storage_path("app/public/{$logo->image}")))
            {
                unlink(storage_path("app/public/{$logo->image}"));
            }
              
            $path = $request->file('image')->store('logo'); 
            $logo->type = $request->type;
            $logo->status = $request->status;
            $logo->image = $path;
            $logo->save();
            return redirect(route('logo.manage'))->with('status', 'logo Update successfully!'); 
        }
        // without image 
        $logo->type = $request->type;
        $logo->status = $request->status;
        $logo->save();
        return redirect(route('logo.manage'))->with('status', 'logo Update successfully!'); 
        
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        if (file_exists(storage_path("app/public/{$logo->image}")))
        {
            unlink(storage_path("app/public/{$logo->image}"));
        }
        Logo::findOrFail($id)->delete();
        return redirect(route('logo.manage'))->with('status', 'logo delete successfully!'); 
    }
}
