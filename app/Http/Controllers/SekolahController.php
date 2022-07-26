<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siswa()
    {
        //menampilkan semua data dari model slot
        $sekolah = sekolah::all();
        return view('sekolah.siswa', compact('sekolah'));
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
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(sekolah $sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sekolah $sekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(sekolah $sekolah)
    {
        //
    }
}
