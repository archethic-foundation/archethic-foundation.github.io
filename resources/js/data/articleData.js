

export async function fetchArticleData(id) {
    const response = await fetch(`https://archethic-articles.vercel.app/questions/${id}`);
    if (!response.ok) {
        throw new Error(`Fetch failed: ${response.status}`);
    }
    const data = await response.json();
    return data
}




export async function fetchArticlesData(id) {

    
    const response = await fetch("https://archethic-articles.vercel.app/questions");
    if (!response.ok) {
        throw new Error(`Fetch failed: ${response.status}`);
    }
    const data = await response.json();
    return data
}