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
            <h2>Rebates Edit</h2>
            <a href="{{ route('rebates') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('rebates.update', $rebates->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name" value="{{ $rebates->page }}">
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name" value="{{ $rebates->section }}">
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title" value="{{ $rebates->title }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sort Description</label>
                        <input class="form-control" type="text" name="short_description" required placeholder="Enter your sort description" value="{{ $rebates->short_description }}">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 2</label>
                        <input type="text" name="card_title_2" id="" class="form-control" placeholder="Enter your card title 2" value="{{ $rebates->card_title_2 }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 3</label>
                        <input type="text" name="card_title_3" id="" class="form-control" placeholder="Enter your card title 3" value="{{ $rebates->card_title_3 }}">
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 1</label>
                        <textarea name="card_desc_1" id="" class="form-control" placeholder="Enter your card description 1">{{ $rebates->card_desc_1 }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 2</label>
                        <textarea name="card_desc_2" id="" class="form-control" placeholder="Enter your card description 2">{{ $rebates->card_desc_2 }}</textarea>
                    </div>
                </div>

                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 3</label>
                        <textarea name="card_desc_3" id="" class="form-control" placeholder="Enter your card description 3">{{ $rebates->card_desc_3 }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 1</label>
                        <input type="text" name="card_title_1" id="" class="form-control" placeholder="Enter your card title 1" value="{{ $rebates->card_title_1 }}">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input type="file" name="images" class="form-control" id="customFile">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('rebate/'.$rebates->images) }}" alt="" width="50" height="50">
                    </div>
                </div>
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">update</button>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush