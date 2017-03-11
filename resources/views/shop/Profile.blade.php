@extends(app('shop_view').'.Index')
@section('center')
{!! Html::style(app('admin_css').'/jquery.dataTables.min.css') !!}
{!! Html::script(app('admin_js').'/jquery.js') !!}
{!! Html::script(app('admin_js').'/jquery.dataTables.min.js') !!}
<script type="text/javascript">
    $(document).ready(function(){
        $('#getaboutuser-table').DataTable();
    });
</script>
<table id="getaboutuser-table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>getaboutuser_name</th>
            <th>getaboutuser_addres</th>
            <th>getaboutuser_country</th>
            <th>getaboutuser_city</th>
            <th>getaboutuser_code</th>
            <th>getaboutuser_phone_number</th>
            <th>edit</th>    
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$getAboutUser->id}}</td>
            <td>{{$getAboutUser->email}}</td>
            <td>{{$getAboutUser->user_name}}</td>
            <td>{{$getAboutUser->user_addres}}</td>
            <td>{{$getAboutUser->user_country}}</td>
            <td>{{$getAboutUser->user_city}}</td>
            <td>{{$getAboutUser->user_code}}</td>
            <td>{{$getAboutUser->user_phone_number}}</td>
            <td><a href='{{url("edit/user")}}/{{$getAboutUser->id}}'>edit</a></td>
        </tr>
    </tbody>
</table>
@stop