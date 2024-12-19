<!-- <div>
<header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                       
                       @if (Route::has('login'))
                           <nav class="-mx-3 flex flex-1 justify-end">
                               @auth
                                   <a
                                       href="{{ url('/dashboard') }}"
                                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                   >
                                       Dashboard
                                   </a>
                               @else
                                   <a
                                       href="{{ route('login') }}"
                                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                   >
                                       Log in
                                   </a>

                                   @if (Route::has('register'))
                                       <a
                                           href="{{ route('register') }}"
                                           class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                       >
                                           Register
                                       </a>
                                   @endif
                               @endauth
                           </nav>
                       @endif
                   </header>
</div> -->
@extends('forntend.layouts.app')
@section('content')


<!-- main area starts -->
<main>
      <!-- banner area starts -->
      <section class="banner-section-start">
        <div
          class="hero-content-wrapper d-flex flex-column justify-content-center align-items-center">
          <h1>Therapist Connect</h1>
          <h2>Find the Right Psychologist for You</h2>
          <p>Finding the right psychological support can feel overwhelming—many
            people don’t know where to start. It’s common to be referred to
            psychologists with long waiting lists or struggle to find someone
            who truly fits your needs Read More.</p>
          <a href="#" class="hero-banner-btn">Find a Psychologist</a>
        </div>
      </section>
      <!-- banner area ends -->

      <!-- SERVICE SECTION START -->
      <section class="service-blog-section mt-150">
        <div class="container">
          <div class="common-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Service</h4>
              <h3 class="tm-common-heading">Consulting and Therapy Services</h3>
              <p>We are passionate about providing exceptional mental health care in a compassionate and supportive environment.</p>
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
                <h2 class="therapy-section-heading">Individual Therapy</h2>
                <p>
                    Individual therapy, also known as talk therapy or psychotherapy, is a one-on-one process where individuals work with a trained mental health professional to explore their thoughts, feelings, and behaviors. This form of therapy provides a safe, confidential environment for clients to express themselves and address various personal challenges, ranging from anxiety and depression to relationship issues and life transitions.
                </p>
                <ul>
                    <li> <h3 class="therapy-section-sub-heading">The Benefits of Individual Therapy</h3></li>
                </ul>
                    <p>Personalized Attention: In individual therapy, the focus is entirely on the client. The therapist tailors the approach to meet the unique needs and goals of the individual, facilitating a deeper understanding of personal issues.</p>
                    <p>Safe Space for Self-Exploration: Clients can openly discuss their feelings, thoughts, and experiences without fear of judgment. This safe space fosters self-exploration and self-acceptance, allowing individuals to uncover and process complex emotions.</p>
            </div>
            
            </div>
            <div class="tm-col tm-col-img">
              <div class="tm-blog-img-area">
                <img src="./assets/images/blog-img.jpg" alt="" srcset="">
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
                <img src="./assets/images/rebates.jpg" alt="Rebates Image" srcset="">
              </div>
            </div>
            <div class="tm-col">
              <div class="expert-heading-para">
                <h4 class="expert-sub-heading">Rebates</h4>
                <h3 class="tm-common-heading">Claiming Medicare Rebates</h3>
                <p>
                  Medicare, Australia's publicly funded health care system, provides significant support for eligible individuals, covering a range of medical services and treatments. One of the benefits of Medicare is the ability to claim rebates for certain out-of-pocket medical expenses, allowing patients to reduce their healthcare costs. Understanding how to navigate the rebate process can empower individuals to take full advantage of their Medicare benefits.

                </p> 
              </div>
              <div class="rebates-mini-card-wrapper">
                <div class="rebates-mini-card-item">
                  <h3>Receiving Medical Services</h3>
                  <p>After receiving a medical service, your healthcare provider will usually provide you with an invoice or receipt detailing the services rendered and their costs.</p>
                </div>
                <div class="rebates-mini-card-item">
                  <h3>Submitting a Claim</h3>
                  <p>Claim Medicare rebates via Online,In-Person,By Mail</p>
                </div>
                <div class="rebates-mini-card-item">
                  <h3>Processing Times</h3>
                  <p>Claims submitted online are typically processed faster than those submitted by mail. Most online claims are processed within a few days, while mail claims may take up to several weeks.</p>
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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What Can I Expect During My First Therapy Session?
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
                    In the first session, your therapist will get to know you, discuss your goals, and develop a personalized plan to address your needs. It's a welcoming space where you can share at your own pace.
                  </div>
                </div>
              </div>
              <!-- Repeat for other accordion items -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How Long Does Each Therapy Session Last?
                    <span class="icon-plus">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                    <span class="icon-minus">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Each therapy session typically lasts between 50 to 60 minutes, providing adequate time to discuss issues and work on progress.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How Do I Know If I Need Therapy or Consulting?
                    <span class="icon-plus">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                    <span class="icon-minus">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Therapy is beneficial for addressing mental health concerns, while consulting focuses on guidance and advice in specific areas.
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Are Therapy Sessions Confidential?
                    <span class="icon-plus">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                    <span class="icon-minus">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, therapy sessions are confidential, with exceptions related to legal and safety obligations.
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    How Often Should I Attend Sessions?
                    <span class="icon-plus">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 8V16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                    <span class="icon-minus">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#0C0C0C" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                    </span>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The frequency of sessions is based on your needs and goals. Your therapist will help you decide on the best schedule.
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
       </section>
      <!-- fag section end -->

    </main>
    <!-- main area ends -->
@endsection