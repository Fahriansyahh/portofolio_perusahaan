<x-layout :title="$title">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Solusi Digital & Cloud untuk Masa Depan Bisnismu
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Di Inovasoft, kami membantu bisnis dan individu berkembang melalui layanan digital modern, cloud
                solutions,
                dan pengembangan perangkat lunak yang fleksibel, efisien, dan scalable.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Mulai Sekarang
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="py-3 px-5 sm:ms-4 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg border border-green-600 hover:bg-green-600 hover:text-white focus:z-10 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-700 dark:bg-green-600 dark:text-white dark:border-green-500 dark:hover:bg-green-700">
                    Hubungi via WhatsApp
                </a>

            </div>
        </div>

    </section>
    <div class="grid sm:grid-cols-2 gap-4 mb-4">
        <div id="gallery" class="relative w-full " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-98">
                @foreach ($services as $key => $service)
                    @foreach ($service->promotions as $promotion)
                        <!-- Mengakses promosi terkait dari setiap service -->
                        <div class="{{ $key == 0 ? '' : 'hidden' }} duration-700 ease-in-out"
                            {{ $key == 0 ? 'data-carousel-item="active"' : 'data-carousel-item' }}>

                            <!-- Membuat gambar bisa diklik dan mengarah ke link promosi -->
                            <a href="service/{{ $service->id }}" target="_blank">
                                <img src="{{ asset('storage/' . $promotion->image) }}"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="Promotion {{ $key + 1 }}">
                            </a>
                        </div>
                    @endforeach
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
        <div>
            <h2 class="text-4xl font-extrabold dark:text-white">Solusi Pembayaran untuk Perusahaan</h2>
            <p class="my-4 text-lg text-gray-500">Mulai kembangkan dengan pustaka sumber terbuka yang terdiri dari lebih
                dari 450+ komponen UI,
                bagian, dan halaman yang dibangun dengan kelas utilitas dari Tailwind CSS dan dirancang di Figma.</p>
            <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Berikan pengalaman layanan yang luar
                biasa dengan cepat
                - tanpa kompleksitas solusi ITSM tradisional. Percepat pekerjaan pengembangan kritis, hilangkan
                pekerjaan berulang,
                dan terapkan perubahan dengan mudah.</p>
        </div>



    </div>
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

            <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
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
        </div>
    </section>
    <div class="flex items-center justify-center mb-4 rounded-sm ">
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




</x-layout>
