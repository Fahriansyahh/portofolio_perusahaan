@php
    $currentPage = $items->currentPage();
    $lastPage = $items->lastPage();
    $groupSize = 5;

    // Hitung grup sekarang
    $currentGroup = ceil($currentPage / $groupSize);
    $start = ($currentGroup - 1) * $groupSize + 1;
    $end = min($start + $groupSize - 1, $lastPage);
@endphp

<nav class="mx-5 my-2 bg-blue-100 flex justify-self-start md:justify-self-start lg:justify-self-end m-3"
    aria-label="Page navigation">
    <ul class="inline-flex -space-x-px text-sm">

        {{-- Tombol Previous Group --}}
        @if ($start > 1)
            <li>
                <a href="{{ $items->url($start - 1) }}#pagination"
                    class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
            </li>
        @else
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 text-gray-400 bg-gray-100 border border-e-0 border-gray-300 rounded-s-lg cursor-not-allowed">Previous</span>
            </li>
        @endif

        {{-- Nomor Halaman berdasarkan grup --}}
        @for ($i = $start; $i <= $end; $i++)
            <li>
                <a href="{{ $items->url($i) }}#pagination"
                    class="flex items-center justify-center px-3 h-8 border border-gray-300
                   {{ $i == $currentPage
                       ? 'text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700'
                       : 'text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor

        {{-- Tombol Next Group --}}
        @if ($end < $lastPage)
            <li>
                <a href="{{ $items->url($end + 1) }}#pagination"
                    class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
            </li>
        @else
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 text-gray-400 bg-gray-100 border border-gray-300 rounded-e-lg cursor-not-allowed">Next</span>
            </li>
        @endif

    </ul>
</nav>
