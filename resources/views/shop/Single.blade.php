@extends(app('shop_view').'.Index')
@section('center')
<div class="mens">    
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="{{url('/')}}">Home</a> / <a href="#">Dolor sit amet</a> / Lorem ipsum dolor sit amet</ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="{{app('shop_image')}}/{{$getAllAboutProduct->product_image}}" class="img-responsive" />
								</a>
							</li>
						</ul>
						 <div class="clearfix"></div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3">{{$getAllAboutProduct->product_name}}</h3>
		             <p class="m_5">{{$getAllAboutProduct->product_price}}</span></p>
		         	 <div class="btn_form">
						{!! Form::open(['url'=>'/cart','method'=>'get']) !!}
							<input type="submit" value="buy" title="">
						{!! Form::close() !!}
					 </div>
				     <p class="m_text2">{{$getAllAboutProduct->product_details}}</p>
			     </div>
			   <div class="clear"></div>	
      </div>
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
@stop