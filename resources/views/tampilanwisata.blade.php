@extends('layout.template')

@section('content')
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Objek Wisata</h4>
                <h2>Desa Ubud, Bali</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{$wisatas->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Objek Wisata #{{$wisatas->id}}</span>
                      <a><h4 style="text-transform: uppercase;">{{$wisatas->title}}</h4></a>
                      <p align="justify">{{$wisatas->body}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <li><i class="fa fa-arrow-circle-left"></i></li>
                            <li><a href="/objekwisata">Kembali</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layout.footer')
@endsection