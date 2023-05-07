@extends('layouts.front')
@section('content')
<br>
<main class="main">

    <h1 style="text-align: center">Movies</h1>
    <div class="tab-content wow fadeIn animated" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
            <div class="row product-grid-4">
 
                @foreach($latest as  $lat)
                    
                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-xs-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                    <img class="default-img" src="{{ url("public/images/{$lat->thumbnail}")}}" alt="">
                                    <img class="hover-img" src="{{ url("public/images/{$lat->thumbnail}") }}" alt="">
                                
                            </div>
                            
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            
                            <h2><a href="{{route('front.pages.product', [$lat->id]) }}">{{ $lat->name }}</a></h2>
                            <div class="" title="">

                            </div>
                            

                            <div class="product-content-wrap">
                            
                                <h2>{{ $lat->description }}</h2>
                                <div class="" title="">
    
                                </div>
                         
                            <div class="product-action-1 show">
                                <button class="action-btn hover-up add-to-cart" aria-label="Add To Fav" type="button" data-id="{{ $lat->id }}"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                </i>   
                                 </button>
                                 
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach



            </div>
            <!--End product-grid-4-->
        </div>

    </div>

    
    
    
    
   
    
</main>
    
@endsection
