@extends('forntend.layouts.app')
@section('content')
    <div>
        <main>
            <!-- page title start -->
            <section class="page-top-title">
                <div class="container">
                    <div class="page-content-wrapper">
                        <h1 class="page-title">About Us</h1>
                    </div>
                </div>
            </section>
            <!-- page title end -->

            <!-- about us first section start -->
            <section class="our-mission-section mt-150 mb-150">
                <div class="container">
                    <div class="tm-about-us-row">
                        <div class="tm-col">
                            <div class="tm-about-col-text-area">
                                <h2 class="tm-common-heading">{{ $abouts->title }}</h2>
                                <div class="tm-about-col-text-area-main">
                                    <h3>{{ $abouts->sub_title }}</h3>
                                    <p>{{ $abouts->short_description }}</p>
                                    <h4>{{ $abouts->sub_title_2 }}
                                    </h4>
                                    <p>{{ $abouts->description }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="tm-col">
                            <div class="tm-about-us-image-area">
                                <img src="{{ asset('about/'.$abouts->images) }}" alt srcset>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about us first section end -->

            <!-- EXPERT PSYCHOLOGISSTS SECTION START -->
            <section class="expert-section mt-150 about-expert-section ptb-80">
                <div class="container">
                    <div class="common-heading-para-link-wrapper">
                        <div class="expert-heading-para">
                            <h4 class="expert-sub-heading">Our
                                Psychologist</h4>
                            <h3 class="tm-common-heading">Trusted,
                                Licensed, and
                                Expert
                                Psychologists</h3>
                            <p>At Psychinsights, our licensed and vetted
                                psychologists provide
                                compassionate, expert care tailored to
                                your
                                unique mental health
                                needs, ensuring you feel supported every
                                step of
                                the way.</p>

                        </div>
                        <a class="tm-common-link" href="{{ url('psychologist') }}">Meet With
                            Doctor
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path
                                        d="M24.0001 8H25.0001V7H24.0001V8ZM23.293 7.29289L7.29297 23.2931L8.70718 24.7072L24.7071 8.70711L23.293 7.29289ZM14.6667 9H24.0001V7H14.6667V9ZM23.0001 8V17.3333H25.0001V8H23.0001Z" />
                                </svg>
                            </span></a>
                    </div>

                    <div class="expert-card-wrapper">
                        @foreach ($psychologists as $psychologist)
                         <div class="expert-card-item">
                          <div class="expert-card-img-area">
                            <img src="{{ asset('doctor/profile/'.$psychologist->profile_image) }}" alt srcset>
                          </div>
                          <div class="expert-card-content-area">
                            <h5>{{ $psychologist->first_name }} {{ $psychologist->last_name }}</h5>
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

            <!-- fag section start -->
            <section class="faq-section mt-150 mb-150 about-faq-section">
                <div class="container">
                    <div class="tm-accordion-content-wrapper">
                        <h2 class="faq-title">Frequently Asked
                            Questions?</h2>
                            <div class="accordion tm-accordion" id="faqAccordion">
                                @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      {{ $faq->question }}
                                      <!-- Custom SVG icons for plus and minus -->
                                      <span class="icon-plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                          <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </span>
                                      <span class="icon-minus">
                                        <!-- SVG code for minus icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                          <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                      </span>
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                      {{ $faq->answer }}
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                                
                                
                              </div>
                    </div>
                </div>
            </section>
            <!-- fag section end -->

        </main>
    </div>
@endsection
