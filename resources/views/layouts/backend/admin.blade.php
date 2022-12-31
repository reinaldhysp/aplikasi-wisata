@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabel Admin</h1>
          </div>

          <div class="section-body">
          <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </section>
      </div>
@endsection