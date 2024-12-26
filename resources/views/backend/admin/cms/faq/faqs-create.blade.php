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
            <h2>Frequently Asked Questions Create</h2>
            <a href="{{ route('faqs') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Page</label>
                    <input class="form-control" type="text" name="page" required placeholder="Enter your page name">
                </div>
                <div class="form-group">
                    <label for="my-input">Section</label>
                    <input class="form-control" type="text" name="section" required placeholder="Enter your section name">
                </div>
            </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="title" required placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Questions</label>
                        <input class="form-control" type="text" name="question" required placeholder="Enter your questions">
                    </div>
                </div>
                <div class="form-group">
                    <label for="my-input">Answers</label>
                    <input class="form-control" type="text" name="answer" required placeholder="Enter your answers">
                </div>
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
            </form>
            
        </div>
        
      </div>
    </div>
@endsection

@push('script')

 @endpush