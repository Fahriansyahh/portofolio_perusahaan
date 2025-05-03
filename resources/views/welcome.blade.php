<x-layout :title="$title">
    {{-- @dd($promotion) --}}
    <div class="grid grid-cols-1  lg:grid-cols-2 gap-4 mb-4">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl">
                <div class="flex flex-col justify-center text-center">
                    <h1
                        class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-white">
                        Solusi Digital dan Cloud Terintegrasi untuk Masa Depan Bisnis Anda
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
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


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden  rounded-lg md:h-96">
                @foreach ($promotion as $items)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/' . $items->image) }}" class="absolute block w-full "
                            alt="...">
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
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
    <div class="flex items-center justify-center mb-4 rounded-sm my-5">
        <section class="bg-white dark:bg-gray-900 antialiased" id="pagination">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                <div class="max-w-2xl mx-auto text-center">
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Layanan Kami
                    </h2>
                    <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                        Dirancang dengan keahlian dan perhatian untuk membantu klien kami mengembangkan bisnis mereka!
                    </p>
                </div>

                <div
                    class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($services as $service)
                        <div class="space-y-4">
                            <img src="{{ $service->image ? asset('storage/' . $service->image) : '/docs/images/blog/image-1.jpg' }}"
                                class="w-full h-50 max-w-xl rounded-lg" alt="image description">

                            <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                                {{ $service->title }}
                            </h3>

                            <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                {{ \Illuminate\Support\Str::words($service->description, 20, '...') }}
                                <a href="/service/{{ $service->id }}" class="text-blue-500 hover:text-blue-700 ml-1">
                                    Selengkapnya
                                </a>
                            </p>
                        </div>
                    @endforeach

                </div>
            </div </section>
    </div>
    <div class="flex items-center justify-center mb-4 rounded-sm my-5">
        <x-pagination :items="$services"></x-pagination>
    </div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">

                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Kenapa Memilih
                    Layanan Kami?</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                    Dengan pengalaman dan keahlian kami, Anda mendapatkan solusi terbaik untuk kebutuhan bisnis Anda.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Keuntungan 1: Desain Berkualitas -->
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#"
                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Desain Berkualitas
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                        Desain yang Menarik dan Profesional
                    </h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                        Layanan desain kami memastikan website Anda tidak hanya menarik, tetapi juga memudahkan
                        pengunjung untuk
                        menavigasi dan menemukan informasi dengan cepat.
                    </p>

                </div>

                <!-- Keuntungan 2: Teknologi Terdepan -->
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#"
                        class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                        </svg>
                        Teknologi Terdepan
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                        Menggunakan Teknologi Terbaru dan Terbaik
                    </h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                        Kami menggunakan teknologi terbaru untuk memastikan website Anda cepat, responsif, dan aman bagi
                        pengunjung.
                    </p>

                </div>


            </div>
        </div>
    </section>
    <div class="flex items-center justify-center mb-4 rounded-sm my-5">
        <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
            aria-labelledby="stats-tab">
            <div
                class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">120+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Project Selesai</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">50+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Klien Perusahaan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">99%</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Kepuasan Klien</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">24/7</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Dukungan Layanan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">10+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Tahun Pengalaman</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">20+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Tim Profesional</dd>
                </div>
            </div>
        </div>
    </div>


    <section class="py-12 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Apa Kata Klien Kami</h2>

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
                                    <p class="text-lg font-semibold text-gray-900">
                                        {{ $item->name }}</p>
                                    <p class="text-sm text-gray-500">
                                        {{ $item->position ?? 'Client' }} at {{ $item->company }}</p>
                                </div>
                            </div>

                            <p class="text-gray-700 italic">"{{ $item->message }}"</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
