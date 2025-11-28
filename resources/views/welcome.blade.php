<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang Antik - Royal Auction House</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom Fonts */
        .font-royal { font-family: 'Cinzel', serif; }
        .font-body { font-family: 'Lato', sans-serif; }
        
        /* Custom Colors */
        .bg-emerald-royal { background-color: #064e3b; } /* Hijau Tua Mewah */
        .text-emerald-royal { color: #064e3b; }
        .bg-cream { background-color: #fdfbf7; } /* Krem hangat pengganti putih */
        .text-gold { color: #d97706; } /* Emas */
        .bg-gold { background-color: #d97706; }
        .border-gold { border-color: #d97706; }
        
        /* Gradient Text */
        .text-gradient-gold {
            background: linear-gradient(to right, #b45309, #d97706, #fcd34d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Card Hover Effect */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="font-body bg-cream text-gray-800 antialiased">

    <nav class="fixed w-full z-50 bg-emerald-royal shadow-lg border-b border-yellow-600/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="bg-white p-2 rounded-full">
                        <i class="fas fa-gavel text-emerald-royal text-xl"></i>
                    </div>
                    <a href="/" class="font-royal font-bold text-2xl text-white tracking-widest">
                        ROYAL<span class="text-yellow-400">BID.</span>
                    </a>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="text-gray-200 hover:text-yellow-400 font-bold transition uppercase text-xs tracking-wider">Beranda</a>
                    <a href="#collection" class="text-gray-200 hover:text-yellow-400 font-bold transition uppercase text-xs tracking-wider">Koleksi</a>
                    <a href="#about" class="text-gray-200 hover:text-yellow-400 font-bold transition uppercase text-xs tracking-wider">Tentang Kami</a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2 bg-yellow-500 text-emerald-900 rounded-full font-bold text-sm hover:bg-yellow-400 transition shadow-lg shadow-yellow-500/20">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:text-yellow-400 font-bold text-sm hidden sm:block">Log in</a>
                        <a href="{{ route('register') }}" class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 rounded-full font-bold text-sm hover:bg-yellow-500 hover:text-emerald-900 transition">
                            Daftar Sekarang
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1920&auto=format&fit=crop" 
                 class="w-full h-full object-cover" alt="Luxury Interior">
            <div class="absolute inset-0 bg-emerald-900/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-900 via-transparent to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div class="inline-block mb-4 px-4 py-1 rounded-full border border-yellow-500/50 bg-emerald-900/50 backdrop-blur-sm">
                <span class="text-yellow-400 text-xs font-bold tracking-[0.2em] uppercase">Est. 2025 • Premium Auction House</span>
            </div>
            
            <h1 class="font-royal text-5xl md:text-7xl font-bold text-white mb-6 leading-tight drop-shadow-lg">
                Temukan Keindahan <br>
                <span class="text-gradient-gold">Barang Antik & Seni</span>
            </h1>
            
            <p class="text-gray-200 text-lg md:text-xl mb-10 leading-relaxed max-w-2xl mx-auto font-light">
                Platform lelang eksklusif untuk kolektor sejati. Kami menghadirkan sejarah, seni, dan kemewahan langsung ke tangan Anda dengan sistem penawaran yang aman.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#collection" class="px-8 py-4 bg-yellow-500 text-emerald-900 rounded-full font-bold text-lg hover:bg-yellow-400 transition shadow-xl hover:shadow-yellow-500/30 transform hover:-translate-y-1">
                    Mulai Menawar <i class="fas fa-gavel ml-2"></i>
                </a>
                <a href="#about" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/30 text-white rounded-full font-bold text-lg hover:bg-white/20 transition">
                    Pelajari Cara Kerja
                </a>
            </div>

            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto border-t border-white/10 pt-8">
                <div>
                    <p class="text-3xl font-royal text-yellow-400 font-bold">1k+</p>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Barang Terjual</p>
                </div>
                <div>
                    <p class="text-3xl font-royal text-yellow-400 font-bold">500+</p>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Penjual Aktif</p>
                </div>
                <div>
                    <p class="text-3xl font-royal text-yellow-400 font-bold">100%</p>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Terverifikasi</p>
                </div>
                <div>
                    <p class="text-3xl font-royal text-yellow-400 font-bold">24/7</p>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Support</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-cream p-8 rounded-2xl border border-yellow-100 hover:border-yellow-400 transition group hover-lift">
                    <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-emerald-500 transition">
                        <i class="fas fa-shield-alt text-emerald-600 text-2xl group-hover:text-white transition"></i>
                    </div>
                    <h3 class="font-royal text-xl font-bold text-emerald-900 mb-3">Keaslian Terjamin</h3>
                    <p class="text-gray-600">Setiap barang dikurasi oleh ahli untuk memastikan nilai sejarah dan keasliannya.</p>
                </div>
                <div class="bg-cream p-8 rounded-2xl border border-yellow-100 hover:border-yellow-400 transition group hover-lift">
                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-yellow-500 transition">
                        <i class="fas fa-gavel text-yellow-600 text-2xl group-hover:text-white transition"></i>
                    </div>
                    <h3 class="font-royal text-xl font-bold text-emerald-900 mb-3">Sistem Fair Play</h3>
                    <p class="text-gray-600">Mekanisme lelang yang transparan dan aman bagi penjual maupun pembeli.</p>
                </div>
                <div class="bg-cream p-8 rounded-2xl border border-yellow-100 hover:border-yellow-400 transition group hover-lift">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-blue-500 transition">
                        <i class="fas fa-shipping-fast text-blue-600 text-2xl group-hover:text-white transition"></i>
                    </div>
                    <h3 class="font-royal text-xl font-bold text-emerald-900 mb-3">Pengiriman Aman</h3>
                    <p class="text-gray-600">Kami bekerja sama dengan logistik khusus barang seni dan antik berasuransi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="collection" class="py-24 bg-cream relative">
        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-yellow-600 font-bold uppercase tracking-widest text-sm">Sedang Berlangsung</span>
                    <h2 class="font-royal text-4xl font-bold text-emerald-900 mt-2">Koleksi Lelang Eksklusif</h2>
                </div>
                <a href="{{ route('login') }}" class="hidden md:inline-flex items-center text-emerald-700 font-bold hover:text-yellow-600 transition">
                    Lihat Semua Barang <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($auctions as $item)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover-lift group flex flex-col h-full">
                    <div class="relative h-64 overflow-hidden">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        @else
                            <img src="https://source.unsplash.com/random/400x400/?antique" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        @endif
                        
                        <div class="absolute top-3 left-3 flex gap-2">
                            <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md uppercase">
                                Live
                            </span>
                        </div>

                        <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur px-4 py-2 rounded-lg shadow-lg border-l-4 border-yellow-500">
                            <p class="text-xs text-gray-500 uppercase font-bold">Harga Saat Ini</p>
                            <p class="text-emerald-800 font-bold text-lg">Rp {{ number_format($item->start_price) }}</p>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 mb-3">
                             @if($item->user->avatar)
                                <img src="{{ asset('storage/' . $item->user->avatar) }}" class="w-8 h-8 rounded-full border border-gray-200">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($item->user->name) }}&background=random" class="w-8 h-8 rounded-full border border-gray-200">
                            @endif
                            <span class="text-xs font-bold text-gray-500 uppercase">{{ $item->user->name }}</span>
                        </div>

                        <h3 class="font-royal text-xl font-bold text-gray-800 mb-2 leading-tight group-hover:text-yellow-600 transition">
                            <a href="{{ route('bidder.auction.show', $item->id) }}">{{ $item->name }}</a>
                        </h3>
                        
                        <p class="text-gray-500 text-sm line-clamp-2 mb-4 flex-grow">{{ $item->description }}</p>

                        <a href="{{ route('bidder.auction.show', $item->id) }}" class="w-full block text-center bg-emerald-900 text-white py-3 rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg">
                            Tawar Sekarang
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-span-full text-center py-20 bg-white rounded-3xl shadow-inner border border-dashed border-gray-300">
                        <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
                        <p class="text-gray-500 text-lg font-royal">Belum ada barang lelang yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12 md:hidden">
                <a href="{{ route('login') }}" class="inline-block px-8 py-3 bg-white border border-gray-200 rounded-full font-bold text-emerald-900 shadow-sm">
                    Lihat Semua Barang
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-emerald-royal relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
        
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="font-royal text-4xl md:text-5xl font-bold text-white mb-6">Punya Barang Antik Bernilai Tinggi?</h2>
            <p class="text-emerald-100 text-lg mb-10 leading-relaxed">
                Bergabunglah dengan ribuan penjual lainnya. Kami bantu Anda menemukan pembeli yang menghargai nilai sejarah barang Anda dengan harga terbaik.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="px-10 py-4 bg-yellow-500 text-emerald-900 rounded-full font-bold text-lg hover:bg-yellow-400 transition shadow-xl hover:shadow-yellow-500/50">
                    Daftar Sebagai Penjual
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-16 border-t-4 border-yellow-600">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-yellow-500 p-2 rounded-full text-emerald-900">
                            <i class="fas fa-gavel text-xl"></i>
                        </div>
                        <span class="font-royal font-bold text-2xl tracking-widest">ROYAL<span class="text-yellow-500">BID.</span></span>
                    </div>
                    <p class="text-gray-400 max-w-sm leading-relaxed mb-6">
                        Marketplace lelang terpercaya sejak 2025. Menghubungkan kolektor dengan barang-barang bersejarah yang memiliki nilai seni tinggi.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-yellow-500 hover:text-emerald-900 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-yellow-500 hover:text-emerald-900 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-yellow-500 hover:text-emerald-900 transition"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 font-royal text-yellow-500">Tautan Cepat</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#home" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-yellow-500"></i> Beranda</a></li>
                        <li><a href="#collection" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-yellow-500"></i> Koleksi</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-yellow-500"></i> Login</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-yellow-500"></i> Daftar</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 font-royal text-yellow-500">Hubungi Kami</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-yellow-500"></i>
                            <span>Menara Heritage Lt. 12,<br>Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-yellow-500"></i>
                            <span>vip@lelangantik.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-yellow-500"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-16 pt-8 text-center text-gray-500 text-sm">
                &copy; 2025 Royal Bid Indonesia. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('components.live-chat-widget')

</body>
</html>