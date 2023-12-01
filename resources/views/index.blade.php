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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />





    <script type="text/javascript">

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'en,hi,bn,mai,mr,sa,ta,te,kn,pa,layout: google.translate.TranslateElement.InlineLayout.SIMPLE' }, 'google_translate_element');

        }

    </script>
    <link rel="icon" href="{{ asset('storage/favicon.png') }}" type="image/icon type">

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
    


    <title>Dr.Nitin</title>

</head>

<body class="bg-light">


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
                <img src="{{ asset('storage/mainlogo.webp') }}" alt="logo">
            </div>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav">

                    <a href="{{ url('/') }}" class="nav-item nav-link active">HOME</a>
                    <a href="{{ route('patient.form') }}" class="nav-item nav-link">BOOK APPOINTMENT</a>
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

    <section class="banner-section">
        <div class="masthead">
            <div class="color-overlay d-flex flex-column justify-content-center align-items-center ">

                <div class="text-left btn_div">
                    <h2>Here Good Health</h2>
                    <h1>Comes Naturally</h1>
                    <a href="{{ url('form') }}" class="btn custombtn1 pt-2 mt-auto slideanim ">Book Appointment</a>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-5  shadow-sm">
        <div id="treatmnt_for" class="container-fluid ">
            <div class="row d-flex justify-content-center g-4">
                <div class="heading_para1 text-center p-3">
                    <h2 class="slideanim">Treatments</h2>

                </div>
          
               @if(isset($testimonial) && count($testimonial) )
               @foreach($testimonial as $testimonial)

                <div class="col-md-3  ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle ">
                            <img src="{{ asset('storage/' . $testimonial->path) }}" class="rounded-circle random_image img-fluid  d-block slideanim"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">{{ $testimonial->title }}</h5>
                            <p class="card-text  ">{{ $testimonial->description }}</p>
                            <div class="text-center btn_div">
                                <a href="#contact_us_sec" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
          

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block slideanim"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">Hair Treatment</h5>
                            <p class="card-text  ">Stop worrying for the ill health of your hair with the advanced
                                treatment facilitated by the best homeopaths.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto slideanim ">Enquire Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block slideanim"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">PCOD/PCOS Treatment</h5>
                            <p class="card-text  ">We offer the best and effective treatments and medications with
                                proper diet for PCOD. Take your appointment.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3  ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block slideanim"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">Oral Cancer Treatment</h5>
                            <p class="card-text  ">Our team of skilled and experienced doctors will help you in your
                                fight against oral cancer.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block slideanim"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">Allergy</h5>
                            <p class="card-text  ">With years of experience in treating patients with different
                                allergies, our homeopathy doctors have got a hand on treating all types of aller gies.
                            </p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto slideanim ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards  " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle slideanim ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">Hair Treatment</h5>
                            <p class="card-text  ">Stop worrying for the ill health of your hair with the advanced
                                treatment facilitated by the best homeopaths.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle slideanim ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">PCOD/PCOS Treatment</h5>
                            <p class="card-text  ">We offer the best and effective treatments and medications with
                                proper diet for PCOD. Take your appointment.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card h-100 main_cards " style="width: 100%; height:100% ">
                        <div class="randomImg align-self-center rounded-circle slideanim ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image img-fluid  d-block"
                                alt="...">
                        </div>
                        <div class="card-body d-flex flex-column slideanim">
                            <h5 class="card-title text-center">Oral Cancer Treatment</h5>
                            <p class="card-text  ">Our team of skilled and experienced doctors will help you in your
                                fight against oral cancer.</p>
                            <div class="text-center btn_div">
                                <a href="#" class="btn custmBtn mt-auto ">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                @endif

            

         


             


             

            </div>
        </div>


    </section>





    <section class="bg-white pt-5 shadow-sm ">
        <div id="about_us" class="container-fluid">
        
            <div class="row gy-5  ">
                    @if(isset($about) && count($about) > 0)
                    @foreach($about as $about)
                   
                <div class="col-md-7 my-auto ">
                    <div class="heading_para slideanim pe-5 ps-1">
                        <h2 class="text-center">{{ $about->title }}</h2>
                        <p>{{ $about->description }}</p>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="rounded-circle slideanim ">
                        <img src="{{ asset('storage/' . $about->path) }}" class="rounded-circle random_image_about img-fluid  d-block"
                            alt="...">
                    </div>
                </div>
            </div>
            @endforeach
            @else

            <div class="col-md-7 my-auto ">
                    <div class="heading_para slideanim pe-5 ps-1">
                        <h2 class="text-center">About Us</h2>
                        <p>We, Dr. Geetika Homoeopathic Clinic, situated at Dwarka Sector 2, Delhi, provide perfect care
                            to the patients with homeopathy and help them to get rid of the problem through which they
                            are suffering from. Our objective is to deal with various health problems encountered by
                            number of people. We are very proficient in our service. Our clinic has achieved eminence in
                            this industry because of our client’s belief and trust.</p>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="rounded-circle slideanim ">
                        <img src="{{ asset('storage/thmimage.jpg') }}" class="rounded-circle random_image_about img-fluid  d-block"
                            alt="...">
                    </div>
                </div>

            @endif

        </div>
    </section>


    <section class="bg-white pt-5 pb-5 shadow-sm">
        <div id="gallery_sect" class="container-fluid">
            <div class="row align-self-center g-4 ">
                <div class="heading_para1 text-center">
                    <h2 class="slideanim">Gallery</h2>

                </div>
                @if(isset($galleries) && count($galleries) > 0)
                @foreach($galleries as $image)
                <div class="col-md-4">
                    <div class="card h-100 ">
                        <div class="randomImg_1 align-self-center slideanim  ">
                            <img src="{{ asset('storage/' . $image->path) }}" class=" img-fluid random_image_1   d-block" alt="...">
                        </div>

                    </div>
                </div>
                @endforeach
                @else
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="randomImg_1 align-self-center  ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class=" img-fluid random_image_1   d-block" alt="...">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="randomImg_1 align-self-center  ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class=" img-fluid random_image_1   d-block" alt="...">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="randomImg_1 align-self-center  ">
                            <img src="{{ asset('storage/thmimage.jpg') }}" class=" img-fluid random_image_1   d-block" alt="...">
                        </div>

                    </div>
                </div>
                @endif


            </div>
        </div>

        </div>
    </section>

    <section class="bg-white  pb-5 shadow-sm">
        <div id="useful_videos" class="container-fluid">
            <div class="row align-self-center g-4 ">
                <div class="heading_para1 text-center p-2">
                    <h2 class="slideanim"> Videos that might help you understand homeopathy</h2>

                </div>

                @if(isset($videos) && count($videos) > 0)
                @foreach($videos as $video)

                <div class="col-md-6  ">
                    <div class="card h-100 " style="width: 100%;">
                        <div class="embed-responsive embed-responsive-16by9   ">
                            <iframe src="{{ $video->link }}" class="random_video  d-block">
                            </iframe>
                        </div>

                        <div class="col-md-12 heading text-center pt-2">
                            <h4>What are the benefits of Homeopathy?</h4>
                        </div>
                    </div>

                </div>
               @endforeach

               @else
               <div class="col-md-6  ">
                    <div class="card h-100 " style="width: 100%;">
                        <div class="embed-responsive embed-responsive-16by9   ">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="random_video  d-block">
                            </iframe>
                        </div>

                        <div class="col-md-12 heading text-center pt-2">
                            <h4>What are the benefits of Homeopathy?</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  ">
                    <div class="card h-100 " style="width: 100%;">
                        <div class="embed-responsive embed-responsive-16by9   ">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="random_video  d-block">
                            </iframe>
                        </div>

                        <div class="col-md-12 heading text-center pt-2">
                            <h4>What are the benefits of Homeopathy?</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  ">
                    <div class="card h-100 " style="width: 100%;">
                        <div class="embed-responsive embed-responsive-16by9   ">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="random_video  d-block">
                            </iframe>
                        </div>

                        <div class="col-md-12 heading text-center pt-2">
                            <h4>What are the benefits of Homeopathy?</h4>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  ">
                    <div class="card h-100 " style="width: 100%;">
                        <div class="embed-responsive embed-responsive-16by9   ">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="random_video  d-block">
                            </iframe>
                        </div>

                        <div class="col-md-12 heading text-center pt-2">
                            <h4>What are the benefits of Homeopathy?</h4>
                        </div>
                    </div>

                </div>
               @endif

              


            </div>
        </div>



    </section>




    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner swiper_section_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center pt-5">Testimonials</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="con-logo1 text-center">
                                <img src="img/swiperLogo.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="carousel-item active">

                    <div class="container ">
                        <div class="row text-center">
                            <div class="col-md-12 text-center">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto neque laudantium
                                    labore inventore mollitia repudiandae sed! Expedita fugiat, necessitatibus eveniet,
                                    porro provident quia laudantium quo perspiciatis, magni a repellendus ex!11111</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="carousel-item">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto neque laudantium
                                    labore inventore mollitia repudiandae sed! Expedita fugiat, necessitatibus eveniet,
                                    porro provident quia laudantium quo perspiciatis, magni a repellendus ex! Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Ex voluptates tempore commodi
                                    doloribus necessitatibus quia hic quibusdam, pariatur amet quasi nobis adipisci
                                    molestiae laudantium dolorum repellat neque maiores esse saepe ratione. Nesciunt
                                    eveniet laudantium quas atque iusto illum nemo laborum? 22222</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 ">
                                <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Architecto
                                    neque laudantium labore inventore mollitia repudiandae sed! Expedita fugiat,
                                    necessitatibus eveniet, porro provident quia laudantium quo perspiciatis, magni a
                                    repellendus ex!33333</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
    <section class="swiper_section">
       

    </section>






    <section class="footer bg-white pt-5 pb-5 shadow-sm" id="contact_us_sec">
        <div class="container-fluid">
            <h2 class="text-center py-5  slideanim">Contact Us</h2>
            <div class="row g-4 d-flex justify-content-end">
                <div class="col-md-5 slideanim ">
                    <form action="/action_page.php">

                        <input type="text" id="fname" name="firstname" placeholder="YOUR NAME" required>


                        <input type="text" id="lname" name="lastname" placeholder="YOUR EMAIL" required>


                        <input type="tel" id="number" name="number" placeholder="YOUR CONTACT NO." required>

                        <textarea id="" name="" rows="4" cols="50" placeholder="YOUR MESSAGE" required></textarea>
                       



                        <div class="text-center btn-rounded">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 slideanim">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 text-end">
                                <div class="con-logo text-end">
                                    <img src="{{ asset('storage/logo1.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="heading-add">
                                    <h5>Our Office Address</h5>
                                    <p class="text-left">Shop No -1,HAF POCKET, Dwarka Sector 2, Delhi 110075
                                        Sector 107, Gurugram, dwarka expressway</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="con-logo text-end">
                                    <img src="{{ asset('storage/logo2.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="heading-add">
                                    <h5>General Enquiries</h5>
                                    <p class="text-left">Example@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="con-logo text-end">
                                    <img src="{{ asset('storage/logo3.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="heading-add">
                                    <h5>Call Us</h5>
                                    <p class="text-left fw-bolder">+911234567890</p>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="con-logo text-end">
                                    <img src="{{ asset('storage/logo4.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="heading-add">
                                    <h5>Our Timing</h5>
                                    <p class="text-left fw-bolder">Mon - Sun : 11:00 AM - 07:00 PM</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="bg-white pt-5 pb-5 shadow-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58920.74604827808!2d88.44622153101905!3d22.633399270185507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgnoin!5e0!3m2!1sen!2sin!4v1677485078095!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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





   
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>