
@extends('forntend.layouts.app')
@section('content')


<!-- main area starts -->
<main>
      <!-- banner area starts -->
      <section class="banner-section-start">
        <div
          class="hero-content-wrapper d-flex flex-column justify-content-center align-items-center">
          <h4>{{$banner->title}}</h4>
          <h2>{{$banner->sub_title}}</h2>
          <p>{{ $banner->description }}</p>
          <a href="#" class="hero-banner-btn">{{ $banner->btn_text }}</a>
        </div>
      </section>
      <!-- banner area ends -->

      <!-- SERVICE SECTION START -->
      <section class="service-blog-section mt-150">
        <div class="container">
          <div class="common-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Service</h4>
              <h3 class="tm-common-heading">{{ $services->title }}</h3>
              <p>{{ $services->short_description }}</p>
            </div>
            <a class="tm-common-link" href="services.html">Read More <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                  viewBox="0 0 32 32" fill="none">
                  <path
                    d="M24.0001 8H25.0001V7H24.0001V8ZM23.293 7.29289L7.29297 23.2931L8.70718 24.7072L24.7071 8.70711L23.293 7.29289ZM14.6667 9H24.0001V7H14.6667V9ZM23.0001 8V17.3333H25.0001V8H23.0001Z" />
                </svg>
              </span></a>
          </div>
          <div class="tm-row w-100">
            <div class="tm-col tm-col-therapy">
              <div class="therapy-section">
                <h2 class="therapy-section-heading">{{ $services->card_title_1 }}</h2>
                <p>
                    {{ $services->card_desc_1 }}
                </p>
                <ul>
                    <li> <h3 class="therapy-section-sub-heading">{{ $services->card_title_2 }}</h3></li>
                </ul>
                    <p>{{ $services->card_desc_2 }}</p>
                    {{-- <p>Safe Space for Self-Exploration: Clients can openly discuss their feelings, thoughts, and experiences without fear of judgment. This safe space fosters self-exploration and self-acceptance, allowing individuals to uncover and process complex emotions.</p> --}}
            </div>
            
            </div>
            <div class="tm-col tm-col-img">
              <div class="tm-blog-img-area">
                <img src="{{ asset('service/'.$services->images)}}" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICE SECTION END -->

      <!-- contacxt section start -->
       <section class="join-our-section mt-150">
        <div class="container">
          <div class="tm-row-2">
            <div class="tm-col">
              <div class="common-heading-para-link-wrapper-2">
                <div class="expert-heading-para">
                  <h3 class="tm-common-heading">Join Our Network of Psychologists</h3>
                  <p>Join our community of dedicated psychologists and connect with clients who need your expertise. Therapist Connect provides a streamlined platform to help you expand your practice and reach more people seeking mental health support.</p>
                </div>
                <a class="tm-common-link tm-common-link-2" href="services.html">Sign Up as a Therapist</a>
              </div>
            </div>
            <div class="tm-col">
              <div class="tm-join-instruction-wrapper">
                <div class="tm-join-instruction-item">
                  <h4>Create Your Profile</h4>
                  <p>Start by creating a professional profile that highlights your expertise, experience, and qualifications. A well-crafted profile helps clients understand your background and feel confident in choosing you for their mental health needs</p>
                  <span class="serial-number">
                    1
                  </span>
                </div>
                <div class="tm-join-instruction-item">
                  <h4>Verify Your License</h4>
                  <p>To maintain a trusted platform, we require all psychologists to verify their licenses. This process helps ensure that clients can connect with certified professionals. Simply upload your license details, and we’ll handle the verification swiftly.</p>
                  <span class="serial-number">
                    2
                  </span>
                </div>
                <div class="tm-join-instruction-item">
                  <h4>Connect with Clients</h4>
                  <p>Reach out to clients actively searching for mental health support. Our platform connects you with individuals who are looking for your expertise, helping you grow your practice and make a positive impact on their lives.</p>
                  <span class="serial-number">
                    3
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
      <!-- contacxt section End -->

      <!-- EXPERT PSYCHOLOGISSTS SECTION START -->
      <section class="expert-section mt-150">
        <div class="container">
          <div class="common-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Our Psychologist</h4>
              <h3 class="tm-common-heading">Trusted, Licensed, and Expert
                Psychologists</h3>
              <p>At Psychinsights, our licensed and vetted psychologists provide
                compassionate, expert care tailored to your unique mental health
                needs, ensuring you feel supported every step of the way.</p>

            </div>
            <a class="tm-common-link" href="#">Meet With Doctor <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                  viewBox="0 0 32 32" fill="none">
                  <path
                    d="M24.0001 8H25.0001V7H24.0001V8ZM23.293 7.29289L7.29297 23.2931L8.70718 24.7072L24.7071 8.70711L23.293 7.29289ZM14.6667 9H24.0001V7H14.6667V9ZM23.0001 8V17.3333H25.0001V8H23.0001Z" />
                </svg>
              </span></a>
          </div>

          <div class="expert-card-wrapper">
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-1.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-2.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-3.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-4.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-1.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-2.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-3.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
            <div class="expert-card-item">
              <div class="expert-card-img-area">
                <img src="./assets/images/expert-4.png" alt srcset>
              </div>
              <div class="expert-card-content-area">
                <h5>Dr. Emily Parker Woner</h5>
                <p>Specialty - <span>Clinical Psychologist</span></p>
                <p>Primary Care - <span>20 Years of Experience</span></p>
                <a class="expert-card-item-link" href="#">View Doctor Profile
                </a>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- EXPERT PSYCHOLOGISSTS SECTION END -->

      <!-- rebates section start -->
       <section class="reabtes-section mt-150 ptb-80">
        <div class="container">
          <div class="tm-row-3">
            <div class="tm-col">
              <div class="tm-rebates-image-area">
                <img src="{{ asset('rebate/'.$rebates->images)}}" alt="Rebates Image" srcset="">
              </div>
            </div>
            <div class="tm-col">
              <div class="expert-heading-para">
                <h4 class="expert-sub-heading">Rebates</h4>
                <h3 class="tm-common-heading">{{ $rebates->title }}</h3>
                <p>
                  {{ $rebates->short_description }}
                </p> 
              </div>
              <div class="rebates-mini-card-wrapper">
                <div class="rebates-mini-card-item">
                  <h3>{{ $rebates->card_title_1 }}</h3>
                  <p>{{ $rebates->card_desc_1 }}</p>
                </div>
                <div class="rebates-mini-card-item">
                  <h3>{{ $rebates->card_title_2 }}</h3>
                  <p>{{ $rebates->card_desc_2 }}</p>
                </div>
                <div class="rebates-mini-card-item">
                  <h3>{{ $rebates->card_title_3 }}</h3>
                  <p>{{ $rebates->card_desc_3 }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
      <!-- rebates section end -->

      <!-- blog section start -->
       <section class="blog-section mt-150">
        <div class="container">
          <div class="common-heading-para-link-wrapper psychologist-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Article</h4>
              <h3 class="tm-common-heading">Explore Our Blog Insights on Mental Wellness</h3>
            </div>
          </div>
          <div class="blog-collections-cards">
            <!-- blog item-1 -->
            <div class="blog-item">
              <div class="blog-img-area">
                <img src="./assets/images/blog-1.jpg" alt="blog-img-1" srcset="">
              </div>
              <div class="blog-content-area">
                <div class="blog-date-heading-wrapper">
                  <p>September 3, 2024</p>
                  <h3>Understanding and Managing Panic Attacks</h3>
                </div>
                <p class="blog-para">
                  We offer specialized support for individuals with neurodiversity, providing tailored care to help them thrive and reach  of the
                </p>
                <a class="blog-read-more" href="./blog.html">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M12 4.5H12.5V4H12V4.5ZM11.6465 4.14645L3.64648 12.1465L4.35359 12.8536L12.3536 4.85355L11.6465 4.14645ZM7.33337 5H12V4H7.33337V5ZM11.5 4.5V9.16667H12.5V4.5H11.5Z" fill="#187586"/>
                </svg></span></a>
              </div>
            </div>
            <!-- blog-item-2 -->
            <div class="blog-item">
              <div class="blog-img-area">
                <img src="./assets/images/blog-2.jpg" alt="blog-img-1" srcset="">
              </div>
              <div class="blog-content-area">
                <div class="blog-date-heading-wrapper">
                  <p>September 3, 2024</p>
                  <h3>The Importance of Sleep for Mental Health</h3>
                </div>
                <p class="blog-para">
                  We offer specialized support for individuals with neurodiversity, providing tailored care to help them thrive and reach  of the
                </p>
                <a class="blog-read-more" href="./blog.html">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M12 4.5H12.5V4H12V4.5ZM11.6465 4.14645L3.64648 12.1465L4.35359 12.8536L12.3536 4.85355L11.6465 4.14645ZM7.33337 5H12V4H7.33337V5ZM11.5 4.5V9.16667H12.5V4.5H11.5Z" fill="#187586"/>
                </svg></span></a>
              </div>
            </div>
            <!-- blog-item-3 -->
            <div class="blog-item">
              <div class="blog-img-area">
                <img src="./assets/images/blog-3.jpg" alt="blog-img-1" srcset="">
              </div>
              <div class="blog-content-area">
                <div class="blog-date-heading-wrapper">
                  <p>September 3, 2024</p>
                  <h3>How to Manage Stress in a Busy World</h3>
                </div>
                <p class="blog-para">
                  We offer specialized support for individuals with neurodiversity, providing tailored care to help them thrive and reach  of the
                </p>
                <a class="blog-read-more" href="./blog.html">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M12 4.5H12.5V4H12V4.5ZM11.6465 4.14645L3.64648 12.1465L4.35359 12.8536L12.3536 4.85355L11.6465 4.14645ZM7.33337 5H12V4H7.33337V5ZM11.5 4.5V9.16667H12.5V4.5H11.5Z" fill="#187586"/>
                </svg></span></a>
              </div>
            </div>
          </div>
        </div>
       </section>
      <!-- blog section end -->

      <!-- fag section start -->
       <section class="faq-section mt-150 ptb-80">
        <div class="container">
          <div class="tm-accordion-content-wrapper">
            <h2 class="faq-title tm-common-heading">Frequently Asked Questions?</h2>
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
    <!-- main area ends -->
@endsection