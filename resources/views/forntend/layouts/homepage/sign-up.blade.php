@extends('forntend.layouts.app')
@section('content')
<div>
<main>
            <section class="multi-step-form-section mb-150 mt-150">
                <div class="container">
                    <!-- MultiStep Form -->
                    <div class="row">
                        <div class="col">
                            <form class="msform" method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active">Professional Information</li>
                                    <li>Professional Information</li>
                                    <li>Profile Description</li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="appointment-form client-information-form">
                                        <!-- Personal Information -->
                                         <h3 class="common-form-title">Personal Information</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="first-name">First Name</label>
                                                <input type="text" id="first-name" name="first_name" required placeholder="Enter your first name">
                                               @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" id="last-name" required name="last_name" placeholder="Enter your last name">
                                                @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select id="gender" name="gender">
                                                    <option>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <!-- Add more options if needed -->
                                                </select>
                                                @error('gender')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="date" id="dob" name="dob" placeholder="Enter your date of birth">
                                                @error('dob')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <!-- Contact Information -->
                                        <h3 class="common-form-title"> Contact Information</h3>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone" name="phone_number" placeholder="Enter your phone number">
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group">
                                            <label for="focus-area">Languages Spoken</label>
                                            <select id="focus-area" name="language">
                                                <option>Select Area</option>
                                                <option>Select Area 2</option>
                                                <option>Select Area 3</option>
                                                <!-- Add focus areas -->
                                            </select>
                                            @error('language')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
            
                                        <!-- Account Details -->
                                        <h3 class="common-form-title">Account Details</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" placeholder="Enter Email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <div class="password-field">
                                                    <input type="password" id="password" name="password" class="password-input" placeholder="Enter your password">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                        </div>
            
                                        <!-- Agreement and Upload -->
                                        {{-- <div class="form-group">
                                            <label for="terms" class="custom-checkbox tm-remember-me">
                                                <input type="checkbox" id="terms" name="remember" />
                                                <span class="checkmark"></span>
                                                I confirm that I am a registered psychologist with AHPRA and understand that my registration will be verified
                                              </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="terms" class="custom-checkbox tm-remember-me">
                                                <input type="checkbox" id="terms" name="remember" />
                                                <span class="checkmark"></span>
                                                I Agree to Terms and Conditions and Privacy Policy <span></span>
                                              </label> 
                                              
                                        </div> --}}
                                    </div>
                                        <input type="button" name="next"
                                        class="next action-button w-100"
                                        value="Next" />

                                </fieldset>

                                <!-- 2nd fieldset  -->
                                <fieldset>
                                    <div class="appointment-form client-information-form">
                                        <!-- Professional Information -->
                                        <h3 class="common-form-title">Professional Information</h3>
                                        <div class="form-group">
                                            <label for="qualifications">Qualifications</label>
                                            <input type="text" id="qualifications" name="qualification" placeholder="Enter your qualifications">
                                            @error('qualification')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="ahpra-reg-number">AHPRA Registration Number</label>
                                            <input type="text" id="ahpra-reg-number" name="registration_number" placeholder="Enter your AHPRA registration number">
                                            @error('registration_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <!-- Therapy Modes Offered -->
                                        <h3 class="common-form-title">Therapy Modes Offered</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="practice-name">Practice Name</label>
                                                <input type="text" id="practice-name" name="practice_name" placeholder="Enter practice name">
                                                @error('practice_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="practice-address">Practice Address</label>
                                                <input type="text" id="practice-address" name="practice_address" placeholder="Enter practice address">
                                                @error('practice_address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="therapy-mode">Therapy Mode Offered</label>
                                                <select id="therapy-mode" name="therapy_type">
                                                    <option>Select</option>
                                                    <option>online</option>
                                                    <option>offline</option>
                                                </select>
                                                @error('therapy_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="client-age-group">Client Age Groups Served</label>
                                                <select id="client-age-group" name="client_age_served">
                                                    <option>Select</option>
                                                    <option>Children</option>
                                                    <option>Adults</option>
                                                </select>
                                                @error('client_age_served')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="expertise-areas">Areas Of Expertise</label>
                                            <select id="expertise-areas" name="expertise_area">
                                                <option>Select</option>
                                                <option>Expertise 1</option>
                                                <option>Expertise 2</option>
                                            </select>
                                            @error('expertise_area')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <!-- File Upload -->
                                        <div class="form-group">
                                            <label for="profile-pic">Upload your AHPRA Certificate for Verification * </label>
                                            <input type="file" id="profile-pic" name="certificate_image" accept="image/*">
                                            @error('certificate_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                        
                                    </div>
                                
                                    <div class="multi-btn-wrapper">
                                        <input type="button" name="previous" class="previous action-button-previous" value="Back" />
                                        <input type="button" name="next" class="next action-button" value="Continue" />
                                    </div>
                                </fieldset>

                                <!-- 3rd fieldset  -->
                                <fieldset>
                                    <div class="appointment-form client-information-form">
                                        <!-- Professional Information -->
                                        <h3 class="common-form-title">Profile Description</h3>
                                        <div class="form-group">
                                            <textarea name="description" id="" class="tm-text-area" placeholder="Write your Description"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- Professional Experience -->
                                        <h3 class="common-form-title">Experience</h3>
                                        <div class="form-group">
                                            <input type="number" name="experience" id="years-of-experience" name="experience" class="tm-text-area" placeholder="Enter years of experience">
                                            @error('experience')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <!-- Session length -->
                                        <div class="form-group">
                                            <label for="profile-pic">Session length</label>
                                            <input type="number" name="session_length" class="file-input" placeholder="Enter session length">
                                            @error('session_length')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- Session fee -->
                                        <div class="form-group">
                                            <label for="profile-pic">Session Fee</label>
                                            <input type="number" name="session_fee" class="file-input" placeholder="Enter session fee">
                                            @error('session_fee')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- medicare_amount -->
                                        <div class="form-group">
                                            <label for="profile-pic">medicare_amount</label>
                                            <input type="number" name="medicare_amount" class="file-input" placeholder="Enter medicare_amount">
                                            @error('medicare_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- File Upload -->
                                        <div class="form-group">
                                            <label for="profile-pic">Upload Profile Pic</label>
                                            <input type="file" name="profile_image" class="file-input" id="profile" accept="image/*">
                                            @error('profile_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="multi-btn-wrapper">
                                            <input type="button" name="previous"
                                            class="previous action-button-previous"
                                            value="Back" />
                                        <input type="submit" name="submit"
                                            class="submit action-button"
                                            value="Submit" />
                                        </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

</main>
</div>

<!-- ==== All Js Links ==== -->

<script>
const nextButtons = document.querySelectorAll(".next");
const prevButtons = document.querySelectorAll(".previous");
const fieldsets = document.querySelectorAll("fieldset");
const progressbarItems = document.querySelectorAll("#progressbar li");

let currentStep = 0;

nextButtons.forEach((btn, index) => {
btn.addEventListener("click", () => {
fieldsets[currentStep].style.display = "none";
currentStep++;
fieldsets[currentStep].style.display = "block";
progressbarItems[currentStep].classList.add("active");
});
});

prevButtons.forEach((btn, index) => {
btn.addEventListener("click", () => {
fieldsets[currentStep].style.display = "none";
progressbarItems[currentStep].classList.remove("active");
currentStep--;
fieldsets[currentStep].style.display = "block";
});
});

</script>
@endsection