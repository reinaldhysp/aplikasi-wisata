@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabel Comment</h1>
          </div>

          <div class="section-body">
          <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Komentar</th>
                      <th scope="col">Email</th>
                      <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                      <th scope="row">{{$comment->id}}</th>
                      <td>{{$comment->name}}</td>
                      <td>{{$comment->body}}</td>
                      <td>{{$comment->email}}</td>
                      <td>{{$comment->alamat}}</td>
                      <td>
                      
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </section>
      </div>
@endsection