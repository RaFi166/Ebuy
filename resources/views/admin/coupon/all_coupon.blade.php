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
              <th>Coupon Name</th>
              <th>Created At</th>       
                    
              <th>Action</th>       
          </tr>

      </thead> 

      <tbody>
          @foreach ($all_coupons as $coupons)
              
         
        <tr>
            <td>{{$coupons->id}}</td>
            <td class="center">{{$coupons->coupon_name}}</td>
            <td class="center">{{$coupons->created_at}}</td>
            <td class="center">
    
            <a class="btn btn-info" href="{{URL::to('admin/edit_coupon/'.$coupons->id)}}">
                    <i class="halflings-icon white edit"></i>  
            </a>

        <a class="btn btn-danger" href="{{URL::to('admin/delete_coupon/'.$coupons->id)}}">
                    <i class="halflings-icon white trash"></i> 
            </a>
            </td>

        </tr>
        @endforeach

      </tbody>
    </table>
</div>
@endsection