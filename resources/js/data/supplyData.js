export async function fetchCirculatingData() {
    try {
        const response = await fetch("https://qa21grnti3.execute-api.us-east-1.amazonaws.com/default/archethic_circulatingsupply");
        if (response.ok) {
            const data = JSON.parse(await response.text());
            const circulatingData = parseFloat(data.body);
            return circulatingData;
        } else {
            console.error(`Fetch failed: ${response.status}`);
            return 274503484.99245225;
        }
    } catch (error) {
        console.error(`Fetch failed with error: ${error}`);
        return 274503484.99245225;
    }
}

export async function fetchTotalData() {
    try {
        const response = await fetch("https://qa21grnti3.execute-api.us-east-1.amazonaws.com/default/archethic_totalsupply");
        if (response.ok) {
            const data = JSON.parse(await response.text());
            const totalData = parseFloat(data.body);
            return totalData;
        } else {
            console.error(`Fetch failed: ${response.status}`);
            return 965861930.26785046;
        }
    } catch (error) {
        console.error(`Fetch failed with error: ${error}`);
        return 965861930.26785046;
    }
}
