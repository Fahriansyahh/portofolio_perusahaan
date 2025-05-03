<x-layout :title="$title">

    <div class="flex items-center justify-center  mb-4 rounded-sm ">
        <section class="bg-white dark:bg-gray-900 py-12 px-4">
            <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Informasi Kontak -->
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Hubungi Kami</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Silakan hubungi kami melalui kontak berikut:
                    </p>
                    <ul class="space-y-4 text-gray-700 dark:text-gray-300">
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16.7 13.1c-.3-.2-1.7-.8-2-.9-.3-.1-.5-.2-.8.2s-.9 1-1.1 1.2c-.2.2-.4.2-.7.1-.8-.4-1.5-.7-2.1-1.3-.5-.5-.9-1.2-1.3-2-.1-.3 0-.5.1-.7.1-.2.6-.7 1.1-1.1.2-.2.3-.4.2-.7-.1-.2-.6-1.7-.9-2-.2-.3-.5-.3-.8-.3h-.6c-.2 0-.6.1-1 .5s-1.3 1.3-1.3 3.1c0 1.8 1.4 3.6 1.6 3.9.2.3 2.7 4.1 6.6 5.5.9.4 1.7.6 2.3.8.9.3 1.7.3 2.3.2.7-.1 2.1-.9 2.4-1.8.3-.9.3-1.6.2-1.8-.2-.2-.5-.4-1-.6z" />
                            </svg>
                            <a href="https://wa.me/6281234567890" target="_blank" class="hover:underline">+62
                                812-3456-7890</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 4h16v16H4V4zm8 7.5L6.5 6h11L12 11.5zm0 1.4l6-6V18H6V6l6 6.9z" />
                            </svg>
                            <a href="mailto:contact@example.com" class="hover:underline">inavasoft@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <!-- Google Maps -->
                <div>
                    <iframe class="w-full h-64 rounded-lg shadow-md"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.909249938092!2d106.8271532!3d-6.1751101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3efb7a824b7%3A0x35464856dc3e0114!2sMonas!5e0!3m2!1sen!2sid!4v1618375930579!5m2!1sen!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>

    </div>



</x-layout>
