<!-- Head-->
@extends('layouts.app')

<!-- SEO-->
@section('title', 'Archethic (UCO) - Terms of Service')
@section('meta_description', 'Read the official Terms of Service of Archethic, defining usage conditions, user responsibilities, and legal disclaimers.')
@section('meta_robots', 'noindex, nofollow')

@section('content')
    <section id="terms" class="pt-5">
        <div class="container mt-5">
            <div class="title-content text-center text-shadow text-lg">
                <h1 class="hero3 mb-2 fw-bold">
                    Terms of Service
                </h1>
                <p class="bg-light d-inline-block px-4 py-2 rounded">Last Updated: March 3, 2025</p>
            </div>

            <div class="row">
                <div class="col-xl-8 col-lg-10 ms-auto me-auto">
                    <div class="rounded-xxl bg-1 p-3 p-sm-4 p-md-5">

                        <!-- Legal Ownership & Contact Info -->
                        <h2 class="text-xl mt-4">1. Legal Information</h2>
                        <p class="op-08">
                            This website <a href="https://archethic.net" target="_blank"><span
                                    class="underline">https://archethic.net</span></a> is owned and operated by:
                        </p>
                        <ul>
                            <li><strong>Fondation Archethic</strong></li>
                            <li>Rue de Genève 18, 1225 Chêne-Bourg, Suisse</li>
                            <li>IDE <strong>CHE-447.106.659</strong></li>
                        </ul>
                        <p class="op-08">
                            For any inquiries, please <a href="/contact"
                                class="{{ Request::is('contact') ? 'active' : '' }}" target="_blank">
                                <span class="underline">contact us.</span>
                            </a>
                        </p>

                        <h2 class="text-xl mt-4">2. Acceptance of Terms</h2>
                        <p class="op-08">
                            By accessing or using the services provided by <strong>Archethic</strong> ("we," "our," or "us")
                            through our website and related applications, you ("User" or "you") agree to comply with and be
                            bound by these
                            <strong>Terms of Service</strong>. If you do not agree to these Terms, <strong>do not use our
                                services.</strong>
                        </p>

                        <h2 class="text-xl mt-4">3. Description of Services</h2>
                        <p class="op-08">
                            Archethic provides decentralized blockchain-based services, including but not limited to:
                        </p>
                        <ul>
                            <li><strong>Biometric Cold Wallet (aeWallet):</strong> Secure storage and management of crypto
                                assets using biometric authentication.</li>
                            <li><strong>Archethic Swap (aeSwap):</strong> A decentralized exchange (DEX) enabling token
                                swaps on Archethic blockchain.</li>
                            <li><strong>Archethic Bridge (aeBridge):</strong> A cross-chain bridge for transferring assets
                                between different blockchains.</li>
                            <li><strong>Archethic Explorer (aeExplorer):</strong> A blockchain explorer for transaction
                                tracking and data visualization.</li>
                            <li><strong>UCO Token:</strong> The native token of the Archethic blockchain ecosystem.</li>
                        </ul>

                        <h2 class="text-xl mt-4">4. User Responsibilities</h2>
                        <p class="op-08">
                            By using our services, you agree to:
                        </p>
                        <ul>
                            <li>Provide accurate and up-to-date information when required.</li>
                            <li>Keep your private keys, seed phrases, and account credentials secure.</li>
                            <li>Not use the services for illegal, fraudulent, or unauthorized activities.</li>
                            <li>Comply with all applicable laws and regulations in your jurisdiction.</li>
                        </ul>
                        <p class="op-08">
                            <strong>WARNING:</strong> Blockchain transactions are irreversible. You are solely responsible
                            for the security of your funds and transactions. Archethic cannot recover lost or stolen assets.
                        </p>

                        <h2 class="text-xl mt-4">5. Intellectual Property Rights</h2>
                        <p class="op-08">
                            All content, trademarks, and data available on the Website, including but not limited to code,
                            text, graphics, and branding, are the property of Archethic or its licensors. Unauthorized
                            reproduction or distribution of any material is strictly prohibited.
                        </p>

                        <h2 class="text-xl mt-4">6. Limitation of Liability</h2>
                        <p class="op-08">
                            To the fullest extent permitted by law, Archethic shall not be liable for:
                        </p>
                        <ul>
                            <li>Loss of funds due to user error, hacking, phishing, or compromised private keys.</li>
                            <li>Blockchain network failures, downtime, or technical malfunctions.</li>
                            <li>Any third-party services or platforms interacting with Archethic services.</li>
                            <li>Loss of profits or data arising from the use of our services.</li>
                        </ul>

                        <h2 class="text-xl mt-4">7. Indemnification</h2>
                        <p class="op-08">
                            You agree to indemnify and hold harmless <strong>Archethic</strong>, its affiliates, directors,
                            employees, and partners from any claims, damages, or legal disputes resulting from your use of
                            our services or violation of these Terms.
                        </p>

                        <h2 class="text-xl mt-4">8. Termination of Service</h2>
                        <p class="op-08">
                            We reserve the right to <strong>restrict, suspend, or terminate</strong> your access to our
                            services at our sole discretion if we determine that you:
                        </p>
                        <ul>
                            <li>Violate these Terms or applicable laws.</li>
                            <li>Engage in fraudulent or malicious activities.</li>
                            <li>Compromise the security or integrity of the Archethic network.</li>
                        </ul>

                        <h2 class="text-xl mt-4">9. Governing Law</h2>
                        <p class="op-08">
                            These <strong>Terms of Service</strong> shall be governed by and construed in accordance with
                            the laws of <strong>Switzerland</strong>. Any legal disputes shall be subject to the exclusive
                            jurisdiction of Swiss courts.
                        </p>

                        <h2 class="text-xl mt-4">10. Privacy & Data Collection</h2>
                        <p class="op-08">
                            We respect your privacy. <strong>Archethic does not collect or store sensitive personal
                                data.</strong> However, certain third-party integrations may process data according to their
                            own privacy policies.
                            For more details, refer to our <a href="/privacy" target="_blank"
                                class="{{ Request::is('privacy') ? 'active' : '' }}">
                                <span class="underline">Privacy Policy.</span>
                            </a>
                        </p>

                        <h2 class="text-xl mt-4">11. Changes to Terms</h2>
                        <p class="op-08">
                            Archethic reserves the right to update or modify these Terms at any time. Changes will be posted
                            on this page, and continued use of our services implies acceptance of the revised Terms.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection