<x-news-layout> 
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-500 py-4 bg-white/90 backdrop-blur-md border-b border-gray-100/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <a href="/" class="flex items-center gap-2 group">
                    <div class="font-serif-display font-bold text-2xl text-gray-900 tracking-widest group-hover:opacity-80 transition">
                        ART<span class="text-[#b8860b]">KUNO</span>
                    </div>
                </a>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2 bg-[#b8860b] text-white rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#9a7009] transition shadow-md hover:shadow-lg">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-900 font-bold text-xs uppercase tracking-wider hidden sm:block hover:text-[#b8860b] transition">Log In</a>
                        <a href="{{ route('register') }}" class="px-6 py-2 border border-[#b8860b] text-[#b8860b] rounded-full font-bold text-xs uppercase tracking-wider hover:bg-[#b8860b] hover:text-white transition">
                            Join
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-32 pb-20 bg-texture min-h-screen">
        <div class="max-w-4xl mx-auto px-6 text-center mb-12">
            
            <div class="flex items-center justify-center space-x-3 text-xs font-bold tracking-[0.2em] text-[#b8860b] uppercase mb-6 opacity-0 animate-fade-in-up" style="animation-delay: 0.1s; animation-fill-mode: forwards;">
                <span>News</span>
                <span class="text-gray-300">&mdash;</span>
                <span>{{ $news->created_at->format('F d, Y') }}</span>
            </div>

            <h1 class="font-serif-display text-4xl md:text-6xl font-medium text-gray-900 leading-[1.15] mb-8 opacity-0 animate-fade-in-up" style="animation-delay: 0.3s; animation-fill-mode: forwards;">
                {{ $news->title }}
            </h1>

            <div class="flex justify-center items-center space-x-4 opacity-0 animate-fade-in-up" style="animation-delay: 0.5s; animation-fill-mode: forwards;">
                <div class="h-px w-12 bg-gray-300"></div>
                <span class="font-serif-body italic text-gray-500 text-sm">Curated by Admin</span>
                <div class="h-px w-12 bg-gray-300"></div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 opacity-0 animate-fade-in-up" style="animation-delay: 0.7s; animation-fill-mode: forwards;">
            <div class="relative group">
                <div class="absolute -inset-2 bg-gradient-to-tr from-[#b8860b]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-700 blur-lg rounded-xl"></div>
                
                <div class="relative rounded-sm overflow-hidden shadow-2xl aspect-[21/9]">
                    <img src="{{ asset('storage/' . $news->image) }}" 
                         alt="{{ $news->title }}" 
                         class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-[1.5s] ease-out">
                </div>
                
                <div class="mt-4 text-center">
                    <p class="font-serif-body text-xs text-gray-400 italic">{{ $news->title }} &mdash; Featured Collection</p>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto px-6 opacity-0 animate-fade-in-up" style="animation-delay: 0.9s; animation-fill-mode: forwards;">
            
            <article class="prose prose-lg prose-stone mx-auto 
                font-serif-body text-gray-700 leading-loose
                prose-headings:font-serif-display prose-headings:font-normal prose-headings:text-gray-900
                prose-a:text-[#b8860b] prose-a:no-underline hover:prose-a:underline
                prose-blockquote:border-l-[#b8860b] prose-blockquote:bg-gray-50 prose-blockquote:py-2 prose-blockquote:px-4 prose-blockquote:italic
                prose-img:rounded-sm prose-img:shadow-lg
                
                /* Drop Cap Styling (Huruf pertama besar elegan) */
                first-letter:text-6xl first-letter:font-serif-display first-letter:text-gray-900 first-letter:mr-3 first-letter:float-left first-letter:leading-none">
                
                {!! $news->content !!}
                
            </article>

            <div class="mt-16 pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center gap-6">
                <a href="{{ route('home') }}" class="group inline-flex items-center text-sm font-medium text-gray-500 hover:text-[#b8860b] transition-colors uppercase tracking-widest">
                    <svg class="w-4 h-4 mr-3 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Journal
                </a>

                <div class="flex space-x-6">
                    <button class="text-gray-400 hover:text-[#b8860b] transition transform hover:-translate-y-1"><i class="fab fa-facebook-f"></i></button>
                    <button class="text-gray-400 hover:text-[#b8860b] transition transform hover:-translate-y-1"><i class="fab fa-twitter"></i></button>
                    <button class="text-gray-400 hover:text-[#b8860b] transition transform hover:-translate-y-1"><i class="fab fa-whatsapp"></i></button>
                </div>
            </div>

        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation-name: fadeInUp;
            animation-duration: 0.8s;
            animation-timing-function: ease-out;
        }
    </style>
</x-news-layout>
