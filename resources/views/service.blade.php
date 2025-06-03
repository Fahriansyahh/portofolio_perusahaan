<x-layout :title="$title">
    <section class="bg-[#3B82F6] dark:bg-gray-900 ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">
                Solusi Digital & Cloud untuk Masa Depan Bisnismu
            </h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
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
    <div class="grid sm:grid-cols-2 gap-4 mt-5 mx-5">
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
        <div class="my-auto">
            <h2 class="text-4xl font-extrabold text-blue-900 dark:text-gray-400">Solusi Pembayaran untuk Perusahaan</h2>
            <p class="my-4 text-lg text-blue-900">Mulai kembangkan dengan pustaka sumber terbuka yang terdiri dari lebih
                dari 450+ komponen UI,
                bagian, dan halaman yang dibangun dengan kelas utilitas dari Tailwind CSS dan dirancang di Figma.</p>
            <p class="mb-4 text-lg font-normal text-blue-900 dark:text-gray-400">Berikan pengalaman layanan yang luar
                biasa dengan cepat
                - tanpa kompleksitas solusi ITSM tradisional. Percepat pekerjaan pengembangan kritis, hilangkan
                pekerjaan berulang,
                dan terapkan perubahan dengan mudah.</p>
        </div>



    </div>
    <x-layout_services :services="$services"></x-layout_services>
    <div class="flex items-center justify-center mb-4 rounded-sm ">
        <x-pagination :items="$services"></x-pagination>
    </div>


    <x-layout_services_information></x-layout_services_information>





</x-layout>
