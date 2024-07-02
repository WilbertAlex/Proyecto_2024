
<div>
    <br> <br>
    @foreach ($anillos as $anillo)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="anillos/anillo1.jpeg">
            <h1>{{ $anillo->nombre }}</h1>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"></div>
                <p class="text-gray-700 text-base">
                    {{ $anillo->descripcion }}</p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $anillo->precio }}</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
            </div>
    @endforeach
</div>



