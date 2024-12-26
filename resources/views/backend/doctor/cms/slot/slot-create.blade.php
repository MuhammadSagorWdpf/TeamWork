@extends('backend.doctor.app')
@section('content')
   <!-- sidebar end -->
      <!-- main content start -->
      <div class="main-content">
        <div class="main-content-container">
           <!-- main container header start -->
           @include('backend.doctor.partials.header')
          <!-- main container header end -->  
          <div class="section-title mt-4 d-flex justify-content-between">
            <h2>About Page Create</h2>
            <a href="{{ route('slots') }}" class="btn btn-sm btn-primary">Back</a>
          </div>
          <form class="tm-form mt-5 px-5" action="{{ route('slots.store') }}" method="POST">
            @csrf
            <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Day Name</label>
                    <select name="day" class="form-select py-3 fs-6" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option>Select day</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                      </select>
                    @error('day')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Slot Time</label>
                    <input class="form-control" type="text" name="slot" required placeholder="Enter your slot time" value="{{ old('slot') }}">
                    @error('slot')
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