@extends('backend.admin.app')
@section('content')
   <!-- sidebar end -->
      <!-- main content start -->
      <div class="main-content">
        <div class="main-content-container">
           <!-- main container header start -->
           @include('backend.admin.partials.header')
          <!-- main container header end -->  
          <div class="section-title mt-4 d-flex justify-content-between">
            <h1>Banner Create</h1>
            <a href="{{ route('banner') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5">
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="" required placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title</label>
                        <input class="form-control" type="text" name="" required placeholder="Enter your sub title">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Enter your description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Btn Title</label>
                        <input class="form-control" type="text" name="" required placeholder="Enter your btn title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="my-input">Image</label>
                    <input type="file" class="form-control" id="inputGroupFile01" >
                </div>
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
            </form>
            
        </div>
        
      </div>
    </div>
    
@endsection

@push('script')

 @endpush