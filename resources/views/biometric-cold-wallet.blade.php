<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic')
@section('meta_description', 'Discover Archethic (UCO), the blockchain platform revolutionizing security and identity.')

<!-- Bio Metric Top-->
@section('content')
    <section id="cold-wallet-top" class="top bg-6 p-md-5 mb-5 d-flex align-items-center"
        aria-labelledby="cold-wallet-title">
        <div class="container d-flex align-items-center flex-column flex-lg-row">
            <div class="row p-3 p-md-0 pt-5 w-100 text-center text-lg-start" data-aos="zoom-in">

                <!-- Biometric Wallet -->
                <div class="col-lg-6 col-xl-6 d-flex align-items-center justify-content-center order-1" role="region"
                    aria-labelledby="cold-wallet-video-title">
                    <figure class="w-100">
                        <video id="background-video" autoplay loop muted class="cold-wallet-video img-fluid"
                            aria-label="3D animation showcasing Archethic Cold Wallet"
                            poster="/assets/img/biometric-wallet.png">
                            <source src="/assets/video/wallet_3d.webm" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <figcaption id="cold-wallet-video-title" class="visually-hidden">
                            3D animation showcasing Archethic Biometric Cold Wallet
                        </figcaption>
                    </figure>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6 col-xl-6 order-2 d-flex flex-column align-items-center align-items-lg-start"
                    role="region" aria-labelledby="cold-wallet-title cold-wallet-desc">
                    <!-- Price for Mobile -->
                    <div class="d-block d-lg-none text-center mb-3">
                        <u class="fw-black text-xxl">$200</u>
                    </div>

                    <!-- Title -->
                    <div class="mb-4">
                        <h1 id="cold-wallet-title" class="hero3 fw-bold fw-light text-shadow text-center text-lg-start">
                            Biometric <u>Cold&nbsp;Wallet</u>
                            <span class="text-nowrap">by Archethic</span>
                        </h1>
                    </div>

                    <!-- Price / Waitlist Persons (Desktop) -->
                    <div
                        class="d-flex d-none d-lg-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-start mb-3 gap-3">
                        <u class="fw-black text-xxl me-md-3 mb-2 mb-md-0">$200</u>
                        <p class="op-08 persons-waitlist m-0" id="cold-wallet-waitlist">
                            <span class="blinking-circle me-2 mb-1"></span>
                            <span class="fw-bold">1000+ Users</span>
                            <span class="d-block d-md-inline">have already joined the cold wallet waitlist</span>
                        </p>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <p id="cold-wallet-desc" class="text-lg op-09 text-center text-lg-start">
                            Say goodbye to seed phrases and the risk of losing funds. Archethic's biometric cold wallet
                            secures your crypto with cutting-edge technology, ensuring privacy and effortless access.
                        </p>
                    </div>

                    <!-- Waitlist Description -->
                    <div class="mb-4">
                        <p id="cold-wallet-desc" class="text-lg text-center text-lg-start bg-light rounded-3 p-3">
                            <span class="fw-bold">Join the waitlist directly via your Archethic wallet.</span>
                            <br class="d-none d-xl-block">Haven't installed it&nbsp;yet?
                        </p>
                    </div>

                    <!-- Persons Waitlist (Mobile) -->
                    <div class="d-block d-lg-none text-center mb-3">
                        <p class="op-08 persons-waitlist m-0 text-nowrap">
                            <span class="blinking-circle me-2 mb-1"></span>
                            <span class="fw-bold">1000+ Users</span>
                            <br class="d-md-none d-sm-inline">have already joined the cold wallet waitlist
                        </p>
                    </div>

                    <!-- Download Button -->
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/hot-wallet" class="btn btn-primary">Download Archethic Wallet</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- How Solves -->
    <section id="how-solves" class="mb-5 pt-md-5 px-3" aria-labelledby="how-solves-title">
        <div class="container">
            <!-- Heading -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 text-shadow" data-aos="fade-up"
                data-aos-delay="0">
                <h2 id="how-solves-title" class="hero3 px-3 px-md-0 fw-bold">
                    How Archethic's Wallet <u><br class="d-none d-lg-inline">Solves</u> Cold Wallet Challenges
                </h2>
                <p id="how-solves-desc" class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    A comparative overview of Traditional Cold Wallets and Archethic Wallet.
                </p>
            </div>

            <!-- Row for cards -->
            <div class="row g-4 align-items-stretch">
                <!-- Traditional Cold Wallets -->
                <div class="col-12 col-lg-6 d-flex align-items-stretch" role="region"
                    aria-labelledby="traditional-wallet-title" data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="card-traditional bg-1 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-4 w-100 h-100">
                        <!-- Title -->
                        <div class="heading-wrapper d-flex flex-column gap-2">
                            <div class="d-inline-flex align-items-center">
                                <h3 id="traditional-wallet-title"
                                    class="text-lg bg-danger py-2 px-2 px-md-3 rounded-3 mb-4">
                                    Traditional Cold Wallets
                                </h3>
                            </div>
                        </div>
                        <!-- Arguments -->
                        <div class="arguments-wrapper d-flex flex-column flex-grow-1 gap-3">
                            <!-- Complexity -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-x bg-light text-md align-self-start text-lg p-1" aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Complexity & Risk of Seed Phrases</h4>
                                    <p class="op-08 text-md">Managing seed phrases is complex and risky. A lost or stolen
                                        phrase can mean irreversible loss of funds.</p>
                                </div>
                            </div>
                            <!-- Device Dependency -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-x bg-light text-md align-self-start text-lg p-1" aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Device Dependency & Access Issues</h4>
                                    <p class="op-08 text-md">Wallets reliant on a single device are vulnerable. Loss or
                                        damage can make recovery difficult or even impossible.</p>
                                </div>
                            </div>
                            <!-- Inheritance -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-x bg-light text-md align-self-start text-lg p-1" aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Inheritance Challenges</h4>
                                    <p class="op-08 text-md">Traditional cold wallets lack solutions for inheritance, often
                                        leaving assets inaccessible without seed phrases.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archethic Cold Wallet -->
                <div class="col-12 col-lg-6 d-flex align-items-stretch" role="region"
                    aria-labelledby="archethic-wallet-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-archethic bg-7 text-light rounded-xl p-4 p-md-5 d-flex flex-column gap-4 w-100 h-100">
                        <!-- Title -->
                        <div class="heading-wrapper d-flex flex-column gap-2">
                            <div class="d-inline-flex align-items-center">
                                <div class="box-modal bg-success py-2 px-2 px-md-3 rounded-3 mb-4">
                                    <h3 id="archethic-wallet-title" class="text-lg m-0">Archethic Cold Wallet</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Arguments -->
                        <div class="arguments-wrapper d-flex flex-column flex-grow-1 gap-4">
                            <!-- Simplified Access -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-check-all bg-light text-md align-self-start text-lg p-1"
                                    aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Simplified Access Without Seed Phrases</h4>
                                    <p class="text-md op-08">Biometric authentication removes the complexity of seed
                                        phrases, reducing risks of loss or theft while improving user experience.</p>
                                </div>
                            </div>
                            <!-- Universal Access -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-check-all bg-light text-md align-self-start text-lg p-1"
                                    aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Universal Device Access & GDPR Compliance</h4>
                                    <p class="text-md op-08">GDPR-compliant, universal device access ensures funds are
                                        recoverable, even if the wallet is lost.</p>
                                </div>
                            </div>
                            <!-- Inheritance Solution -->
                            <div class="argument d-flex gap-3 align-items-start">
                                <i class="bi bi-check-all bg-light text-md align-self-start text-lg p-1"
                                    aria-hidden="true"></i>
                                <div>
                                    <h4 class="text-lg">Built-in Inheritance Solution</h4>
                                    <p class="text-md op-08">Smart contracts enable seamless inheritance, guaranteeing asset
                                        transfers to beneficiaries without reliance on third parties or seed phrases.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- How Does It Work? -->
    <section id="how-work" class="mt-5 mb-5 p-md-5" aria-labelledby="how-work-title">
        <div class="container px-4">
            <div class="row align-items-center g-4 bg-1 p-4 rounded-xl" data-aos="fade-up" data-aos-delay="0">
                <!-- Text Column -->
                <div class="col-12 col-lg-7 px-4 px-md-5" role="region" aria-labelledby="how-work-title how-work-desc">
                    <div class="content d-flex flex-column">
                        <!-- Title -->
                        <h2 id="how-work-title" class="hero3 fw-bold">
                            <span>How </span>Does <u style="filter:none;">It&nbsp;Work?</u>
                        </h2>
                        <!-- Description -->
                        <p id="how-work-desc" class="op-08 text-lg">
                            Activate your Archethic device by entering a PIN and placing your finger on the built-in
                            fingerprint reader. This generates a unique private key, providing secure access to your
                            keychain on the Archethic blockchain and enabling seamless management of your crypto funds.
                        </p>
                    </div>
                    <!-- Steps -->
                    <div class="steps d-flex flex-column">
                        <ul class="step text-lg gap-2 d-flex flex-column list-unstyled"
                            aria-label="Steps to use Archethic device">
                            <li>
                                <i class="bi bi-1-circle-fill me-2 text-primary" aria-hidden="true"></i>
                                <span class="op-08">Enter your </span><span class="fw-bold op-10">security PIN</span>
                            </li>
                            <li>
                                <i class="bi bi-2-circle-fill me-2 text-primary" aria-hidden="true"></i>
                                <span class="op-08">Scan your</span>
                                <span class="fw-bold op-10"> fingerprint</span>
                            </li>
                            <li>
                                <i class="bi bi-3-circle-fill me-2 text-primary" aria-hidden="true"></i>
                                <span class="op-08">Access your crypto</span>
                                <span class="fw-bold op-10">anytime, anywhere</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Scan Column -->
                <div class="col-12 col-lg-5 text-center px-3 px-md-5" role="region" aria-labelledby="scan-animation">
                    <div id="scan-animation" class="scan d-flex justify-content-center">
                        <div class="fingerprint" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Buy-and-Burn -->
    <section id="buy-and-burn" class="mt-5 mb-5" aria-labelledby="buy-and-burn-title">
        <div class="container text-center px-4">

            <!-- Heading -->
            <div class="heading-title col-12 text-center mb-5 mb-md-5 px-3 text-shadow" data-aos="fade-up"
                data-aos-delay="0">
                <h2 id="buy-and-burn-title" class="hero3 fw-bold">
                    Unique <u class="text-nowrap">Buy-and-Burn</u> Mechanism
                </h2>
                <p class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Every cold wallet sold strengthens UCO's token value. 15% of the $200 price ($30) is used to buy UCO
                    tokens from the market and burn them, reducing supply and driving demand as wallet adoption increases.
                </p>
            </div>

            <!-- Steps Wrapper -->
            <div class="bg-1 p-4 rounded-xl row g-4 align-items-stretch justify-content-between steps-wrapper"
                data-aos="fade-up" data-aos-delay="0">

                <!-- Step 1 -->
                <div class="col-12 col-md-3 d-flex flex-column align-items-center bg-4 p-4 rounded-xl m-0" role="region"
                    aria-labelledby="step-1-title step-1-desc" data-aos="fade-up" data-aos-delay="0">
                    <div id="step-1-title"
                        class="buy-burn-step rounded-circle bg-1 text-xxl d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-wallet2"></i>
                    </div>
                    <p id="step-1-desc" class="text-md mb-0">
                        <span class="fw-bold">Each cold</span> wallet <br class="d-none d-md-none d-lg-inline">is purchased
                        <br>for <span class="fw-bold">$200</span>.
                    </p>
                </div>

                <!-- Arrow 1 -->
                <div class="col-12 col-md-1 mb-3 mb-md-0 mt-lg-0 mt-4 d-flex justify-content-center align-items-center"
                    aria-hidden="true" data-aos="fade-up" data-aos-delay="50">
                    <i class="bi bi-arrow-right fs-2 text-light d-none d-md-block"></i>
                    <i class="bi bi-arrow-down fs-2 text-light d-md-none"></i>
                </div>

                <!-- Step 2 -->
                <div class="col-12 col-md-3 d-flex flex-column align-items-center bg-4 p-4 rounded-xl m-0" role="region"
                    aria-labelledby="step-2-title step-2-desc" data-aos="fade-up" data-aos-delay="100">
                    <div id="step-2-title"
                        class="buy-burn-step rounded-circle bg-1 text-xxl d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>
                    <p id="step-2-desc" class="text-md mb-0">
                        <span class="fw-bold">$30</span> of Token is purchased <br class="d-none d-md-none d-lg-inline">from
                        the market at the <br class="d-none d-md-none d-lg-inline">current value.
                    </p>
                </div>

                <!-- Arrow 2 -->
                <div class="col-12 col-md-1 mb-3 mb-md-0 mt-lg-0 mt-4 d-flex justify-content-center align-items-center"
                    aria-hidden="true" data-aos="fade-up" data-aos-delay="150">
                    <i class="bi bi-arrow-right fs-2 text-light d-none d-md-block"></i>
                    <i class="bi bi-arrow-down fs-2 text-light d-md-none"></i>
                </div>

                <!-- Step 3 -->
                <div class="col-12 col-md-3 d-flex flex-column align-items-center bg-4 p-4 rounded-xl m-0" role="region"
                    aria-labelledby="step-3-title step-3-desc" data-aos="fade-up" data-aos-delay="200">
                    <div id="step-3-title"
                        class="buy-burn-step rounded-circle bg-1 text-xxl d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-fire"></i>
                    </div>
                    <p id="step-3-desc" class="text-md mb-0">
                        <span class="fw-bold">Each UCO</span> bought <br class="d-none d-md-none d-lg-inline">is <span
                            class="fw-bold">permanently <br class="d-none d-md-none d-lg-inline">burned</span></span>.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Smart Contract Section -->
    <section id="smart-contract" class="mb-5 mt-5 pt-5" aria-labelledby="smart-contract-title">
        <div class="container px-4">

            <!-- Heading -->
            <div class="heading-title col-12 text-center mb-5 px-3 text-shadow" data-aos="fade-up" data-aos-delay="0">
                <h2 id="smart-contract-title" class="hero3 fw-bold">
                    <u>Smart Contracts:</u> <br class="d-none d-lg-inline">Unlock Advanced Wallet Features
                </h2>
            </div>

            <!-- Content Wrapper -->
            <div class="row justify-content-between align-items-center bg-1 rounded-xl p-3 p-md-5 gap-4" role="region"
                aria-labelledby="smart-contract-title smart-contract-desc" data-aos="fade-up" data-aos-delay="50">

                <!-- Content Section -->
                <div class="col-12 col-lg-6 d-flex flex-column text-center text-lg-start">
                    <div class="content">
                        <ul class="list-unstyled d-flex flex-column gap-4" aria-label="Smart Contract Features">
                            <!-- Item 1 -->
                            <li class="bg-4 rounded-xl p-4 d-flex flex-column flex-lg-row align-items-center shadow-sm">
                                <i class="bi bi-shield-lock text-highlight-primary fs-3 mb-3 mb-lg-0 me-md-4"
                                    aria-hidden="true"></i>
                                <div class="text-center text-lg-start">
                                    <span class="fw-bold">Customizable security actions</span>
                                    using specific fingerprints for multisignature approvals, wallet freezing, or triggering
                                    alerts.
                                </div>
                            </li>

                            <!-- Item 2 -->
                            <li class="bg-4 rounded-xl p-4 d-flex flex-column flex-lg-row align-items-center shadow-sm">
                                <i class="bi bi-file-earmark-arrow-up text-highlight-primary fs-3 mb-3 mb-lg-0 me-md-4"
                                    aria-hidden="true"></i>
                                <div class="text-center text-lg-start">
                                    <span class="fw-bold">Seamlessly transfer</span>
                                    assets to beneficiaries with Automated Inheritance. No seed phrases required.
                                </div>
                            </li>

                            <!-- Item 3 -->
                            <li class="bg-4 rounded-xl p-4 d-flex flex-column flex-lg-row align-items-center shadow-sm">
                                <i class="bi bi-key-fill text-highlight-primary fs-3 mb-3 mb-lg-0 me-md-4"
                                    aria-hidden="true"></i>
                                <div class="text-center text-lg-start">
                                    <span class="fw-bold">Assign unique access levels</span>
                                    or wallet functions to fingerprints with personalized control.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center" role="region"
                    aria-labelledby="smart-contract-image-title">
                    <img src="/assets/img/diagram/smart-contract.svg" alt="Smart Contract Diagram" class="img-fluid rounded"
                        width="400px" id="smart-contract-image-title">
                </div>
            </div>
        </div>
    </section>

   
@endsection

<style>
    .scan .fingerprint {
        background: url('/assets/img/elements/finger.png');
    }

    .scan .fingerprint::before {
        background: url('/assets/img/elements/finger-blue.png');
    }
</style>