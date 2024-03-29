<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headend</title>
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
        <link href=" {{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/logo/favicon-snmp.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

  <main>
      
<header>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="{{url('/images/logo/snmp.png')}}" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            @auth
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#masterdata" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dashboard
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item  {{ $title === 'channels' ? 'bg-dark text-white' : '' }}" href="/channels">Channels</a></li>
                  <li><a class="dropdown-item {{ $title === 'list_ird' ? 'bg-dark text-white' : '' }}" href="/list_ird">IRD</a></li>
                  <li><a class="dropdown-item {{ $title === 'encoder' ? 'bg-dark text-white' : '' }}" href="/encoder">Encoder</a></li>
                  <li><a class="dropdown-item {{ $title === 'jgater' ? 'bg-dark text-white' : '' }}" href="#">Jgater</a></li>
                  <li><a class="dropdown-item {{ $title === 'smartcard' ? 'bg-dark text-white' : '' }}" href="#">SmartCard</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'website' ? 'active' : '' }}" href="/website">Website</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'data' ? 'active' : '' }}" href="/data">Data</a>
              </li>
            </ul>
            @endauth
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