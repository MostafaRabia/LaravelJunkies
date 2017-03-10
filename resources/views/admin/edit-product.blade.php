@extends('admin.container')

@section('content')
{!! Html::style(app('admin_css').'/jquery.dataTables.min.css') !!}
{!! Html::script(app('admin_js').'/jquery.js') !!}
{!! Html::script(app('admin_js').'/jquery.dataTables.min.js') !!}
    <!-- MAIN CONTENT WRAPPER -->
    <style>
    /* Start Image Modal */
.modal_image {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 999;
  /* Sit on top */
  padding-top: 100px;
  /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: black;
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.9);
  /* Black w/ opacity */ }
  .modal_image .modal-content_image {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s; }
    @media only screen and (max-width: 700px) {
      .modal_image .modal-content_image {
        width: 100%; } }

@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(0); }
  to {
    -webkit-transform: scale(1); } }
@keyframes zoom {
  from {
    transform: scale(0.1); }
  to {
    transform: scale(1); } }
    .modal_image p{
        color: white;
        font-size: 24px;
        z-index: 9999999999;
        text-align: center;
    }
/* End Image Modal */
</style>
<!-- The Image Modal -->
<div id="myModal" class="modal_image">
  <img class="modal-content_image">
  <p class="modal-content_captin">
</div>
<!-- Modal -->
<div class="modal modal_delete fade en" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Do You Want To Delete It ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href='javascript:;' type="button" class="btn btn-danger">Yes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <div id="main-content-wrapper" class="content-wrapper ">

        <div class="tab-pane settings active col-sm-12" id="settings-tab">
        <script type="text/javascript">
            $(document).ready(function(){
                $('#edit-table').DataTable();
                $('.modal_image').on('click',function(){
                    $(this).hide();
                });
            });
        </script>
            <table id="edit-table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>product_name</th>
                        <th>product_price</th>
                        <th>product_category</th>
                        <th>product_image</th>
                        <th>product_details</th>
                        <th>product_count</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->catigory->categories_name}}</td>
                        <td><button src='{{app("shop_image")}}/{{$product->product_image}}' onclick="
                var src = $(this).attr('src');
                $('.modal_image').show();
                $('.modal-content_captin').text('');
                $('.modal-content_image').attr('src',src);">show photo</button></td>
                        <td>
                            <button details='{{$product->product_details}}' onclick="
                var details = $(this).attr('details');
                $('.modal_image').show();
                $('.modal-content_image').attr('src',false);
                $('.modal-content_captin').text(details);">show details</button>
                        </td>
                        <td>{{$product->product_count}}</td>
                        <td><a href='{{url("edit")}}/{{$product->id}}'>edit</a></td>
                        <td><button onclick="var href_delete = $(this).attr('href-delete');
                                 $('.modal_delete').modal('show');
                                 $('.modal_delete a').attr('href',href_delete);" href-delete='{{url("deleteProduct")}}/{{$product->id}}'>delete</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


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