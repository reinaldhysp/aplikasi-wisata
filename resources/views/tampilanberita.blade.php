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
                <h4>Berita Terkini</h4>
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
              @foreach($data as $dat)
              @foreach($author as $r)
              @if($r->id == $dat->author_id)
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{$dat->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Berita #{{$dat->id}}</span>
                      <a><h4 style="text-transform: uppercase;">{{$dat->title}}</h4></a>
                      <ul class="post-info">
                        <li><a>{{$r->name}}</a></li>
                        <li><a>{{$dat->created_at}}</a></li>
                      </ul>
                      <p align="justify">{{$dat->body}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <li><i class="fa fa-arrow-circle-left"></i></li>
                            <li><a href="/beritas">Kembali</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layout.footer')
@endsection