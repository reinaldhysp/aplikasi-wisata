@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabel Berita</h1>
          </div>

          <div class="section-body">
          <a href="/berita/create" class="btn btn-primary"><h5>Tambah Berita</h5></a>
          <br><br>
          <table class="table" >
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">author_id</th>
                      <th scope="col">title</th>
                      <th scope="col">excerpt</th>
                      <th scope="col">body</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beritas as $berita)
                    <tr>
                      <th scope="row">{{$berita->id}}</th>
                      <td>{{$berita->author_id}}</td>
                      <td>{{$berita->title}}</td>
                      <td>{{$berita->excerpt}}</td>
                      <td>{{$berita->body}}</td>
                      <td>
                      <a href="{{url('berita/ubah/'.$berita->id)}}" class="btn btn-success">Update</a><br><br>
                        <form action="{{ url('berita/'. $berita->id )}}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </section>
      </div>
@endsection