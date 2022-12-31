@extends('layout.template')
@section('content')
<style>
.dropbtn {
  background-color: rgba(50,32,10,0.4);
  color: white;
  padding: 16px;
  width:300px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

/* The search field */
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  border: 1px solid #ddd;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          @foreach($wisatas as $wisata)
          @foreach($wisatas as $wisat)
          @if($wisat->title == $wisata->title)
          <div class="item">
            <img src="{{$wisata->image}}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Objek Wisata</span>
                </div>
                <a href="{{route('tampil',$wisata->id)}}"><h4>{{$wisat->title}}</h4></a>
                <ul class="post-info">
                  <li><a href="#">Bali</a></li>
                  <li><a href="#">{{$wisat->created_at}}</a></li>
                </ul>
              </div>
            </div>
          </div> 
          @endif
          @endforeach
          @endforeach
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
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
                      <span>Kenal Ubud</span>
                      <a href="cari?data={{$dat->slug}}"><h4 style="text-transform: uppercase;">{{$dat->title}}</h4></a>
                      <ul class="post-info">
                        <li><a>{{$r->name}}</a></li>
                        <li><a>{{$dat->created_at}}</a></li>
                      </ul>
                      <p align="justify">{{$dat->excerpt}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                            <li><i class="fa fa-arrow-circle-down"></i></li>
                            <li><a href="cari?data={{$dat->slug}}">Lihat Selengkapnya</a></li>
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

                <div class="col-lg-12 offset-lg-5">
                    <div class="box-footer">
                      <div class="pull-left">
                        <ul class="pagination">
                          {{ $data->links("pagination::bootstrap-4") }}
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
                  <div class="sidebar-item search">
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">SEARCHING</button>
                      <div id="myDropdown" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        @foreach($berit as $dat)
                          <a href="cari?data={{$dat->slug}}">{{$dat->title}}</a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                      <div class="sidebar-heading">
                        <h2>Akomodasi</h2>
                      </div>
                      <div class="content">
                        <ul>
                          @foreach($akomodasis as $akomodasi)
                          <li><a>
                            <h5>{{$akomodasi->nama}}</h5>
                            <span>{{$akomodasi->harga}}</span>
                          </a>
                          </li>
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
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
    @include('layout.footer')
@endsection