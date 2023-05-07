<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Olanep Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/theme/logo.png') }}">
    <!-- Template CSS -->
    <link href="{{ url('public/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="{{ route('dashboard.index') }}" class="brand-wrap">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="{{ route('dashboard.index') }}"> <i class="fa fa-home" aria-hidden="true"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>
                

                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.movie.index') }}"> <i class="fa fa-film" aria-hidden="true"></i>



                        <span class="text">Movie List</span>
                    </a>
                </li>

                
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.movie.create') }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </i>
                        <span class="text">Add Movies</span>
                    </a>
    
                </li>
                
                
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('back.users.index') }}"> <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="text">Account</span>
                    </a>
                </li>


            </ul>
            <hr>
            
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    
                   
                    
                    
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>

                            {{ auth('cms')->User()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="{{ route('back.profile.edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('back.password.edit') }}"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('back.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">  change Password</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">
                            <nav class="nav nav-pills flex-lg-column mb-4">
                                <a class="nav-link active" aria-current="page" href="#">General</a>
                               
                            </nav>
                        </aside>
                        <div class="col-lg-9">
                            <section class="content-body p-xl-4">
                                <form method="post" action="{{ route('back.password.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row gx-3">
                                                <div class="col-lg-12  mb-3">
                                                    <label class="old_password">Old Password</label>
                                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror" type="text" name="old_password" id="old_password" required >
                                                    @error('old_password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div> <!-- col .// -->
                                               
                                                <div class="col-lg-12  mb-3">
                                                    <label class="new_password">New Password</label>
                                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" type="password"   name="new_password" id="new_password" requiredx>
                                                    @error('new_password')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror  
                                                </div> <!-- col .// -->
                                                
                                                <div class="col-lg-12  mb-3">
                                                    <label class="password_confirmation">Confirm Password</label>
                                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" type="text"   id="password_confirmation" name="password_confirmation">
                                                    @error('password_confirmation')
                                                 <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                                </div> <!-- col .// -->
                                                
                                            </div> <!-- row.// -->
                                        </div> <!-- col.// -->
                                    </div> <!-- row.// -->
                                    <br>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                                <hr class="my-5">
                               
                            </section> <!-- content-body .// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- card body end// -->
            </div> <!-- card end// -->
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> Developed By Dipson Pokharel .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ url('public/js/back.js') }}"></script>
    <script src="{{ url('public/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/select2.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('public/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ url('public/js/vendors/chart.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ url('public/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/js/custom-chart.js') }}" type="text/javascript"></script>
</body>

</html>