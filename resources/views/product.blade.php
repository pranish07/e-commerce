@extends('product-layout')
@section('content')
<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <article>
            <h2>{{$product->product_name}}</h2>
            <p>{!! $product->product_desc !!}</p>
        </article>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->


    <a href="/"> Go to Home</a>
    @endsection
