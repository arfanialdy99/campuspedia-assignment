<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $college = College::all();
        return view('colleges.index', compact('college'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_kampus' => 'required',
            'akreditasi' => 'required',
            'jenis_kampus' => 'required',
            'peringkat_asia' => 'required',
            'peringkat_lokal' => 'required',
            'lokasi' => 'required'
        ];
    
        $customMessages = [
            'required' => 'This field is required.'
        ];
    
        $this->validate($request, $rules, $customMessages);

        College::create($request->all());

        return redirect('/colleges')->with('status', 'Data Universitas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        return view('colleges.details', compact('college'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college)
    {
        College::where('id', $college->id)
            ->update([
                'nama_kampus' => $request->nama_kampus,
                'akreditasi' => $request->akreditasi,
                'jenis_kampus' => $request->jenis_kampus,
                'peringkat_asia' => $request->peringkat_asia,
                'peringkat_lokal' => $request->peringkat_lokal,
                'lokasi' => $request->lokasi
            ]);

        return redirect('/colleges')->with('status', 'Data Universitas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        College::destroy($college->id);
        return redirect('/colleges')->with('status', 'Data Universitas Berhasil Dihapus');
    }
}
