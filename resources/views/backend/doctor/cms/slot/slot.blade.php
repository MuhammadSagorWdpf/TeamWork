@extends('backend.doctor.app')
@section('content')
  <!-- sidebar end -->
  <!-- main content start -->
  <div class="main-content mx-5">
    <div class="main-content-container">
          @include('backend.doctor.partials.header')
        
          <div class="section-title my-4">
            <h2>Slots</h2>
            <a href="{{ route('slots.create') }}" class="btn1">Create</a>
          </div>
          
            
              <table id="example" class="table">
                <thead>
                  <tr>
                    <th scope="col">Psychologist Id</th>
                    <th scope="col">Day Name</th>
                    <th scope="col">Slot</th>
                    <th scope="col">Date</th>
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
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
  $(function () {
        
    var table = $('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('slots') }}",
        columns: [
            {data: 'psychologist_id', name: 'psychologist_id'},
            {data: 'day', name: 'day'},
            {data: 'slot', name: 'slot'},
            {data: 'slot_date', name: 'slot_date'},
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

