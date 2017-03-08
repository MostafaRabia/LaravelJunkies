@extends('admin.container')

@section('content')
    <!-- MAIN CONTENT WRAPPER -->
    <div id="main-content-wrapper" class="content-wrapper ">
        <!-- main -->
        <div class="content">
            <div class="main-content">
                <!-- WIDGET TICKET TABLE -->
                <div class="widget widget-table">
                    <div class="widget-header">
                        <h3><i class="fa fa-group"></i> Products </h3> <em>- Products List</em>
                    </div>
                    <div class="widget-content">
                        <div class="tab-content">
                            <div class="tab-pane fade active in">
                                <table class="table table-sorting">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>IMG</th>
                                        <th>price</th>
                                        <th>category</th>
                                        <th>Details</th>
                                        <th>Count</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td><a href="#">[#{{$product->id}}]</a></td>
                                            <td>{{$product->product_name}}</td>
                                            <td><img height="43px" class="img-circle"
                                                     src="{{$product->product_image}}"/></td>
                                            <td>{{$product->product_price}}</td>
                                            @foreach($categories as $category)
                                                @if($product->product_category == $category->id)
                                                    <td>{{$product->product_category}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$product->product_details}}</td>
                                            <td>{{$product->product_count}}</td>
                                            <td>
                                                <a href="deleteProduct/{{$product->id}}">
                                                    <button type="button" class="btn btn-danger"><i
                                                                class="fa fa-trash-o"></i>
                                                        Delete
                                                    </button>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END WIDGET TICKET TABLE -->
            </div>
        </div>
        <!-- /main -->
        <!-- FOOTER -->
        <footer class="footer">
            &copy; 2016 The Develovers
        </footer>
        <!-- END FOOTER -->
    </div>
    <!-- END CONTENT WRAPPER -->

@endsection