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
            <div class="row">
                <div class="col-9">


                    <div class="content-header">
                        <h2 class="content-title">Edit movie</h2>

                        <form action="{{ route('back.movie.update',[$movie->id]) }}" method="post"

                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <button class="btn btn-md rounded font-sm hover-up">Edit</button>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">movie title</label>
                                <input type="text" placeholder="Type here"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ $movie->name }}">
                                @error('name')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            
                            
                        </div>
                    </div> <!-- card end// -->

                            <div>
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control @error('Description') is-invalid @enderror " rows="4" id="description" name="description">{{ $movie->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> <!-- card end// -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <label class="form-label">Images</label>
                                <input class="form-control @error('pics') is-invalid @enderror " type="file" accept="image/*" multiple id="pics"
                                    name="pics[]">

                                    @error('pics')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                             <div class="row" id="img-container"></div>

                             <div class="row">
                            @foreach ($movie->images as  $image)
                            <div class="col-3">
                                <img src="{{ url("public/images/{$image}") }}" class="img-fluid mt-3" alt="" srcset="">
                            </div>
                                
                            @endforeach
                             </div>

                            </div>
                        </div>

                    </div> <!-- card end// -->
                </div>
                



                               

                            
                                    </form>

                                    
                            </div>






                        </div>
                    </div> <!-- card end// -->
                </div>
            </div>
        </section>
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
    <script src="C:\xamp\htdocs\ecom\resources\js\back\script.js" type="text/javascript"></script>

</body>

</html>
