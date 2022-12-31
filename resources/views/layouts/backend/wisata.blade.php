@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabel Objek Wisata</h1>
          </div>

          <div class="section-body">
          <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">title</th>
                      <th scope="col">excerpt</th>
                      <th scope="col">body</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wisatas as $wisata)
                    <tr>
                      <th scope="row">{{$wisata->id}}</th>
                      <td>{{$wisata->title}}</td>
                      <td>{{$wisata->excerpt}}</td>
                      <td>{{$wisata->body}}</td>
                      <td>
                      <a href="{{url('wisata/ubah/'.$wisata->id)}}" class="btn btn-success">Update</a><br><br> 
                        <form action="{{ url('wisata/'. $wisata->id )}}" method="post">
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