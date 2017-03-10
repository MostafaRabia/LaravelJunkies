@php
    use App\products;
@endphp
@extends(app('shop_view').'.Index')
@section('center')
<!-- start slider -->
<div id="fwslider">
    <div class="slider_container">
        <div class="slide"> 
            <!-- Slide image -->
            <img src="{{app('shop_image')}}/banner.jpg" alt=""/>
            <!-- /Slide image -->
            <!-- Texts container -->
            <div class="slide_content">
                <div class="slide_content_wrap">
                    <!-- Text title -->
                    <h4 class="title">Aluminium Club</h4>
                    <!-- /Text title -->

                    <!-- Text description -->
                    <p class="description">Experiance ray ban</p>
                    <!-- /Text description -->
                </div>
            </div>
            <!-- /Texts container -->
        </div>
        <!-- /Duplicate to create more slides -->
        <div class="slide">
            <img src="{{app('shop_image')}}/banner1.jpg" alt=""/>
            <div class="slide_content">
                <div class="slide_content_wrap">
                    <h4 class="title">consectetuer adipiscing </h4>
                    <p class="description">diam nonummy nibh euismod</p>
                </div>
            </div>
        </div>
        <!--/slide -->
    </div>
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div>
<!--/slider -->
<div class="main">
    <div class="wrap">
        <div class="section group">
            <div class="cont span_2_of_3">
            @foreach($getAllCategories as $Category)
                <h2 class="head">{{$Category->categories_name}}</h2>
                <div class="top-box">
                @php
                    $getAllProductsFromCategory = products::where('product_category',$Category->id)->get();
                @endphp
                @foreach($getAllProductsFromCategory as $Product)
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="{{url('product/'.$Product->id)}}">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="{{app('shop_image')}}/{{$Product->product_image}}" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div> 
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">{{$Product->product_name}}</p>
                                        <div class="price1">
                                            <span class="actual">{{$Product->product_price}}</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"></div>
                                    <div class="clear"></div>
                                </div>              
                            </div>
                        </a>
                        <a href='{{url("/cart")}}'>Add To Cart</a>
                    </div>
                @endforeach
                </div>
                <div class="clear"></div>
            @endforeach                                                 
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop