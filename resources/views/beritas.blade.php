@extends('layout.template')

@section('content')
<!-- Page Content -->
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

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
      @foreach($data as $dat)
      @foreach($author as $r)
      @if($r->id == $dat->author_id)
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{$dat->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>BERITA</span>
                      <a href="cari?data={{$dat->slug}}"><h4>{{$dat->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{$r->name}}</a></li>
                        <li><a href="#">{{$dat->created_at}}</a></li>
                      </ul>
                      <p>{{$dat->excerpt}}</p>
                    </div>
                  </div>
                </div>
              </div>
      @endif
      @endforeach
      @endforeach
            </div>
          </div>
      <div class="col-lg-4" style="padding-top:150px">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">SEARCHING</button>
                      <div id="myDropdown" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        @foreach($data as $dat)
                          <a href="cari?data={{$dat->slug}}">{{$dat->title}}</a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details.html">
                          <h5>Datangi Desa Wisata Mas Ubud, Sandiaga Ajak Promosi via Konten Digital</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Hal-hal yang harus dilakukan di desa Ubud</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Kedewatan, Ubud, Gianyar</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Kategori</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Kawasan Wisata</a></li>
                        <li><a href="#">- Sejarah</a></li>
                        <li><a href="#">- Tempat Menarik Lainnya</a></li>
                        <li><a href="#">- Oleh-oleh Desa Ubud</a></li>
                        <li><a href="#">- Keunikan dan Keindahan Desa Ubud</a></li>
                        <li><a href="#">- Penorama</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
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