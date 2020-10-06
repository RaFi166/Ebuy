@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class=" col-md-10 ">
   
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
          <tr>
              <th>Username</th>
              <th>Email</th>
              <th class="center">Action</th>
             
          </tr>
      </thead>   
      <tbody>
          @foreach ($user as $users)
              
     
        <tr>
        <td class="center">{{$users->name}}</td>
            <td class="center">2012/01/01</td>
            <td>

                <a class="btn btn-info" href="#">
                <i class="halflings-icon white edit">Edit Profile</i>         
               </a>

               <a class="btn btn-info" href="#">
                <i class="halflings-icon white edit">Change Password</i> 
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


@endsection