@extends('backend.app')

@section('content')
  <!-- sidebar end -->
  <!-- main content start -->
  <div class="main-content mx-5">
    <div class="main-content-container">
          @include('backend.partials.header')
        
          <div class="section-title my-4">
            <h2>Appointments</h2>
          </div>
          
            
              <table id="client" class="table">
                <thead>
                  <tr>
                    <th scope="col">Doctor Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Slot</th>
                    <th scope="col">Consultation Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Session Length</th>
                    <th scope="col">Session Fees</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
          
          
          <!-- client data table end -->
        </div>
        
      </div>
   
 
<!-- DataTables JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript">
      $(function () {
            
        var table = $('#client').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('client.appoinment') }}",
            columns: [
                {data: 'profile_image', name: 'profile_image'},
                {data: 'psychologist.first_name', name: 'psychologist.first_name'},
                {data: 'psychologist.phone_number', name: 'psychologist.phone_number'},
                {data: 'psychologist.email', name: 'psychologist.email'},
                {data: 'slot', name: 'slot'},
                {data: 'consultation_type', name: 'consultation_type'},
                {data: 'date', name: 'date'},
                {data: 'psychologist.session_length', name: 'psychologist.session_length'},
                {data: 'psychologist.medicare_amount', name: 'psychologist.medicare_amount'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
            
      });
    </script>
    <script>
      function deleteData(e){
        e.preventDefault();
        var url = e.currentTarget.getAttribute('href');
        
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willCancel) => {
          if (willCancel) {
            window.location.href = url;
          } else {
            swal("Your imaginary file is safe!");
          }
        });
      }
    </script>
@endsection

