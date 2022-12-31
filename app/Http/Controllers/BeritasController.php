<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Berita;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::paginate(3);
        $berit = DB::select('select * from beritas');
        $datas = DB::select('select * from users');
        $wisatas = DB::select('select * from wisatas');
        $akomodasis = DB::select('select * from akomodasis');
        return view("halamanberita",['data'=>$data,'berit'=>$berit,'author'=>$datas,'wisatas'=>$wisatas,'akomodasis'=>$akomodasis]);
    }
    
    public function cari(Request $request)
    {
        $data = DB::select('select * from beritas where title="'.$request->input('data').'"');
        $datas = DB::select('select * from users');
        return view("tampilanberita",['data'=>$data,'author'=>$datas]);
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

        return redirect('berita');
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

    public function tampil($id)
    {
        $wisatas = Wisata::findOrFail($id); 
        return view("tampilanwisata",compact('wisatas'));
    }
}
