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
          <h6 class="card-body-title">Add New Product
          </h6>
          <p class="mg-b-20 mg-sm-b-30">New Prodcut Form</p>

       <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">    
        @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name"  placeholder="Enter Product Name">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity"  placeholder="product quantity">
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_price"  placeholder="Price">
                </div>
              </div><!-- col-4 -->

               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                    @endforeach
                    
                    
                  </select>
                </div>
              </div><!-- col-4 -->




               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
  
            <textarea class="form-control" id="summernote"  name="product_details"> 

             </textarea>
                   
                </div>
              </div><!-- col-4 -->

                



 <div class="col-lg-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Image" name="product_image">

                </div>
              </div><!-- col-4 -->



  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="top_slider" value="1">
          <span>Top Slider</span>
        </label>

        </div> <!-- col-4 --> 

         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="best_seller" value="1">
          <span>Best Seller</span>
        </label>

        </div> <!-- col-4 --> 



         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="daily_essentials" value="1">
          <span>Daily Essential</span>
        </label>

        </div> <!-- col-4 --> 


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="diaries" value="1">
          <span>Diaries</span>
        </label>

        </div> <!-- col-4 --> 


<br><br>


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit</button>
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
