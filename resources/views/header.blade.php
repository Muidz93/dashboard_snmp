<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headend</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"
    />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('images/logo/favicon-snmp.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

</head>
<body>

  <main>
      
<header>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="{{url('/images/logo/snmp.png')}}" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#masterdata" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dashboard
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/channel">Channel</a></li>
                  <li><a class="dropdown-item" href="/list_ird">IRD</a></li>
                  <li><a class="dropdown-item" href="#">Encoder</a></li>
                  <li><a class="dropdown-item" href="#">Jgater</a></li>
                  <li><a class="dropdown-item" href="#">SmartCard</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reporting">Reporting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#staff">Staff</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
              @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      {{-- <li><hr class="dropdown-divider"></li> --}}
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          
                          <button type="submit" class="dropdown-item">
                          <i class="fas fa-sign-out-alt"></i> Logout</button>
                        </form>
                        {{-- <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a> --}}
                      </li>
                    </ul>
                  </li>
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>
              </li>
              @endauth
            </ul>
            
          </div>
        </div>
      </nav>
    
    
  </header>