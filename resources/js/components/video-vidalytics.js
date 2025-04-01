// Check if element exists before initializing Vidalytics
function initVidalytics() {
    const vidalyticsElement = document.getElementById('vidalytics_embed_TU80FjjDiPyKeXIY');
    
    if (!vidalyticsElement) {
        console.debug('Vidalytics target element not found');
        return; // Exit if element doesn't exist
    }

    // Load required scripts in sequence
    const loadVidalytics = () => {
        const loaderScript = document.createElement('script');
        loaderScript.src = 'https://fast.vidalytics.com/embeds/4rR1bEHK/TU80FjjDiPyKeXIY/loader.min.js';
        loaderScript.async = true;

        loaderScript.onload = () => {
            const playerScript = document.createElement('script');
            playerScript.src = 'https://fast.vidalytics.com/embeds/4rR1bEHK/TU80FjjDiPyKeXIY/player.min.js';
            playerScript.async = true;

            playerScript.onload = () => {
                // Initialize Vidalytics after both scripts are loaded
                (function (v, i, d, a, l, y, t, c, s) {
                    y = '_' + d.toLowerCase();
                    c = d + 'L';
                    if (!v[d]) { v[d] = {}; }
                    if (!v[c]) { v[c] = {}; }
                    if (!v[y]) { v[y] = {}; }
                    var vl = 'Loader', vli = v[y][vl], vsl = v[c][vl + 'Script'], vlf = v[c][vl + 'Loaded'], ve = 'Embed';
                    if (!vsl) {
                        vsl = function (u, cb) {
                            if (t) { cb(); return; }
                            if (vlf) { cb(); return; }
                            vlf = 1;
                            cb();
                        };
                    }
                    vsl(l + 'loader.min.js', function () {
                        if (!vli) { var vlc = v[c][vl]; vli = new vlc(); }
                        vli.loadScript(l + 'player.min.js', function () {
                            var vec = v[d][ve];
                            t = new vec();
                            t.run(a);
                        });
                    });
                })(window, document, 'Vidalytics', 'vidalytics_embed_TU80FjjDiPyKeXIY', 'https://fast.vidalytics.com/embeds/4rR1bEHK/TU80FjjDiPyKeXIY/');
            };

            document.head.appendChild(playerScript);
        };

        document.head.appendChild(loaderScript);
    };

    // Start loading process
    loadVidalytics();
}

// Initialize when DOM is ready and if we're not on localhost
document.addEventListener('DOMContentLoaded', () => {
    if (!window.location.hostname.includes('localhost')) {
        initVidalytics();
    }
});


//VSL AIDROP 
(function (v, i, d, a, l, y, t, c, s) {
    y='_'+d.toLowerCase();c=d+'L';if(!v[d]){v[d]={};}if(!v[c]){v[c]={};}if(!v[y]){v[y]={};}
    var vl='Loader',vli=v[y][vl],vsl=v[c][vl + 'Script'],vlf=v[c][vl + 'Loaded'],ve='Embed';
    if (!vsl){
        vsl=function(u,cb){
            if(t){cb();return;}s=i.createElement("script");s.type="text/javascript";s.async=1;s.src=u;
            if(s.readyState){
                s.onreadystatechange=function(){if(s.readyState==="loaded"||s.readyState=="complete"){s.onreadystatechange=null;vlf=1;cb();}};
            }else{
                s.onload=function(){vlf=1;cb();};
            }
            i.getElementsByTagName("head")[0].appendChild(s);
        };
    }
    vsl(l+'loader.min.js',function(){
        if(!vli){
            var vlc=v[c][vl];vli=new vlc();
        }
        vli.loadScript(l+'player.min.js',function(){
            var vec=v[d][ve];
            t=new vec();
            t.run(a);
        });
    });
})(window, document, 'Vidalytics', 'vidalytics_embed_xNfhKm7CQhMPlYiP', 'https://fast.vidalytics.com/embeds/4rR1bEHK/xNfhKm7CQhMPlYiP/');