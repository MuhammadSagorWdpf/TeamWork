@extends('forntend.layouts.app')
@section('content')
<main>

    <section class="client-information-section mt-150 mb-150">
        <div class="container">
            <div class="appointment-form-container client-information-form-container">
                <h2 class="tm-common-heading">Client Information</h2>

                <form class="appointment-form client-information-form" action="{{ route('client.store') }}" method="post" id="msform" enctype="multipart/form-data">
                    @csrf
                    <!-- Personal Information -->
                     <h3 class="common-form-title">Personal Information</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Enter your last name">
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
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <div class="date-input-wrapper">
                                <input type="date" id="dob" name="dob" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <h3 class="common-form-title"> Contact Information</h3>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone_number" placeholder="Enter your phone number">
                    </div>

                    <!-- Location -->
                    <h3 class="common-form-title"> Location</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">State</label>
                            <select id="state" name="state">
                                <option>Select State</option>
                                <option>Select State 2</option>
                                <option>Select State 3</option>
                                <!-- Add state options -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select id="city" name="city">
                                <option>Select City</option>
                                <option>Select City-2</option>
                                <option>Select City-3</option>
                                <!-- Add city options -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="postcode">Post Code</label>
                            <input type="text" id="postcode" name="postal_code" placeholder="Enter Post Code">
                        </div>
                    </div>

                    <!-- Therapy Preferences -->
                    <h3 class="common-form-title">Preference For Therapy</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="therapy-type">Preferred Therapy Type</label>
                            <select id="therapy-type" name="therapy_type">
                                <option>Select Therapy Type</option>
                                <option>Select Therapy Type 2</option>
                                <option>Select Therapy Type 3</option>
                                <!-- Add therapy types -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="focus-area">Area of Focus</label>
                            <select id="focus-area" name="area_of_focus">
                                <option>Select Area</option>
                                <option>Select Area 2</option>
                                <option>Select Area 3</option>
                                <!-- Add focus areas -->
                            </select>
                        </div>
                    </div>

                    <!-- Account Details -->
                    <h3 class="common-form-title">Account Details</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-field">
                                <input type="password" id="password" name="password" class="password-input" placeholder="Enter your password">
                            </div>
                            
                        </div>
                    </div>

                    <!-- Agreement and Upload -->
                    
                    <div class="form-group">
                        <input type="file" name="image" class="file-input" id="profile" accept="image/*">
                    </div>

                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
        </div>
    </section>

</main>

@endsection