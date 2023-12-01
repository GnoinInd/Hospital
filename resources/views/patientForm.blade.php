<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>




    <script type="text/javascript">

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'en,hi,bn,mai,mr,sa,ta,te,kn,pa,layout: google.translate.TranslateElement.InlineLayout.SIMPLE' }, 'google_translate_element');

        }

    </script>







    <link rel="icon" href="img/favicon.png" type="image/icon type">

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="{{ asset('css/homdeo.css') }}">
    <script src="{{ asset('js/float-panel.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/float-panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
    <script src="https://kit.fontawesome.com/bbed85d1ee.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">


    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    




    <title>Dr.Nitin</title>

</head>

<body class="bg-light">



<script>
  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>




    <div class=" bg-warning bg-white">
        <div class="social_icons ps-2 pt-1 ">
            <div class="container-fluid    d-flex">
                <div class="col-md-8 ">
                    <i class='fas fa-phone-square-alt p-1  ' style='font-size:18px'></i>
                    <i class='fas fa-envelope-square p-1 ' style='font-size:18px'></i>
                    <i class="fa fa-linkedin-square p-1 " style="font-size:18px"></i>
                    <i class="fa fa-facebook-official p-1 " style="font-size:18px"></i>
                    <i class="fa fa-twitter p-1 pe-5 " style="font-size:18px"></i>
                    <i class="fa-solid fa-phone p-2"></i><span>+911230567890</span>
                    <i class="fa fa-envelope p-2" aria-hidden="true"></i><span>Example@gmail.com</span>
                    <a href="#map-container-google-1"><i class="fa fa-map-marker p-2"
                            aria-hidden="true"></i><span>Location</span></a>
                </div>
                <div class="col-md-4 text-end">
                    <div id="google_translate_element"></div>

                </div>
            </div>


        </div>


    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar_shadow_top navbar-dark ">
        <div class="container-fluid">
            <div class="main-logo ps-2">
                <a href="/homdeo.html"><img src="{{ asset('storage/mainlogo.webp') }}" alt="logo"></a>
            </div>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav">

                    <a href="{{ url('/') }}" class="nav-item nav-link active">HOME</a>
                    <a href="{{ url('form') }}" class="nav-item nav-link">BOOK APPOINTMENT</a>
                    <a href="#treatmnt_for" class="nav-item nav-link">TREATMENTS</a>
                    <a href="#about_us" class="nav-item nav-link">ABOUT US</a>
                    <a href="#gallery_sect" class="nav-item nav-link">GALLERY</a>
                    <a href="#useful_videos" class="nav-item nav-link">VIDEOS</a>
                    <a href="#carouselExampleControls" class="nav-item nav-link">TESTIMONIALS</a>
                    <a href="#contact_us_sec" class="nav-item nav-link">CONTACT US</a>
                </div>

            </div>
        </div>
    </nav>

    





  






    <section class="footer bg-white pt-5 pb-3 shadow-sm border" id="contact_us_sec">
        <div class="container border  ">
            <div class="panel panel-success">
            
                
                <div class="panel-body">
                    <form action="{{ route('form.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 p-0 m-0">
                                <div class="panel-heading  text-center mb-4 p-3">Schedule an Appointment</div>
                            </div>
                            <div class="col-md-6">
        
                                <div class="form-group">
                                    <label class="control-label">Patient Name:*</label>
                                    <input type="text" class="form-control" name="name" id="name" required
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phone Number:*</label>
                                    <input type="tel" class="form-control" name="phone" id="number" required
                                        placeholder="1234567890">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label class="control-label">Email ID</label>
                                    <input type="text" class="form-control" name="email" id="email" required
                                        placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                         <label class="control-label">Reffered By:</label>
                         
                         <select name="ref" class="form-control" required>
                         <option value="">Select</option>
                         @foreach($doctor as $doctors)
                         <option value="{{ $doctors->id }}">{{ $doctors->name }}</option>
                             @endforeach
                         </select>
                       
                     </div>
                            </div>
                        </div>


              




                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Gender:*</label>
                                    <input type="radio" name="gender" value="male" required> Male
                                    <input type="radio" name="gender" value="female" required> Female
                                    <input type="radio" name="gender" value="female" required> Others
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label class="control-label" required>Appointment Time</label>
                                    Date:* <input type="text" name="date" id="datepicker">
                                        
                                        
                                    </div>
                                </div>
                            </div>




                            <div class='col-md-6'>
                                <label class="control-label">Shift:</label>
                                    <input type="radio" name="shift" value="morning" required> Morning
                                    <input type="radio" name="shift" value="evening" required> evening
                                    <input type="radio" name="shift" value="all" required> all
                                        
                                        
                                    </div>
                                </div>
                                <br>
                      


                            



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Description:</label>
                                    <input type="text" name="desc" id="desc">
                                </div>
                            </div>


                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn   mt-4 mb-4" value="Submit">
                        </div>
                    </form>
                    
    
                </div>
            </div>
        </div>
        </div>

    </section>

  


    <section class="bg-white pt-5 pb-5 shadow-sm">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-9 text-left p-0 ">
                    <ul class="d-flex footer-menu-items footer_menu_nav">

                        <li><a href="#carouselExampleCaptions" class="nav-item nav-link active">HOME</a></li>
                        <li><a href="/appointment.html" class="nav-item nav-link">BOOK APPOINTMENT</a></li>
                        <li><a href="#treatmnt_for" class="nav-item nav-link">TREATMENTS</a></li>
                        <li><a href="#about_us" class="nav-item nav-link">ABOUT US</a></li>
                        <li><a href="#gallery_sect" class="nav-item nav-link">GALLERY</a></li>

                    </ul>
                </div>
                <div class="col-md-3  footer_social_conn   ">
                    <div class="container-fluid">
                        <div class="row d-flex">
                            <div class="col-md-12 col-sm-12 text-end mx-auto ">
                                <i class='fas fa-phone-square-alt p-1' style='font-size:18px'></i>
                                <i class='fas fa-envelope-square p-1' style='font-size:18px'></i>
                                <i class="fa fa-linkedin-square p-1" style="font-size:18px"></i>
                            </div>
                            <div class="col-md-12 text-end mx-auto  ">
                                <div class="row">
                                    <div class="col-md-12 contacts">+911234567890</div>
                                    <div class="col-md-12 contacts">Example@gmail.com</div>
                                </div>

                            </div>
                        </div>
                    </div>





                </div>

            </div>

        </div>
    </section>




  












<script>
 $(function() {

$( "#datepicker" ).datepicker({ 
    changeYear: false,
    minDate: '-3M',
    maxDate: '+2D',
});
});
</script>


   
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>