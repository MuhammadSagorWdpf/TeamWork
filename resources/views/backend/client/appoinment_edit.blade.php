@extends('backend.app')

@section('content')
  <!-- sidebar end -->
  <!-- main content start -->
  <div class="main-content mx-5">
    <div class="main-content-container">
          @include('backend.partials.header')
        
          <div class="section-title my-4">
            <h2>Appointments Edit</h2>
          </div>
          
          {{-- <form class="appointment-form" action="{{ route('apointment.store') }}" method="post" id="msform" enctype="multipart/form-data">
            @csrf
            <!-- names -->
            <div class="form-row">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}">
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- contact info -->
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    
            <div class="form-row">
                <!-- Consultant Type -->
                <div class="form-group">
                    <label for="consultant-type">Consultant Types</label>
                    <select id="consultant-type" name="consultation_type">
                        @foreach ($therapyTypes as $therapyType)
                        <option value="{{ $therapyType }}">{{ $therapyType }}</option>
                        @endforeach
                    </select>
                    @error('consultation_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" value="{{ old('age') }}">
                    @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    
            <!-- Select Date -->
            <div class="form-group">
                <label for="select-date">Select Date</label>
                <input onchange="selectDate()" type="date" id="select-date" name="date" value="{{ date('Y-m-d') }}">
            </div>
            
            <!-- Available Slot -->
            <div class="form-group">
                <label>Available Slot</label>
                <div class="time-slots" id="slots">
                    @if (date('Y-m-d'))
                        @if (!empty($avableSlots) && count($avableSlots) > 0)
                            @foreach ($avableSlots as $item)
                                <input type="checkbox" id="slot_{{ $item }}" name="slot" value="{{ $item }}">
                                <label for="slot_{{ $item }}">{{ $item }}</label>
                            @endforeach
                        @else
                            <p class="text-danger">Slot not available</p>
                        @endif
                    @endif
                </div>
                @error('slot')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <input type="hidden" id="psychologist_id" name="psychologist_id" value="{{ $doctorDetail->id }}">
            <input type="hidden" name="fees" value="{{ $doctorDetail->session_fee }}">
            
            <!-- Message -->
            <div class="form-group"> 
                <label for="message">Your Message</label>
                <textarea class="w-100 form-control" id="message" name="message" placeholder="Enter your details">{{ old('message') }}</textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    
            
            <button type="submit" class="submit-button">Update</button>
        </form> --}}
            
        </div>
        
      </div>
   

      {{-- <script>
        function selectDate() {
         let date = document.getElementById('select-date').value; // Get selected date
         let psychologist = document.getElementById('psychologist_id').value; // Get psychologist_id
     
         $(document).ready(function() {
             $.ajax({
                 url: '/select-date',
                 type: 'get',
                 data: {
                     date: date,
                     psychologist_id: psychologist // Pass psychologist_id
                 },
                 success: function(response) {
                     $('#slots').html(''); // Clear previous slots
                     
                     if (response && response.length > 0) {
                         response.forEach(element => {
                             // Append available slots
                             $('#slots').append(
                                 `<div>
                                     <input type="checkbox" id="slot_${element}" name="slot" value="${element}">
                                     <label for="slot_${element}">${element}</label>
                                 </div>`
                             );
                         });
                     } else {
                         // append slot not available message
                         $('#slots').html('<p class="text-danger">Slot not available select another date</p>');
                     }
                 },
                 // Error handling
                 error: function() {
                     $('#slots').html('<p class="text-danger">Error fetching slots. Please try again later.</p>');
                 }
             });
         });
     }
     </script> --}}
@endsection

