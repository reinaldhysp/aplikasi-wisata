<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = berita::all();
        return view("layouts.backend.berita",compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layouts.backend.tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->author_id = $request->author_id;
        $berita->slug = $request->slug;
        $berita->title = $request->title;
        $berita->excerpt = $request->excerpt;
        $berita->body = $request->body;
        

        $berita->save();

        return redirect('/berita')->with('status','Berhasil Ditambahkan');

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
        $berita = DB::table('beritas')->where('id',$id)->first();
        return view('layouts.backend.editBerita', compact('berita'));
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
        DB::table('beritas')->where('id',$id)
        ->update([
            'id'=> $request->author_id,
            'slug' => $request->slug,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);

        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        DB::table('beritas')->where('id',$id)->delete();
        return redirect('berita');

    }
}
