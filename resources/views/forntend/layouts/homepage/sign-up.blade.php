@extends('forntend.layouts.app')
@section('content')
<div>
<main>
            <section class="multi-step-form-section mb-150 mt-150">
                <div class="container">
                    <!-- MultiStep Form -->
                    <div class="row">
                        <div class="col">
                            <form class="msform">
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
                                                <input type="text" id="first-name"
                                                    placeholder="Enter your first name">
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" id="last-name"
                                                    placeholder="Enter your last name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select id="gender">
                                                    <option>Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <!-- Add more options if needed -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <div class="date-input-wrapper">
                                                    <input type="date" id="appointment-date"
                                                        class="date-input">
                                                    <img src="./assets/images/Calendar.svg"
                                                        alt="Calendar Icon"
                                                        class="custom-calendar-icon">
                                                </div>
                                            </div>
                                        </div>
            
                                        <!-- Contact Information -->
                                        <h3 class="common-form-title"> Contact Information</h3>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone"
                                                placeholder="Enter your phone number">
                                        </div>
        
                                        <div class="form-group">
                                            <label for="focus-area">Languages Spoken</label>
                                            <select id="focus-area">
                                                <option>Select Area</option>
                                                <option>Select Area 2</option>
                                                <option>Select Area 3</option>
                                                <!-- Add focus areas -->
                                            </select>
                                        </div>
            
                                        <!-- Account Details -->
                                        <h3 class="common-form-title">Account Details</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email"
                                                    placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <div class="password-field">
                                                    <input type="password" id="password" class="password-input" placeholder="Enter your password">
                                                    <img src="./assets/images/eye-off.svg" alt="Show/Hide Password" class="toggle-password" data-input="password">
                                                </div>
                                                
                                            </div>
                                        </div>
            
                                        <!-- Agreement and Upload -->
                                        <div class="form-group">
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
                                              
                                        </div>
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
                                            <input type="text" id="qualifications" placeholder="Enter your qualifications">
                                        </div>
                                        <div class="form-group">
                                            <label for="ahpra-reg-number">AHPRA Registration Number</label>
                                            <input type="text" id="ahpra-reg-number" placeholder="Enter your AHPRA registration number">
                                        </div>
                                
                                        <!-- Therapy Modes Offered -->
                                        <h3 class="common-form-title">Therapy Modes Offered</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="practice-name">Practice Name</label>
                                                <input type="text" id="practice-name" placeholder="Enter practice name">
                                            </div>
                                            <div class="form-group">
                                                <label for="practice-address">Practice Address</label>
                                                <input type="text" id="practice-address" placeholder="Enter practice address">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="therapy-mode">Therapy Mode Offered</label>
                                                <select id="therapy-mode">
                                                    <option>Select</option>
                                                    <option>Therapy 1</option>
                                                    <option>Therapy 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="client-age-group">Client Age Groups Served</label>
                                                <select id="client-age-group">
                                                    <option>Select</option>
                                                    <option>Children</option>
                                                    <option>Adults</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="expertise-areas">Areas Of Expertise</label>
                                            <select id="expertise-areas">
                                                <option>Select</option>
                                                <option>Expertise 1</option>
                                                <option>Expertise 2</option>
                                            </select>
                                        </div>
                                
                                        <!-- File Upload -->
                                        <div class="form-group">
                                            <label for="profile-pic">Upload your AHPRA Certificate for Verification * </label>
                                                <div class="file-upload-space" id="upload-area">
                                                    <span id="upload-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                            <path d="M19.5 15V17C19.5 18.1046 18.6046 19 17.5 19H7.5C6.39543 19 5.5 18.1046 5.5 17V15M12.5 15L12.5 5M12.5 5L14.5 7M12.5 5L10.5 7"
                                                                stroke="#344051" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <p id="upload-text">Upload file</p>
                                                    <input type="file" name="myFile" class="file-input" id="profile" accept="image/*" style="display: none;">
                                                  </div>
                                        </div>
                                
                                        <!-- Add More Button -->
                                        <button type="button" class="add-more-button"><span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M10.75 13.25V20H13.25V13.25H20V10.75H13.25V4H10.75V10.75H4V13.25H10.75Z" fill="#1E1E1E"/>
                                              </svg>
                                        </span> Add More</button>
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
                                            <textarea name="" id="" class="tm-text-area" placeholder="Write your Description"></textarea>
                                        </div>
                                                                                    <!-- File Upload -->
                                        <div class="form-group">
                                            <label for="profile-pic">Upload Profile Pic</label>
                                                <div class="file-upload-space" id="upload-area">
                                                    <span id="upload-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                            <path d="M19.5 15V17C19.5 18.1046 18.6046 19 17.5 19H7.5C6.39543 19 5.5 18.1046 5.5 17V15M12.5 15L12.5 5M12.5 5L14.5 7M12.5 5L10.5 7"
                                                                stroke="#344051" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <p id="upload-text">Upload Pic</p>
                                                    <input type="file" name="myFile" class="file-input" id="profile" accept="image/*" style="display: none;">
                                                  </div>
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
@endsection