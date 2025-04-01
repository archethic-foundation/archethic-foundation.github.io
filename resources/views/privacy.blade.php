<!-- Head -->
@extends('layouts.app')

<!-- SEO -->
@section('title', 'Archethic (UCO) - Privacy Policy')
@section('meta_description')
@section('meta_robots', 'noindex, nofollow')

@section('content')
<section id="privacy" class="pt-5">
    <div class="container mt-5">

        <div class="title-content text-center text-shadow text-lg">
            <h1 class="hero3 mb-2 fw-bold">
                Privacy Policy
            </h1>
            <p class="bg-light d-inline-block px-4 py-2 rounded">Last Updated: July 16, 2024</p>
        </div>


        <div class="row">
            <div class="col-xl-8 col-lg-10 ms-auto me-auto">
                <div class="rounded-xxl bg-1 p-3 p-sm-4 p-md-5">

                    <p class="op-08">
                        <em>Welcome to Archethic! We are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and protect your personal information when you join our wait-list for future products.</em>
                    </p>

                    <h2 class="text-xl mt-4">Information We Collect</h2>
                    <p class="op-08">
                        We only collect your email address when you sign up for our wait-list.
                    </p>

                    <h2 class="text-xl mt-4">How We Use Your Information</h2>
                    <p class="op-08">
                        Your email address will be used solely for the purpose of informing you about our future products, updates, and related information. We will not use your email address for any other purpose without your explicit consent.
                    </p>

                    <h2 class="text-xl mt-4">Data Storage and Security</h2>
                    <p class="op-08">
                        We implement appropriate technical and organizational measures to protect your email address from unauthorized access, disclosure, alteration, or destruction. Your email address is stored securely and will be kept only as long as necessary for the purposes described above.
                    </p>

                    <h2 class="text-xl mt-4">Third-Party Sharing</h2>
                    <p class="op-08">
                        We do not share, sell, or distribute your email address to third parties, except as required by law or as necessary to protect our rights.
                    </p>

                    <h2 class="text-xl mt-4">Your Rights</h2>
                    <p class="op-08">
                        You have the right to access, correct, or delete your email address from our records. If you wish to exercise any of these rights, please
                        <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">
                            <span class="underline">contact us</span>
                        </a>.
                    </p>

                    <h2 class="text-xl mt-4">Changes to This Privacy Policy</h2>
                    <p class="op-08">
                        We may update this Privacy Policy from time to time. Any changes will be posted on this page, and we encourage you to review this policy periodically.
                    </p>

                    <h2 class="text-xl mt-4">Contact Us</h2>
                    <p class="op-08">
                        If you have any questions or concerns about this Privacy Policy, please
                        <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">
                            <span class="underline">contact us</span>
                        </a>.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection