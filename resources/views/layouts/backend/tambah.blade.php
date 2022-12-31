@extends('layouts.backend.sidebar')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Berita</h1>
          </div>

          <div class="section-body">
          <form method="post" action="/berita">
            @csrf
                <div class="form-group">
                    <label for="author_id">ID Anda</label>
                    <input type="text" class="form-control" id="author_id" placeholder="masukkan id anda" name="author_id" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="masukkan judul" name="title" required>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="masukkan slug" name="slug" required>
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label><br>
                    <textarea name="excerpt" id="excerpt" cols="140" rows="10" placeholder="Masukkan kutipan berita" required></textarea>
                </div>
                <div class="form-group">
                    <label for="body">Body</label><br>
                    <textarea name="body" id="body" cols="140" rows="10" placeholder="Masukkan isi berita" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Berita</button>
         </form>
          </div>
        </section>
      </div>
@endsection