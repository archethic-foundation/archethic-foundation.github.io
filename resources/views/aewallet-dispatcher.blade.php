@extends('layouts.app')

<!-- SEO-->
@section('title', 'aeWallet dispatcher')
@section('meta_description')
@section('meta_robots', 'noindex, nofollow')

@section('content')

<main class="d-flex align-items-center justify-content-center" style="height: 80vh; margin-top:73px;">
    <div class="container">
        <div class="text-center">
            <p class="mb-4">Opening aeWallet...</p>
            <button id="openAppDeepLink" hidden onclick="openAppDeepLink()"></button>
            <p class="mt-4">If you are not redirected automatically, <a href="https://www.archethic.net/hot-wallet" class="text-primary">click here</a>.</p>
        </div>
    </div>

    <script>

     function openAppDeepLink() {
        window.location = "aewallet://archethic.tech";
    }

    document.addEventListener('DOMContentLoaded', function() {
        var ua = navigator.userAgent + " " + navigator.vendor + " " + window.opera;
        console.log("ua", ua);
        // Check for Android
        if (/android/i.test(ua)) {
            document.getElementById('openAppDeepLink').click();
        
        }
        // Check for iOS devices
        else if (/iPad|iPhone|iPod/.test(ua) && !window.MSStream) {
            document.getElementById('openAppDeepLink').click();
         
        }
        // Check if it's likely a desktop environment (e.g., for Chrome extension)
        else if (/Chrome/.test(ua) && !/(Edge|OPR)/.test(ua)) {
            chrome.runtime.sendMessage("cbhmkogeimolnnnlflcpaapkmhmcoimh", 
                { action: "openExtensionPopup" },
                (response) => {
                    if (chrome.runtime.lastError) {
                        window.location = "https://www.archethic.net/hot-wallet";
                    }
                }
            );
        
        }

        // Fallback for other devices or if detection fails
        else {
            window.location = "https://www.archethic.net/hot-wallet";
        }

      
    });
</script>
</main>



@endsection