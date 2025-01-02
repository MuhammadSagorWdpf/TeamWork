@extends('backend.doctor.app')
@section('content')
  <!-- sidebar end -->
  <!-- main content start -->
  <div class="main-content mx-5">
    <div class="main-content-container">
          @include('backend.doctor.partials.header')
        
          <div class="section-title my-4">
            <h2>Appointments</h2>
          </div>
          
            
              <table id="example" class="table">
                <thead>
                  <tr>
                    <th scope="col">Client Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date</th>
                    <th scope="col">Consultation Type</th>
                    <th scope="col">Time</th>
                    <th scope="col">Fees</th>
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
            
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('doctor.appointments') }}",
            columns: [
                {data: 'client.id', name: 'client.id'},
                {data: 'first_name', name: 'first_name'},
                {data: 'age', name: 'age'},
                {data: 'client.gender', name: 'client.gender'},
                {data: 'date', name: 'date'},
                {data: 'consultation_type', name: 'consultation_type'},
                {data: 'slot', name: 'slot'},
                {data: 'fees', name: 'fees'},
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

