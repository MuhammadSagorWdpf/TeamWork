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
    </div
@endsection