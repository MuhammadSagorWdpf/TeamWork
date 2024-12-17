@extends('backend.app')
@section('content')
<div class="layout-container">
    <!-- main content start -->
    <div class="main-content">
      <div class="main-content-container"> 
        <div class="section-title mt-4">Setting</div>
        
          <form class="tm-form">
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">First Name</label>
                      <input class="form-control" type="text" name="" required placeholder="First Name">
                  </div>
                  <div class="form-group">
                      <label for="my-input">Last Name</label>
                      <input class="form-control" type="text" name="" required placeholder="Last Name">
                  </div>
              </div>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">Phone</label>
                      <input class="form-control" type="tel" name="" required placeholder="+23122123">
                  </div>
                  <div class="form-group">
                      <label for="my-input">Nationality*</label>
                      <select style="height: 60px; border-color: #D5D8E2;" class="form-select type" aria-label="Default select example">
                          <option value="">Select Nationality</option>
                          <option value="USA">USA</option>
                          <option value="UK">UK</option>
                          <option value="Canada">Canada</option>
                        </select>
                      
                  </div>
              </div>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">Date of Birth</label>
                      <!-- <input class="form-control" type="date" name="" required> -->
                      <div class="date-picker-container">
                          <input style="width: 100%;" id="date-input" placeholder="DD/MM/YY" type="text">
                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9109 0.768617L13.9119 1.51824C16.6665 1.73413 18.4862 3.61119 18.4891 6.48975L18.5 14.9155C18.5039 18.054 16.5322 19.985 13.3718 19.99L5.65188 20C2.51119 20.004 0.514817 18.027 0.510867 14.8795L0.500007 6.55272C0.496057 3.65517 2.25153 1.78311 5.00617 1.53024L5.00518 0.780611C5.0042 0.340832 5.33001 0.00999726 5.76444 0.00999726C6.19886 0.00899776 6.52468 0.338833 6.52567 0.778612L6.52666 1.47826L12.3914 1.47027L12.3904 0.770616C12.3894 0.330837 12.7152 0.00100177 13.1497 2.26549e-06C13.5742 -0.000997234 13.9099 0.328838 13.9109 0.768617ZM2.02148 6.86157L16.9696 6.84158V6.49175C16.9272 4.34283 15.849 3.21539 13.9138 3.04748L13.9148 3.81709C13.9148 4.24688 13.5801 4.5877 13.1556 4.5877C12.7212 4.5887 12.3943 4.24887 12.3943 3.81909L12.3934 3.0095L6.52863 3.01749L6.52962 3.82609C6.52962 4.25687 6.20479 4.5967 5.77036 4.5967C5.33594 4.5977 5.00913 4.25887 5.00913 3.82809L5.00815 3.05847C3.08286 3.25137 2.01753 4.38281 2.02049 6.55072L2.02148 6.86157ZM12.7399 11.4043V11.4153C12.7498 11.8751 13.125 12.2239 13.5801 12.2139C14.0244 12.2029 14.3789 11.8221 14.369 11.3623C14.3483 10.9225 13.9918 10.5637 13.5485 10.5647C13.0944 10.5747 12.7389 10.9445 12.7399 11.4043ZM13.5554 15.892C13.1013 15.882 12.735 15.5032 12.734 15.0435C12.7241 14.5837 13.0884 14.2029 13.5426 14.1919H13.5525C14.0165 14.1919 14.3927 14.5707 14.3927 15.0405C14.3937 15.5102 14.0185 15.891 13.5554 15.892ZM8.67212 11.4203C8.69187 11.8801 9.06804 12.2389 9.52221 12.2189C9.96651 12.1979 10.321 11.8181 10.3012 11.3583C10.2903 10.9085 9.92504 10.5587 9.48074 10.5597C9.02657 10.5797 8.67113 10.9605 8.67212 11.4203ZM9.52616 15.8471C9.07199 15.8671 8.6968 15.5082 8.67607 15.0485C8.67607 14.5887 9.03052 14.2089 9.48469 14.1879C9.92899 14.1869 10.2953 14.5367 10.3052 14.9855C10.3259 15.4463 9.97046 15.8261 9.52616 15.8471ZM4.60433 11.4553C4.62408 11.915 5.00025 12.2749 5.45442 12.2539C5.89872 12.2339 6.25317 11.8531 6.23243 11.3933C6.22256 10.9435 5.85725 10.5937 5.41196 10.5947C4.95779 10.6147 4.60334 10.9955 4.60433 11.4553ZM5.45837 15.8521C5.0042 15.8731 4.62901 15.5132 4.60828 15.0535C4.60729 14.5937 4.96273 14.2129 5.4169 14.1929C5.8612 14.1919 6.2275 14.5417 6.23737 14.9915C6.2581 15.4513 5.90365 15.8321 5.45837 15.8521Z" fill="#767676"/>
                          </svg> -->
                        </div>
                  </div>
                  <div class="form-group">
                      <label for="my-input">Gender</label>
                      <select style="height: 60px; border-color: #D5D8E2;" class="form-select type" aria-label="Default select example">
                          <option value="">Select</option>
                          <option value="1">Male</option>
                          <option value="1">Female</option>
                          <option value="2">Other</option>
                        </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="my-input">Email Address*</label>
                  <input class="form-control" type="email" name="" required placeholder="Email Address">
              </div>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">Password</label>
                      <input class="form-control" type="password" name="" required placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="my-input">Re-type Password</label>
                      <input class="form-control" type="password" name="" required placeholder="Password">
                  </div>
              </div>
              <div class="tm-settings-img-upload-area">
                  <div class="tm-settings-img-space">
                      <img src="assets/images/tm-review.png" alt="" id="previewImage" srcset="">
                  </div>
                  <div class="input-group">
                      <input type="file" class="form-control" id="inputGroupFile01">
                  </div>
              </div>
              
              
              <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
          </form>
      </div>
      
    </div>
  </div>

  <!-- notification modal start -->
  <div
    class="modal fade"
    id="notificationModal"
    tabindex="-1"
    aria-labelledby="notificationModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <h1 class="modal-title fs-5" id="notificationModalLabel">
            Notifications
          </h1>
        </div>
        <div class="modal-body notify-body">
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <div class="notify-item">
            <div class="notify-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M12 8V9M12 11.5V16M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                  stroke="#1F305E"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="notify-details">
              <h6 class="notify-title">Sytem Update</h6>
              <p class="notify-data">Your System up to date</p>
            </div>
            <a href="" class="btn notify-close" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M16 16L8 8M8 16L16 8"
                  stroke="#6B7280"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- notification modal end -->

  <!-- javascript -->
  <script src="./assets/js/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/plugins.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>
  <script src="./assets/js/main.js"></script>

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