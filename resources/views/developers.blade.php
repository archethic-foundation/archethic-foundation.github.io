<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic')
@section('meta_description', 'Archethic Developer section, allows to build distributed applications.')

<!-- Ecosystem Top Section -->
@section('content')
    <section id="ecosystem-top" class="top mb-3 mb-lg-5 p-0 d-flex align-items-center position-relative"
        aria-labelledby="ecosystem-title">
        <div class="container">
            <!-- Content Section -->
            <div class="p-3 p-lg-5 text-center text-lg-start" role="region"
                aria-labelledby="ecosystem-title ecosystem-desc">
                <div class="content" data-aos="fade-up" data-aos-delay="0">
                    <!-- Title -->
                    <h1 id="ecosystem-title" class="hero4 mb-4 fw-bold text-shadow">
                             Build <u>fast</u> & <u>unstoppable</u> dApps in minutes  
                   </h1>
                   <h1 id="ecosystem-title" class="hero4 mb-4 fw-bold text-shadow">
                              and low cost. forever 
                   </h1>
                    <h1 id="ecosystem-title" class="hero3 mb-4 fw-bold text-shadow">
                        no servers, no Solidity, no limits.
                    </h1>

                    <!-- Description -->
                  
                    <p id="ecosystem-desc" class="text-lg mb-4 op-09 text-shadow">
                    Build with the language you trust — Javascript, Python, Go, C++, C#, or Rust ...
                    </p>
                </div>
            </div>
        </div>
         <!-- Scroll Arrow -->
         <a class="d-none d-xl-inline arrow-icon position-absolute w-100 text-center hero2" href="#developer-section"
            aria-label="Scroll to See Download Options">
            <i class="bi bi-arrow-down-circle-fill" aria-hidden="true"></i>
        </a>
    </section>

    <!-- Development Ecosystem -->
    <section id="developer-section" class="pt-md-5 mb-5" aria-labelledby="developer-section">
        <div class="container">
            <!-- First dApp -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 text-shadow px-3" data-aos="fade-up"
                data-aos-delay="0">
                <h2 id="services-title" class="hero3 px-3 px-md-0 fw-bold">
                    Development Ecosystem
                </h2>
                <p class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Navigate and interact seamlessly within the Archethic ecosystem
                    <br class="d-none d-md-inline"> with our suite of essential tools and services.
                </p>
            </div>

            <!-- Service wrapper -->
            <div class="row g-4 align-items-stretch">
                <!-- Archethic Swap -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region" aria-labelledby="swap-title"
                    data-aos="fade-up" data-aos-delay="50">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/swap-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="swap-title" class="text-xl card-title fw-bold">Deploy Your First dApp</h3>
                            <p class="op-08 card-text">In one click, deploy a dApp application on our Testnet Network.</p>
                        </div>
                        <a href="#" class="btn btn-secondary mt-3 align-self-start disabled" tabindex="-1" aria-disabled="true">
                            Soon ...
                            <i class="d-none bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                 <!-- Why Archethic? -->
                 <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="hot-wallet-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/wallet-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="hot-wallet-title" class="text-xl card-title fw-bold">Why Archethic?</h3>
                            <p class="op-08 card-text">Discover Benefits to launch your application on Archethic.</p>
                        </div>
                        <a href="#" class="btn btn-secondary mt-3 align-self-start disabled" tabindex="-1" aria-disabled="true">
                            Soon ...
                            <i class="d-none bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
 
                <!-- Developer Docs -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="hot-wallet-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/wallet-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="hot-wallet-title" class="text-xl card-title fw-bold">Developer Docs</h3>
                            <p class="op-08 card-text">Learn how to get started on Archetic.</p>
                        </div>
                        <a href="https://wiki.archethic.net/category/dapp-development" class="btn btn-primary mt-3 align-self-start">
                            Get it now <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
 
                <!-- SDK -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="bridge-title" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/bridge-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="bridge-title" class="text-xl card-title fw-bold">SDKs</h3>
                            <p class="op-08 card-text">Great SDK to build dApp on Archethic Blockchain.</p>
                        </div>
                        <a href="https://wiki.archethic.net/build/sdk/" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                           Go to SDK Page <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>


                <!-- Tutorials -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="bridge-title" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/bridge-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="bridge-title" class="text-xl card-title fw-bold">Tutorials</h3>
                            <p class="op-08 card-text">Step by Step Tutorials to develop dApp for different use-cases.</p>
                        </div>
                        <a href="#" class="btn btn-secondary mt-3 align-self-start disabled" tabindex="-1" aria-disabled="true">
                            Soon ...
                            <i class="d-none bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Archethic Bridge -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="bridge-title" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/bridge-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="bridge-title" class="text-xl card-title fw-bold">Developer Tools</h3>
                            <p class="op-08 card-text">A set of tools to help you to build faster.</p>
                        </div>
                        <a href="#" class="btn btn-secondary mt-3 align-self-start disabled" tabindex="-1" aria-disabled="true">
                            Soon ...
                            <i class="d-none bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>



           
               
            </div>
        </div>
    </section>

    <!-- Join our community -->
    <section id="join-community" class="pt-md-5 mb-5" aria-labelledby="join-community-title">
        <div class="container">

            <!-- Heading -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 text-shadow" data-aos="fade-up"
                data-aos-delay="0">
                <h2 id="join-community-title" class="hero3 px-3 px-md-0 fw-bold">Join Our <u>Community</u></h2>
                <p class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Join our community to stay updated, share insights, and connect
                    <br class="d-none d-md-inline"> with others shaping the future of secure&nbsp;digital&nbsp;identity.
                </p>
            </div>

            <!-- Community Cards -->
            <div class="row g-4 align-items-stretch">

                <!-- X (Twitter) -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="twitter-title" data-aos="fade-up" data-aos-delay="50">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <div class="d-flex align-items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path
                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg>
                                <h3 id="twitter-title" class="text-xl card-title fw-bold mb-0">X <span
                                        class="fw-normal fst-italic text-lg">(Twitter)</span></h3>
                            </div>
                            <p class="op-08 card-text flex-grow-1">
                                Stay informed with the latest news, updates, and live discussions about Archethic on X.
                            </p>
                        </div>
                        <a href="https://x.com/archethic" class="btn btn-primary mt-3 align-self-start" target="_blank"
                            title="Follow us on X (formerly Twitter)">
                            Follow us <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Telegram -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="telegram-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-telegram text-xxl"></i>
                                <h3 id="telegram-title" class="text-xl card-title fw-bold mb-0">Telegram</h3>
                            </div>
                            <p class="op-08 card-text flex-grow-1">
                                Join our Telegram for real-time announcements and community conversations. Be the first to
                                know!
                            </p>
                        </div>
                        <a href="https://t.me/ArchEthic_ENG" class="btn btn-primary mt-3 align-self-start" target="_blank"
                            title="Join the Archethic Telegram chat">
                            Join the chat <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Discord -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="discord-title" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-discord text-xxl"></i>
                                <h3 id="discord-title" class="text-xl card-title fw-bold mb-0">Discord</h3>
                            </div>
                            <p class="op-08 card-text flex-grow-1">
                                Dive into deeper discussions, access resources, and connect directly with the Archethic team
                                on Discord.
                            </p>
                        </div>
                        <a href="https://discord.com/invite/bZv9aHN7bd" class="btn btn-primary mt-3 align-self-start"
                            target="_blank" title="Connect with us on Discord">
                            Connect with us <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Medium -->
                <div class="col-md-6 col-lg-12" role="region" aria-labelledby="medium-title" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="card bg-1 text-light h-100 rounded-xl overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-12 col-lg-7 p-4 p-md-5 d-flex flex-column justify-content-center">
                                <div class="d-flex gap-3 align-items-center mb-3">
                                    <i class="bi bi-medium text-xxl"></i>
                                    <h3 id="medium-title" class="text-xl card-title fw-bold mb-0">Medium</h3>
                                </div>
                                <p class="op-08 card-text">Explore in-depth articles, project updates, and insights into
                                    Archethic's journey. Follow us on Medium to stay informed about our latest advancements
                                    and the vision driving our ecosystem.</p>
                                <a href="https://medium.com/archethic"
                                    class="btn btn-primary mt-3 align-self-start d-flex align-items-center justify-content-center"
                                    target="_blank" title="Read our articles on Medium">
                                    Read our articles <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="col-lg-5 mockup-img" data-aos="fade-up" data-aos-delay="300"
                                style="background-image: url('assets/img/mockups/medium-screenshot.png');"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
  
@endsection