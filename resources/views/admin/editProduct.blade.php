@extends('admin.container')
@section('content')
{!! Form::open(['method'=>'post','url'=>'edit/'.$id,'files'=>true]) !!}
<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_name','product_name') !!}
		{!! Form::text('product_name',$getProduct->product_name,['class'=>'form-control']) !!}
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_price','product_price') !!}
		{!! Form::text('product_price',$getProduct->product_price,['class'=>'form-control']) !!}
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_category','product_category') !!}
		<select id="category" name="cat_id" class="form-control" onchange="get_id()">
	        @foreach($getcategories as $category)
	            <option value="{{$category->id}}">{{$category->categories_name}}</option>
	        @endforeach
	    </select>
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_image','product_image') !!}
		{!! Form::file('product_image') !!}
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_details','product_details') !!}
		{!! Form::text('product_details',$getProduct->product_details,['class'=>'form-control']) !!}
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('product_count','product_count') !!}
		{!! Form::text('product_count',$getProduct->product_count,['class'=>'form-control']) !!}
	</div>
	{!! Form::submit('edit',['class'=>'btn btn-success col-sm-9 col-sm-offset-3']) !!}
{!! Form::close() !!}
@stop