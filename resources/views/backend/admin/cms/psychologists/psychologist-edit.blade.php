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
            <h2>Psychologists Edit</h2>
            <a href="{{ route('psychologists') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-2 px-5" method="POST" action="{{ route('psychologists.update', $psychologists->id) }}">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ old('page', $psychologists->page) }}">
                    @error('page')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ old('section', $psychologists->section) }}">
                    @error('section')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ old('title', $psychologists->title) }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Short Description</label>
                        <input class="form-control" type="text" name="short_description" required placeholder="Enter your short_description" value="{{ old('short_description', $psychologists->short_description) }}">
                        @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Button Title</label>
                        <input class="form-control" type="text" name="btn_text" required placeholder="Enter your btn text" value="{{ old('btn_text', $psychologists->btn_text) }}">
                        @error('btn_text')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 1</label>
                        <input type="text" name="card_title_1" id="" class="form-control" placeholder="Enter your card title 1" value="{{ old('card_title_1', $psychologists->card_title_1) }}">
                        @error('card_title_1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 2</label>
                        <input type="text" name="card_title_2" id="" class="form-control" placeholder="Enter your card title 2" value="{{ old('card_title_2', $psychologists->card_title_2) }}">
                        @error('card_title_2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 3</label>
                        <input type="text" name="card_title_3" id="" class="form-control" placeholder="Enter your card title 3" value="{{ old('card_title_3', $psychologists->card_title_3) }}">
                        @error('card_title_3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 1</label>
                        <textarea name="card_desc_1" id="" class="form-control" placeholder="Enter your card description 1">{{ old('card_desc_1', $psychologists->card_desc_1) }}</textarea>
                        @error('card_desc_1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 2</label>
                        <textarea name="card_desc_2" id="" class="form-control" placeholder="Enter your card description 2">{{ old('card_desc_2', $psychologists->card_desc_2) }}</textarea>
                        @error('card_desc_2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 3</label>
                        <textarea name="card_desc_3" id="" class="form-control" placeholder="Enter your card description 3">{{ old('card_desc_3', $psychologists->card_desc_3) }}</textarea>
                        @error('card_desc_3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
                    </div>
                </div>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush