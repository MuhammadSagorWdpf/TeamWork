@extends('backend.doctor.app')
@section('content')
    <!-- main content start -->

    <div class="main-content">
        <div class="main-content-container">
            <!-- main container header start -->
            @include('backend.doctor.partials.header')
            <!-- main container header end -->
            <!-- dashboard content start -->
            <div class="dashboard-statistics mt-4 mt-md-5">
                <div class="item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M11.9402 2.20995L9.5302 7.81995H7.1202C6.7202 7.81995 6.3302 7.84995 5.9502 7.92995L6.9502 5.52995L6.9902 5.43995L7.0502 5.27995C7.0802 5.20995 7.1002 5.14995 7.1302 5.09995C8.2902 2.40995 9.5902 1.56995 11.9402 2.20995Z"
                                fill="#187586" />
                            <path
                                d="M18.7301 8.09002L18.7101 8.08002C18.1101 7.91002 17.5001 7.82002 16.8801 7.82002H10.6201L12.8701 2.59002L12.9001 2.52002C13.0401 2.57002 13.1901 2.64002 13.3401 2.69002L15.5501 3.62002C16.7801 4.13002 17.6401 4.66002 18.1701 5.30002C18.2601 5.42002 18.3401 5.53002 18.4201 5.66002C18.5101 5.80002 18.5801 5.94002 18.6201 6.09002C18.6601 6.18002 18.6901 6.26002 18.7101 6.35002C18.8601 6.86002 18.8701 7.44002 18.7301 8.09002Z"
                                fill="#187586" />
                            <path
                                d="M12.5195 17.66H12.7695C13.0695 17.66 13.3195 17.39 13.3195 17.06C13.3195 16.64 13.1995 16.58 12.9395 16.48L12.5195 16.33V17.66Z"
                                fill="#187586" />
                            <path
                                d="M18.2902 9.51995C17.8402 9.38995 17.3702 9.31995 16.8802 9.31995H7.12023C6.44023 9.31995 5.80023 9.44995 5.20023 9.70995C3.46023 10.4599 2.24023 12.1899 2.24023 14.1999V16.1499C2.24023 16.3899 2.26023 16.6199 2.29023 16.8599C2.51023 20.0399 4.21023 21.7399 7.39023 21.9499C7.62023 21.9799 7.85023 21.9999 8.10023 21.9999H15.9002C19.6002 21.9999 21.5502 20.2399 21.7402 16.7399C21.7502 16.5499 21.7602 16.3499 21.7602 16.1499V14.1999C21.7602 11.9899 20.2902 10.1299 18.2902 9.51995ZM13.2802 15.4999C13.7402 15.6599 14.3602 15.9999 14.3602 17.0599C14.3602 17.9699 13.6502 18.6999 12.7702 18.6999H12.5202V18.9199C12.5202 19.2099 12.2902 19.4399 12.0002 19.4399C11.7102 19.4399 11.4802 19.2099 11.4802 18.9199V18.6999H11.3902C10.4302 18.6999 9.64023 17.8899 9.64023 16.8899C9.64023 16.5999 9.87023 16.3699 10.1602 16.3699C10.4502 16.3699 10.6802 16.5999 10.6802 16.8899C10.6802 17.3099 11.0002 17.6599 11.3902 17.6599H11.4802V15.9699L10.7202 15.6999C10.2602 15.5399 9.64023 15.1999 9.64023 14.1399C9.64023 13.2299 10.3502 12.4999 11.2302 12.4999H11.4802V12.2799C11.4802 11.9899 11.7102 11.7599 12.0002 11.7599C12.2902 11.7599 12.5202 11.9899 12.5202 12.2799V12.4999H12.6102C13.5702 12.4999 14.3602 13.3099 14.3602 14.3099C14.3602 14.5999 14.1302 14.8299 13.8402 14.8299C13.5502 14.8299 13.3202 14.5999 13.3202 14.3099C13.3202 13.8899 13.0002 13.5399 12.6102 13.5399H12.5202V15.2299L13.2802 15.4999Z"
                                fill="#187586" />
                            <path
                                d="M10.6797 14.14C10.6797 14.56 10.7997 14.62 11.0597 14.72L11.4797 14.87V13.54H11.2297C10.9197 13.54 10.6797 13.81 10.6797 14.14Z"
                                fill="#187586" />
                        </svg>
                    </div>
                    <div class="title">Earnings</div>
                    <div class="count">
                        <div class="count-left">${{ $totalEarning }}</div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.3258 19.2601V23.2501H5.09183V16.8101C4.11597 15.9395 3.33728 14.8705 2.80784 13.6747C2.2784 12.4789 2.01042 11.1838 2.02183 9.87612C2.06683 3.70012 8.27883 -0.486879 14.2568 1.08112C15.3885 1.38136 16.4313 1.94938 17.2974 2.73728C18.1634 3.52517 18.8272 4.50981 19.2328 5.60812C19.3538 5.87476 19.4159 6.16433 19.4148 6.45712V8.63612C19.4148 8.63612 20.8828 11.3861 21.8878 13.6231C21.9576 13.7788 21.9873 13.9494 21.9742 14.1195C21.9611 14.2896 21.9057 14.4537 21.8129 14.5968C21.7202 14.74 21.5931 14.8577 21.4432 14.9391C21.2933 15.0206 21.1254 15.0632 20.9548 15.0631H19.4188V17.9301C19.419 18.1048 19.3847 18.2778 19.3179 18.4392C19.2511 18.6007 19.1531 18.7473 19.0296 18.8709C18.9061 18.9944 18.7594 19.0924 18.598 19.1591C18.4365 19.2259 18.2635 19.2603 18.0888 19.2601H15.3258ZM10.5215 4.09106C10.1073 4.09106 9.77148 4.42685 9.77148 4.84106C9.77148 5.15358 9.96262 5.42145 10.2344 5.53415V6.25288C9.81643 6.34336 9.42609 6.50795 9.07779 6.73219L8.56904 6.22344C8.68116 5.95172 8.62682 5.62749 8.40601 5.40668C8.11312 5.11379 7.63824 5.11379 7.34535 5.40668L6.69135 6.06068C6.39846 6.35358 6.39846 6.82845 6.69135 7.12134C6.91226 7.34225 7.2367 7.39655 7.5085 7.28421L8.01713 7.79285C7.79296 8.14104 7.62841 8.53124 7.53791 8.94904H6.81908C6.7064 8.67725 6.43851 8.48608 6.12598 8.48608C5.71176 8.48608 5.37598 8.82187 5.37598 9.23608V9.69904V10.1621C5.37598 10.5763 5.71176 10.9121 6.12598 10.9121C6.43855 10.9121 6.70646 10.7209 6.81912 10.449H7.53791C7.62841 10.8668 7.79297 11.257 8.01714 11.6052L7.50846 12.1139C7.23667 12.0016 6.91225 12.0559 6.69135 12.2768C6.39846 12.5697 6.39846 13.0446 6.69135 13.3375L7.34535 13.9915C7.63824 14.2844 8.11312 14.2844 8.40601 13.9915C8.62683 13.7706 8.68117 13.4464 8.56903 13.1747L9.0778 12.6659C9.4261 12.8901 9.81644 13.0547 10.2344 13.1452V13.864C9.96262 13.9767 9.77148 14.2446 9.77148 14.5571C9.77148 14.9713 10.1073 15.3071 10.5215 15.3071H11.4465C11.8607 15.3071 12.1965 14.9713 12.1965 14.5571C12.1965 14.2449 12.0057 13.9773 11.7344 13.8644V13.145C12.1521 13.0545 12.5422 12.8899 12.8903 12.6658L13.3988 13.1743C13.2864 13.4461 13.3407 13.7705 13.5617 13.9914C13.8545 14.2843 14.3294 14.2843 14.6223 13.9914L14.9361 13.6776L14.9496 13.6644L14.9628 13.6509L15.2763 13.3374C15.5692 13.0445 15.5692 12.5696 15.2763 12.2767C15.0555 12.0559 14.7313 12.0016 14.4595 12.1137L13.9509 11.6051C14.175 11.2569 14.3396 10.8668 14.43 10.449H15.1488C15.2615 10.7209 15.5294 10.9121 15.842 10.9121C16.2562 10.9121 16.592 10.5763 16.592 10.1621L16.592 9.69904L16.592 9.23608C16.592 8.82187 16.2562 8.48608 15.842 8.48608C15.5294 8.48608 15.2616 8.67725 15.1489 8.94904H14.43C14.3396 8.53131 14.175 8.14117 13.9509 7.79303L14.4595 7.28443C14.7313 7.39656 15.0555 7.34222 15.2763 7.1214C15.5692 6.82851 15.5692 6.35364 15.2763 6.06074L14.9626 5.74705L14.9496 5.73371L14.9363 5.72069L14.6223 5.40674C14.3294 5.11385 13.8545 5.11385 13.5617 5.40674C13.3407 5.62765 13.2864 5.95208 13.3988 6.22387L12.8903 6.73231C12.5422 6.50815 12.1521 6.34359 11.7344 6.25305V5.53382C12.0057 5.42093 12.1965 5.15328 12.1965 4.84106C12.1965 4.42685 11.8607 4.09106 11.4465 4.09106H10.9844H10.5215ZM8.95798 9.69904C8.95798 8.58193 9.8621 7.67599 10.9785 7.67304L10.9844 7.67306L10.99 7.67304C12.1062 7.6763 13.01 8.58212 13.01 9.69904C13.01 10.818 12.1029 11.725 10.984 11.725C9.86505 11.725 8.95798 10.818 8.95798 9.69904Z"
                                fill="#187586" />
                        </svg>
                    </div>
                    <div class="title">Total clients</div>
                    <div class="count">
                        <div class="count-left">{{ $totalClient }}</div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M21.091 6.97953C20.241 6.03953 18.821 5.56953 16.761 5.56953H16.521V5.52953C16.521 3.84953 16.521 1.76953 12.761 1.76953H11.241C7.48101 1.76953 7.48101 3.85953 7.48101 5.52953V5.57953H7.24101C5.17101 5.57953 3.76101 6.04953 2.91101 6.98953C1.92101 8.08953 1.95101 9.56953 2.05101 10.5795L2.06101 10.6495L2.13847 11.4628C2.15273 11.6126 2.2334 11.7479 2.35929 11.8303C2.59909 11.9872 3.00044 12.2459 3.24101 12.3795C3.38101 12.4695 3.53101 12.5495 3.68101 12.6295C5.39101 13.5695 7.27101 14.1995 9.18101 14.5095C9.27101 15.4495 9.68101 16.5495 11.871 16.5495C14.061 16.5495 14.491 15.4595 14.561 14.4895C16.601 14.1595 18.571 13.4495 20.351 12.4095C20.411 12.3795 20.451 12.3495 20.501 12.3195C20.8977 12.0953 21.3093 11.819 21.6845 11.5484C21.7975 11.4668 21.8698 11.3408 21.8852 11.2023L21.901 11.0595L21.951 10.5895C21.961 10.5295 21.961 10.4795 21.971 10.4095C22.051 9.39953 22.031 8.01953 21.091 6.97953ZM13.091 13.8295C13.091 14.8895 13.091 15.0495 11.861 15.0495C10.631 15.0495 10.631 14.8595 10.631 13.8395V12.5795H13.091V13.8295ZM8.91101 5.56953V5.52953C8.91101 3.82953 8.91101 3.19953 11.241 3.19953H12.761C15.091 3.19953 15.091 3.83953 15.091 5.52953V5.57953H8.91101V5.56953Z"
                                fill="#187586" />
                            <path
                                d="M20.8733 13.7349C21.2269 13.5666 21.6342 13.8469 21.5988 14.2369L21.2398 18.1907C21.0298 20.1907 20.2098 22.2307 15.8098 22.2307H8.18984C3.78984 22.2307 2.96984 20.1907 2.75984 18.2007L2.41913 14.4529C2.38409 14.0674 2.78205 13.7874 3.13468 13.947C4.2741 14.4625 6.37724 15.3771 7.67641 15.7174C7.84072 15.7604 7.97361 15.878 8.04556 16.0319C8.65253 17.33 9.96896 18.0207 11.8698 18.0207C13.752 18.0207 15.085 17.3034 15.694 16.0021C15.766 15.8481 15.8991 15.7305 16.0635 15.6873C17.443 15.3243 19.6816 14.3019 20.8733 13.7349Z"
                                fill="#187586" />
                        </svg>
                    </div>
                    <div class="title">Total Appointments</div>
                    <div class="count">
                        <div class="count-left">{{ $totalAppoinments }}</div>
                    </div>
                </div>
            </div>
            <!-- dashboard content end -->

            <!-- clients visit stats chart start -->
          <div class="clients-visit-stats-chart mt-4 mt-md-5">
            <div
              class="clients-visit-stats-chart-header d-flex align-items-center justify-content-between"
            >
              <div class="dashboard-title">Client Visits</div>
              <div>
                <select class="form-select" aria-label="Default select example">
                  <option selected>This Year</option>
                  <option value="1">2023</option>
                  <option value="2">2022</option>
                  <option value="3">2021</option>
                </select>
              </div>
            </div>
          </div>
          <div id="chart"></div>
          <!-- clients visit stats container end -->
        </div>
        <!-- profile container start -->
        <div class="profile-container">
            <div class="profile-top">
                <div class="img">
                    <img src="{{ asset('doctor/profile/'.$doctor->profile_image) }}" alt="" />
                </div>
                <div class="profile-title mt-4">{{ $doctor->first_name }} {{ $doctor->last_name }}</div>
                <div class="text mt-2">{{ $doctor->expertise_area }}</div>
                <div class="profile-statistics">
                    <div class="item">
                        <div class="item-title text-center">Appointments</div>
                        <div class="item-text">{{ $totalAppoinments }}</div>
                    </div>
                    <div class="border-line"></div>
                    <div class="item">
                        <div class="item-title">Total Clients</div>
                        <div class="item-text">{{ $totalClient }}</div>
                    </div>
                    <div class="border-line"></div>
                    <div class="item">
                        <div class="item-title">Rating</div>
                        <div class="item-text">4.8</div>
                    </div>
                </div>
            </div>
            <div class="profile-appointments mt-4 mt-md-5">
                <div class="profile-title">Upcoming Appointments</div>
                <div class="profile-appointments-items mt-4">
                 
                  @foreach ($upcomingAppoinments as $upcomingAppoinment)
                    <div class="item">
                      <div class="date">
                          <div class="date-text">{{ \Carbon\Carbon::parse($upcomingAppoinment->date)->format('M d y') }}</div>
                          <div class="date-line"></div>
                      </div>
                      <div class="time">
                          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12"
                              fill="none">
                              <circle cx="5.5" cy="6" r="5.5" fill="#9C9EA1" />
                          </svg>
                          <span>{{ $upcomingAppoinment->slot }}</span>
                      </div>
                      <div class="client pb-2">{{ $upcomingAppoinment->first_name }} {{ $upcomingAppoinment->last_name }}</div>
                  </div>
          
                </div>
                  @endforeach
                  
            </div>
        </div>

        <!-- profile container end -->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin-assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('admin-assets/js/main.js') }}"></script>

    <script>
        var options = {
            series: [45, 35, 20], // Values for Excellent, Good, and Poor
            chart: {
                type: "donut",
            },
            labels: ["Excellent", "Good", "Poor"], // Labels for each segment
            colors: ["#187586", "#36B37E", "#FFAB00"],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200,
                    },
                    legend: {
                        position: "bottom",
                    },
                },
            }, ],
        };

        var chart = new ApexCharts(
            document.querySelector("#donut-chart"),
            options
        );
        chart.render();
    </script>

    <script>
        // Sample data for Visitors per Month
        var visitorData = {
            months: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            visitors: [120, 210, 180, 300, 250, 320, 400, 380, 450, 430, 500, 520],
        };

        var options = {
            series: [{
                name: "Visitors",
                data: visitorData.visitors,
            }, ],
            chart: {
                type: "area",
                height: "320px",
                zoom: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
                colors: ["rgb(24, 117, 134)"],
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "vertical",
                    shadeIntensity: 0.5,
                    gradientToColors: ["#187586"],
                    opacityFrom: 0.8,
                    opacityTo: 0.2,
                    stops: [0, 100],
                },
            },
            xaxis: {
                categories: visitorData.months, // Set the x-axis categories to month abbreviations
            },
            yaxis: {
                opposite: false, // Set to false to move Y-axis to the left side
                title: {
                    text: "",
                },
            },
            legend: {
                horizontalAlign: "left",
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush
