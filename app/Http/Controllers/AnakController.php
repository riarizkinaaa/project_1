<?php

namespace App\Http\Controllers;

use App\Models\AnakY;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $anak=AnakY::get();
        // dd($anak);
        return view('pendata.form_anak',compact('anak'));
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
        AnakY::create([
            'nama_lengkap'=>$request->nama_lengkap,
            'nomer_kk'=>$request->nomer_kk,
            'nomer_nik'=>$request->nomer_nik,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tgl_lahir'=>$request->tgl_lahir,
            'nama_wali'=>$request->nama_wali,
            'alamat_sekolah'=>$request->alamat_sekolah,
            'status_anak'=>$request->status_anak,
            'foto_anak'=>$request->foto_anak,
        ]);
        return redirect('/dataA');
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
