<x-layout :title="$title">
    {{-- @dd($promotion) --}}
    <div class="grid grid-cols-1 mb-5  lg:grid-cols-2 gap-4 bg-[#3B82F6] m-0 py-0 px-5">
        <section class=" dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl">
                <div class="flex flex-col justify-center text-center">
                    <h1
                        class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl dark:text-white">
                        Solusi Digital dan Cloud Terintegrasi untuk Masa Depan Bisnis Anda
                    </h1>
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl dark:text-gray-400">
                        Inovasoft membantu perusahaan bertumbuh melalui layanan cloud, pengembangan
                        sistem, dan teknologi inovatif. Kami percaya bahwa transformasi digital yang tepat akan
                        meningkatkan efisiensi, daya saing, dan pertumbuhan jangka panjang.
                    </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 justify-center">
                        <a href="/service"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Jelajahi Layanan Kami
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">

                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />

                            </svg>
                        </a>
                        <a href="/about"
                            class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Tentang Inovasoft
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div id="default-carousel" class="relative w-full my-auto pb-5 lg:pb-0" data-carousel="slide">
            <div class="relative z-0 h-56 overflow-hidden  rounded-lg md:h-96">
                @foreach ($promotion as $items)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/' . $items->image) }}" class="absolute block w-full "
                            alt="...">
                    </div>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>


    <x-layout_services :services="$services"></x-layout_services>
    <div class="flex items-center justify-center mb-4 rounded-sm my-5">
        <x-pagination :items="$services"></x-pagination>
    </div>
    <x-layout_services_information></x-layout_services_information>

    <div class="flex items-center justify-center mb-4 rounded-sm my-5">
        <div class="p-4  rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <div
                class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-blue-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">120+</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Project Selesai</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">50+</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Klien Perusahaan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">99%</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Kepuasan Klien</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">24/7</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Dukungan Layanan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">10+</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Tahun Pengalaman</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">20+</dt>
                    <dd class="text-blue-900 dark:text-gray-400">Tim Profesional</dd>
                </div>
            </div>
        </div>
    </div>


    <section class="py-12 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-blue-900 text-center mb-8">Apa Kata Klien Kami</h2>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($testimonial as $item)
                    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center space-x-4 mb-4">
                                @if ($item->photo)
                                    <img class="w-14 h-14 rounded-full object-cover"
                                        src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}">
                                @else
                                    <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">

                                            <path fill-rule="evenodd"
                                                d="M10 10a4 4 0 100-8 4 4 0 000 8zm-6 8a6 6 0 0112 0H4z"
                                                clip-rule="evenodd" />

                                        </svg>
                                    </div>
                                @endif

                                <div>
                                    <p class="text-lg font-semibold text-blue-900">
                                        {{ $item->name }}</p>
                                    <p class="text-sm text-blue-900">
                                        {{ $item->position ?? 'Client' }} at {{ $item->company }}</p>
                                </div>
                            </div>

                            <p class="text-blue-900 italic">"{{ $item->message }}"</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
