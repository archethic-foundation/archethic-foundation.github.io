export async function fetchUcoPriceData() {
    const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=archethic&vs_currencies=usd');
    if (!response.ok) {
        throw new Error(`Fetch failed: ${response.status}`);
    }
    const data = await response.json();
    return data?.archethic?.usd;
}