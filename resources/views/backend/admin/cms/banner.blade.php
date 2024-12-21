@extends('backend.admin.app')
@section('content')
   <!-- sidebar end -->
      <!-- main content start -->
      <div class="main-content">
        <div class="main-content-container">
           <!-- main container header start -->
          <div class="main-content-header">
            <svg class="menu-icon" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            <div class="section-title">Welcome Dr. Emily 👋</div>
            <div class="header-actions">
              <div class="search-bar">
                <input placeholder="Search Here..." type="text" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="19"
                  viewBox="0 0 18 19"
                  fill="none"
                >
                  <path
                    d="M8.625 16.8125C4.3875 16.8125 0.9375 13.3625 0.9375 9.125C0.9375 4.8875 4.3875 1.4375 8.625 1.4375C12.8625 1.4375 16.3125 4.8875 16.3125 9.125C16.3125 13.3625 12.8625 16.8125 8.625 16.8125ZM8.625 2.5625C5.0025 2.5625 2.0625 5.51 2.0625 9.125C2.0625 12.74 5.0025 15.6875 8.625 15.6875C12.2475 15.6875 15.1875 12.74 15.1875 9.125C15.1875 5.51 12.2475 2.5625 8.625 2.5625Z"
                    fill="#A9A9A9"
                  />
                  <path
                    d="M16.4981 17.5626C16.3556 17.5626 16.2131 17.5101 16.1006 17.3976L14.6006 15.8976C14.3831 15.6801 14.3831 15.3201 14.6006 15.1026C14.8181 14.8851 15.1781 14.8851 15.3956 15.1026L16.8956 16.6026C17.1131 16.8201 17.1131 17.1801 16.8956 17.3976C16.7831 17.5101 16.6406 17.5626 16.4981 17.5626Z"
                    fill="#A9A9A9"
                  />
                </svg>
              </div>
              <div data-bs-toggle="modal"
              data-bs-target="#notificationModal" class="notification-btn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="41"
                  viewBox="0 0 40 41"
                  fill="none"
                >
                  <rect
                    x="0.5"
                    y="1"
                    width="39"
                    height="39"
                    rx="7.5"
                    fill="white"
                    stroke="#E8E8E8"
                  />
                  <path
                    d="M20.0199 29.03C17.6899 29.03 15.3599 28.66 13.1499 27.92C12.3099 27.63 11.6699 27.04 11.3899 26.27C11.0999 25.5 11.1999 24.65 11.6599 23.89L12.8099 21.98C13.0499 21.58 13.2699 20.78 13.2699 20.31V17.42C13.2699 13.7 16.2999 10.67 20.0199 10.67C23.7399 10.67 26.7699 13.7 26.7699 17.42V20.31C26.7699 20.77 26.9899 21.58 27.2299 21.99L28.3699 23.89C28.7999 24.61 28.8799 25.48 28.5899 26.27C28.2999 27.06 27.6699 27.66 26.8799 27.92C24.6799 28.66 22.3499 29.03 20.0199 29.03ZM20.0199 12.17C17.1299 12.17 14.7699 14.52 14.7699 17.42V20.31C14.7699 21.04 14.4699 22.12 14.0999 22.75L12.9499 24.66C12.7299 25.03 12.6699 25.42 12.7999 25.75C12.9199 26.09 13.2199 26.35 13.6299 26.49C17.8099 27.89 22.2399 27.89 26.4199 26.49C26.7799 26.37 27.0599 26.1 27.1899 25.74C27.3199 25.38 27.2899 24.99 27.0899 24.66L25.9399 22.75C25.5599 22.1 25.2699 21.03 25.2699 20.3V17.42C25.2699 14.52 22.9199 12.17 20.0199 12.17Z"
                    fill="#A9A9A9"
                  />
                  <path
                    d="M21.8796 12.4401C21.8096 12.4401 21.7396 12.4301 21.6696 12.4101C21.3796 12.3301 21.0996 12.2701 20.8296 12.2301C19.9796 12.1201 19.1596 12.1801 18.3896 12.4101C18.1096 12.5001 17.8096 12.4101 17.6196 12.2001C17.4296 11.9901 17.3696 11.6901 17.4796 11.4201C17.8896 10.3701 18.8896 9.68005 20.0296 9.68005C21.1696 9.68005 22.1696 10.3601 22.5796 11.4201C22.6796 11.6901 22.6296 11.9901 22.4396 12.2001C22.2896 12.3601 22.0796 12.4401 21.8796 12.4401Z"
                    fill="#A9A9A9"
                  />
                  <path
                    d="M20.0195 31.3101C19.0295 31.3101 18.0695 30.9101 17.3695 30.2101C16.6695 29.5101 16.2695 28.5501 16.2695 27.5601H17.7695C17.7695 28.1501 18.0095 28.7301 18.4295 29.1501C18.8495 29.5701 19.4295 29.8101 20.0195 29.8101C21.2595 29.8101 22.2695 28.8001 22.2695 27.5601H23.7695C23.7695 29.6301 22.0895 31.3101 20.0195 31.3101Z"
                    fill="#A9A9A9"
                  />
                </svg>
              </div>
            </div>
          </div>
          <!-- main container header end -->  
          <div class="section-title mt-4">Setting</div>
          
            <form class="tm-form">
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input class="form-control" type="text" name="" required placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Sub Title</label>
                        <input class="form-control" type="text" name="" required placeholder="Enter your sub title">
                    </div>
                </div>
                <div class="form-field-wrapper">
                    <div class="form-group">
                        <label for="my-input">Description</label>
                        <textarea name="description" id="" class="tm-text-area" placeholder="Enter your description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Image</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
                
                
                <button style="background-color: #187586;" class="tm-dashboard-btn" type="submit">Update</button>
            </form>
        </div>
        
      </div>
    </div
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

@push('script')

 @endpush
