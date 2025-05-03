<x-layout :title="$title">
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <div class="px-2 py-8 mx-auto max-w-screen-xl">
        <article class="mx-auto w-full max-w-3xl  rounded-2xl ">
            <header class="mb-6">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white leading-tight">
                    {{ $service->title }}
                </h1>
            </header>

            @if ($service->image)
                <figure class="mb-6">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image"
                        class="w-full rounded-lg object-cover max-h-[400px] mx-auto">
                </figure>
            @endif

            <div class="space-y-4 text-gray-700 dark:text-gray-300">
                @if ($service->price_range)
                    <p><span class="font-semibold">Harga:</span> {{ $service->price_range }}</p>
                @endif

                <p><span class="font-semibold">Estimasi Waktu:</span> {{ $service->estimated_time }}</p>

                <div>
                    <h2 class="text-xl font-semibold mb-2">Deskripsi Layanan:</h2>
                    <p class="leading-relaxed">{{ $service->description }}</p>
                </div>
            </div>
            @if ($service->promotions && $service->promotions->count())
                @foreach ($service->promotions as $promotion)
                    <div class="mt-10">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">🎁 Promo Khusus untuk Anda
                        </h2>

                        {{-- Gambar Promo --}}
                        @if ($promotion->image)
                            <img src="{{ asset('storage/' . $promotion->image) }}" alt="Gambar Promo"
                                class="w-full h-64 object-cover rounded-lg mb-4">
                        @endif

                        {{-- Info Promo --}}
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $promotion->title }}</h3>
                        <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $promotion->description }}</p>

                        @if ($promotion->discount_percent)
                            <p class="mt-3 text-green-600 dark:text-green-400 font-semibold">
                                Diskon: {{ $promotion->discount_percent }}%
                            </p>
                        @endif

                        @if ($promotion->price_after_discount)
                            <p class="text-blue-600 dark:text-blue-400">
                                Harga Setelah Diskon: Rp
                                {{ number_format($promotion->price_after_discount, 0, ',', '.') }}
                            </p>
                        @endif

                        <p class="text-sm text-gray-500 mt-3">
                            Berlaku: {{ \Carbon\Carbon::parse($promotion->start_date)->translatedFormat('d M Y') }}
                            @if ($promotion->end_date)
                                - {{ \Carbon\Carbon::parse($promotion->end_date)->translatedFormat('d M Y') }}
                            @endif
                        </p>
                    </div>
                @endforeach
            @endif
            @if ($testimonial->count())
                <section class="max-w-screen-xl mx-auto px-4 py-12">
                    <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-10">
                        Apa Kata Klien Kami?
                    </h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($testimonial as $item)
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition">
                                <div class="flex items-center mb-4">
                                    @if ($item->photo)
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                            class="w-14 h-14 rounded-full object-cover mr-4">
                                    @else
                                        <div
                                            class="w-14 h-14 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center mr-4">
                                            <span class="text-xl text-gray-700 dark:text-white font-bold">
                                                {{ strtoupper(substr($item->name, 0, 1)) }}
                                            </span>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="text-gray-900 dark:text-white font-semibold">{{ $item->name }}</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ $item->position ?? '-' }} • {{ $item->company }}
                                        </p>
                                    </div>
                                </div>

                                <p class="text-gray-700 dark:text-gray-300 italic">“{{ $item->message }}”</p>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif


        </article>



    </div>







</x-layout>
