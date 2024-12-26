@extends('backend.admin.app')
@section('content')
  <!-- sidebar end -->
  <!-- main content start -->
  <div class="main-content">
    <div class="main-content-container">
          @include('backend.admin.partials.header')

          <div class="section-title mt-4 d-flex justify-content-between">
            <h2>Service</h2>
            <a href="{{ route('home.services.create') }}" class="btn btn-sm btn-primary">Create</a>
          </div>
          
          <div class=" appointments-action-container mt-4 mt-md-5 ">
              <div class="search-bar">
                <input placeholder="Search type of keywords" type="text" />
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
              <div  class="d-flex">
                  <div id="date-container" class="date-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8 2V5" stroke="#252C32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 2V5" stroke="#252C32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.5 9.08997H20.5" stroke="#252C32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6937 13.7H15.7027" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6937 16.7H15.7027" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9945 13.7H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9945 16.7H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.29529 13.7H8.30427" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.29529 16.7H8.30427" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span id="date-text" class="date-text">Filter by Date</span>
                  </div>
              </div>
               
          </div>
          <!-- client data table start -->
          <div class="data-table-container mt-4">
            <div class="data-table table-responsive mt-4">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Page</th>
                    <th scope="col">Section</th>
                    <th scope="col">Title</th>
                    <th scope="col">Short Description</th>
                    <th scope="col">Card Title</th>
                    <th scope="col">Card Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        {{ $services->page }}
                    </td>
                    <td>
                      {{ $services->section }}
                    </td>
                    <td>{{ Str::limit($services->title, 20) }}</td>
                    <td>{{ Str::limit($services->short_description, 20) }}</td>
                    <td>{{ Str::limit($services->card_title_1, 20) }}</td>
                    <td>{{ Str::limit($services->card_desc_1, 20) }}</td>
                    <td>
                      <img src="{{ asset('home_service/'.$services->images)}}" alt="" width="50" height="50">
                    </td>
                    <td class="d-flex justify-center gap-3">
                        <a href="{{ route('home.service.edit', $services->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                  </tr>                       
                              
                </tbody>
              </table>
            </div>
          </div>
          <!-- client data table end -->
        </div>
        
      </div>
    </div>
@endsection

<script>
 
</script>