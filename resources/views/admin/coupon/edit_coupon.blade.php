@extends('admin.admin_layout')
@section('admin_content')
   		
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Coupon</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        <div class="box-content">
     
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            
        <form class="form-horizontal" action="{{route('update_coupon')}}" method="POST">
          @csrf
              <fieldset>
              <input type="hidden" name="coupon_id" value="{{$single_coupon->id}}" id="">
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Edit Coupon</label>
                  <div class="controls">
                  <input type="text" name="coupon_name" value="{{$single_coupon->coupon_name}}">
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Update</button>
                  
                </div>

              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection