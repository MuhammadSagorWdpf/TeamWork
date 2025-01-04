@extends('backend.app')
@section('content')
<div class="layout-container">
    <!-- main content start -->
    <div class="main-content">
      <div class="main-content-container">
        @include('backend.partials.header')
        <div class="section-title mt-4">Doctors List</div>
        
        <!-- client data table start -->
        <div class="data-table-container mt-4">
          <div class="data-table table-responsive mt-4 mx-5">
            <table class="table" id="psychologist">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Experience</th>
                  <th scope="col">Fee</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                           
              </tbody>
            </table>
          </div>
        </div>
        <!-- client data table end -->
      </div>
      
    </div>
  </div>

<!-- appointment form modal start -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Make An Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="tm-form" action="{{ route('apointment.store') }}" method="post" id="msform" enctype="multipart/form-data">
            @csrf
            <h3 id="psycho_id"></h3>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">First Name</label>
                      <input class="form-control" type="text" id="first_name" name="first_name" required placeholder="First Name">
                      @error('first_name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="my-input">Last Name</label>
                      <input class="form-control" type="text" name="last_name" required placeholder="Last Name">
                      @error('last_name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
              </div>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">Phone</label>
                      <input class="form-control" type="tel" name="phone" required placeholder="+23122123">
                      @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="my-input">Email Address*</label>
                      <input class="form-control" type="email" name="email" required placeholder="Email Address">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  
              </div>
              <div class="form-field-wrapper">
                  <div class="form-group">
                      <label for="my-input">Appointment Date</label>
                      <div class="date-picker-container">
                          <input onchange="selectDateModal()" class="form-control" type="date" id="select-date" name="date" value="{{ date('Y-m-d') }}">
                          @error('date')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                       </div>
                  </div>
                  <div class="form-group">
                    <label for="consultant-type">Consultant Types</label>
                    <select id="consultant-type" name="consultation_type" class="py-3">
                        @foreach ($therapyTypes as $therapyType)
                        <option value="{{ $therapyType }}">{{ $therapyType }}</option>
                        @endforeach
                    </select>
                    @error('consultation_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              </div>

              <div class="form-field-wrapper">
                <div class="form-group">
                    <label>Available Slot</label>
                    <div class="time-slots" id="slots">
                        @if (date('Y-m-d'))
                            @if (!empty($avableSlots) && count($avableSlots) > 0)
                                @foreach ($avableSlots as $item)
                                    <input type="checkbox" id="slot_{{ $item }}" name="slot" value="{{ $item }}">
                                    <label for="slot_{{ $item }}">{{ $item }}</label>
                                @endforeach
                            @else
                                <p class="text-danger">Slot not available select another date</p>
                            @endif
                        @endif
                    </div>
                    @error('slot')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Age</label>
                    <div class="date-picker-container">
                        <input placeholder="enter your age" type="number" name="age" id="age" class="form-control">
                        @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>
            </div>

              

              <div class="form-field-wrapper">
                <div class="form-group">
                    <label for="my-input">Message</label>
                    <div class="date-picker-container">
                        <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
              
            <div class="form-group">
                <input type="hidden" id="fees" name="fees" placeholder="Fees">
                <input type="hidden" id="client_id" name="client_id" placeholder="client id">
                <input type="hidden" id="psychologist_id" name="psychologist_id" placeholder="psychologist_id">
            </div>
            
                             
              <button style="background-color: #187586; width: 30%;" class="btn text-light py-2 float-right" type="submit">Make Appointment</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
<!-- appointment form modal end -->

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
  <script src="./assets/js/main.js"></script>

  <!-- DataTables JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript">
      $(function () {
            
        var table = $('#psychologist').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('client.doctor') }}",
            columns: [
                {data: 'profile_image', name: 'profile_image'},
                {data: 'first_name', name: 'first_name'},
                {data: 'phone_number', name: 'phone_number'},
                {data: 'email', name: 'email'},
                {data: 'experience', name: 'experience'},
                {data: 'session_fee', name: 'session_fee'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
            
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

<script>
    $(document).ready(function() 
    {
        $(document).on('click', '.editBtn', function()
        {
            var id = $(this).data('id');
            // alert(id);
            
            $('#appointmentModal').modal('show');
            
            $.ajax({
                type: "GET",
                url: "/single_doctor/"+id,
                success: function(response)
                {
                    $('#fees').val(response.data.session_fee);
                    $('#psychologist_id').val(response.data.id);
                    $('#client_id').val(response.client); 
                }
        })
      })
    })
    </script>

<script>
    function selectDateModal() {
     let date = document.getElementById('select-date').value; // Get selected date
     let psychologist = document.getElementById('psychologist_id').value; // Get psychologist_id
 
     $(document).ready(function() {
         $.ajax({
             url: '/select-date',
             type: 'get',
             data: {
                 date: date,
                 psychologist_id: psychologist // Pass psychologist_id
             },
             success: function(response) {
                 $('#slots').html(''); // Clear previous slots
                 
                 if (response && response.length > 0) {
                     response.forEach(element => {
                        console.log(element);
                        
                         // Append available slots
                         $('#slots').append(
                             `<div>
                                 <input type="checkbox" id="slot_${element}" name="slot" value="${element}">
                                 <label for="slot_${element}">${element}</label>
                             </div>`
                         );
                     });
                 } else {
                     // append slot not available message
                     $('#slots').html('<p class="text-danger">Slot not available select another date</p>');
                 }
             },
             // Error handling
             error: function() {
                 $('#slots').html('<p class="text-danger">Error fetching slots. Please try again later.</p>');
             }
         });
     });
 }
 </script>
@endsection