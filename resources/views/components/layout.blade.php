<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'L\'Écrin Doré' }} - Restaurant Gastronomique</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-brand-cream text-brand-black flex flex-col min-h-screen">

    {{-- Header --}}
    <header
        class="fixed w-full z-50 bg-brand-cream/90 backdrop-blur-md border-b border-brand-black/5 transition-all duration-300">
        <div class="container mx-auto px-6 h-24 flex items-center justify-between">
            <a href="{{ route('home') }}"
                class="text-3xl font-serif text-brand-black tracking-widest uppercase hover:text-brand-gold transition-colors duration-300">
                L'Écrin Doré
            </a>

            <nav class="hidden md:flex space-x-12">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Accueil</x-nav-link>
                <x-nav-link href="{{ route('menu') }}" :active="request()->routeIs('menu')">La Carte</x-nav-link>
                <x-nav-link href="{{ route('reservation') }}"
                    :active="request()->routeIs('reservation')">Réservation</x-nav-link>
                <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">Contact</x-nav-link>
            </nav>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="md:hidden text-brand-black hover:text-brand-gold transition-colors" aria-label="Menu" aria-expanded="false">
                {{-- Hamburger icon --}}
                <svg id="icon-hamburger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                {{-- Close icon (hidden by default) --}}
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobile Menu Panel --}}
        <nav id="mobile-menu" class="md:hidden hidden border-t border-brand-black/5 bg-brand-cream/95 backdrop-blur-md">
            <div class="container mx-auto px-6 py-8 flex flex-col space-y-6">
                <a href="{{ route('home') }}"
                    class="text-lg font-serif tracking-wider {{ request()->routeIs('home') ? 'text-brand-gold' : 'text-brand-black' }} hover:text-brand-gold transition-colors">
                    Accueil
                </a>
                <a href="{{ route('menu') }}"
                    class="text-lg font-serif tracking-wider {{ request()->routeIs('menu') ? 'text-brand-gold' : 'text-brand-black' }} hover:text-brand-gold transition-colors">
                    La Carte
                </a>
                <a href="{{ route('reservation') }}"
                    class="text-lg font-serif tracking-wider {{ request()->routeIs('reservation') ? 'text-brand-gold' : 'text-brand-black' }} hover:text-brand-gold transition-colors">
                    Réservation
                </a>
                <a href="{{ route('contact') }}"
                    class="text-lg font-serif tracking-wider {{ request()->routeIs('contact') ? 'text-brand-gold' : 'text-brand-black' }} hover:text-brand-gold transition-colors">
                    Contact
                </a>
            </div>
        </nav>
    </header>

    {{-- Main Content --}}
    <main class="flex-grow pt-24">
        {{ $slot }}
    </main>

    {{-- Footer (Dark Section) --}}
    <footer class="bg-brand-dark text-white border-t border-brand-gold/20 py-20 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 text-center md:text-left">
                <div>
                    <h3 class="font-serif text-2xl text-brand-gold mb-6">L'Écrin Doré</h3>
                    <p class="text-gray-400 text-sm leading-loose max-w-xs mx-auto md:mx-0">
                        Une invitation au voyage culinaire, où chaque plat raconte une histoire de passion, de terroir
                        et d'excellence.
                    </p>
                </div>
                <div>
                    <h3 class="font-serif text-xl text-white mb-6">Contact & Horaires</h3>
                    <div class="text-gray-400 text-sm space-y-3">
                        <p>12 Avenue Montaigne, 75008 Paris</p>
                        <p>+33 1 42 68 00 00</p>
                        <p class="mt-6"><span class="text-brand-gold">Mar - Sam :</span> 19h00 - 23h00</p>
                        <p><span class="text-brand-gold">Dim - Lun :</span> Fermé</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-serif text-xl text-white mb-6">Newsletter</h3>
                    <form class="flex flex-col gap-4">
                        <input type="email" placeholder="Votre email"
                            class="bg-white/5 border border-white/10 px-4 py-3 text-sm focus:outline-none focus:border-brand-gold text-white transition-colors">
                        <button type="button"
                            class="bg-brand-gold text-brand-dark px-6 py-3 text-sm uppercase tracking-wider font-bold hover:bg-white transition-colors duration-300">
                            S'inscrire
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-white/5 mt-20 pt-8 text-center text-xs text-gray-500 uppercase tracking-widest">
                &copy; {{ date('Y') }} L'Écrin Doré. Concept Portfolio.
            </div>
        </div>
    </footer>
</body>

</html>