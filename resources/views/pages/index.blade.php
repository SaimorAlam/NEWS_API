@extends('layouts.master')
@section('title', 'Home')

@section('content')
<!-- Landing Page -->
    <section id="news-card">
        <div class="container flex flex-wrap justify-center">
            @foreach ($articles as $item)
            
                <div class="card flex-col justify-center w-1/4 h-2/4 my-10 mx-7 rounded-xl bg-white shadow-lg">
                    <div class="image w-auto h-65 relative object-cover">
                        <img src="{{ $item['urlToImage'] }}" class="rounded-xl" alt="">
                    </div>
                    <div class="info">
                        <div class="content w-auto text-center h-auto py-8 px-5 font-roboto font-normal">
                            <h1 class="pt-2 pb-3 font-medium text-red-500 h-14 overflow-hidden">{{ $item['title'] }}</h1>
                            <p class="h-32 my-2 py-2 overflow-hidden">{{ $item['description'] }}
                            </p>
                            <span class="">{{ $item['author'] }}</span>
                        </div>
                        <div class="btn bg-red-700 text-right w-32 my-7 ml-36 mr-6 py-1 px-4 rounded-full">
                            <form action="{{ route('news') }}" method="get" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="article-title" value="{{ $item['title']}}">
                                <input type="hidden" name="article-author" value="{{ $item['author']}}">
                                <input type="hidden" name="article-published" value="{{ $item['publishedAt']}}">
                                <input type="hidden" name="article-image" value="{{ $item['urlToImage']}}">
                                <input type="hidden" name="article-content" value="{{ $item['content']}}">
                                <button class="" type="submit">Read more &#8594;</button>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
<!-- Landing Page -->
@endsection

@section('scripts')
<!--Landing Page Script -->
<script>
    
</script>
@endsection
