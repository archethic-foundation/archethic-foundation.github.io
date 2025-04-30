<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic Blockchain Technology – Decentralization, Security')
@section('meta_description', "Explore Archethic's innovative blockchain technology. Learn how our decentralized, secure, and scalable blockchain powers Web3 and see what's next for Archethic.")

<!-- Technology Top Section -->
@section('content')
<section id="technology-top" class="top mb-3 mb-lg-5 p-0 d-flex align-items-center position-relative"
    aria-labelledby="technology-title">
    <div class="container">
        <div class="p-3 p-lg-5 text-center text-lg-start">
            <div class="content" data-aos="fade-up" data-aos-delay="0">
                <!-- Title -->
                <h1 id="technology-title" class="hero4 mb-4 fw-bold text-shadow">
                    Archethic’s Advanced <u>Technology</u>
                </h1>
                <!-- Description -->
                <p id="technology-desc" class="text-lg mb-4 op-09 text-shadow">
                    Backed by 8 years of research and 5 patented breakthroughs, <strong>Archethic</strong> team sets new
                    standards in blockchain. Explore the innovations driving the future of digital asset
                    protection.
                </p>
                <!-- Buttons -->
                <div
                    class="d-flex flex-column flex-md-row gap-4 justify-content-center justify-content-lg-start align-items-center">
                    <a href="/assets/files/technical_paper.pdf" target="_blank" class="btn btn-primary"
                        title="Read the Technical Paper">
                        Technical paper <i class="bi bi-download ms-2"></i>
                    </a>                   
                </div>
            </div>            
        </div>
    </div>
    <!-- Scroll Arrow -->
    <a class="d-none d-xl-inline arrow-icon position-absolute w-100 text-center hero2" href="#modules-dl"
            aria-label="Scroll to See Download Options">
            <i class="bi bi-arrow-down-circle-fill" aria-hidden="true"></i>
        </a>
</section>

<!-- ARCH Consensus -->
<section id="consensus" class="pt-md-5 mb-5" aria-labelledby="consensus-title">
    <div class="container text-center" style="max-width: 1000px;">
        <!-- Heading -->
        <div class="heading-title text-center mb-5 mt-5 px-3 px-md-4 text-shadow" data-aos="fade-up" data-aos-delay="0">
            <h2 id="consensus-title" class="hero3 px-3 px-md-0 fw-bold">
                The Archethic Blockchain <br class="d-none d-md-inline">and its
                <u>ARCH Consensus</u>
            </h2>
            <p id="consensus-desc" class="bg-light d-inline-block px-4 py-2 rounded mb-4 text-lg">
                Archethic’s groundbreaking distributed ledger technology redefines blockchain architecture with its
                unique <a href="https://wiki.archethic.net/learn/transaction-chain/?_vd=v1XV4BOqrvPKflzb%2Cv4ceKcrzZg"
                    target="_blank" title="Learn about the transaction chain"><span
                        class="underline">transaction&nbsp;chain.</span></a>
                Each block represents a transaction, forming a seamless chain that merges the capacity of millions of
                blockchains.
                With <a href="https://wiki.archethic.net/learn/arch-consensus/?_vd=v1XV4BOqrvPKflzb%2Cv4ceKcrzZg"
                    target="_blank" title="Learn about the ARCH Consensus"><span
                        class="underline">ARCH&nbsp;Consensus</span></a>,
                we solve the blockchain trilemma, delivering unmatched scalability, security, and decentralization.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="row g-3 align-items-stretch">
            <!-- Linear Scalability -->
            <div class="col-12 col-md-6 d-flex" role="region" aria-labelledby="scalability-title scalability-desc"
                data-aos="fade-up" data-aos-delay="50">
                <div class="cards-box bg-1 text-light rounded-xl p-5 d-flex flex-column gap-3 w-100 h-100"
                    style="background-image: url('assets/img/bg/scalability-box.svg');">
                    <h3 id="scalability-title" class="text-xl card-title fw-bold">Linear Scalability</h3>
                    <p id="scalability-desc" class="op-08 card-text">50 TPS per node (10,000 TPS achieved with 200
                        nodes).</p>
                </div>
            </div>

            <!-- Decentralization -->
            <div class="col-12 col-md-6 d-flex" role="region"
                aria-labelledby="decentralization-title decentralization-desc" data-aos="fade-up" data-aos-delay="100">
                <div class="cards-box bg-1 text-light rounded-xl p-5 d-flex flex-column gap-3 w-100 h-100"
                    style="background-image: url('assets/img/bg/decentralization-box.svg');">
                    <h3 id="decentralization-title" class="text-xl card-title fw-bold">Decentralization</h3>
                    <p id="decentralization-desc" class="op-08 card-text">Achieved through geo-sharding around the
                        globe.</p>
                </div>
            </div>

            <!-- High Security -->
            <div class="col-12 col-md-6 d-flex" role="region" aria-labelledby="security-title security-desc"
                data-aos="fade-up" data-aos-delay="150">
                <div class="cards-box bg-1 text-light rounded-xl p-5 d-flex flex-column gap-3 w-100 h-100"
                    style="background-image: url('assets/img/bg/security-box.svg');">
                    <h3 id="security-title" class="text-xl card-title fw-bold">High Security</h3>
                    <p id="security-desc" class="op-08 card-text">Aeronautic-grade security with 90% malicious node
                        tolerance.</p>
                </div>
            </div>

            <!-- Energy Consumption -->
            <div class="col-12 col-md-6 d-flex" role="region" aria-labelledby="energy-title energy-desc"
                data-aos="fade-up" data-aos-delay="200">
                <div class="cards-box bg-1 text-light rounded-xl p-5 d-flex flex-column gap-3 w-100 h-100"
                    style="background-image: url('assets/img/bg/energy-box.svg');">
                    <h3 id="energy-title" class="text-xl card-title fw-bold">Energy Consumption</h3>
                    <p id="energy-desc" class="op-08 card-text">3.5Bn times less than Bitcoin.</p>
                </div>
            </div>
        </div>

        <!-- Conclusion -->
        <p id="consensus-summary" class="mt-5 bg-light d-inline-block px-4 py-2 rounded px-3 text-lg">
            That's why Archethic leads blockchain innovation with unparalleled security, scalability, and efficiency
            while consuming just 0.0001% of Bitcoin’s energy. Scalable and sustainable, Archethic sets new standards for
            the future of digital technology.
        </p>
    </div>
</section>

<!-- Join our Developer Community -->
<section id="join-community" class="pt-md-5 mb-5" aria-labelledby="join-community-title">
    <div class="container">
        <!-- Section Title -->
        <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 pt-md-5 px-3 px-md-5 text-shadow"
            data-aos="fade-up" data-aos-delay="0">
            <h2 id="join-community-title" class="hero3 px-3 px-md-0 fw-bold">Join Our
                <u>Developer Community</u>
            </h2>
            <p id="join-community-desc" class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                Welcome to the Archethic Developer Hub! We are excited to have you join our growing community
                of developers building on the Archethic blockchain. Dive into our
                resources and get started with your
                projects today.
            </p>
        </div>

        <!-- Community Options -->
        <div class="row g-4">
            <!-- Knowledge Center -->
            <div class="col-12 col-md-6 col-lg-4 d-flex" role="region" aria-labelledby="knowledge-center-title knowledge-center-desc"
                data-aos="fade-up" data-aos-delay="50">
                <div class="card bg-1 text-light h-100 rounded-xl p-5 d-flex flex-column gap-3 w-100">
                    <!-- Knowledge Center Content -->
                    <div class="d-flex flex-column flex-grow-1 gap-2">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-book text-xxl"></i>
                            <h3 id="knowledge-center-title" class="text-xl card-title fw-bold mb-0">Knowledge Center</h3>
                        </div>
                        <p id="knowledge-center-desc" class="op-08 card-text flex-grow-1">
                            Access our comprehensive documentation for detailed guides, API references, and tutorials.
                        </p>
                    </div>
                    <!-- Access Button -->
                    <a href="https://wiki.archethic.net/" class="btn btn-primary mt-3 align-self-start"
                        target="_blank" title="Access the Knowledge Center and get started now">
                        Access&nbsp;now&nbsp;<i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Github -->
            <div class="col-12 col-md-6 col-lg-4 d-flex" role="region" aria-labelledby="github-title github-desc"
                data-aos="fade-up" data-aos-delay="100">
                <div class="card bg-1 text-light h-100 rounded-xl p-5 d-flex flex-column gap-3 w-100">
                    <!-- Github Content -->
                    <div class="d-flex flex-column flex-grow-1 gap-2">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-github text-xxl"></i>
                            <h3 id="github-title" class="text-xl card-title fw-bold mb-0">Github</h3>
                        </div>
                        <p id="github-desc" class="op-08 card-text flex-grow-1">
                            Explore our GitHub repository for code samples, SDKs, and open-source projects.
                        </p>
                    </div>
                    <!-- Access Button -->
                    <a href="https://github.com/archethic-foundation" class="btn btn-primary mt-3 align-self-start"
                        target="_blank" title="Visit Archethic's GitHub Repository for resources">
                        Access&nbsp;now&nbsp;<i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Discord -->
            <div class="col-12 col-md-6 col-lg-4 d-flex mx-auto" role="region"
                aria-labelledby="discord-title discord-desc" data-aos="fade-up" data-aos-delay="150">
                <div class="card bg-1 text-light h-100 rounded-xl p-5 d-flex flex-column gap-3 w-100">
                    <!-- Discord Content -->
                    <div class="d-flex flex-column flex-grow-1 gap-2">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-discord text-xxl"></i>
                            <h3 id="discord-title" class="text-xl card-title fw-bold mb-0">Discord</h3>
                        </div>
                        <p id="discord-desc" class="op-08 card-text flex-grow-1">
                            Dive into deeper discussions, access resources, and connect directly with the Archethic team
                            on Discord.
                        </p>
                    </div>
                    <!-- Access Button -->
                    <a href="https://discord.com/invite/bZv9aHN7bd" class="btn btn-primary mt-3 align-self-start"
                        target="_blank" title="Join the Archethic Discord community">
                        Connect&nbsp;with&nbsp;us&nbsp;<i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection