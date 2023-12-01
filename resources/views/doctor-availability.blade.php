<!DOCTYPE html>
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



    <title>Hospital</title>

</head>
<body>



<script>
    window.addEventListener('beforeunload', function (e) {
        // Check if the user is authenticated
        var authenticated = /* Add your logic to check authentication here */;

        // If not authenticated and trying to access doctorform.blade.php, prevent navigation
        if (!authenticated && window.location.href.indexOf('/doctorform') !== -1) {
            e.preventDefault();
            return '';
        }
    });
</script>



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










@if ($name)
        <p>Welcome, Doctor: {{ $name }}</p>

    @else
        <p>Doctor Not Found</p>
    @endif

    <form action="{{ route('doc.logout') }}" method="POST">
    @csrf
    <button class="btn btn-info" type="submit">Logout</button>
</form>

<!-- <a href="{{ url('logout') }}">Logout</a> -->

<div class="container border  ">
            <div class="panel panel-success">
               
                
                <div class="panel-body">
                    <form id="registrationForm" action="{{ route('doctor.leave') }}" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="{{ $name }}">
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="row">
                            <div class="col-md-12 p-0 m-0">
                                <div class="panel-heading  text-center mb-4 p-3">Doctor unavailability form</div>
                            </div>
                            <div class="col-md-6">
        
                                <div class="form-group">
                                <label class="control-label" required>unavailable date</label>
                                     <input type="text" name="date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                <label class="control-label">Shift:</label>
                                    <input type="radio" name="shift" value="morning" required> Morning
                                    <input type="radio" name="shift" value="evening" required> evening
                                    <input type="radio" name="shift" value="all" required> all
                                </div>
                            </div>
                        </div>
                    
                    
                       
                        <div class="text-center">
                            <input type="submit" class="btn   mt-4 mb-4" value="Submit">
                        </div>
                    </form>
                    
    

                    <script>
        // JavaScript code for password validation
        const registrationForm = document.getElementById('registrationForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        registrationForm.addEventListener('submit', function (e) {
            if (password.value !== confirmPassword.value) {
                alert("Passwords do not match. Please try again.");
                e.preventDefault(); // Prevent form submission
            }
        });
    </script>







    



                </div>
            </div>
        </div>



    


    
</body>
</html>