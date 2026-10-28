<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= esc($title ?? 'Office of Alumni Affairs (Alumni)') ?> | Yogi Vemana University</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logo/yvu150-150.png') ?>">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="<?= ($title ?? '') === 'Press News' ? 'press-news-page' : '' ?>">
    
  <nav class="navbar navbar-expand-xl navbar-light ftco_navbar bg-white ftco-navbar-light oia-navbar" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/images/logo/yvu150-150.png') ?>"
            alt="YVU Logo" class="navbar-logo">
        <span class="brand-text">
          <span class="brand-title">Office of Alumni Affairs (Alumni)</span>
          <span class="brand-subtitle">Yogi Vemana University</span>
        </span>
      </a>
      <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="oi oi-menu"></span><span class="ms-2">Menu</span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="<?= base_url('/') ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?= base_url('/about') ?>" class="nav-link">About</a></li>
          <li class="nav-item"><a href="<?= base_url('/vision-core-purpose') ?>" class="nav-link">Vision & Core Purpose</a></li>
          <li class="nav-item"><a href="<?= base_url('/contact') ?>" class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href="<?= base_url('/alumni-association') ?>" class="nav-link">Alumni Association</a></li>
      </div>
    </div>
  </nav>



    <!-- END nav -->
