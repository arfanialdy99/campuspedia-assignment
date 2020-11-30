<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class ComparesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['nama_kampus'] = College::all();
        return view('colleges.compare', $data);
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
    public function store(College $college)
    {
        return view('colleges.result', compact('college'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // $id[1] = $request->input('kampus1');
        // $id[2] = $request->input('kampus2');
        // $id[3] = $request->input('kampus3');
        // $id[4] = $request->input('kampus4');

        // for ($i = 1; $i <= 4; $i++) {
        //     if ($id[$i] != 0) {
        //         $kampus[$i] = College::where('id', $id[$i])->first();
        //     }
        // }
        $id = $request->input('kampus');
        
        foreach($id as $a){
            if ($a != null) {
                       $kampus[] = College::where('id', $a)->first();
                    }
        }
        // dd($kampus);
        $data['kampus'] = $kampus;
        return view('colleges.result', $data);
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
