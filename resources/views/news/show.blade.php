<x-app-layout>
    {{-- Background diganti ke off-white/warm gray agar lebih lembut di mata --}}
    <div class="py-16 bg-[#FDFBF7] min-h-screen">
        
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- 1. HEADER SECTION (Centered & Clean) --}}
            <div class="text-center mb-10">
                {{-- Kategori / Tanggal (Uppercase & Tracking Wide) --}}
                <div class="flex items-center justify-center space-x-2 text-xs font-bold tracking-widest text-gray-500 uppercase mb-4">
                    <span class="text-indigo-600">News</span>
                    <span>&bull;</span>
                    <span>{{ $news->created_at->format('F d, Y') }}</span>
                </div>

                {{-- Judul dengan Font Serif (Kunci Elegan) --}}
                <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    {{ $news->title }}
                </h1>

                {{-- Author avatar kecil (Optional) --}}
                <div class="flex justify-center items-center space-x-2">
                    <div class="h-px w-8 bg-gray-300"></div>
                    <span class="text-sm text-gray-600 italic">By Admin</span>
                    <div class="h-px w-8 bg-gray-300"></div>
                </div>
            </div>

            {{-- 2. IMAGE SECTION (With elegant shadow) --}}
            <div class="relative mb-12 group">
                <div class="absolute -inset-1 bg-gradient-to-r from-gray-200 to-indigo-100 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative rounded-xl overflow-hidden shadow-2xl ring-1 ring-gray-900/5 aspect-[16/9]">
                    <img src="{{ asset('storage/' . $news->image) }}" 
                         alt="{{ $news->title }}" 
                         class="w-full h-full object-cover transform hover:scale-[1.02] transition-transform duration-700 ease-out">
                </div>
                {{-- Caption Gambar (Optional) --}}
                <div class="mt-3 text-center">
                    <p class="text-xs text-gray-400 italic">{{ $news->title }} illustration</p>
                </div>
            </div>

            {{-- 3. CONTENT SECTION --}}
            <div class="bg-white p-8 md:p-12 rounded-lg shadow-sm border border-gray-100">
                {{-- Dropcap Style pada paragraf pertama biasanya menambah kesan elegan --}}
                <article class="prose prose-lg prose-stone mx-auto 
                                prose-headings:font-serif prose-headings:font-bold 
                                prose-p:text-gray-600 prose-p:leading-8 
                                prose-a:text-indigo-600 prose-a:no-underline hover:prose-a:underline
                                prose-img:rounded-lg first-letter:text-5xl first-letter:font-serif first-letter:font-bold first-letter:text-gray-900 first-letter:mr-3 first-letter:float-left">
                    {!! $news->content !!}
                </article>

                {{-- Footer Artikel / Tags --}}
                <div class="mt-12 pt-8 border-t border-gray-100 flex justify-between items-center">
                    <a href="{{ route('home') }}" class="group inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-600 transition-colors">
                        <svg class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali ke Beranda
                    </a>
                    
                    {{-- Share Buttons (Dummy Layout) --}}
                    <div class="flex space-x-3 text-gray-400">
                        <button class="hover:text-gray-600 transition"><i class="fas fa-share-alt"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>