@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Users</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <a class="btn btn-primary" href="#">Add User</a>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <h1>Content</h1>

<table style="width:100%" class="table table-borderd">
    <tr>
        <th>#</th>
        <th>Name</th> 
        <th>E-mail</th>
    </tr>
    @if(count($users)>0)
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td> 
                <td>{{$user->email}}</td>
             </tr>
        @endforeach
     @endif

</table>  </div>
  
</div>
<!-- /.box -->
    
@stop

