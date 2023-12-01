<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Dr.Nitin</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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



 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">



  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <style>


      .fa-stack[data-count]:after {
            position:absolute;
            right:0%;
            top:1%;
            content: attr(data-count);
            font-size: 30%;
            padding: .6em;
            border-radius: 999px;
            line-height: .75em;
            color: white;
            background: rgba(255, 0, 0, .85);
            text-align: center;
            min-width: 2em;
            font-weight: bold;
        }




    ::-webkit-scrollbar {
      width: 8px;
    }

   
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

   
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

  

    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    :root {
      --header-height: 3rem;
      --nav-width: 68px;
      --first-color: #4723D9;
      --first-color-light: #AFA5D9;
      --white-color: #F7F6FB;
      --body-font: 'Nunito', sans-serif;
      --normal-font-size: 1rem;
      --z-fixed: 100
    }

    *,
    ::before,
    ::after {
      box-sizing: border-box
    }

    body {
      position: relative;
      margin: var(--header-height) 0 0 0;
      padding: 0 1rem;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      transition: .5s
    }

    a {
      text-decoration: none
    }

    .header {
      width: 100%;
      height: var(--header-height);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      background-color: var(--white-color);
      z-index: var(--z-fixed);
      transition: .5s
    }

    .header_toggle {
      color: var(--first-color);
      font-size: 1.5rem;
      cursor: pointer
    }

    .header_img {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden
    }

    .header_img img {
      width: 40px
    }

    .l-navbar {
      position: fixed;
      top: 0;
      left: -30%;
      width: var(--nav-width);
      height: 100vh;
      background-color: var(--first-color);
      padding: .5rem 1rem 0 0;
      transition: .5s;
      z-index: var(--z-fixed)
    }

    .nav {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden
    }

    .nav_logo,
    .nav_link {
      display: grid;
      grid-template-columns: max-content max-content;
      align-items: center;
      column-gap: 1rem;
      padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
      margin-bottom: 2rem
    }

    .nav_logo-icon {
      font-size: 1.25rem;
      color: var(--white-color)
    }

    .nav_logo-name {
      color: var(--white-color);
      font-weight: 700
    }

    .nav_link {
      position: relative;
      color: var(--first-color-light);
      margin-bottom: 1.5rem;
      transition: .3s
    }

    .nav_link:hover {
      color: var(--white-color)
    }

    .nav_icon {
      font-size: 1.25rem
    }

    .show {
      left: 0
    }

    .body-pd {
      padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
      color: var(--white-color)
    }

    .active::before {
      content: '';
      position: absolute;
      left: 0;
      width: 2px;
      height: 32px;
      background-color: var(--white-color)
    }

    .height-100 {
      height: 100vh
    }

    



    @media screen and (min-width: 768px) {
      body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
      }

      .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
      }

      .header_img {
        width: 40px;
        height: 40px
      }

      .header_img img {
        width: 45px
      }

      .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
      }

      .show {
        width: calc(var(--nav-width) + 156px)
      }

      .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
      }
    }



    .container-custom{
  background: #CCCCCC !important;
  border: 4px solid blue;
  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
}
.container-custom tbody tr:hover{
  background-color: #5f8d27 !important;
  
 
}
.container-custom tbody tr {
  transition: background-color 0.3s ease;
}
.container-custom thead{
  background: blue;
    color: white;
    font-size: 20px;
    font-weight: 700;
    font-family: sans-serif;
}






  </style>
</head>

<body className='snippet-body'>

  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>

     <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">Dr.Nitin</span> </a>
                    <div class="nav_list"> <a href="{{ route('patient.list') }}" class="nav_link active"> <i
                                class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a
                            href="{{ route('images') }}" class="nav_link"> <i class='bx bx-image nav_icon'></i>
                            <span class="nav_name">Admin-Gallery</span> </a>  <a href="" class="nav_link"> <i
                                class='bx bx-video nav_icon'></i> <span class="nav_name">Admin-Video</span>
                                 <a href=""
                            class="nav_link"> <i class='bx bx-briefcase nav_icon'></i> <span
                                class="nav_name">Doctor's Form</span> </a>
                        </a> <a href="" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                                class="nav_name">Testimonials</span>
                        </a> <a href="" class="nav_link"> <i class='bx bx-minus-back nav_icon'></i> <span
                                class="nav_name">About us
                            </span> </a> </div>
                </div> <a href="" class="nav_link" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Sign Out</span>
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>

        </div>

   






    <div class="row">
    <div class="col-12 text-end">
     
       
            
     
    </div>
</div>
<br>

<br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="panel-heading  text-center p-3">Patient List</div>


<form action="">
 
<div class="d-flex flex-row ms-4 my-3">

 
      

        <div class="input-group">
            <div class="form-outline ms-2">
                <input type="search" name="searchValue" id="form1" class="form-control" value="" />
            </div>
            <button type="submit" class="btn btn-primary" id="searchButton">
                <i class="fas fa-search"></i> Search
            </button>
                   <a href="{{ route('patient.list') }}" class="btn btn-primary ms-2">
              Reset
            </a>
            
         
        </div>
     
        
       
         
        </div>
        
    </div>

  </form>

<div class="container-fluid  p-3">
<div class="row">
  <div class="col-12">
  <div class="table-responsive">
<table class="table table-bordered container-custom">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">
                <div class="tablefonts">
                Patient name
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Gender
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Referred_by
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Phone number
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Appointment Date
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Description
                </div>
            </th>
            <th scope="col">
                <div class="tablefonts">
                Email
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
     
    </tbody>
</table>
</div>

<div class="col-12 mt-4">
<nav aria-label="Page navigation example   ">
  <ul class="pagination float-end">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
  </div>
</div>


</div>

<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Recent Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<script>
    function openNotificationModal() {
        $('#notificationModal').modal('show');
    }

    function markNotificationsAsRead() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var notificationIds = $('.notification-ids').data('ids').split(',');

        notificationIds.forEach(function (notificationId) {
          
            url = url.replace(':notificationId', notificationId);

            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                success: function (response) {
                    console.log(response.message);
                    updateNotificationCount(0); 
                },
                error: function (response) {
                    console.error('Error marking notification as read');
                }
            });
        });
        location.reload();
    }

    function updateNotificationCount(count) {
        $('.fa-stack[data-count]').attr('data-count', count);
    }

    $('#notification-icon').click(openNotificationModal);
    $('#notificationModal').on('hidden.bs.modal', markNotificationsAsRead);
</script>













@include('footer')