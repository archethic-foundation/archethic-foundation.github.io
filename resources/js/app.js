import './bootstrap';

// Components
import './components/cold_wallet-video';
import './components/copy-to-clipboard';
import './components/slider-partners';
import './components/sticky-header';
import './components/teamSlider';
import './components/tokenomics-chart';
import './components/video-vidalytics';

// Data
import { showSpinner, updateElements } from './data/domUtils';
import { fetchCirculatingData, fetchTotalData } from './data/supplyData';
import { fetchUcoPriceData } from './data/ucoPriceData';

async function fetchData() {
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
            fetchTotalData(),
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