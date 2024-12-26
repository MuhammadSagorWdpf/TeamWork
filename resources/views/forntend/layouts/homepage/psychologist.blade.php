@extends('forntend.layouts.app')
@section('content')
<div>
   <!-- main area starts -->
   <main>
      <!-- page title start -->
      <section class="page-top-title">
        <div class="container">
          <div class="page-content-wrapper">
            <h1 class="page-title">Our Psychologist</h1>
          </div>
        </div>
      </section>
      <!-- page title end -->

      <!-- EXPERT PSYCHOLOGISSTS SECTION START -->
      <section class="expert-section mt-150 mb-150">
        <div class="container">
          <div
            class="common-heading-para-link-wrapper psychologist-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Meet With Our Team</h4>
              <h3 class="tm-common-heading">Trusted, Licensed, and Expert
                Psychologists</h3>
              <p class="mx-auto">At Psychinsights, our licensed and vetted
                psychologists provide compassionate, expert care tailored to
                your unique mental health needs, ensuring you feel supported
                every step of the way.</p>
            </div>
          </div>

          <div class="expert-card-wrapper">
            @foreach ($psychologistData as $psychologist)
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="{{ asset('doctor/profile/'.$psychologist->profile_image) }}" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>{{ $psychologist->first_name }}</h5>
                <p>Specialty - <span>{{ $psychologist->expertise_area }}</span></p>
                <p>Primary Care - <span>{{ $psychologist->experience }}</span></p>
                <a class="expert-card-item-link" href="{{ route('doctor.detail', $psychologist->id) }}">View Doctor Profile
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </section>
      <!-- EXPERT PSYCHOLOGISSTS SECTION END -->

    </main>
    <!-- main area ends -->
</div>
@endsection