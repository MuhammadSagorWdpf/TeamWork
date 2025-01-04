@extends('forntend.layouts.app')
@section('content')
<div>
<!-- main area starts -->
<main>
      <!-- page title start -->
      <section class="page-top-title">
        <div class="container">
          <div class="page-content-wrapper">
            <h1 class="page-title">Service</h1>
          </div>
        </div>
      </section>
      <!-- page title end -->

      <!-- blog details section start -->
      <section class="service-section mt-150">
       <div class="container">
        <div class="service-content-wrapper">
          <div class="blog-details-img-area">
             <img src="{{ asset('home_service/'.$services->images)}}" alt="blog post feature img">
          </div>
          <div class="service-main-content-wrapper">
            <div class="services-content-header">
              <h2 class="tm-common-heading">{{ $services->title }}</h2>
              <p>{{ $services->short_description }}</p>
            </div>
            <div class="service-content-lower">
              <h2 class="tm-common-heading">{{ $services->sub_title }}</h2>
              <div class="services-content-lower-wrapper">
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_1 }}</h3>
                  <p>{{ $services->card_desc_1 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_2 }}</h3>
                  <p>{{ $services->card_desc_2 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_3 }}</h3>
                  <p>{{ $services->card_desc_3 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_4 }}</h3>
                  <p>{{ $services->card_desc_4 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_5 }}</h3>
                  <p>{{ $services->card_desc_5 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_6 }}</h3>
                  <p>{{ $services->card_desc_6 }}</p>
                </div>
              </div>
            </div>
            <div class="service-content-lower">
              <h2 class="tm-common-heading">{{ $services->sub_title_2 }}</h2>
              <div class="services-content-lower-wrapper">
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_7 }}</h3>
                  <p>{{ $services->card_desc_7 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_8 }}</h3>
                  <p>{{ $services->card_desc_8 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_9 }}</h3>
                  <p>{{ $services->card_desc_9 }}</p>
                </div>
                <div class="service-lower-item">
                  <h3>{{ $services->card_title_10 }}</h3>
                  <p>{{ $services->card_desc_10 }}</p>
                </div>

              </div>
            </div>
          </div>
     </div>
       </div>
      </section>
      <!-- blog details section end -->
      <!-- blog section start -->
      <section class="blog-section mt-150 mb-150">
        <div class="container">
          <div class="common-heading-para-link-wrapper psychologist-heading-para-link-wrapper">
            <div class="expert-heading-para">
              <h4 class="expert-sub-heading">Article</h4>
              <h3 class="tm-common-heading">Explore Our Blog Insights on Mental Wellness</h3>
            </div>
          </div>
          <div class="blog-collections-cards">
            @foreach ($articles as $article)
             <div class="blog-item">
              <div class="blog-img-area">
                <img src="{{ asset('article/'.$article->images)}}" alt="blog-img-1" srcset="">
              </div>
              <div class="blog-content-area">
                <div class="blog-date-heading-wrapper">
                  <p>{{ $article->date }}</p>
                  <h3>{{ $article->sub_title }}</h3>
                </div>
                <p class="blog-para">
                  {{ $article->description }}
                </p>
                <a class="blog-read-more" href="./blog.html">Read More <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M12 4.5H12.5V4H12V4.5ZM11.6465 4.14645L3.64648 12.1465L4.35359 12.8536L12.3536 4.85355L11.6465 4.14645ZM7.33337 5H12V4H7.33337V5ZM11.5 4.5V9.16667H12.5V4.5H11.5Z" fill="#187586"/>
                </svg></span></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
       </section>
      <!-- blog section end -->

    </main>
    <!-- main area ends -->
</div>
@endsection