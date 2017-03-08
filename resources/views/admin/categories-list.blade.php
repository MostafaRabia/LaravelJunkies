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
                        <h3><i class="fa fa-group"></i> Categories  </h3> <em>- Categories List</em>
                    </div>
                    <div class="widget-content">
                        <div class="tab-content">
                            <div class="tab-pane fade active in">
                                <table class="table table-sorting">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td><a href="#">[#{{$category->id}}]</a></td>
                                            <td>{{$category->categories_name}}</td>
                                            <td>
                                                <a href="deleteCat/{{$category->id}}">
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