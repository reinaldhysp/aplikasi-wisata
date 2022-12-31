<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Berita;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = wisata::all();
        return view("layouts.backend.wisata",compact('wisatas'));
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
        $wisata = DB::table('wisatas')->where('id',$id)->first();
        return view('layouts.backend.editWisata', compact('wisata'));
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
        DB::table('wisatas')->where('id',$id)
        ->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('wisatas')->where('id',$id)->delete();
        return redirect('wisata');
    }

    public function open()
    {
        $wisatas = Wisata::paginate(3);
        $data = DB::select('select * from beritas');
        return view("objekwisata",['wisatas'=>$wisatas,'data'=>$data]);
    }

    public function tampil($id)
    {
        $wisatas = Wisata::findOrFail($id); 
        return view("tampilanwisata",compact('wisatas'));
    }

    public function cari(Request $request)
    {
        $data = DB::select('select * from beritas where title="'.$request->input('data').'"');
        $datas = DB::select('select * from users');
        return view("tampilanberita",['data'=>$data,'author'=>$datas]);
    }
}
