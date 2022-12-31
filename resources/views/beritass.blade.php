@extends('layout.template')

@section('content')
<!-- Page Content -->

    <section class="blog-posts">
      @foreach($data as $dat)
      @foreach($author as $r)
      @if($r->id == $dat->author_id)
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      
                      <img src="../assets/images/{{$dat->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>BERITA</span>
                      <h1 align="center">{{$dat->title}}</h1>
                      <ul class="post-info">
                        <li><a href="#">{{$r->name}}</a></li>
                        <li><a href="#">{{$dat->created_at}}</a></li>
                      </ul>
                      <p>{{$dat->body}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      @endforeach
    </section>

    @include('layout.footer')
@endsection