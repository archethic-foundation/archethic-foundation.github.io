<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Download Archethic Wallet - iOS, Android, Browser extension')
@section('meta_description', 'Download and install Archethic Hot Wallet: Secure, decentralized token storage on the Archethic Blockchain. No signup needed. Protect with PIN, Password, YubiKey, and Biometrics. Available on all major platforms.')


<!-- Hot Wallet top -->
@section('content')
    <section id="hot-wallet" class="top mb-3 mb-lg-5 p-0 d-flex align-items-center position-relative"
        aria-labelledby="hot-wallet-title">
        <div class="container" data-aos="fade-up" data-aos-delay="0">
            <div class="row">
                <!-- Content Section -->
                <div class="col p-3 p-lg-5 text-center text-lg-start" role="region"
                    aria-labelledby="hot-wallet-title hot-wallet-desc">
                    <div class="content">
                        <!-- Title -->
                        <h1 id="hot-wallet-title" class="hero4 mb-4 fw-bold text-shadow">
                            Archethic <u>Hot&nbsp;Wallet</u>
                        </h1>

                        <p id="hot-wallet-desc" class="text-lg mb-4 fw-bold text-shadow">
                            Securely store, transfer and swap cryptocurrencies.
                        </p>

                        <p class="text-lg mb-4 op-09 text-shadow">
                            The first FULLY decentralized non-custodial hot wallet based on the Layer 1 Archethic
                            Blockchain.
                        </p>
                        <p class="text-lg mb-4 op-09 text-shadow">
                            No signup or KYC needed, users just control their services and access keychain, protected by
                            different secure access methods like PIN Code, Password, YubiKey-like devices, and Biometrics.
                        </p>

                        <!-- Button -->
                        <a href="#modules-dl" class="btn btn-primary mx-auto mx-lg-0" title="See Download Options">
                            See Download Options <i class="bi bi-arrow-down ms-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-lg-5 align-items-center text-center mt-lg-0 mt-5" role="region"
                    aria-labelledby="hot-wallet-image-title">
                    <img src="/assets/img/mockups/hot-wallet-mockup.png"
                        alt="Hot Wallet by Archethic - a secure decentralized solution" class="img-fluid" width="400px"
                        title="Hot Wallet by Archethic">
                </div>
            </div>
        </div>
        <!-- Scroll Arrow -->
        <a class="d-none d-xl-inline arrow-icon position-absolute w-100 text-center hero2" href="#modules-dl"
            aria-label="Scroll to See Download Options">
            <i class="bi bi-arrow-down-circle-fill" aria-hidden="true"></i>
        </a>
    </section>

    <section id="modules-dl" class="mb-5" aria-labelledby="modules-dl-title">
        <div class="container">
            <h2 id="modules-dl-title" class="visually-hidden text-center hero3 fw-bold mb-4">
                Download Archethic Wallet Options
            </h2>

            <div class="row g-4 align-items-stretch mt-0 mt-sm-3">
                <!-- Chrome Extension -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100 position-relative">
                        <span class="badge bg-4 border-0 position-absolute top-0 end-0 m-3 px-2 py-2 text-xs">
                            Most Popular
                        </span>

                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xl card-title fw-bold">Chrome Extension</h3>
                            <p class="op-08 card-text">Available on Chrome Web Store</p>
                        </div>
                        <a href="https://chromewebstore.google.com/detail/archethic-wallet/cbhmkogeimolnnnlflcpaapkmhmcoimh"
                            target="_blank" class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- iOS -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
                    <div
                        class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100 position-relative">
                        <span class="badge bg-4 border-0 position-absolute top-0 end-0 m-3 px-2 py-2 text-xs">
                            Most Popular
                        </span>

                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xl card-title fw-bold">iOS</h3>
                            <p class="op-08 card-text">Available on Apple Store</p>
                        </div>
                        <a href="https://apps.apple.com/app/apple-store/id6443334906" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Android -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="cards-box bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100 position-relative">
                        <span class="badge bg-4 border-0 position-absolute top-0 end-0 m-3 px-2 py-2 text-xs">
                            Most Popular
                        </span>

                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xl card-title fw-bold">Android</h3>
                            <p class="op-08 card-text">Available on Google Play</p>
                        </div>
                        <a href="https://play.google.com/store/apps/details?id=net.archethic.archethic_wallet"
                            target="_blank" class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            

                <!-- MacOS -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
                    <div class="cards-box bg-3 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xlcard-title fw-bold">MacOS</h3>
                            <p class="op-08 card-text">Available on Mac Apple Store</p>
                        </div>
                        <a href="https://apps.apple.com/app/archethic-wallet/id6443334906" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Windows -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="cards-box bg-3 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xlcard-title fw-bold">Windows</h3>
                            <p class="op-08 card-text">Available on Microsoft Store</p>
                        </div>
                        <a href="https://apps.microsoft.com/store/detail/archethic-wallet/9N33TTVRJZXF" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Linux -->
                <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="250">
                    <div class="cards-box bg-3 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-3 w-100">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 class="text-xlcard-title fw-bold">Linux</h3>
                            <p class="op-08 card-text">Available on GitHub</p>
                        </div>
                        <a href="https://github.com/archethic-foundation/archethic-wallet/releases/" target="_blank"
                            class="btn btn-primary mt-3 align-self-start">
                            Download <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection