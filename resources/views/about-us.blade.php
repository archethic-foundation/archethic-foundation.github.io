<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic')
@section('meta_description', 'Discover Archethic (UCO), the blockchain platform revolutionizing security and identity.')

<!-- About us Top Section -->
@section('content')
    <section id="about_us-top" class="top mb-3 mb-lg-5 p-0 d-flex align-items-center position-relative"
        aria-labelledby="about_us-title">
        <div class="container">
            <div class="p-3 p-lg-5 text-center text-lg-start" role="region" aria-labelledby="about_us-title about_us-desc">
                <div class="content" data-aos="fade-up" data-aos-delay="0">
                    <!-- Title -->
                    <h1 id="about_us-title" class="hero4 mb-4 fw-bold text-shadow">
                        About <u>us</u>
                    </h1>
                    <!-- Description -->
                    <p id="about_us-desc" class="text-lg mb-4 op-09 text-shadow">
                        Discover the vision, dedication, and innovation that drive Archethic.
                        <br class="d-none d-lg-inline">
                        With years of research, patented technology, and a team committed to redefining digital
                        security, we're building a trusted foundation for a secure, password-free future.
                    </p>
                   
                </div>
            </div>
        </div>
      
    </section>

    <!-- Vision & Mission -->
    <section id="vision-mission" class="mb-5 mt-5" aria-labelledby="vision-mission-title">
        <div class="container">
            <!-- Heading -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 pt-md-5 px-3 px-md-5 text-shadow" role="region"
                aria-labelledby="vision-mission-title vision-mission-desc" data-aos="fade-up" data-aos-delay="50">
                <h2 id="vision-mission-title" class="hero3 px-3 px-md-0 fw-bold">
                    Our <u>Vision</u> & Our&nbsp;<u>Mission</u>
                </h2>
                <p id="vision-mission-desc" class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Archethic envisions a world where digital assets and identities are secured through seamless
                    biometric authentication, eliminating the need for
                    passwords and seed phrases. Our mission is to deliver technology that empowers individuals with privacy
                    and security.
                </p>
            </div>

            <!-- Video Embed Section -->
            <div class="video-section text-center rounded-xl overflow-hidden" role="region"
                aria-labelledby="vision-video-title" data-aos="fade-up" data-aos-delay="100">
                <div class="mx-auto rounded-xl overflow-hidden" style="max-width: 1000px;">
                    <div id="vidalytics_embed_TU80FjjDiPyKeXIY" loading="lazy" aria-labelledby="vision-video-title"></div>
                </div>
                <h3 id="vision-video-title" class="visually-hidden">Watch our Vision & Mission video</h3>
            </div>
        </div>
    </section>



   

   
@endsection