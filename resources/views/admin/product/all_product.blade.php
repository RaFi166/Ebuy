@extends('admin.admin_layout')
@section('admin_content')

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
          <tr>
              <th>Product ID</th>
              <th>Product Name</th>              
              <th>Product Quantity</th>
              <th>Category</th> 
              <th>Image</th>      
              <th>Status</th>       
              <th>Action</th>       
          </tr>

      </thead> 

      <tbody>
        
              @foreach ($all_product as $product)                     
        <tr>
            <td>  {{ $product->id}} </td>
            <td class="center">{{ $product->product_name}}</td>
            <td class="center">{{$product-> product_quantity}}</td>
            <td class="center">{{$product-> relationBetweenCategory-> category_name}}</td>
            <td class="center"><img src="{{asset($product->image_one)}}" width="50px"; height="50px"  ></td>

            <td class="center">
                @if($product->status ==1)
                <span class="label label-success">Active</span>
                @else
                <span class="label label-danger">Inactive</span>
                @endif
            </td>
            
            <td class="center">

                @if(($product->status ==1))
                <a class="btn btn-danger" href="">
                    <span>Inactive</span>  
                </a>
                @else
                <a class="btn btn-success" href="">
                    <span>Active</span>
                </a>
                @endif

            <a class="btn btn-info" href="{{URL::to('admin/edit_product/'.$product->id)}}">
                    <i class="halflings-icon white edit"></i>  
                </a>

                <a class="btn btn-danger" href="">
                    <i class="halflings-icon white trash"></i> 
                </a>
            </td>
        </tr>
        @endforeach

        
      </tbody>
    </table>
</div>
@endsection