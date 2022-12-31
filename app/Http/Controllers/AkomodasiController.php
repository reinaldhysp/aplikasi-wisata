<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Akomodasi;
use App\Models\Wisata;

class AkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akomodasis = akomodasi::all();
        return view("layouts.backend.akomodasi",compact('akomodasis'));
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
        $akomodasi = DB::table('akomodasis')->where('id',$id)->first();
        return view('layouts.backend.editAkomodasi', compact('akomodasi'));
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
        DB::table('akomodasis')->where('id',$id)
        ->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'body' => $request->body
        ]);

        return redirect('akomodasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('akomodasis')->where('id',$id)->delete();
        return redirect('akomodasi');
    }

    public function open()
    {
        $akomodasis = akomodasi::paginate(3);
        $data = DB::select('select * from beritas');
        return view("halamanakomodasi",['akomodasis'=>$akomodasis,'data'=>$data]);
    }

    public function cari(Request $request)
    {
        $data = DB::select('select * from beritas where title="'.$request->input('data').'"');
        $datas = DB::select('select * from users');
        return view("tampilanberita",['data'=>$data,'author'=>$datas]);
    }
}
