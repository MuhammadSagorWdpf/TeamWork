@extends('backend.app')


@section('content')

   <!-- main content start -->
  <div class="main-content">
        <div class="main-content-container">
 <!-- main container header start -->
 <div class="main-content-header">
            <svg class="menu-icon" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            <div class="section-title header-title">Welcome Mr. John Doe 👋</div>
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
              <div style="width: 36px; height: 36px;" class="">
                <img style="width: 100%;
                height: 100%; border-radius: 50%; object-fit: cover; " src="{{ asset('assets/images/user.png') }}" alt="">
              </div>
            </div>
          </div>
          <!-- main container header end -->
          <!-- dashboard content start -->
          <div class="section-title mt-4">Active Appointments</div>
          <div class="order-slider-wrapper mt-4 mt-md-5">
            <div class="order-slider">
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                      src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                      src="{{ asset('assets/images/doctor-img.png') }}"
                  
                      src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                     src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                      src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                     src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="order-card-wrapper">
                <div class="order-card">
                  <div class="order-card-image">
                    <img
                     src="{{asset('assets/images/doctor-img.png')}}"
                      alt="Half Day Trip"
                      class="order-image"
                    />
                  </div>
                  <div class="order-details">
                    <h3>Clinical Psychologist</h3>
                    <p>
                      <strong>Date:</strong> Monday, September 30, 2024
                    </p>
                    <p>
                      <strong>Therapy Type:</strong> Face-to-Face
                    </p>
                    <p class="last-child">
                      <span><strong>Time:</strong> 7:00 AM </span
                      ><span class="status paid">Pending</span>
                    </p>
                  </div>
                </div>
              </div>
              
            </div>
          <!-- dashboard content end -->

          
          </div>

          <!-- dashboard bottom start -->
           <div class="dashboard-bottom mt-4 mt-md-5">
            <div class="left">
              <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between ">
                <div class="dashboard-title">Top Rated Doctors</div>
                <a class="more-btn" href="./doctors.html">More >></a>
              </div>
              <div class="top-doctors-list mt-4">
                <div class="item">
                  <div class="item-left">
                    <div class="number">#1</div>
                    <div class="doctor-img">
                      <img src="{{asset('assets/images/doctor-img.png')}}" alt="">
                    </div>
                  </div>
                  <div class="item-right">
                    <div class="doctor-info">
                      <div class="doctor-title">
                        Dr. Samantha Queque
                      </div>
                      <div class="doctor-text mt-2">Psychologist</div>
                    </div>
                    <div class="doctor-ratings">
                      <svg xmlns="http://www.w3.org/2000/svg" width="95" height="13" viewBox="0 0 95 13" fill="none">
                        <path d="M6.69533 0.452219L4.86449 3.81352L0.768236 4.35428C0.0336581 4.45075 -0.260734 5.27076 0.271975 5.74043L3.23552 8.35534L2.53459 12.0492C2.40842 12.7169 3.18505 13.217 3.83552 12.9048L7.5 11.1607L11.1645 12.9048C11.8149 13.2145 12.5916 12.7169 12.4654 12.0492L11.7645 8.35534L14.728 5.74043C15.2607 5.27076 14.9663 4.45075 14.2318 4.35428L10.1355 3.81352L8.30467 0.452219C7.97664 -0.146926 7.02617 -0.154542 6.69533 0.452219Z" fill="#FF5630"/>
                        <path d="M26.6953 0.452219L24.8645 3.81352L20.7682 4.35428C20.0337 4.45075 19.7393 5.27076 20.272 5.74043L23.2355 8.35534L22.5346 12.0492C22.4084 12.7169 23.1851 13.217 23.8355 12.9048L27.5 11.1607L31.1645 12.9048C31.8149 13.2145 32.5916 12.7169 32.4654 12.0492L31.7645 8.35534L34.728 5.74043C35.2607 5.27076 34.9663 4.45075 34.2318 4.35428L30.1355 3.81352L28.3047 0.452219C27.9766 -0.146926 27.0262 -0.154542 26.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M46.6953 0.452219L44.8645 3.81352L40.7682 4.35428C40.0337 4.45075 39.7393 5.27076 40.272 5.74043L43.2355 8.35534L42.5346 12.0492C42.4084 12.7169 43.1851 13.217 43.8355 12.9048L47.5 11.1607L51.1645 12.9048C51.8149 13.2145 52.5916 12.7169 52.4654 12.0492L51.7645 8.35534L54.728 5.74043C55.2607 5.27076 54.9663 4.45075 54.2318 4.35428L50.1355 3.81352L48.3047 0.452219C47.9766 -0.146926 47.0262 -0.154542 46.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M66.6953 0.452219L64.8645 3.81352L60.7682 4.35428C60.0337 4.45075 59.7393 5.27076 60.272 5.74043L63.2355 8.35534L62.5346 12.0492C62.4084 12.7169 63.1851 13.217 63.8355 12.9048L67.5 11.1607L71.1645 12.9048C71.8149 13.2145 72.5916 12.7169 72.4654 12.0492L71.7645 8.35534L74.728 5.74043C75.2607 5.27076 74.9663 4.45075 74.2318 4.35428L70.1355 3.81352L68.3047 0.452219C67.9766 -0.146926 67.0262 -0.154542 66.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M86.6953 0.452219L84.8645 3.81352L80.7682 4.35428C80.0337 4.45075 79.7393 5.27076 80.272 5.74043L83.2355 8.35534L82.5346 12.0492C82.4084 12.7169 83.1851 13.217 83.8355 12.9048L87.5 11.1607L91.1645 12.9048C91.8149 13.2145 92.5916 12.7169 92.4654 12.0492L91.7645 8.35534L94.728 5.74043C95.2607 5.27076 94.9663 4.45075 94.2318 4.35428L90.1355 3.81352L88.3047 0.452219C87.9766 -0.146926 87.0262 -0.154542 86.6953 0.452219Z" fill="#FF5630"/>
                      </svg>
                      <span>315 reviews</span>
                      <a style="color: #187586; font-size: 14px; text-decoration: underline; " href="{{ route('doctor.profile') }}">View Profile</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-left">
                    <div class="number">#2</div>
                    <div class="doctor-img">
                    <img src="{{asset('assets/images/doctor-img.png')}}" alt="">
                    </div>
                  </div>
                  <div class="item-right">
                    <div class="doctor-info">
                      <div class="doctor-title">
                        Dr. Samantha Queque
                      </div>
                      <div class="doctor-text mt-2">Psychologist</div>
                    </div>
                    <div class="doctor-ratings">
                      <svg xmlns="http://www.w3.org/2000/svg" width="95" height="13" viewBox="0 0 95 13" fill="none">
                        <path d="M6.69533 0.452219L4.86449 3.81352L0.768236 4.35428C0.0336581 4.45075 -0.260734 5.27076 0.271975 5.74043L3.23552 8.35534L2.53459 12.0492C2.40842 12.7169 3.18505 13.217 3.83552 12.9048L7.5 11.1607L11.1645 12.9048C11.8149 13.2145 12.5916 12.7169 12.4654 12.0492L11.7645 8.35534L14.728 5.74043C15.2607 5.27076 14.9663 4.45075 14.2318 4.35428L10.1355 3.81352L8.30467 0.452219C7.97664 -0.146926 7.02617 -0.154542 6.69533 0.452219Z" fill="#FF5630"/>
                        <path d="M26.6953 0.452219L24.8645 3.81352L20.7682 4.35428C20.0337 4.45075 19.7393 5.27076 20.272 5.74043L23.2355 8.35534L22.5346 12.0492C22.4084 12.7169 23.1851 13.217 23.8355 12.9048L27.5 11.1607L31.1645 12.9048C31.8149 13.2145 32.5916 12.7169 32.4654 12.0492L31.7645 8.35534L34.728 5.74043C35.2607 5.27076 34.9663 4.45075 34.2318 4.35428L30.1355 3.81352L28.3047 0.452219C27.9766 -0.146926 27.0262 -0.154542 26.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M46.6953 0.452219L44.8645 3.81352L40.7682 4.35428C40.0337 4.45075 39.7393 5.27076 40.272 5.74043L43.2355 8.35534L42.5346 12.0492C42.4084 12.7169 43.1851 13.217 43.8355 12.9048L47.5 11.1607L51.1645 12.9048C51.8149 13.2145 52.5916 12.7169 52.4654 12.0492L51.7645 8.35534L54.728 5.74043C55.2607 5.27076 54.9663 4.45075 54.2318 4.35428L50.1355 3.81352L48.3047 0.452219C47.9766 -0.146926 47.0262 -0.154542 46.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M66.6953 0.452219L64.8645 3.81352L60.7682 4.35428C60.0337 4.45075 59.7393 5.27076 60.272 5.74043L63.2355 8.35534L62.5346 12.0492C62.4084 12.7169 63.1851 13.217 63.8355 12.9048L67.5 11.1607L71.1645 12.9048C71.8149 13.2145 72.5916 12.7169 72.4654 12.0492L71.7645 8.35534L74.728 5.74043C75.2607 5.27076 74.9663 4.45075 74.2318 4.35428L70.1355 3.81352L68.3047 0.452219C67.9766 -0.146926 67.0262 -0.154542 66.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M86.6953 0.452219L84.8645 3.81352L80.7682 4.35428C80.0337 4.45075 79.7393 5.27076 80.272 5.74043L83.2355 8.35534L82.5346 12.0492C82.4084 12.7169 83.1851 13.217 83.8355 12.9048L87.5 11.1607L91.1645 12.9048C91.8149 13.2145 92.5916 12.7169 92.4654 12.0492L91.7645 8.35534L94.728 5.74043C95.2607 5.27076 94.9663 4.45075 94.2318 4.35428L90.1355 3.81352L88.3047 0.452219C87.9766 -0.146926 87.0262 -0.154542 86.6953 0.452219Z" fill="#FF5630"/>
                      </svg>
                      <span>315 reviews</span>
                      <a style="color: #187586; font-size: 14px; text-decoration: underline; " href="{{ route('doctor.profile') }}">View Profile</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-left">
                    <div class="number">#3</div>
                    <div class="doctor-img">
                    <img src="{{asset('assets/images/doctor-img.png')}}" alt="">
                    </div>
                  </div>
                  <div class="item-right">
                    <div class="doctor-info">
                      <div class="doctor-title">
                        Dr. Samantha Queque
                      </div>
                      <div class="doctor-text mt-2">Psychologist</div>
                    </div>
                    <div class="doctor-ratings">
                      <svg xmlns="http://www.w3.org/2000/svg" width="95" height="13" viewBox="0 0 95 13" fill="none">
                        <path d="M6.69533 0.452219L4.86449 3.81352L0.768236 4.35428C0.0336581 4.45075 -0.260734 5.27076 0.271975 5.74043L3.23552 8.35534L2.53459 12.0492C2.40842 12.7169 3.18505 13.217 3.83552 12.9048L7.5 11.1607L11.1645 12.9048C11.8149 13.2145 12.5916 12.7169 12.4654 12.0492L11.7645 8.35534L14.728 5.74043C15.2607 5.27076 14.9663 4.45075 14.2318 4.35428L10.1355 3.81352L8.30467 0.452219C7.97664 -0.146926 7.02617 -0.154542 6.69533 0.452219Z" fill="#FF5630"/>
                        <path d="M26.6953 0.452219L24.8645 3.81352L20.7682 4.35428C20.0337 4.45075 19.7393 5.27076 20.272 5.74043L23.2355 8.35534L22.5346 12.0492C22.4084 12.7169 23.1851 13.217 23.8355 12.9048L27.5 11.1607L31.1645 12.9048C31.8149 13.2145 32.5916 12.7169 32.4654 12.0492L31.7645 8.35534L34.728 5.74043C35.2607 5.27076 34.9663 4.45075 34.2318 4.35428L30.1355 3.81352L28.3047 0.452219C27.9766 -0.146926 27.0262 -0.154542 26.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M46.6953 0.452219L44.8645 3.81352L40.7682 4.35428C40.0337 4.45075 39.7393 5.27076 40.272 5.74043L43.2355 8.35534L42.5346 12.0492C42.4084 12.7169 43.1851 13.217 43.8355 12.9048L47.5 11.1607L51.1645 12.9048C51.8149 13.2145 52.5916 12.7169 52.4654 12.0492L51.7645 8.35534L54.728 5.74043C55.2607 5.27076 54.9663 4.45075 54.2318 4.35428L50.1355 3.81352L48.3047 0.452219C47.9766 -0.146926 47.0262 -0.154542 46.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M66.6953 0.452219L64.8645 3.81352L60.7682 4.35428C60.0337 4.45075 59.7393 5.27076 60.272 5.74043L63.2355 8.35534L62.5346 12.0492C62.4084 12.7169 63.1851 13.217 63.8355 12.9048L67.5 11.1607L71.1645 12.9048C71.8149 13.2145 72.5916 12.7169 72.4654 12.0492L71.7645 8.35534L74.728 5.74043C75.2607 5.27076 74.9663 4.45075 74.2318 4.35428L70.1355 3.81352L68.3047 0.452219C67.9766 -0.146926 67.0262 -0.154542 66.6953 0.452219Z" fill="#FF5630"/>
                        <path d="M86.6953 0.452219L84.8645 3.81352L80.7682 4.35428C80.0337 4.45075 79.7393 5.27076 80.272 5.74043L83.2355 8.35534L82.5346 12.0492C82.4084 12.7169 83.1851 13.217 83.8355 12.9048L87.5 11.1607L91.1645 12.9048C91.8149 13.2145 92.5916 12.7169 92.4654 12.0492L91.7645 8.35534L94.728 5.74043C95.2607 5.27076 94.9663 4.45075 94.2318 4.35428L90.1355 3.81352L88.3047 0.452219C87.9766 -0.146926 87.0262 -0.154542 86.6953 0.452219Z" fill="#FF5630"/>
                      </svg>
                      <span>315 reviews</span>
                      <a style="color: #187586; font-size: 14px; text-decoration: underline; " href="{{ route('doctor.profile') }}">View Profile</a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="right">
              <div class="dashboard-title">Upcoming Check Up</div>
              <div style="width: 100%;" class="mt-4 mt-md-5">
                <p id="calendar-container"></p>
              </div>
            </div>
           </div>
          <!-- dashboard bottom end -->
       
        </div>
    </div>


@endsection