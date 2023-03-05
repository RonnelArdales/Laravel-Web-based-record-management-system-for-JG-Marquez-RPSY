
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


    {{-- //csrf token --}}

    <title>Document</title>
</head>
<body>
    
</body>
</html>



<style>
    body{
        background-color:#829460;
    }
  .sidenav{
    /* margin-top: 50px; */
    /* border-right: 3;
    height: 100vh;
    border-color: blue;
    padding-right: 15px;
    padding-left: 15px;
    width: 300px;
    background-color: #829460; */
    position: fixed;
    /* new */
    height: 100vh;
   margin-left: 1%;
  }

  ul.no-bullet{
    list-style-type: none;
    margin: 0;
    padding:0;
}

  .active {
    background-color: bisque;
  color: black;
}

.dropdown-container {
  display: none;
  /* background-color: ;
  padding: 6px 16px 16px 16px; */
}

.fa-caret-down {
  float: right;
  /* padding-right: 20px; */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.btn2{
  height: 20px;
  padding: 1px;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */


/* Optional: Style the caret down icon */


/* Some media queries for responsiveness */

.sidenav a {
  /* padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none; */

  /* new */
  padding: 6% 3% 6% 6%;
  text-decoration: none;
  font-size: 1.3vw;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 13vw;
  text-align: left;
  cursor: pointer;
  outline: none;
  
}


.dropdown-btn {
  /* padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none; */

  /* new */
  text-decoration: none;
  font-size: 1.3vw;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  cursor: pointer;
  outline: none;
  text-align: left;
  padding-left: 23px;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color:black;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
  background-color: 
  #EDDBC0;
}

.icon{
  height: 13% ;
  width: 13% ;
}

.main{
  background-color: bisque;
    border-radius: 25px;
    width: 80vw;
    min-height: 94vh;
    margin-left: 280px;
    margin-top: 20px;
    margin-right: 20px;
    margin-bottom: 20px
}

.view1{
  background: rgba(0, 0, 0, 0);
  border: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  text-indent: 1px;
  text-overflow: '';

}

td{
  height: -20vh;
}

.tbody{
  height: 100px
}
.modal-xl{
width: 2000px;
}
.table{
  height:100px;
}

.viewbody{
  height: 600px;
}

.modal-footer{
  bottom: 50%;
}


#calendar {
    
    margin: 0 auto;
    background-color: white;
  }

  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

</style>

<div class="whole d-flex d-flex-1">

  <aside id="sidebar" class="sidenav border-right border-dark">
                
    <div class="p-2.5 mt-3 d-flex  justify-content-center">
      <img style="border-radius: 100%; height:9.5vw; width: 9.5vw; margin-bottom: 5% ; " src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1674970093/JG%20marquez/logo_oeppyy.png" alt="JGRPSYlogo">
    </div>
      <div class="overflow-auto" style="height: 72vh"> 
      @if (Auth::user()->usertype == 'admin')
      <ul class="no-bullet">
        <li class="  my-2 mx-3  {{Request::is('admin/dashboard') ? 'active' : '';}}">
          <a href="/admin/dashboard"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/home_wvybu9.png" alt=""> Home</a>
     </li>
     <li class=" my-2 mx-3  {{Request::is('admin/profile') ? 'active' : '';}}">
      <a href="/admin/profile"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/profile_mubmbi.png" alt=""> Profile</a>
  </li>
  <li class="  my-2 mx-3  {{Request::is('/admin/appointment') ? 'active' : '';}}">
    <a href="/admin/appointment"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296625/JG%20marquez/booking_te8ipg.png" alt=""> Appointment</a>
  </li>  
  <li class="  my-2 mx-3  {{Request::is('') ? 'active' : '';}}">
    <a href="#"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296625/JG%20marquez/booking_te8ipg.png" alt=""> Queing</a>
  </li> 
  <li class=" my-2 mx-3 {{Request::is('/admin/transaction') ? 'active' : '';}}">
    <a href="/admin/transaction"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/consult_las4n9.png" alt=""> Transaction</a>
  </li> 
  <li class=" my-2 mx-3 {{Request::is('/admin/billing') ? 'active' : '';}}">
    <a href="/admin/billing"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/billing_b1dkbm.png" alt=""> Billing</a>
  </li>
  
  <li>
    <button class="btn dropdown-btn rounded"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/settings_ttbpof.png" alt=""> Reports 
      <i class="fa fa-caret-down"></i>
    </button>
                <div class="dropdown-container" style="padding-left: 10%;">
                  <a href="/admin/reports/user">Users</a>
                  <a href="#">Transaction</a>
                  <a href="#">Audit trail</a>
                  <a href="#">Services</a>
                  <a href="#">Billing</a>
                </div>
          </li>
  <li>
    <button class="btn dropdown-btn rounded"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/settings_ttbpof.png" alt=""> Settings 
      <i class="fa fa-caret-down"></i>
    </button>
                <div class="dropdown-container" style="padding-left: 10%;">
                  <a href="/admin/service">Service</a>
                  <a href="/admin/discount">Discount</a>
                  <a href="#">Business Hours</a>
                  <a href="#"> <img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296805/JG%20marquez/guestpage_zylemm.png" alt=""> Guest Page</a>
                </div>
          </li>
    
        
          <form action="/logout" method="POST">
            @csrf
            <li class="nav-item">
                <button type="submit" class="btn dropdown-btn rounded">Logout</button>
            </li>
            </form>

    </ul>
    @else
    <ul class="no-bullet">
      <li class="  my-2 mx-3  {{Request::is('secretary/dashboard') ? 'active' : '';}}">
        <a href="/secretary/dashboard"><i>dashboard</i> </a>
    </li>
        <li class=" my-2 mx-3  {{Request::is('secretary/profile') ? 'active' : '';}}">
            <a href="/secretary/profile"><i>Profile</i> </a>
        </li>
        <li class=" my-2 mx-3  {{Request::is('secretary/appointment') ? 'active' : '';}}">
            <a href="/secretary/appointment"><i></i>Appointment </a>
        </li>  
        <li class=" my-2 mx-3 {{Request::is('') ? 'active' : '';}}">
            <a href="/secretary/dashboard"><i>Booking</i> </a>  
        <li>
            <button class="btn dropdown-btn rounded">Settings 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-container">
                <a href="/admin/service">Service</a>
                <a href="/admin/discount">Discount</a>
                <a href="#">Business Hours</a>
                <a href="#">Guest Page</a>
              </div>
        </li>
        <form action="/logout" method="POST">
          @csrf
          <li class="nav-item">
              <a button type="submit" class="nav-link"><img class="icon" src="https://res.cloudinary.com/uhno-dos-tres/image/upload/v1676296487/JG%20marquez/logout_nv4ryo.png" alt=""> Log Out</button>
          </li>
          </form>
  </ul>
  
      @endif
      </div>
  </aside>

<main class="main overflow-auto ">
    @yield('content')
</main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>

@yield('scripts')


