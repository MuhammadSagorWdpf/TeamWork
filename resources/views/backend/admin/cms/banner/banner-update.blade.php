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
            <h2>Banner Update</h2>
            <a href="{{ route('banner') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ $banner->page }}">
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ $banner->section }}">
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ $banner->title }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title</label>
                        <input class="form-control" type="text" name="sub_title" required placeholder="Enter your sub title" value="{{ $banner->sub_title }}">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Enter your description">{{ $banner->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Btn Title</label>
                        <input class="form-control" type="text" name="btn_text" required placeholder="Enter your btn title" value="{{ $banner->btn_text }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="my-input">Image</label>
                    <input type="file" name="images" class="form-control" id="inputGroupFile01" >
                    <img src="{{ asset('banners/'.$banner->images)}}" alt="" width="50" height="50">
                </div>
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush