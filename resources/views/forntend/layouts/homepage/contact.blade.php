@extends('forntend.layouts.app')
@section('content')
<div>
 <!-- main area starts -->
 <main>
            <!-- page title start -->
            <section class="page-top-title">
                <div class="container">
                    <div class="page-content-wrapper">
                        <h1 class="page-title">Appointment</h1>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- docto details section start -->
            <section class="doctor-details-section mt-150">
                <div class="container">
                    <div class="tm-doctor-details-row">
                        <div class="tm-col doctor-details-img-col">
                            <tm class="doctor-details-img-area">
                                <img src="{{ asset('doctor/profile/'.$doctorDetail->profile_image) }}" alt
                                    srcset>
                            </tm>
                        </div>
                        <div class="tm-col doctor-details-col">
                            <div class="tm-doctor-details">
                                <p><span class="doctor-details-span-1">Name
                                        :</span> <span
                                        class="doctor-details-span-2">{{ $doctorDetail->first_name }}</span></p>
                                <p><span class="doctor-details-span-1">Primary
                                        Care :</span> <span
                                        class="doctor-details-span-2">{{ $doctorDetail->experience }} Years
                                        of Experience</span></p>
                                <p><span
                                        class="doctor-details-span-1">Specializes
                                        :</span> <span
                                        class="doctor-details-span-2">{{ $doctorDetail->expertise_area }}</span></p>
                                <p><span class="doctor-details-span-1">About
                                        :</span> <span
                                        class="doctor-details-span-2">{{ $doctorDetail->description }}</span></p>
                                <div class="doctor-details-line"></div>
                                <p class="doctor-details-special-p"><span
                                        class="doctor-details-span-1">Consult
                                        Duration</span> <span
                                        class="doctor-details-span-3">{{ $doctorDetail->session_length }} Minutes</span></p>
                                <p class="doctor-details-special-p"><span
                                        class="doctor-details-span-1">Total
                                        Amount</span> <span
                                        class="doctor-details-span-3">$
                                        {{ $doctorDetail->medicare_amount }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- docto details section End -->

            <!-- booking form and contct-details section start -->
            <section class="book-contact-section mb-150">
                <div class="container">
                    <div class="tm-doctor-details-row">
                        <div class="tm-col doctor-details-img-col">
                            <div class="tm-map-area">
                                <h2 class="tm-common-heading">Quick Contacts</h2>
                                <p class="booking-map-para">Reach out to us
                                    quickly for any inquiries or to schedule an
                                    appointment with our mental health
                                    specialists.</p>
                                <div class="footer-contact-wrapper">
                                    <div class="footer-contact-item">
                                        <div class="footer-contact-img-area">
                                            <img
                                                src="./assets/images/call-2.svg"
                                                alt srcset>
                                        </div>
                                        <div
                                            class="footer-contact-item-text-wrapper">
                                            <p>(406) 555-0120</p>
                                            <p>(406) 555-0120</p>
                                        </div>
                                    </div>
                                    <div class="footer-contact-item">
                                        <div class="footer-contact-img-area">
                                            <img
                                                src="./assets/images/location.svg"
                                                alt srcset>
                                        </div>
                                        <div
                                            class="footer-contact-item-text-wrapper">
                                            <p>4140 Parker Rd. Allentown, New
                                                Mexico 31134</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-main-map">
                                    <iframe
                                        loading="lazy"
                                        allowfullscreen
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico%2031134&zoom=7&maptype=satellite">
                                    </iframe>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="tm-col doctor-details-col">
                            <div class="appointment-form-container">
                                <h2 class="tm-common-heading">Book An Appointment</h2>
                                <p class="booking-map-para">Schedule an appointment with our experts to take the first step toward better mental health today.</p>
                            
                                <form class="appointment-form" action="{{ route('apointment.store') }}" method="post" id="msform" enctype="multipart/form-data">
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
                            
                                    
                                    @auth
                                    <button type="submit" class="submit-button">Book An Appointment</button>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}">login to book an appointment</a>
                                    @endguest
                                </form>
                            </div>           
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking form and contct-details section end -->

        </main>
        <!-- main area ends -->
</div>

<script>
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
</script>

@endsection