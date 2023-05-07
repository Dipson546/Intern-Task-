<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <title>Olanep Fashion Pvt.ltd</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/front/css/main.css?v=3.4') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    

    


    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+977) 9824304633</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">


                            @auth
                                <li><i class="fi-rs-user"></i><a href="{{ route('front.profile.index') }}">{{ auth()->user()->name }}</a>
                                    |<form action="{{ route('logout') }}" method="post" class="d-inline">
                                        @csrf
                                    <button type="submit" class="btn btn-link link-light text-decoration-none m-0 p-0 "><i class="fa fa-sign-out" aria-hidden="true"></i>logout</button></a>
                                </form>
                               @else
                               <li><i class="fi-rs-user"></i><a href="{{ route('register') }}">Sign Up</a>/
                                <a href="{{ route('login') }}"><i class="fi-rs-user"></i>Login</a>
                            
                            </li>

                              


                         @endauth
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"> <h4 style="color: red">Intern Task</h4></a>
                    </div>
                    <div class="header-right">
                        
                        <div class="header-action-right">
                            <div class="header-action-2">
                                
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('front.cart.index') }}">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        <span class="pro-count blue">{{ $totalQty }}</span>
                                    </a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        {{-- <a href="index.html"><img src="{{ url('public/images/theme/logo.png') }}" alt="logo"></a> --}}
                    </div>
                   
                   
                    
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
            
                
            </div>
            <div class="mobile-header-content-area">
                
                
                                    
                            
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="page-contact.html"> Our location </a>
                    </div>
                  @auth
                    @else
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Log In / Sign Up </a>
                    </div>
                  @endauth
                    

                    <div class="single-mobile-header-info">
                        <a href="#">(+977) 9824304633 </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>