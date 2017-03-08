@extends('admin.container')

@section('content')

    <!-- MAIN CONTENT WRAPPER -->
    <div id="main-content-wrapper" class="content-wrapper ">

        <div class="tab-pane settings active col-sm-12" id="settings-tab">
            <form class="form-horizontal " role="form" method="post" action="edit-cat"
                  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>

                    <div class="form-group">

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">Choose category</label>
                            <div class="col-sm-4">
                                <select id="category" name="cat_id" class="form-control" onchange="get_id()">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->categories_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> <!-- category -->

                        <div class="col-sm-12 bottom-10px">
                            <label class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="categories_name" class="form-control">
                            </div>
                        </div> <!-- name -->
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