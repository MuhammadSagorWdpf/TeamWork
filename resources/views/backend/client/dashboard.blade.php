@extends('backend.app')


@section('content')
<!-- main content start -->
<div class="main-content">
    <div class="main-content-container">
 <!-- main container header start -->
 @include('backend.admin.partials.header')
  <!-- main container header end -->
      <!-- dashboard content start -->
      <div class="section-title mt-4">Active Appointments</div>
      <div class="order-slider-wrapper mt-4 mt-md-5">
        <div class="order-slider overflow-hidden w-100">

          @foreach ($clientAppointments as $clientAppointment)
           <div class="order-card-wrapper">
            <div class="order-card py-2 px-4">
              <div class="order-card-image">
                <img
                  src="{{ asset('doctor/profile/'.$clientAppointment->psychologist->profile_image) }}"
                  alt="Half Day Trip"
                  class="order-image"
                />
              </div>
              <div class="order-details">
                <h3>{{ $clientAppointment->psychologist->first_name }}</h3>
                <p>
                  <strong>Date:</strong> {{ \Carbon\Carbon::parse($clientAppointment->date)->format('d M Y') }}
                </p>
                <p>
                  <strong>Therapy Type:</strong> {{ $clientAppointment->consultation_type }}
                </p>
                <p class="last-child">
                  <span><strong>Time:</strong>{{ $clientAppointment->slot }} </span>
                </p>
                <span class="paid status">Pending</span>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      <!-- dashboard content end -->

      
      </div>

      <!-- dashboard bottom start -->
       <div class="dashboard-bottom mt-4 mt-md-5 d-flex justify-content-between row">
        <div class="left col-8">
          <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between ">
            <div class="dashboard-title">Top Rated Doctors</div>
          </div>
          <div class="top-doctors-list mt-4">
            
            @foreach ($doctors as $doctor)
            <div class="item">
              <div class="item-left">
                <div class="number">{{ $doctor->id }}</div>
                <div class="doctor-img">
                <img src="{{asset('doctor/profile/'.$doctor->profile_image)}}" alt="">
                </div>
              </div>
              <div class="item-right">
                <div class="doctor-info">
                  <div class="doctor-title">
                    {{ $doctor->first_name }} {{ $doctor->last_name  }}
                  </div>
                  <div class="doctor-text mt-2">{{ $doctor->expertise_area }}</div>
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
            @endforeach
           {{-- <div> {{ $doctors->links() }}</div> --}}
          </div>
        </div>
        <div class="right col-4 ">
          <div class="dashboard-title">Upcoming Check Up</div>
          <div style="width: 100%;" class="mt-4 mt-md-5">
            <p id="calendar-container"></p>

          </div>
        </div>
       </div>
      <!-- dashboard bottom end -->
   
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>


<script>
    const bookedDates = @json($upcamingCheckup);

    const formattedDates = bookedDates.map(date => {
        const jsDate = new Date(date);
        jsDate.setDate(jsDate.getDate() + 1);
        const formattedDate = jsDate.toISOString().split('T')[0]; // Extracts the 'YYYY-MM-DD' part
        return formattedDate;
    });


    const calendarTitle = document.getElementById("calendar-title");
    const today = new Date();
    const formattedToday = today.toLocaleDateString('en-US', {
        weekday: 'short',
        day: 'numeric',
        month: 'short',
        year: 'numeric'
    });
    // calendarTitle.textContent = formattedToday;

    // Initialize the easepick picker
    const picker = new easepick.create({
        element: document.getElementById("calendar-container"),
        css: ["{{ asset('assets/css/plugins/easepick.css') }}"],
        inline: true, // Display the calendar inline (always visible)
        calendars: 1,
        lang: "en-US",
        zIndex: 10,
        plugins: ["LockPlugin"],
        LockPlugin: {
            //   minDate: new Date(),
            minDate: formattedToday,
            filter: function(date) {
                return formattedDates.includes(date.format("YYYY-MM-DD"));
            },
        },
        singleDate: true,
    });

    document.getElementById("calendar-container").textContent = "";

    document.getElementById("calendar-container").style.display = "block";
    document.getElementById("calendar-container").style.padding = "0";

    picker.on("select", (e) => {
        picker.clear();
    });
</script>
@endsection