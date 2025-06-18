@extends('layouts.app')

<!-- SEO-->
@section('title', "UCO Token – Where to Buy and Tokenomics of Archethic's Cryptocurrency")
@section('meta_description', 'Discover UCO, the cryptocurrency powering the Archethic blockchain. Learn where to buy UCO and explore its tokenomics, use cases, and role in decentralization. Formerly Uniris, UCO fuels innovation.')

<!-- UCO Token top -->
@section('content')
    <section id="uco-token-top" class="top pt-lg-5 mb-5" aria-labelledby="uco-token-section">
        <div class="container mt-md-5 pt-md-5 p-0">
            <div class="row p-3 p-md-0 pt-5 mb-md-5 text-center text-md-start" data-aos="zoom-in">
                <div class="col-lg-9 col-xl-8">
                    <h1 id="uco-token-section" class="hero4 fw-bold mb-4 text-shadow text-center text-md-start">
                        <u>UCO Token</u> by Archethic
                    </h1>
                    <p class="op-09 text-lg mb-4 text-shadow text-center text-md-start">
                        The UCO Token powers Archethic’s ecosystem, enabling secure transactions, governance, and
                        decentralized innovation. 
                       
                    </p>
                       <p class="op-09 text-lg mb-4 text-shadow text-center text-md-start">
                       Unfortunately, the UCO token experienced a hack on the BNB chain that negatively impacted its price. Corrective actions have since been taken and the situation is now under control, paving the way for a more secure and sustainable future. More information is available in the 'About Us' section.
                       
                    </p>


                 <a href="#buy-uco-link" class="btn btn-secondary mx-auto mx-lg-0 mt-3" title="See Download Options">
                        Where to BUY <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-3 col-xl-4 d-none d-lg-flex align-items-center">
                    <img src="/assets/img/bg/bg-uco-9.png" alt="Illustration of the UCO Token by Archethic"
                         class="img-fluid">
                </div>
            </div>

            <!-- Stats Boxes -->
            <section class="row mt-4 mt-md-5 g-3 px-3 align-items-stretch" aria-labelledby="uco-stats">
                <h2 id="uco-stats" class="visually-hidden">Key Statistics about the UCO Token</h2>

                <!-- Total Supply -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="total-supply-title" aria-describedby="total-supply-desc" data-aos="fade-up"
                     data-aos-delay="0">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="total-supply-title" class="text-xxl mb-2 fw-black total-supply"></h3>
                        <p id="total-supply-desc" class="text-md op-08 mb-0">Total Supply</p>
                    </div>
                </div>

                <!-- Circulating Supply -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="circulating-supply-title" aria-describedby="circulating-supply-desc" data-aos="fade-up"
                     data-aos-delay="50">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="circulating-supply-title" class="text-xxl mb-2 fw-black circulating-supply"></h3>
                        <p id="circulating-supply-desc" class="text-md op-08 mb-0">Circulating Supply</p>
                    </div>
                </div>

                <!-- Market Cap -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="market-cap-title" aria-describedby="market-cap-desc" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="market-cap-title" class="text-xxl mb-2 fw-black market-cap"></h3>
                        <p id="market-cap-desc" class="text-md op-08 mb-0">Market Cap</p>
                    </div>
                </div>

                <!-- Current Price -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="current-price-title" aria-describedby="current-price-desc" data-aos="fade-up"
                     data-aos-delay="150">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="current-price-title" class="text-xxl mb-2 fw-black uco-price"></h3>
                        <p id="current-price-desc" class="text-md op-08 mb-0">Current Price</p>
                    </div>
                </div>

             
            </section>

               <!-- Stats Boxes -->
            <section class="row mt-4 mt-md-5 g-3 px-3 align-items-stretch" aria-labelledby="uco-stats">
                <h2 id="uco-stats" class="visually-hidden">Key Statistics about the UCO Token</h2>

                <!-- Archethic -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="archithic-supply-title" aria-describedby="archithic-supply-desc" data-aos="fade-up"
                     data-aos-delay="0">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="archithic-supply-title" class="text-xxl mb-2 fw-black archithic-supply"></h3>
                        <p id="archithic-supply-desc" class="text-md op-08 mb-0">Archethic</p>
                    </div>
                </div>

                <!-- Ethereum -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="eth-supply-title" aria-describedby="eth-supply-desc" data-aos="fade-up"
                     data-aos-delay="50">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="eth-supply-title" class="text-xxl mb-2 fw-black eth-supply"></h3>
                        <p id="eth-supply-desc" class="text-md op-08 mb-0">Ethereum</p>
                    </div>
                </div>

                <!-- Polygon -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="polygon-supply-title" aria-describedby="polygon-supply-desc" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="polygon-supply-title" class="text-xxl mb-2 fw-black polygon-supply"></h3>
                        <p id="polygon-supply-desc" class="text-md op-08 mb-0">Polygon</p>
                    </div>
                </div>

                <!-- BNB -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="bnb-supply-title" aria-describedby="bnb-supply-desc" data-aos="fade-up"
                     data-aos-delay="150">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="bnb-supply-title" class="text-xxl mb-2 fw-black bnb-supply"></h3>
                        <p id="bnb-supply-desc" class="text-md op-08 mb-0">BNB</p>
                    </div>
                </div>

               <div id="buy-uco-link"></div>
            </section>
        </div>
    </section>

    <!-- Buy UCO -->
    <section id="buy-uco" class="pt-md-5 mb-5" aria-labelledby="buy-uco-title">
        <div class="container">

            <!-- Heading -->
            <div class="heading-title col-12 text-center mb-5 mb-md-5 px-3 text-shadow" data-aos="fade-up"
                 data-aos-delay="0">
                <h2 id="buy-uco-title" class="hero3 fw-bold">
                    Where to <u>Buy&nbsp;UCO?</u>
                </h2>
            </div>

            <div class="rounded-xl bg-1 px-3 p-4 p-md-5" data-aos="fade-up" data-aos-delay="50">

                <div class="row g-5">

                    <!-- Centralized Exchanges -->
                    <section class="col-12 col-lg-6 position-relative px-4 pt-md-0" role="region"
                             aria-labelledby="centralized-exchanges-title">
                        <div class="d-flex flex-column gap-4 text-center text-md-start">
                            <div>
                                <p id="centralized-exchanges-title" class="mb-1 text-uppercase text-sm op-08">
                                    Centralized Exchanges
                                </p>
                                <h3 class="text-xl fw-bold mb-2">
                                    Buy with <span class="text-highlight-primary">Fiats</span> or <span class="text-highlight-primary">Crypto</span>
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-6  d-none">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                       href="https://www.mexc.com/exchange/UCO_USDT" title="Buy UCO on MEXC Exchange">
                                        <img height="70" src="/assets/img/exchanges/mexc.svg" alt="MEXC Exchange">
                                        <div class="pt-2">MEXC Exchange</div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                       href="https://www.probit.com/app/exchange/UCO-USDT"
                                       title="Buy UCO on ProBit Exchange">
                                        <img height="70" src="/assets/img/exchanges/probit.svg" alt="ProBit Exchange">
                                        <div class="pt-2">ProBit Exchange</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="separator d-none d-lg-block position-absolute top-0 end-0 h-100"></div>
                    </section>

                    <!-- Decentralized Exchanges -->
                    <section class="col-12 col-lg-6 px-4 pt-md-0" role="region"
                             aria-labelledby="decentralized-exchanges-title">
                        <div class="d-flex flex-column gap-4 text-center text-md-start">
                            <div>
                                <p id="decentralized-exchanges-title" class="mb-1 text-uppercase text-sm op-08">
                                    Decentralized Exchanges
                                </p>
                                <h3 class="text-xl fw-bold mb-2">
                                    Buy with <span class="text-highlight-primary"> Cryptos</span>
                                </h3>
                            </div>
                            <div class="row g-3">
                            <div class="col-6">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                       href="https://www.sushi.com/polygon/explore/pools?tokenSymbols=UCO/" title="Buy UCO on Polygon Chain via Sushi">
                                       <img height="70" src="/assets/img/exchanges/polygon.png" alt="Polygon Chain">
                                        <div class="pt-2">Polygon&nbsp;Chain</div>
                                    </a>
                                </div>

                                <div class="col-6 d-none">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                   
                                       href="https://app.uniswap.org/swap?chain=polygon&inputCurrency=0x3c499c542cEF5E3811e1192ce70d8cC03d5c3359&outputCurrency=0xaa53B93608C88EE55fAD8db4C504Fa20E52642aD"
                                       title="Buy UCO on Polygon Chain">
                                        <img height="70" src="/assets/img/exchanges/polygon.png" alt="Buy UCO on Polygon Chain via UniSwap">
                                        <div class="pt-2">Polygon&nbsp;Chain via UniSwap</div>
                                    </a>
                                </div>
                               
                            </div>
                            <div class="row g-3">
                                <div class="col-6  d-none">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                       href="https://app.uniswap.org/swap?chain=ethereum&inputCurrency=0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48&outputCurrency=0x1A688D3d294ee7BcC1f59011DE93d608Dc21c377"
                                       title="Buy UCO on Ethereum Chain">
                                        <img height="70" src="/assets/img/exchanges/ethereum.png" alt="Ethereum Chain">
                                        <div class="pt-2">Ethereum&nbsp;Chain</div>
                                    </a>
                                </div>
                                <div class="col-6  d-none">
                                    <a class="btn btn-dark w-100 p-3 bg-4 rounded-xl" target="_blank"
                                       href="https://pancakeswap.finance/swap?outputCurrency=0xf1e5bbd997501a8439619266A09a54b2b499eAA3&inputCurrency=0x55d398326f99059ff775485246999027b3197955&exactField=output"
                                       title="Buy UCO on Binance Chain">
                                        <img height="70" src="/assets/img/exchanges/bsc.png" alt="Binance Chain">
                                        <div class="pt-2">Binance&nbsp;Chain</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </section>


    <!-- Applications -->
    <section id="applications" class="mb-5 d-none" aria-labelledby="applications-title" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <!-- Heading -->
            <div class="heading-title text-center mb-3 mt-5 mt-md-0 mb-md-5 pt-md-5 px-3 px-md-5 text-shadow">
                <h2 id="applications-title" class="hero3 px-3 px-md-0 fw-bold">
                    What are the <br class="d-none d-lg-inline">UCO<u> Applications?</u>
                </h2>
                <p class="bg-light d-inline-block px-4 py-2 rounded text-lg">
                    The UCO token is designed to serve two key functions <br class="d-none d-lg-inline">
                    within the Archethic ecosystem:
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4 align-items-stretch">
                <!-- Transaction Fees -->
                <div class="transaction-fees col-12 col-md-6 d-flex align-items-stretch" role="region"
                     aria-labelledby="transaction-fees-title" data-aos="fade-up" data-aos-delay="0">
                    <div class="cards-box-variants bg-1 text-light rounded-xl d-flex flex-column gap-3 w-100 h-100"
                         style="background-image: url('assets/img/bg/fees-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="transaction-fees-title" class="text-xl card-title fw-bold">1. Transaction Fees</h3>
                            <p id="transaction-fees-desc" class="op-08 card-text">
                                UCO tokens will be used to pay for transaction fees,
                                ensuring efficient and secure network operations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Governance and Voting -->
                <div class="governance col-12 col-md-6 d-flex align-items-stretch" role="region"
                     aria-labelledby="governance-title" data-aos="fade-up" data-aos-delay="50">
                    <div class="cards-box-variants bg-1 text-light rounded-xl d-flex flex-column gap-3 w-100 h-100"
                         style="background-image: url('assets/img/bg/voting-box.svg');">
                        <div class="d-flex flex-column flex-grow-1 gap-2">
                            <h3 id="governance-title" class="text-xl card-title fw-bold">2. Governance and Voting</h3>
                            <p id="governance-desc" class="op-08 card-text">
                                Token holders will be able to lock UCO tokens
                                to gain voting power in the DAO, participating
                                in decision-making processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tokenomics -->
    <section id="tokenomics" class="mb-5 px-3" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <!-- Title Section -->
            <div class="heading-title text-center mt-5 mt-md-0 pt-md-5 px-md-5 text-shadow">
                <h2 id="tokenomics-title" class="hero3 px-3 px-md-0 fw-bold">
                    UCO<u> Tokenomics</u>
                </h2>
                <p id="tokenomics-desc" class="d-none bg-light d-inline-block px-4 py-2 rounded text-lg">
                    Learn how our token is allocated, distributed, and utilized to support sustainable growth within the
                    Archethic ecosystem.
                </p>
                <p id="tokenomics-desc" class="  bg-light d-inline-block px-4 py-2 rounded text-lg">
                    This chart illustrates the token distribution across the various strategic allocations defined in the Archethic White Paper. Each segment represents the percentage of the total supply assigned to a specific purpose or initiative (e.g. network funding, adoption rewards, team, staking, liquidity, etc.). These predefined allocations help ensure a balanced, transparent, and mission-aligned use of the UCO supply throughout the ecosystem.
                    Please note that these allocations are fixed by design, but their actual usage and minting evolve over time and are reflected in the live metrics below..
                </p>
            </div>

            <!-- Chart Section -->
            <div class=" row justify-content-center mt-5" data-aos="fade-up" data-aos-delay="100">
                <div style="display: flex; justify-content: space-between; align-items: center; max-width: 900px;">
                    <canvas class=" " id="tokenomicsChart" style="flex: 0 0 60%;"></canvas>
                </div>
            </div>

   <div class="heading-title text-center mt-5 mt-md-0 pt-md-5 px-md-5 text-shadow">
 

     <h2 id="tokenomics-title" class="hero3 px-3 px-md-0 fw-bold">
                
                    <u>Wallet Consumption</u>  Rate per Allocation
                </h2>
              
              <p id="tokenomics-desc" class="  bg-light d-inline-block px-4 py-2 rounded text-lg">
             This chart displays the current usage ratio of each wallet allocation within the Archethic Mainnet. A value of 100% indicates that no tokens from the corresponding allocation have been used yet. As tokens are minted and consumed, the percentage decreases, offering a clear view of how much of each allocation has already been utilized versus what remains available. 
                </p>
            </div>
            
             <!-- Chart Section -->
            <div class=" row justify-content-center mt-5" data-aos="fade-up" data-aos-delay="100">
                <div style="display: flex; justify-content: space-between; align-items: center; max-width: 900px;">
                    <canvas class=" " id="tokenomicsChartStatus" style="flex: 0 0 60%;"></canvas>
                </div>
            </div>


        </div>
    </section>
    <section id="uco-token-top" class="top pt-lg-5 mb-5" aria-labelledby="uco-token-section">
        <div class="container mt-md-0 pt-md-0 p-0">
            <div class="row p-3 p-md-0 pt-5 mb-md-5 text-center text-md-start" data-aos="zoom-in">
             <div class="heading-title text-center mt-5 mt-md-0 pt-md-5 px-md-5 text-shadow">
                   


               <h2 id="tokenomics-title" class="hero3 px-3 px-md-0 fw-bold">
                    Overview of <u>Wallet Metrics</u> 
                </h2>
              <p id="tokenomics-desc" class="  bg-light d-inline-block px-4 py-2 rounded text-lg">
               This section provides a dynamic overview of key wallet-related figures within the Archethic Mainnet. The data shown reflects live metrics regarding token allocation, minting status, and overall distribution. These indicators are essential to understanding the network’s current token economy, including unminted reserves, circulating supply, token bridging, and burn events.
                </p>
                </div>
               
            </div>

            <!-- Stats Boxes -->
            <section class="row mt-4 mt-md-5 g-3 px-3 align-items-stretch" aria-labelledby="uco-stats">
                <h2 id="uco-stats" class="visually-hidden">Key Statistics about the UCO Token</h2>


                  <!-- Minted UCO -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="minted-uco-title" aria-describedby="archethic-minted-uco-desc" data-aos="fade-up"
                     data-aos-delay="150">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="archethic-minted-uco-title" class="text-xxl mb-2 fw-black archethic-minted-uco"></h3>
                        <p id="archethic-minted-uco-desc" class="text-md op-08 mb-0">UCO Minted</p>
                    </div>
                </div>


                <!-- Archethic -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="archethic-burn-wallet-title" aria-describedby="archethic-burn-wallet-desc" data-aos="fade-up"
                     data-aos-delay="0">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="archethic-burn-wallet-title" class="text-xxl mb-2 fw-black archethic-burn-wallet"></h3>
                        <p id="archethic-burn-wallet-desc" class="text-md op-08 mb-0">Burnt UCO</p>
                    </div>
                </div>

                <!-- Ethereum -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="archethic-not-minted-uco-title" aria-describedby="archethic-not-minted-uco-desc" data-aos="fade-up"
                     data-aos-delay="50">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="archethic-not-minted-uco-title" class="text-xxl mb-2 fw-black archethic-not-minted-uco"></h3>
                        <p id="archethic-not-minted-uco-desc" class="text-md op-08 mb-0">Not Minted</p>
                    </div>
                </div>

                <!-- Bride -->
                <div class="col-12 col-sm-6 col-lg d-flex align-items-stretch" role="region"
                     aria-labelledby="market-cap-title" aria-describedby="archethic-bridge-wallet-desc" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="bg-1 rounded-xl p-4 text-center d-flex flex-column justify-content-center w-100">
                        <h3 id="archethic-bridge-wallet-title" class="text-xxl mb-2 fw-black archethic-bridge-wallet"></h3>
                        <p id="archethic-bridge-wallet-desc" class="text-md op-08 mb-0">Bridge AE-EVM</p>
                    </div>
                </div>

              

              
            </section>
        </div>
    </section>

    <!-- Wiki -->
    <section id="wiki" class="pt-md-5 mb-5" aria-labelledby="wiki-title">
        <div class="container">
            <!-- Content Card -->
            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-1 text-light rounded-xl overflow-hidden">
                    <div class="row g-0">
                        <!-- Text Content -->
                        <div class="col-md-5 py-5 px-4 px-md-5 d-flex flex-column justify-content-center">
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <i class="bi bi-wrench-adjustable text-xxl"></i>
                                <h2 id="wiki-title" class="text-xl card-title fw-bold mb-0">Looking for More In-Depth
                                    Information?</h2>
                            </div>
                            <p id="wiki-desc" class="op-08 card-text">
                                Explore our Wiki for detailed insights, technical guides, and
                                everything you need to know about Archethic and its ecosystem.
                            </p>
                            <a href="https://wiki.archethic.net/" target="_blank"
                               class="btn btn-primary mt-3 align-self-start d-flex align-items-center justify-content-center"
                               title="Visit the Archethic Wiki for more information">
                                Discover&nbsp;more&nbsp;on&nbsp;the&nbsp;wiki <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <!-- Image Content -->
                        <div class="col-md-7 mockup-img" data-aos="fade-up" data-aos-delay="300"
                             style="background-image: url('assets/img/mockups/wiki-screenshot.png');" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection