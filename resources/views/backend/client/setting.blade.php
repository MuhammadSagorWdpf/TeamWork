@extends('backend.app')
@section('content')
    <div class="layout-container">
        <!-- main content start -->
        <div class="main-content setting mx-5">
            <div class="main-content-container">
                @include('backend.partials.header')
                <div class="section-title mt-3">Setting toufiqur</div>

                <form class="tm-form" action="{{ route('client.setting.update', $setting->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="my-input">First Name</label>
                            <input class="form-control" type="text" name="first_name" required placeholder="First Name"
                                value="{{ old('first_name', $setting->first_name) }}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-input">Last Name</label>
                            <input class="form-control" type="text" name="last_name" required placeholder="Last Name"
                                value="{{ old('last_name', $setting->last_name) }}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="my-input">Phone</label>
                            <input class="form-control" type="tel" name="phone_number" required placeholder="+23122123"
                                value="{{ old('phone_number', $setting->phone_number) }}">
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="my-input">Date of Birth</label>
                            <div class="date-picker-container">
                                <input style="width: 100%;" id="date-input" name="dob" placeholder="DD/MM/YY"
                                    type="text" value="{{ old('dob', $setting->dob) }}">
                                @error('dob')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Gender</label>
                            <select name="gender" style="height: 60px; border-color: #D5D8E2;" class="form-select type"
                                aria-label="Default select example">
                                <option value="{{ old('gender', $setting->gender) }}">{{ old('gender', $setting->gender) }}
                                </option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Email Address*</label>
                        <input class="form-control" type="email" name="email" required placeholder="Email Address"
                            value="{{ old('email', $setting->email) }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-field-wrapper">
                        <div class="form-group">
                            <label for="my-input">Password</label>
                            <input class="form-control" type="password" name="password" required placeholder="Password"
                                value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                      <label for="my-input">Re-type Password</label>
                      <input class="form-control" type="password" name="passwordConfirm" required placeholder="Password" value="{{ old('passwordConfirm') }}">
                      @error('passwordConfirm')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div> --}}
                    </div>
                    <div class="tm-settings-img-upload-area">
                        <div class="d-flex gap-5">
                            <div class="tm-settings-img-space">
                                <img src="{{ asset('client/' . $setting->image) }}" alt="" id="previewImage"
                                    srcset="">
                            </div>
                            <input type="file" class="form-control text-center" id="image" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
                    </div>


                </form>
            </div>

        </div>
    </div>

    <!-- notification modal start -->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h1 class="modal-title fs-5" id="notificationModalLabel">
                        Notifications
                    </h1>
                </div>
                <div class="modal-body notify-body">
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="notify-item">
                        <div class="notify-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="#1F305E" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="notify-details">
                            <h6 class="notify-title">Sytem Update</h6>
                            <p class="notify-data">Your System up to date</p>
                        </div>
                        <a href="" class="btn notify-close" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M16 16L8 8M8 16L16 8" stroke="#6B7280" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- notification modal end -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('inputGroupFile01');
            const previewImage = document.getElementById('previewImage');

            if (fileInput && previewImage) {
                fileInput.addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize Flatpickr on the input element
            const dateInput = document.getElementById('date-input');
            const flatpickrInstance = flatpickr(dateInput, {
                dateFormat: "d/m/y",
                minDate: "today" // Disable past dates
            });

            // Add event listener to open Flatpickr on container click
            document.querySelector('.date-picker-container').addEventListener('click', function() {
                flatpickrInstance.open();
            });
        });
    </script>
@endsection
