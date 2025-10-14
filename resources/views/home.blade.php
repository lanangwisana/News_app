<div>
    @extends('layout.master')
    @section('content')
        <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Top Headlines</h1>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($articles as $art)
            <x-news-card
            :image="$art['image'] ?? 'https://via.placeholder.com/400x200'"
            :title="$art['title']"
            :description="$art['description']"
            :url="$art['url']"
            :publishedAt="date('F j, Y, g:i a', strtotime($art['publishedAt']))"
            />
        @endforeach
        </div>
    </div>
    @endsection
</div>
{{-- flex justify-center m-4 max-w-auto --}}