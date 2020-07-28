@extends('admin.admin_layouts')

 

@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">

 
 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Edit Product
          </h6>
       <form method="post" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">    
        @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name"  placeholder="Enter Product Name" value="{{$product->product_name}}">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity"  placeholder="product quantity" value="{{$product->product_quantity}}">
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_price"  placeholder="Price" value="{{$product->product_price}}">
                </div>
              </div><!-- col-4 -->

               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                    @foreach($category as $cat)
              <option value="{{ $cat->id }}"
                <?php if ($cat->id == $product->category_id) {
                  echo "selected";
                } ?>
                >{{ $cat->category_name }}</option>
                @endforeach
                    
                    
                  </select>
                </div>
              </div><!-- col-4 -->




               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
  
            <textarea class="form-control" id="summernote"  name="product_details"> 
              {{ $product->product_details }}
             </textarea>
                   
                </div>
              </div><!-- col-4 -->

                



 <div class="col-lg-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Image" name="product_image">
                  <input type="hidden" name="old_image" value="{{ $product->product_image }}">

                </div>
              </div><!-- col-4 -->



  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="top_slider" value="1" <?php if ($product->top_slider == '1'){
            echo "checked";
          } ?>>
          <span>Top Slider</span>
        </label>

        </div> <!-- col-4 --> 

         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="best_seller" value="1" <?php if ($product->best_seller == '1'){
            echo "checked";
          } ?>>
          <span>Best Seller</span>
        </label>

        </div> <!-- col-4 --> 



         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="daily_essentials" value="1" <?php if ($product->daily_essentials == '1'){
            echo "checked";
          } ?>>
          <span>Daily Essential</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="diaries" value="1" <?php if ($product->diaries == '1'){
            echo "checked";
          } ?>>
          <span>Diaries</span>
        </label>

        </div> <!-- col-4 --> 


<br><br>


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">update</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form> 



        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>



@endsection
