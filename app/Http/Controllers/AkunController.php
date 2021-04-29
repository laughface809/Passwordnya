<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns = Akun::all();
        return view('admin.akun.index', ['akuns' => $akuns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akuns = Akun::pluck('nama', 'id');
        return view('admin.akun.create', ['akuns' => $akuns]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $akun = new Akun();

        $akun->nama = $request->nama;
        $akun->email = $request->email;

        $akun->jenis = $request->jenis;
        if (($request->jenis) == 1) {
            $akun->jenis = ('hash-sha256');
            $dataencode = hash('sha256', $akun->email);
            $akun->encode = $dataencode;
        } else{
            $akun->jenis = ('base64');
            $dataencode = base64_encode($akun->email);
            $akun->encode = $dataencode;
        }
        $akun->save();
        /*$akun->passwords()->sync($request->passwords, 'false');
        Session::flash('Success', $akun->nama . 'berhasil ditambah'); */
        return redirect('akuns');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        //
    }
}
