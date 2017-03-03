@extends('admin.container')

@section('content')

    <!-- MAIN CONTENT WRAPPER -->
    <div id="main-content-wrapper" class="content-wrapper ">

        <div class="tab-pane settings active col-sm-12" id="settings-tab">
            <form class="form-horizontal " role="form" method="post" action="add-new-product"
                  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>

                    <div class="form-group">

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">product_price</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_price" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">Choose category</label>
                            <div class="col-sm-4">
                                <select id="category" name="product_category" class="form-control" onchange="get_id()">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->categories_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> <!-- category -->

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">product_image</label>
                            <div class="col-sm-4">
                                <input type="file" name="product_image" class="form-control">
                            </div>
                        </div> <!-- name -->

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">product_details</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_details" class="form-control">
                            </div>
                        </div>

                    </div>

                </fieldset>
                <div class="col-sm-12 text-center ">
                    <input class=" submit btn btn-custom-primary" type="submit">
                </div>


            </form>
            <!-- main -->


            <!-- /main -->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            &copy; 2016 The Develovers
        </footer>
        <!-- END FOOTER -->
    </div>
    <!-- END CONTENT WRAPPER -->

@endsection