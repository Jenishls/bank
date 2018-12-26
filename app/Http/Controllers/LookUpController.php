<?php

namespace App\Http\Controllers;

use App\LookUp;
use Illuminate\Http\Request;

class LookUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting.lookup.index');
    }

    public function fetch($param, Request $req)
    {
        // dd($req->terms['term']);
        // LookUp::where('title',$param)->distinct('title')->get()
        $query = \DB::table('look_ups')
                ->select('value as id','value as text')
                ->where('title',$param)
                ->orderBy('value');
        
        if(array_key_exists('term', $req->terms))
            $query = $query->where('value', 'like', $req->terms['term']. '%' );

        $data = $query->get();

        return $data->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting.lookup.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        LookUp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = LookUp::orderBy('created_at','desc')->get();
        return $data->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function edit(LookUp $lookUp)
    {
        // $data = LookUp::find($lookUp);
        $data = $lookUp;
        return view('setting.lookup.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LookUp $lookUp)
    {
        $lookUp->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LookUp  $lookUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(LookUp $lookUp)
    {
        $lookUp->delete();
    }
}
