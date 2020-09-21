@extends('admin.admin_layout')

@section('admin_content')
@if (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
          <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Created At</th>       
              <th>Status</th>       
              <th>Action</th>       
          </tr>

      </thead> 

      <tbody>
          @foreach ($all_categories as $all_cat)
              
         
        <tr>
        <td>{{$all_cat->id}}</td>
            <td class="center">{{$all_cat->category_name}}</td>
            <td class="center">{{$all_cat->created_at}}</td>

            <td class="center">
                @if($all_cat->status ==1)
                <span class="label label-success">Active</span>
                @else
                <span class="label label-danger">Inactive</span>
                @endif
            </td>
            
            <td class="center">

                @if(($all_cat->status ==1))
                <a class="btn btn-danger" href="{{URL::to('admin/all_category/inactive/'.$all_cat->id)}}">
                    <span>Inactive</span>  
                </a>
                @else
                <a class="btn btn-success" href="{{URL::to('admin/all_category/active/'.$all_cat->id)}}">
                    <span>Active</span>
                </a>
                @endif

            <a class="btn btn-info" href="{{URL::to('admin/edit_category/'.$all_cat->id)}}">
                    <i class="halflings-icon white edit"></i>  
            </a>

            <a class="btn btn-danger" href="{{URL::to('admin/delete_category/'.$all_cat->id)}}">
                    <i class="halflings-icon white trash"></i> 
            </a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection