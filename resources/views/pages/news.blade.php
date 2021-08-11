@extends('layouts.master')
@section('title', 'News')

@section('content')
<!-- Single News -->
    <div class="container article px-40">
        <div class="article-title text-4xl font-josefin font-bold text-black pt-4">
            <h1 class="">{{ $articles['title'] }}</h1>
        </div>
        <div class="article-byline py-4 flex">
            <div class="article-author">{{ $articles['author'] }}</div>
            <span class="px-2"> / </span>
            <div class="article-published">
            {{ date('jS M Y', strtotime($articles['published'])) }}</div>
        </div>
        <div class="article-image w-auto relative object-cover float-left pr-6 pb-6">
            <img src="{{ $articles['image'] }}" class="h-96" alt="Article Image">
        </div>
        <div class="article-content font-roboto">
            <p>{{ $articles['content'] }}</p>
        </div>

    </div>
<!-- Single News -->
@endsection

@section('scripts')
<!--Landing Page Script -->
<script>
    
</script>
@endsection
