document.getElementById('deployBtn').addEventListener('click', async () => {
    const log = document.getElementById('log');
    log.textContent = 'Request to depoy the web site ...';


    try {
        const res = await fetch('https://ae-deploy-button.vercel.app/api/deploy', { method: 'POST' });
        const data = await res.json();




        if (!res.ok && data.error) {
            log.textContent = '❌ Erreur : ' + data.error;
            return;
        }


        const { runId, html_url } = data.log;
        log.textContent = `🚀 Déploiement lancé (run ID: ${runId})`;

        const interval = setInterval(async () => {
            const statusRes = await fetch(`/api/status?runId=${runId}`);
            const statusData = await statusRes.json();

            console.log(statusData)

            log.textContent = `🕒 Statut: ${statusData.status}\nConclusion: ${statusData.conclusion || 'en attente...'}`;

            if (statusData.status === 'completed') {
                clearInterval(interval);
                //  log.innerHTML += `\n🔍 <a href="${statusData.html_url}" target="_blank">Voir sur GitHub</a>`;

                if (statusData.website_url) {
                    log.innerHTML += `\n🌐 Site publié : <a href="${statusData.website_url}" target="_blank">View </a>`;
                }



            }
        }, 3000);
    }
    catch (e) {
        log.textContent = '❌ Erreur : ' + data.error;
    }




});