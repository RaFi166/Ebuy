@extends('admin.admin_layout')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Products Add</h2>
          
        </div>
        <div class="box-content">

          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
              </ul>
          </div><br />
          @endif


          @if (session('success'))
	   <div class="alert alert-success">
	       {{ session('success') }}
	   </div>
     @endif
     
        <form class="form-horizontal" action="{{route('product_save')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Product Name </label>
                  <div class="controls">
                  <input type="text" name="product_name" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                  </div>
                </div>

                <div class="control-group">
                    <label class="control-label"  for="selectError3">Add Category</label>
                    <div class="controls">
                      <select id="selectError3" name="category_id" >
                        <option value=""> Select Category</option>

                       @foreach ($all_categories as $categories)
           
                      <option value="{{$categories->id}}">{{$categories->category_name}}</option>

                      @endforeach
                      
                      </select>
                    </div>
                  </div>


               


                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Code </label>
                    <div class="controls">
                      <input type="text" name="product_code" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Quantity </label>
                    <div class="controls">
                      <input type="text" name="product_quantity" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                    </div>
                  </div>

               
         
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Product Short Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="short_description" id="textarea2" rows="3"></textarea>
                  </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                      <textarea class="cleditor" name="long_description" id="textarea2" rows="3"></textarea>
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label" for="typeahead">Product Price </label>
                    <div class="controls">
                      <input type="text" name="price" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4"> 
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label">Product Image 01</label>
                    <div class="controls">
                      <input type="file" name="image_one" value="">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Product Image 02</label>
                    <div class="controls">
                      <input type="file" name="image_two" value="">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Product Image 03</label>
                    <div class="controls">
                      <input type="file" name="image_three" value="">
                    </div>
                  </div>


                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection