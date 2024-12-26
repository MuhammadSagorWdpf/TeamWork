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
            <h2>About Page Edit</h2>
            <a href="{{ route('abouts') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('abouts.update', $abouts->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ old('page', $abouts->page) }}">
                    @error('page')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ old('section', $abouts->section) }}">
                    @error('section')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ old('title', $abouts->title) }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title</label>
                        <input class="form-control" type="text" name="sub_title" required placeholder="Enter your sub_title" value="{{ old('sub_title', $abouts->sub_title) }}">
                        @error('sub_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Sort Description</label>
                        <input class="form-control" type="text" name="short_description" required placeholder="Enter your short_description" value="{{ old('short_description', $abouts->short_description) }}">
                        @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title 2</label>
                        <input class="form-control" type="text" name="sub_title_2" required placeholder="Enter your sub_title_2" value="{{ old('sub_title_2', $abouts->sub_title_2) }}">
                        @error('sub_title_2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Description</label>
                        <input class="form-control" type="text" name="description" required placeholder="Enter your description" value="{{ old('description', $abouts->description) }}">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <div class="d-flex gap-5">
                            <input class="form-control" type="file" name="images">
                            <img src="{{ asset('about/'.$abouts->images)}}" alt="" width="50" height="50">
                        </div>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Create</button>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush