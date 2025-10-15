<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg overflow-hidden h-[500px] flex flex-col">
    <img class="w-full h-48 object-cover" src="{{ $imageUrl }}" alt="{{ $title }}">
    <div class="flex flex-row">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" class="m-2"><path fill="#000000" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/></svg>
        <h6 class="text-gray-500 py-2 text-xs">{{ $pubDate }}</h6>
        <p class="text-gray-700 p-2 text-xs">
            Category:
        </p>
        <span class=" m-1 py-1 px-3 text-xs font-semibold text-white bg-emerald-700 rounded">{{ $category[0] }}</span>
    </div>
    <div class="px-4 pb-4 flex flex-col flex-1 overflow-hidden">
        <h3 class="text-lg font-bold mb-2 text-emerald-700">{{ $title }}</h3>
        <div class="text-gray-600 flex-1 mb-4 overflow-y-auto">
            <p class="leading-relaxed">{{ $description }}</p>
        </div>
        <a href="{{ $link }}" target="_blank"
            class="inline-block px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 text-sm">
            Read more →
        </a>
    </div>
</div>


