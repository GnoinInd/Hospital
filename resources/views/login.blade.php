<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="style.css">

    <script>
        window.onload = function() {
            var emailInput = document.getElementById("email");
            emailInput.focus();
            emailInput.select();
        };
    </script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




<style>
    
    .bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
}

@media (min-width: 1025px) {
    .h-custom-2 {
        height: 100%;
    }
}



.form-overflow{
    overflow-y: hidden;
}  

</style>





    <title>Login</title>
</head>

<body>




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





    <section class="vh-100">
        <div class="container-fluid">
            <div class="row form-overflow">
                <div class="col-sm-6 text-black">

                    <div class="ps-4 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0"><a href="/index.html"><img src="images/glintix_logo.png"
                                    alt=""></a></span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4  pt-xl-0 mt-xl-n5">

                        <!-- <form style="width: 23rem;"> -->
                        <form id="registrationForm" action="{{ route('login.check') }}" method="POST" style="width: 23rem;">
                            @csrf

                            <h3 class="fw-normal mb-3 pb-3 fw-700" style="letter-spacing: 1px;">Login to Continue</h3>


                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="floatingInput">Password</label>
                            </div>

                          

                            <div class="pt-1 mb-4">
                                <button class="btn btn-success btn-lg btn-block" type="submit" value="submit">Login</button>
                            </div>

                            <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                            <p>Don't have an account? <a href="{{ route('register') }}" class="link-info">Register here</a></p>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                   
                <img src="{{ asset('images/doc_img.jpg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">


                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>