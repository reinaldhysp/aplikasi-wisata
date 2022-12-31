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
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              @foreach($wisatas as $wisata)
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{$wisata->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Objek Wisata #{{$wisata->id}}</span>
                      <a href="{{route('tampil',$wisata->id)}}"><h4 style="text-transform: uppercase;">{{$wisata->title}}</h4></a>
                      <p align="justify">{{$wisata->excerpt}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <li><i class="fa fa-arrow-circle-down"></i></li>
                            <li><a href="{{route('tampil',$wisata->id)}}">Lihat Selengkapnya</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
                  <div class="col-lg-12 offset-lg-5">
                    <div class="box-footer">
                      <div class="pull-left">
                        <ul class="pagination">
                          {{ $wisatas->links("pagination::bootstrap-4") }}
                        </ul>
                      </div>
                    </div>
                  </div>
              
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Berita Terkini</h2>
                    </div>
                    <div class="content">
                      <ul>
                      @foreach($data as $dat)
                      @foreach($data as $datas)
                      @if($datas->slug == $dat->slug)
                        <li><a href="cari?data={{$dat->slug}}">
                          <h5>{{$datas->title}}</h5>
                          <span>{{$datas->created_at}}</span>
                        </a>
                        </li>
                        @endif
                        @endforeach
                        @endforeach
                      </ul>
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