 <section class="bg-white dark:bg-gray-900 antialiased" id="pagination">
     <div class="max-w-screen-xl px-4 pt-8 mx-auto lg:px-6 sm:pt-16 lg:pt-10">
         <div class="max-w-2xl mx-auto text-center">
             <h2 class="text-3xl font-extrabold leading-tight tracking-tight  text-blue-900 sm:text-4xl dark:text-white">
                 Layanan Kami
             </h2>
             <p class="mt-4 text-base font-normal text-blue-900 sm:text-xl dark:text-gray-400">
                 Dirancang dengan keahlian dan perhatian untuk membantu klien kami mengembangkan bisnis mereka!
             </p>
         </div>

         <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
             @foreach ($services as $service)
                 <div class="space-y-4">
                     <img src="{{ $service->image ? asset('storage/' . $service->image) : '/docs/images/blog/image-1.jpg' }}"
                         class="w-full h-50 max-w-xl rounded-lg" alt="image description">

                     <h3 class="text-2xl font-bold leading-tight text-blue-900 dark:text-white">
                         {{ $service->title }}
                     </h3>

                     <p class="text-lg font-normal text-blue-900 dark:text-gray-400">
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
