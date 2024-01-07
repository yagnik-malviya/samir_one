<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('public/css/mediaquery.css') }}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>Property</title>
</head>

<body>

  <section class="phone">
    <div class="container">
      <div class="">
        <div class="d-flex align-items-center justify-content-end custom-contact-list">
          <p class="mb-0"><i class="fa-solid fa-envelope"></i><span class="px-2">propertyplatforme@gmail.com</span></p>
          <p class="mb-0"><i class="fa-solid fa-phone"></i><span class="px-2">+91 937 753 1247</span></p>
        </div>
      </div>
      <div>
        <hr class="mb-0">
      </div>
    </div>
  </section>
  <!-- navbar section -->
  <section>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('public/img/logo.png')}}" alt="" style="width: 100px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link menu_index mx-2" aria-current="page" href="{{route('index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu_buy mx-2" href="{{route('buy')}}">Buy </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu_sell mx-2" href="{{route('sell')}}">Sell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu_rent mx-2" href="{{route('rent')}}">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu_contact mx-2" href="{{route('contact')}}">Contact Us</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>

  <!-- navbar section end -->
