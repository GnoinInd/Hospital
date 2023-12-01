<header>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Dr.nitin</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    



    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- alpha/css/bootstrap.css" rel="stylesheet">
	


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>




    <style>
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




    .image-gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
        margin-right: 0%;

        /* Add some negative margin to counteract the spacing */
    }

    .image-item {
        width: calc(25% - 20px);
        /* 25% width with spacing between images */
        margin: 10px;
        /* Add some spacing between images */
        text-align: center;
        /* Center align text under each image */
        height: 200px;
        /* Set a fixed height for all image containers */
        overflow: hidden;
        /* Hide any part of the image that overflows the container */
    }

    .image-item img {
        max-width: 100%;
        height: 100%;
        /* Ensure the image fills the entire container while maintaining its aspect ratio */
    }




    .delete-button {
        background-color: #e74c3c;
        /* Choose the background color you prefer */
        color: #fff;
        /* Text color */
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .delete-button:hover {
        background-color: #c0392b;
        /* Change the background color on hover */
    }




    .status-button {
        padding: 5px 10px;
        border: 1px solid #333;
        background-color: #F7F7F7;
        color: #333;
        cursor: pointer;
        display: inline-block;
        /* Add this property */
        margin-right: 5px;
        /* Add some right margin to separate the buttons */
    }

    .status-button.active {
        background-color: #00FF00;
        color: #FFF;
    }

    .status-button.inactive {
        background-color: #FF0000;
        color: #FFF;
    }



    .gem {
        position: absolute;


    }
    .imguploadsec{
  background: #cccccc;
}

.imguploadsec button{
    border: 1px solid blue !important;
    color: black;
}
.custmbody{
    background: aliceblue !important;
}

.custminputupload{
    border: 1px solid blue;
    cursor: pointer;
}

.imageUploadedViewSection {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.custmfileprevBtn button{
    border-radius: 7px;
    border: 1px solid blue;
}
.videourlUploadedViewSection{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.imguploads h4{
    background: grey;
    padding: 10px;
    color: white;
    border: 1px solid blue;
}

    </style>
</head>

<body class='snippet-body custmbody'>

   <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>


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





@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif








        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">Homeosafe</span> </a>
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
                </div> <a href="{{ route('logout') }}" class="nav_link" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Sign Out</span>
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>

        </div>

</header>