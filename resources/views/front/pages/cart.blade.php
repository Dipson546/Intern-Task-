@extends('layouts.front')
@section('content')
    <main class="main">

        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <form class="row" action="{{ route('front.cart.update') }}" method="post">
                                @method('patch')
                                @csrf
                                <table class="table shopping-summery text-center clean">
                                    <thead>
                                        <tr class="main-heading">
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Date</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($cart as $sh)
                                            + <tr>
                                                <td class="image product-thumbnail"><img
                                                        src="{{ url("public/images/{$sh['movie']->thumbnail}") }}"
                                                        alt="#"></td>
                                                <td class="product-des product-name">
                                                    <h5 class="product-name"><a
                                                            href="shop-product-right.html">{{ $sh['movie']->name }}</a>
                                                    </h5>

                                                </td>


                                                </td>

                                                <td class="action" data-title="Remove"><a
                                                        href="{{ route('front.cart.destroy', [$sh['movie']->id]) }}"
                                                        class="text-muted"><i class="fi-rs-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>


                                </table>

                                <h4 class="fst-italic text-muted text-center.">This is empty.</h4>

                        </div>




                        </form>


                    </div>
                </div>
        </section>
    </main>





    <hr>
@endsection
