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
            <a href="{{ route('home.services') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('home.services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ old('page', $services->page) }}">
                    @error('page')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ old('section', $services->section) }}">
                    @error('section')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ old('title', $services->title) }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sort Description</label>
                        <input class="form-control" type="text" name="short_description" required placeholder="Enter your sort description" value="{{ old('short_description', $services->short_description) }}">
                        @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Sub Title</label>
                        <input class="form-control" type="text" name="sub_title" required placeholder="Enter your card_title" value="{{ old('sub_title', $services->sub_title) }}">
                        @error('sub_title')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title 2</label>
                        <input class="form-control" type="text" name="sub_title_2" required placeholder="Enter your card_title_2" value="{{ old('sub_title_2', $services->sub_title_2) }}">
                        @error('sub_title_2')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 1</label>
                        <input class="form-control" type="text" name="card_title_1" required placeholder="Enter your card_title_1" value="{{ old('card_title_1', $services->card_title_1) }}">
                        @error('card_title_1')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 2</label>
                        <input class="form-control" type="text" name="card_title_2" required placeholder="Enter your card_title_2" value="{{ old('card_title_2', $services->card_title_2) }}">
                        @error('card_title_2')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 3</label>
                        <input class="form-control" type="text" name="card_title_3" required placeholder="Enter your card_title_3" value="{{ old('card_title_3', $services->card_title_3) }}">
                        @error('card_title_3')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 4</label>
                        <input class="form-control" type="text" name="card_title_4" required placeholder="Enter your card_title_4" value="{{ old('card_title_4', $services->card_title_4) }}">
                        @error('card_title_4')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 5</label>
                        <input class="form-control" type="text" name="card_title_5" required placeholder="Enter your card_title_5" value="{{ old('card_title_5', $services->card_title_5) }}">
                        @error('card_title_5')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 6</label>
                        <input class="form-control" type="text" name="card_title_6" required placeholder="Enter your card_title_6" value="{{ old('card_title_6', $services->card_title_6) }}">
                        @error('card_title_6')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 7</label>
                        <input class="form-control" type="text" name="card_title_7" required placeholder="Enter your card_title_7" value="{{ old('card_title_7', $services->card_title_7) }}">
                        @error('card_title_7')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 8</label>
                        <input class="form-control" type="text" name="card_title_8" required placeholder="Enter your card_title_8" value="{{ old('card_title_8', $services->card_title_8) }}">
                        @error('card_title_8')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 9</label>
                        <input class="form-control" type="text" name="card_title_9" required placeholder="Enter your card_title_9" value="{{ old('card_title_9', $services->card_title_9) }}">
                        @error('card_title_9')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 10</label>
                        <input class="form-control" type="text" name="card_title_10" required placeholder="Enter your card_title_10" value="{{ old('card_title_10', $services->card_title_10) }}">
                        @error('card_title_10')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 1</label>
                        <textarea class="form-control" name="card_desc_1" required placeholder="Enter your card_desc_1">{{ old('card_desc_1', $services->card_desc_1) }}</textarea>
                        @error('card_desc_1')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 2</label>
                        <textarea class="form-control" name="card_desc_2" required placeholder="Enter your card_desc_2">{{ old('card_desc_2', $services->card_desc_2) }}</textarea>
                        @error('card_desc_2')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 3</label>
                        <textarea class="form-control" name="card_desc_3" required placeholder="Enter your card_desc_3">{{ old('card_desc_3', $services->card_desc_3) }}</textarea>
                        @error('card_desc_3')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 4</label>
                        <textarea class="form-control" name="card_desc_4" required placeholder="Enter your card_desc_4">{{ old('card_desc_4', $services->card_desc_4) }}</textarea>
                        @error('card_desc_4')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 5</label>
                        <textarea class="form-control" name="card_desc_5" required placeholder="Enter your card_desc_5">{{ old('card_desc_5', $services->card_desc_5) }}</textarea>
                        @error('card_desc_5')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 6</label>
                        <textarea class="form-control" name="card_desc_6" required placeholder="Enter your card_desc_6">{{ old('card_desc_6', $services->card_desc_6) }}</textarea>
                        @error('card_desc_6')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 7</label>
                        <textarea class="form-control" name="card_desc_7" required placeholder="Enter your card_desc_7">{{ old('card_desc_7', $services->card_desc_7) }}</textarea>
                        @error('card_desc_7')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 8</label>
                        <textarea class="form-control" name="card_desc_8" required placeholder="Enter your card_desc_8">{{ old('card_desc_8', $services->card_desc_8) }}</textarea>
                        @error('card_desc_8')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 9</label>
                        <textarea class="form-control" name="card_desc_9" required placeholder="Enter your card_desc_9">{{ old('card_desc_9', $services->card_desc_9) }}</textarea>
                        @error('card_desc_9')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 10</label>
                        <textarea class="form-control" name="card_desc_10" required placeholder="Enter your card_desc_10">{{ old('card_desc_10', $services->card_desc_10) }}</textarea>
                        @error('card_desc_10')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input type="file" name="images" class="form-control" id="inputGroupFile01" >
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('home_service/'.$services->images)}}" alt="" width="50" height="50">
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