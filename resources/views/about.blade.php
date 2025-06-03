<x-layout :title="$title">

    <!-- Hero Banner -->
    <div class="flex items-center justify-center h-48 mb-4 rounded-sm">
        <h1 class="text-3xl font-bold text-blue-900 dark:text-white">Tentang Kami</h1>
    </div>

    <!-- About Section -->
    <section class="max-w-5xl mx-auto px-4 py-8 bg-white dark:bg-gray-900 rounded-lg  my-5">
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-2xl font-semibold text-blue-900 dark:text-white mb-4">Siapa Kami?</h2>
                <p class="text-blue-900 dark:text-gray-300 leading-relaxed">
                    Inovasoft adalah perusahaan freelance <strong>Cloud Solution Provider</strong>
                    yang menyediakan solusi bisnis berbasis cloud bagi korporasi. Berdiri atas dasar pengalaman puluhan
                    tahun di industri IT, kami hadir untuk mempercepat transformasi digital melalui pemanfaatan
                    teknologi cloud modern dan platform low-code/no-code.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-blue-900 dark:text-white mb-4">Apa yang Kami
                    Lakukan?</h2>
                <ul class="space-y-3 text-blue-900 dark:text-gray-300 list-disc list-inside">
                    <li>Menyediakan aplikasi bisnis siap pakai seperti CRM, Employee Self Services,
                        dan Document Management System.</li>
                    <li>Mengembangkan aplikasi custom berbasis <strong>low-code/no-code</strong>
                        (Microsoft Power Platform).</li>
                    <li>Menyediakan layanan pendukung seperti Business Intelligence dan Data
                        Warehouse.</li>
                </ul>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mt-10">
            <h3 class="text-xl font-semibold text-blue-900 dark:text-white mb-3">Nilai-Nilai Perusahaan</h3>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="p-4 bg-[#3B82F6] dark:bg-gray-800 rounded-lg shadow">
                    <h4 class="font-bold text-lg text-white dark:text-primary-400">
                        Profesionalisme</h4>
                    <p class="text-sm mt-1 text-white dark:text-gray-300">
                        Menyelesaikan proyek dengan standar tinggi dan ketepatan waktu untuk
                        membangun kepercayaan klien.
                    </p>
                </div>
                <div class="p-4 bg-[#3B82F6] dark:bg-gray-800 rounded-lg shadow">
                    <h4 class="font-bold text-lg text-white dark:text-primary-400">Inovasi
                    </h4>
                    <p class="text-sm mt-1 text-white dark:text-gray-300">
                        Terus mengeksplorasi teknologi baru untuk memberikan solusi cloud yang
                        efisien dan mutakhir.
                    </p>
                </div>
                <div class="p-4 bg-[#3B82F6] dark:bg-gray-800 rounded-lg shadow">
                    <h4 class="font-bold text-lg  text-white dark:text-primary-400">Kolaborasi
                    </h4>
                    <p class="text-sm mt-1 text-white dark:text-gray-300">
                        Bekerja sama secara terbuka dengan tim dan klien demi tercapainya hasil
                        terbaik bersama.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
