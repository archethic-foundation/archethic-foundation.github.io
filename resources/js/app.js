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


function formatLastUpdated(date, lang = 'en', full= true) {

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
    const pageId = urlParts[urlParts.length - 1];
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
                content += `<a href="/questions-responses/${articles[j].id}" class="w-100  heading-title text-left mb-1 mt-1 mt-md-0 mb-md-1 pt-md-1 px-3 px-md-5 text-shadow d-flex flex-row cursor-pointer hover-opacity" role="region"`
                content += 'aria-labelledby="vision-mission-title vision-mission-desc" data-aos="fade-up" data-aos-delay="50">'
                content += '<p id="vision-mission-desc" class="w-100 bg-light d-inline-block px-4 py-3 rounded text-lg ">'
                content += '<span>' + articles[j].title_en + '<br><small class="text-right text-xs w-100 fw-normal">'+formatLastUpdated(articles[j]?.updated_at, 'en')+'</small></span>'
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


async function fetchData() {
    const urlParts = window.location.pathname.split("/");
    if (urlParts[1] != "uco-token") return;

    const ucoPriceElements = document.getElementsByClassName('uco-price');
    const marketCapElements = document.getElementsByClassName('market-cap');
    const circulatingSupplyElements = document.getElementsByClassName('circulating-supply');
    const totalSupplyElements = document.getElementsByClassName('total-supply');
    showSpinner(ucoPriceElements);
    showSpinner(marketCapElements);
    showSpinner(circulatingSupplyElements);
    showSpinner(totalSupplyElements);
    try {
        const [
            currentPrice,
            circulatingSupply,
            totalSupply,

            tvl
        ] = await Promise.all([
            fetchUcoPriceData(),
            fetchCirculatingData(),
            fetchTotalData()
        ]);

        const marketCap = currentPrice * circulatingSupply;
        const formattedMarketCap = (marketCap / 1000000).toFixed(2) + "M";

        updateElements(ucoPriceElements, currentPrice, price => '$' + price.toFixed(6));
        updateElements(marketCapElements, marketCap, cap => '$' + formattedMarketCap);
        updateElements(circulatingSupplyElements, circulatingSupply, supply => (supply / 1000000).toFixed(2) + "M");
        updateElements(totalSupplyElements, totalSupply, supply => (supply / 1000000).toFixed(0) + "M");

    } catch (error) {
        updateElements(ucoPriceElements);
        updateElements(marketCapElements);
        updateElements(circulatingSupplyElements);
        updateElements(totalSupplyElements);
    }
}


document.addEventListener('DOMContentLoaded', fetchData);