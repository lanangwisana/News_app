<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg overflow-hidden">
    <img class="w-full h-48 object-cover" src="{{ $image }}" alt="{{ $title }}">
    <div class="p-4 flex flex-col flex-1 overflow-hidden">
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
        <div class="text-gray-600 flex-1 mb-4 overflow-y-auto">
            <p class="leading-relaxed">{{ $description }}</p>
        </div>
        <a href="{{ $url }}" target="_blank"
        class="inline-block px-4 py-2 bg-emerald-500 text-white rounded hover:bg-emerald-700 text-sm">
        Read more →
        </a>
        <h6>{{ $publishedAt }}</h6>
    </div>
</div>