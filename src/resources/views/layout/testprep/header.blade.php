<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('/prep/assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('/prep/assets/images/favicon/favicon-32x32.png' )}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/prep/assets/images/favicon/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ URL::to('/prep/assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <!--title>CanamPrep</title>
    <meta name="description" content="International English Language Testing System (IELTS) Exam" />
    <meta name="keywords" content="International English Language Testing System (IELTS) Exam" /-->
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::to('/prep/css/app.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ URL::to('/prep/css/spacing-css-min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ URL::to('/prep/css/custom-min.css?v=').time() }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ URL::to('/prep/css/fonts/boxicons.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="canonical" href="<?php echo URL::current(); ?>" />
    <meta name="_token" content="{{ csrf_token() }}" />
    @yield('metatag')
    @yield('styles')
    </head>
