@extends(app('shop_view').'.Index')
@section('center')
<div class="main">
    <div class="wrap">
        <div class="section group">
            <div class="cont span_2_of_3">
            @if(sizeof(Cart::count()) > 0)
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
            @endif
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop