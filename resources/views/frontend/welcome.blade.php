@extends('frontend.master')
@section('product_content')
<!-- Home Section stars -->
    <section class="home container" id="home">
        <div class="home-text">
        <h1><span>Classic Books</span> <br>For You</h1>
        <p>Committed to publishing great books, connecting readers and authors globally, and spreading the love of reading.</p>
        <a href="#" class="btn">Shop More</a>
    </div>
    <!-- Home Image -->
    <div class="home-img">
        <img src="img/home.jpg" alt="">
    </div>
    </section>
    
    <!-- Home Section ends -->

    <!--Popular Section Start -->
     <section class="popular container" id="popular">
        <div class="heading">
            <h2>Popular</h2>
            <a href="#">See All</a>
        </div>
        <!-- popular content -->
        <div class="popular-content">
            <!-- box1 -->
           @foreach($products as $product)
           <div class="box">
            <img src="{{asset('/storage/'.$product->image)}}"  alt="">
               <div class="box-text">
                <div class="title-price">
                    <a href="{{url('/view-details'.$product->id)}}">{{$product->name}}</a><br>
                    <span>{{$product->price."/-"}}</span>
                </div>
                <a href="#"><i class='bx bx-cart-alt' ></i></a>
               </div>
           </div> 
           @endforeach
           <!-- box2 -->
      
        </div>
     </section>
    <!-- Popular Section End -->
    <!-- Products section star -->
    <section class="product container" id="products">
        <div class="heading">
            <h2>Book Shop</h2>
            <a href="">See Book </a>
        </div>
         <!--Products content--> 
                @foreach($products as $product)
                <div class="box">
                    <img src="{{asset('/storage/'.$product->image)}}"  alt="">
                    <div class="box-text">
                        <div class="title-price">
                            <a href="{{url('/view-details'.$product->id)}}">{{$product->name}}</a><br>
                            <span>{{$product->price."/-"}}</span>
                        </div>
                        <form action="{{url('add-to-cart')}}" method="post">
                            @csrf
                            <div class="add-to-cart">
                                <!-- <a><i class='bx bx-cart-alt' ></i></a> -->
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button class="add-to-cart-btn"><i class='bx bx-cart-alt'></i>
                            </div>
                        </from>
                    </div>
                </div> 
                @endforeach
            </div>
    </section>
@endsection()