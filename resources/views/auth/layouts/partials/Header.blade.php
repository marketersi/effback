<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- <title>Commerce Dashboard - This dashboard was created as an example of the flexibility that Architect offers.</title> -->
    <title>Hotel Silver Oak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{url('/')}}/images/favicon.ico" type="image/x-icon">
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{url('/')}}/fonts/inter/inter.css" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{url('/')}}/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{url('/')}}/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{url('/')}}/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{url('/')}}/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{url('/')}}/css/style-preset.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    
    
</head>
<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">

    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
 
    <li class="dropdown pc-h-item">
  <a class="pc-head-link dropdown-toggle arrow-none me-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <svg class="pc-icon">
      <use xlink:href="#custom-setting-2"></use>
    </svg>
  </a>
  <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
   
    <a href="{{ route('logout') }}" class="dropdown-item">
      <i class="ti ti-power"></i>
      <span>Logout</span>
    </a>
  </div>
</li>

  </ul>
</div>
 </div>
</header>
<!-- [ Header  ] end -->

