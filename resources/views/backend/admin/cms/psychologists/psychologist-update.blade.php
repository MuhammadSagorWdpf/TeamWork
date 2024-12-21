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
            <h2>Psychologists Create</h2>
            <a href="{{ route('psychologists') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5">
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name">
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <select name="section" style="height: 60px; border-color: #D5D8E2;" class="form-select type" aria-label="Default select example">
                        <option value="">Select Nationality</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="Canada">Canada</option>
                      </select>
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Description</label>
                        <input class="form-control" type="text" name="description" required placeholder="Enter your description">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Button Title</label>
                        <input class="form-control" type="text" name="btn_title" required placeholder="Enter your btn title">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 1</label>
                        <textarea name="card_title_1" id="" class="form-control" placeholder="Enter your card title 1"></textarea>
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Title 2</label>
                        <textarea name="card_title_2" id="" class="form-control" placeholder="Enter your card title 2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Title 3</label>
                        <textarea name="card_title_3" id="" class="form-control" placeholder="Enter your card title 3"></textarea>
                    </div>
                </div>
                
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 1</label>
                        <textarea name="card_desc_1" id="" class="form-control" placeholder="Enter your card description 1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Card Description 2</label>
                        <textarea name="card_desc_2" id="" class="form-control" placeholder="Enter your card description 2"></textarea>
                    </div>
                </div>

                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Card Description 3</label>
                        <textarea name="card_desc_3" id="" class="form-control" placeholder="Enter your card description 3"></textarea>
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