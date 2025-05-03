<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic')
@section('meta_description', 'Discover Archethic (UCO), the blockchain platform revolutionizing security and identity.')

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
                        Archethic <u>Ecosystem</u>
                    </h1>
                    <!-- Description -->
                    <p id="ecosystem-desc" class="text-lg mb-4 op-09 text-shadow">
                        Explore a seamlessly integrated ecosystem designed to make asset management,
                        secure transactions, and growth opportunities accessible—all
                        powered by Archethic's advanced blockchain technology.
                    </p>
                   
                </div>
            </div>
        </div>
       
    </section>

    <!-- Our services -->
    <section id="services" class="pt-md-5 mb-5" aria-labelledby="services-title">
        <div class="container">
            <!-- Heading -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 text-shadow px-3" data-aos="fade-up"
                data-aos-delay="0">
                <h2 id="services-title" class="hero3 px-3 px-md-0 fw-bold">
                    Our <u>Services</u>
                </h2>
                <p class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Navigate and interact seamlessly within the Archethic ecosystem
                    <br class="d-none d-md-inline"> with our suite of essential tools and services.
                </p>
            </div>

            <!-- Service wrapper -->
            <div class="row g-4 align-items-stretch">
                <!-- Archethic Swap -->
                <div class="d-none col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region" aria-labelledby="swap-title"
                    data-aos="fade-up" data-aos-delay="50">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/swap-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="swap-title" class="text-xl card-title fw-bold">Archethic Swap</h3>
                            <p class="op-08 card-text">Swap, Add liquidity and Earn UCO tokens directly from aeSwap.</p>
                        </div>
                        <a href="https://swap.archethic.net/" target="_blank" class="btn btn-primary mt-3 align-self-start">
                            Access aeSwap <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Archethic Hot Wallet -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="hot-wallet-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/wallet-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="hot-wallet-title" class="text-xl card-title fw-bold">Archethic Hot Wallet</h3>
                            <p class="op-08 card-text">It is the key to access Archethic Blockchain ecosystem.</p>
                        </div>
                        <a href="/hot-wallet" class="btn btn-primary mt-3 align-self-start">
                            Get it now <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Archethic Bridge -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="bridge-title" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/bridge-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="bridge-title" class="text-xl card-title fw-bold">Archethic Bridge</h3>
                            <p class="op-08 card-text">Bridge your UCO and other liquidity in and out of the Archethic
                                Blockchain.</p>
                        </div>
                        <a href="https://bridge.archethic.net/bridge" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Open the bridge <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Archethic Explorer -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" role="region"
                    aria-labelledby="explorer-title" data-aos="fade-up" data-aos-delay="200">
                    <div class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100"
                        style="background-image: url('assets/img/bg/explorer-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="explorer-title" class="text-xl card-title fw-bold">Archethic Explorer</h3>
                            <p class="op-08 card-text">Visualize all transactions happening on the Archethic blockchain in
                                real-time.</p>
                        </div>
                        <a href="https://explorer.archethic.net/" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Open explorer <i class="bi bi-arrow-right ms-2"></i>
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