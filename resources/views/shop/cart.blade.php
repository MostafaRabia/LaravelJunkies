@extends(app('shop_view').'.Index')
@section('center')
<div class="main">
    <div class="wrap">
        <div class="section group">
            <div class="cont span_2_of_3">
            @if(sizeof(Cart::countent()) > 0)
            <table class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Qty</td>
                  <td>Control</td>
                </tr>
              </thead>
            <tbody>
                @foreach($cartItems as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->qty}}
                  <form action="cart/{{$item->rowId}}/update" method="post">
                    {{csrf_field()}}
                  <input type="text" name="qty" value="{{$item->qty}}" class="form-control" />
                  <input type="submit" class="btn btn-primary" value="Ok" />
                   <input type="hidden" value="{{Session::token()}}" name="_token" />
                </form>
                </td>
                <td>
                  <a href="cart/{{$item->rowId}}/delete" class="btn btn-danger">Remove From Cart</a>
                </td>
              </tr>
              @endforeach
              <tr>
                <td>Total: {{Cart::total()}}</td>
                <td>Items: {{Cart::count()}}</td>
                <td>Tax: {{Cart::tax()}}</td>
              </tr>
            </tbody>
          </table>  		 						 			    
            </div>
            @else
            <div class="col-md-10">
                <h3>You Have No Items In Your Cart</h3>
            </div>
            <div class="rsidebar span_1_of_left">
                <div class="top-border"> </div>
                <div class="border">
                    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
                    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="js/jquery.nivo.slider.js"></script>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $('#slider').nivoSlider();
                        });
                    </script>
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="{{app('shop_image')}}/t-img1.jpg"  alt="" />
                            <img src="{{app('shop_image')}}/t-img2.jpg"  alt="" />
                            <img src="{{app('shop_image')}}/t-img3.jpg"  alt="" />
                        </div>
                    </div>
                    <div class="btn"><a href="single.html">Check it Out</a></div>
                </div>
                <div class="top-border"> </div>
                <div class="sidebar-bottom">
                    <h2 class="m_1">Newsletters<br> Signup</h2>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
                    <div class="subscribe">
                        <form>
                            <input name="userName" type="text" class="textbox">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop