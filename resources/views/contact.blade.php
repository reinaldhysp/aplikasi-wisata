@include('layout.template')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Contact us, Let’s stay in touch</h4>
                <h2>ENJOY UBUD!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Send us a message</h2>
                    </div>
                    <div class="content">
                      <form action="/contact/simpan" method="post">
                      {{ csrf_field() }}
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" placeholder="Your Name" required="required">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" placeholder="Your Email" required="required">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="alamat" type="text" placeholder="Your Adress" required="required">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="body" rows="6" placeholder="Your Message" required="required"></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Send Massage</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>Contact Information</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>(0361) 977224</h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>info@gianyarkab.go.id</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>Jln. Tjok Putra Sudarsana, 
                          	<br>Kecamatan Ubud, Kabupaten Gianyar</h5>
                          <span>ADDRESS</span>
                        </li>
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
    
    @include('sweetalert::alert') 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>