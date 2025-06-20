import './bootstrap';

// Components
import './components/cold_wallet-video';
import './components/slider-partners';
import './components/sticky-header';
import './components/teamSlider';
import './components/tokenomics-chart';
import './components/video-vidalytics';

// Data
import { showSpinner, updateElements } from './data/domUtils';
import { fetchCirculatingData, fetchTotalData } from './data/supplyData';
import { fetchUcoPriceData } from './data/ucoPriceData';
import { fetchArticleData, fetchArticlesData } from './data/articleData';
import { fetchWalletsData } from './data/supplyData';


let progress = 0;

function formatLastUpdated(date, lang = 'en', full = true) {

    if (date == undefined) return ""
    if (date == "") return ""
    const locales = {
        en: 'Last updated on',
        fr: 'Dernière modification le',
        es: 'Última modificación el'
    };
    console.log("date", date)
    const formattedDate = new Intl.DateTimeFormat(lang, {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    }).format(new Date(date));
    if (full)
        return `${locales[lang]} ${formattedDate}`;
    return `${formattedDate}`;
}



async function fetchArticle() {

    const urlParts = window.location.pathname.split("/");
    // const pageId = urlParts[urlParts.length - 1];
    const params = new URLSearchParams(window.location.search);
    const pageId = params.get('id');


    if (urlParts[1] != "questions-responses") return;
    const articleTitleElements = document.getElementsByClassName('article-title');
    const articleContentElements = document.getElementsByClassName('article-content');
    const articleAuthorDateElements = document.getElementsByClassName('article-author-date');
    try {
        const [
            article,

        ] = await Promise.all([
            fetchArticleData(pageId),

        ]);

        let author_and_date = formatLastUpdated(article?.updated_at, 'en')
        updateElements(articleTitleElements, article?.title_en, undefined, true);
        updateElements(articleContentElements, article?.content_en, undefined, true);
        updateElements(articleAuthorDateElements, author_and_date, undefined, true);
    } catch (error) {
        console.log(error)
        updateElements(articleTitleElements, "<u>The article is <u>not available</u> for the time being</u>", undefined, true);

    }
}

document.addEventListener('DOMContentLoaded', fetchArticle);

async function fetchArticles() {
    const urlParts = window.location.pathname.split("/");
    if (urlParts[1] != "about-us") return;
    const allArticleElements = document.getElementsByClassName('all-articles');
    try {
        const [
            sections,
        ] = await Promise.all([
            fetchArticlesData(),

        ]);

        let body = ""
        for (let i = 0; i < sections.length; i++) {
            let section = '';
            section += '<h1 id="about_us-title" class="hero1 mb-4 mt-4 fw-bold text-shadow  "  data-aos="fade-up" data-aos-delay="50">'
            section += sections[i].title_en
            section += '</h1> '

            body += section;
            let articles = sections[i].articles
            for (let j = 0; j < articles.length; j++) {
                let content = ''
                content += `<a href="/questions-responses?id=${articles[j].id}" class="w-100  heading-title text-left mb-1 mt-1 mt-md-0 mb-md-1 pt-md-1 px-3 px-md-5 text-shadow d-flex flex-row cursor-pointer hover-opacity" role="region"`
                content += 'aria-labelledby="vision-mission-title vision-mission-desc" data-aos="fade-up" data-aos-delay="50">'
                content += '<p id="vision-mission-desc" class="w-100 bg-light d-inline-block px-4 py-3 rounded text-lg ">'
                content += '<span>' + articles[j].title_en + '<br><small class="text-right text-xs w-100 fw-normal">' + formatLastUpdated(articles[j]?.updated_at, 'en') + '</small></span>'
                content += '</p>'
                content += '<p> <i class="  bi bi-arrow-right ms-2   "></i></p>'
                content += '</a>';
                body += content;
            }
        }
        updateElements(allArticleElements, body, undefined, true);
    }
    catch (error) {
        console.log(error)
        updateElements(allArticleElements, "<h1>We are sorry, articles are not available</h1>", undefined, true);
    }
}

document.addEventListener('DOMContentLoaded', fetchArticles);

function formatNumber(num) {
    if (num === null || num === undefined || isNaN(num)) return '-';

    const units = [
        { value: 1e12, symbol: 'T' },
        { value: 1e9, symbol: 'B' },
        { value: 1e6, symbol: 'M' },
        { value: 1e3, symbol: 'k' }
    ];

    for (const unit of units) {
        if (num >= unit.value) {
            return (num / unit.value).toFixed(2) + unit.symbol;
        }
    }

    return num.toFixed(2);
}



async function fetchData() {
    const urlParts = window.location.pathname.split("/");
    if (urlParts[1] != "uco-token") return;

    const ucoPriceElements = document.getElementsByClassName('uco-price');
    const marketCapElements = document.getElementsByClassName('market-cap');
    const circulatingSupplyElements = document.getElementsByClassName('circulating-supply');
    const totalSupplyElements = document.getElementsByClassName('total-supply');


    const archethicSupplyElements = document.getElementsByClassName('archithic-supply');
    const ethSupplyElements = document.getElementsByClassName('eth-supply');
    const polygonSupplyElements = document.getElementsByClassName('polygon-supply');
    const bnbSupplyElements = document.getElementsByClassName('bnb-supply');

    const archethicBridgeWallet = document.getElementsByClassName('archethic-bridge-wallet');
    const archethicBurnWallet = document.getElementsByClassName('archethic-burn-wallet');

    const archethicNotMintedUCO = document.getElementsByClassName('archethic-not-minted-uco');
    const archethicMintedUCO = document.getElementsByClassName('archethic-minted-uco');

    showSpinner(ucoPriceElements);
    showSpinner(marketCapElements);
    showSpinner(circulatingSupplyElements);
    showSpinner(totalSupplyElements);

    showSpinner(archethicSupplyElements);
    showSpinner(ethSupplyElements);
    showSpinner(polygonSupplyElements);
    showSpinner(bnbSupplyElements);

    showSpinner(archethicBridgeWallet);
    showSpinner(archethicBurnWallet);

    showSpinner(archethicNotMintedUCO);
    showSpinner(archethicMintedUCO);

    try {
        const [
            currentPrice,
            //     circulatingSupply,
            totalSupply,
            walletsSupply,

        ] = await Promise.all([
            fetchUcoPriceData(),
            //   fetchCirculatingData(),
            fetchTotalData(),
            fetchWalletsData(),
        ]);



        const circulatingSupply = walletsSupply?.bnb + walletsSupply?.pol + walletsSupply?.eth + walletsSupply?.circulating_supply;


        const marketCap = currentPrice * circulatingSupply;
        const formattedMarketCap = formatNumber(marketCap / 100000000);

        updateElements(ucoPriceElements, currentPrice, price => '$' + price.toFixed(6));
        updateElements(marketCapElements, marketCap, cap => '$' + formattedMarketCap);


        updateElements(circulatingSupplyElements, (circulatingSupply), supply => (supply / 100000000000000).toFixed(2) + "M");

        updateElements(totalSupplyElements, totalSupply, supply => (supply / 1000000).toFixed(2) + "M");
        updateElements(archethicSupplyElements, walletsSupply?.circulating_supply, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(ethSupplyElements, walletsSupply?.eth, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(polygonSupplyElements, walletsSupply?.pol, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(bnbSupplyElements, walletsSupply?.bnb, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(archethicBridgeWallet, walletsSupply?.bridge_wallet, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(archethicBurnWallet, walletsSupply?.burn_wallet, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(archethicNotMintedUCO, walletsSupply?.not_minted_uco, supply => (supply / 100000000000000).toFixed(2) + "M");
        updateElements(archethicMintedUCO, walletsSupply?.minted_uco, supply => (supply / 100000000000000).toFixed(2) + "M");

    } catch (error) {
        updateElements(ucoPriceElements);
        updateElements(marketCapElements);
        updateElements(circulatingSupplyElements);
        updateElements(totalSupplyElements);
        updateElements(archethicSupplyElements);
        updateElements(ethSupplyElements);
        updateElements(polygonSupplyElements);
        updateElements(bnbSupplyElements);
        updateElements(archethicBridgeWallet);
        updateElements(archethicBurnWallet);
        updateElements(archethicNotMintedUCO);
        updateElements(archethicMintedUCO);

    }
}


document.addEventListener('DOMContentLoaded', fetchData);







let blinkInterval;

function startBlink(text) {
    blinkInterval = setInterval(() => {
        text.style.visibility = (text.style.visibility === 'hidden') ? 'visible' : 'hidden';
    }, 500);
}

function stopBlink(text) {
    clearInterval(blinkInterval);
    text.style.visibility = 'visible';
}


function updateProgress(value, message = "Loading...") {
    const progressBar = document.getElementById('progress-bar');
    const progressText = document.getElementById('progress-text');

    progressBar.style.width = value + '%';
    progressText.textContent = `${message} ${value}%`;
}




async function deploySiteInit() {

    if (  document.getElementById('deployBtn') != undefined)
    document.getElementById('deployBtn').addEventListener('click', async () => {

        let processingStep = 1;
        const log = document.getElementById('log');
        log.style.display = 'block';

        const progressContainer = document.getElementById('progress-container');
        progressContainer.style.visibility = 'visible';

        const btDeploy = document.getElementById('deployBtn');
        btDeploy.style.visibility = 'hidden';

        const toDeployLabel = document.getElementById('toDeployLabel');
        toDeployLabel.style.display = 'none';

        const viewWebSiteBtn = document.getElementById('viewWebSiteBtn');
        viewWebSiteBtn.style.display = 'none';

        startBlink(log)
        log.innerHTML = '<br>Request web site deployment...';


        try {
            const res = await fetch('https://ae-deploy-button.vercel.app/api/deploy', { method: 'POST' });
            const data = await res.json();

            if (!res.ok && data.error) {
                log.textContent = '❌ Erreur : ' + data.error;
                btDeploy.style.display = 'block';
                toDeployLabel.style.display = 'block';
                log.style.display = 'none';
                return;
            }

            const { runId, html_url } = data.log;
            log.innerHTML = `<br>Request accepted with ID: ${runId}`;

            const interval = setInterval(async () => {
                const statusRes = await fetch(`https://ae-deploy-button.vercel.app/api/status?runId=${runId}`);
                const statusData = await statusRes.json();



                if (progress >= 100) {
                    progress = 0
                    processingStep++
                }
                const randomNumber = Math.floor(Math.random() * 3) + 1;

                if ( (progress +  randomNumber) < 100) {
                     progress += randomNumber;
                }
               else  progress = 100;


                updateProgress(progress, "Processing - step #" + processingStep+ " : ");
 
                if (statusData.status == 'in_progress')   log.innerHTML = `<br>`;
                if (statusData.status === 'completed') {
                    clearInterval(interval);
                    progress = 100;
                    updateProgress(progress, "Completed");
   
                    stopBlink(log)
                    log.style.display = 'block';
                   

                    if (statusData.website_url) {

                        log.innerHTML = `<br>`; //🌐 Bingo!, the site is ready`
                        viewWebSiteBtn.style.display = 'block';
                        btDeploy.style.display = 'none';
                      
                        viewWebSiteBtn.href = statusData.website_url;
 
                    }



                }
            }, 300);
        }
        catch (e) {
            log.textContent = '❌ Erreur : ' + data.error;
        }

    });
}

document.addEventListener('DOMContentLoaded', deploySiteInit);




