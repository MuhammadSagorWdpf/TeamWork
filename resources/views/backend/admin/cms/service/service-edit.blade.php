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
            <h2>Home Services Edit</h2>
            <a href="{{ route('services') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ $service->page }}">
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ $service->section }}">
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ $service->title }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sort Description</label>
                        <input class="form-control" type="text" name="short_description" required placeholder="Enter your sort description" value="{{ $service->short_description }}">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 1</label>
                        <input class="form-control" type="text" name="card_title_1" required placeholder="Enter your card_title_1" value="{{ $service->card_title_1 }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 2</label>
                        <input class="form-control" type="text" name="card_title_2" required placeholder="Enter your card_title_2" value="{{ $service->card_title_2 }}">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 1</label>
                        <textarea class="form-control" name="card_desc_1" required placeholder="Enter your card_desc_2">{{ $service->card_desc_1 }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 2</label>
                        <textarea class="form-control" name="card_desc_2" required placeholder="Enter your card_desc_2">{{ $service->card_desc_2 }}</textarea>
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input type="file" name="images" class="form-control" id="inputGroupFile01" >
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('service/'.$service->images)}}" alt="" width="50" height="50">
                    </div>
                </div>
                
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush