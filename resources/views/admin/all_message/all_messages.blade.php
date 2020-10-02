@extends('admin.admin_layout')

@section('admin_content')

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Action</th>                                        
          </tr>
      </thead> 

      <tbody>
          @foreach ($all_messages as $message)     
        <tr>
        <td>{{$message->id}}</td>
            <td class="center">{{$message->name}}</td>
            <td class="center">{{$message->email}}</td>
            <td class="center">{{$message->message}}</td>  

            <td class="center">
            <a class="btn btn-danger" href="{{URL::to('/delete_message/'.$message->id)}}">
                    <i class="halflings-icon white trash"></i> 
            </a>
            </td>

        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection