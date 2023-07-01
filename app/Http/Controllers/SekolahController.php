<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sekolah::paginate(10);

        return view('sekolah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'npsn' => 'required',
            'alamat' => 'required',
            'foto' => 'image',
            'description' => 'required',
            'website' => 'bail',
        ]);
        
        $data['foto'] = $request->foto->store('images');

        Sekolah::create($data);

        return redirect()->route('sekolah.index')->with('status', 'Berhasil tambah sekolah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        return view('sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $data = $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'npsn' => 'required',
            'alamat' => 'required',
            'foto' => 'image',
            'description' => 'required',
            'website' => 'bail',
        ]);
        
        if ($request->foto)
        {
            $data['foto'] = $request->foto->store('images');
        }
        else
        {
            // unset($data['foto']);
        }

        $sekolah->update($data);

        return redirect()->route('sekolah.index')->with('status', 'Berhasil edit sekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        try {
            $sekolah->delete();
        } catch (\Exception $ex) {
            return back()->with('status', 'Gagal hapus sekolah');
        }

        return back()->with('status', 'Berhasil hapus sekolah');
    }
}
