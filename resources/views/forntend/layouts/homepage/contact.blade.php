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
                                <img src="./assets/images/expert-4.png" alt
                                    srcset>
                            </tm>
                        </div>
                        <div class="tm-col doctor-details-col">
                            <div class="tm-doctor-details">
                                <p><span class="doctor-details-span-1">Name
                                        :</span> <span
                                        class="doctor-details-span-2">Dr. Emily
                                        Parker Woner</span></p>
                                <p><span class="doctor-details-span-1">Primary
                                        Care :</span> <span
                                        class="doctor-details-span-2">20 Years
                                        of Experience</span></p>
                                <p><span
                                        class="doctor-details-span-1">Specializes
                                        :</span> <span
                                        class="doctor-details-span-2">Psychiatrist,
                                        Clinical Psychologist, Counselling
                                        Psychologist, Neuropsychologist, Child
                                        Psychologist, Marriage and Family
                                        Therapist (MFT) , Addiction Counselor,
                                        Behavioral Therapist,
                                        Psychoanalyst</span></p>
                                <p><span class="doctor-details-span-1">About
                                        :</span> <span
                                        class="doctor-details-span-2">Specialities
                                        Psychiatrist (Mental Health) Specializes
                                        in mental health for Adults and
                                        Children, including substance use
                                        disorders. Psychiatrists are qualified
                                        to assess both the mental and physical
                                        aspects of psychological problems. They
                                        aim to help patients lead better
                                        life.</span></p>
                                <div class="doctor-details-line"></div>
                                <p class="doctor-details-special-p"><span
                                        class="doctor-details-span-1">Consult
                                        Duration</span> <span
                                        class="doctor-details-span-3">30
                                        Minutes</span></p>
                                <p class="doctor-details-special-p"><span
                                        class="doctor-details-span-1">Total
                                        Amount</span> <span
                                        class="doctor-details-span-3">$
                                        200</span></p>
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
                            
                                <form class="appointment-form">
                                    <!-- names -->
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="first-name">First Name</label>
                                            <input type="text" id="first-name" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" id="last-name" placeholder="Enter Last Name">
                                        </div>
                                    </div>

                                    <!-- contact info -->
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" id="phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                            
                                    <!-- Consultant Type -->
                                    <div class="form-group">
                                        <label for="consultant-type">Consultant Types</label>
                                        <select id="consultant-type">
                                            <option>Consultant Type-1</option>
                                            <option>Consultant Type-2</option>
                                            <option>Consultant Type-3</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                            
                                    <!-- Select Date -->
                                    <div class="form-group">
                                        <label for="select-date">Select Date</label>
                                        <div class="date-input-wrapper">
                                            <input type="date" id="appointment-date" class="date-input" placeholder="Select Date">
                                            <img src="./assets/images/Calendar.svg" alt="Calendar Icon" class="custom-calendar-icon">
                                        </div>
                                    </div>
                            
                                    <!-- Available Slot -->
                                    <div class="form-group">
                                        <label>Available Slot</label>
                                        <div class="time-slots">
                                            <button type="button" class="time-slot">8:00 AM</button>
                                            <button type="button" class="time-slot">10:00 AM</button>
                                            <button type="button" class="time-slot">12:00 PM</button>
                                            <button type="button" class="time-slot">2:00 PM</button>
                                            <button type="button" class="time-slot">4:00 PM</button>
                                            <button type="button" class="time-slot">6:00 PM</button>
                                            <!-- Add more time slots as needed -->
                                        </div>
                                    </div>
                            
                                    <!-- Message -->
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" placeholder="Enter your details"></textarea>
                                    </div>
                            
                                    <button type="submit" class="submit-button">Book An Appointment</button>
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
@endsection