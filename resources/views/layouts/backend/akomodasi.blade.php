@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabel Akomodasi</h1>
          </div>

          <div class="section-body">
          <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">nama</th>
                      <th scope="col">body</th>
                      <th scope="col">harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($akomodasis as $akomodasi)
                    <tr>
                      <th scope="row">{{$akomodasi->id}}</th>
                      <td>{{$akomodasi->nama}}</td>
                      <td>{{$akomodasi->body}}</td>
                      <td>{{$akomodasi->harga}}</td>
                      <td>
                      <a href="{{url('akomodasi/ubah/'.$akomodasi->id)}}" class="btn btn-success">Update</a><br><br>
                        <form action="{{ url('akomodasi/'. $akomodasi->id )}}" method="post">
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