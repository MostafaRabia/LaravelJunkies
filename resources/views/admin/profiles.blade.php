@extends('admin.container')
@section('content')
{!! Html::style(app('admin_css').'/jquery.dataTables.min.css') !!}
{!! Html::script(app('admin_js').'/jquery.js') !!}
{!! Html::script(app('admin_js').'/jquery.dataTables.min.js') !!}

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
                $('#profiles-table').DataTable();
            });
        </script>
            <table id="profiles-table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>email</th>
                        <th>user_name</th>
                        <th>user_addres</th>
                        <th>user_country</th>
                        <th>user_city</th>
                        <th>user_code</th>
                        <th>user_phone_number</th>
                        <th>user_admin</th>
                        <th>user_confirmation</th>
                        <th>user_banned</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($getAllUsers as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->user_addres}}</td>
                        <td>{{$user->user_country}}</td>
                        <td>{{$user->user_city}}</td>
                        <td>{{$user->user_code}}</td>
                        <td>{{$user->user_phone_number}}</td>
                        <td>{{$user->user_admin}}</td>
                        <td>{{$user->user_confirmation}}</td>
                        <td>{{$user->user_banned}}</td>
                        <td><a deletehref='{{url("delete/user")}}/{{$user->id}}' onclick="var href_delete = $(this).attr('deletehref');
                                 $('.modal_delete').modal('show');
                                 $('.modal_delete a').attr('href',href_delete);">delete</a></td>
                        <td><a href='{{url("edit")}}/{{$user->id}}'>edit</a></td>
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
@stop