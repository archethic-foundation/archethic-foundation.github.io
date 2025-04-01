@extends('layouts.app')

<!-- SEO-->
@section('title', 'Page not found')
@section('meta_description')
@section('meta_robots', 'noindex, nofollow')

@section('content')

<main class="d-flex align-items-center justify-content-center" style="height: 80vh; margin-top:73px;">
    <div class="container">
        <div class="text-center">
            <h1>The page you are looking for doesn't exist or has been moved.</h1>
            <a href="/" class="btn btn-primary mt-4">Go back to home</a>
        </div>
    </div>
</main>
@endsection