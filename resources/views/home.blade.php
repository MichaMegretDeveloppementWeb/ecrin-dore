<x-layout>
    {{-- Hero Section --}}
    <section class="min-h-screen relative flex items-center justify-center -mt-24">
        <div class="absolute inset-0 z-0">
             <img src="{{ asset('images/hero-interior.webp') }}" alt="Intérieur luxueux du restaurant L'Écrin Doré" class="w-full h-full object-cover object-left">
            <div class="absolute inset-0 bg-black/60 sticky-pattern"></div>
        </div>

        <div class="relative z-10 text-center p-12 max-w-5xl mx-auto">
            <div class="inline-block border-y border-brand-black/20 py-2 mb-8 px-6">
                <h2 class="text-white uppercase tracking-[0.3em] text-sm font-bold">Haute Gastronomie Française
                </h2>
            </div>
            <h1 class="font-serif text-6xl md:text-8xl lg:text-9xl text-white mb-8 leading-none tracking-tight">
                L'Écrin <span class="italic text-brand-gold font-light">Doré</span>
            </h1>
            <p class="text-white text-xl md:text-2xl max-w-2xl mx-auto mb-12 leading-relaxed">
                Une symphonie culinaire où l'excellence rencontre l'émotion, au cœur de Paris.
            </p>

            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <a href="{{ route('reservation') }}"
                    class="px-10 py-4 bg-black border-1 border-[#654e1c] text-white font-semibold uppercase tracking-wider hover:bg-brand-gold transition-all duration-300 shadow-xl">
                    Réserver
                </a>
                <a href="{{ route('menu') }}"
                    class="px-10 py-4 text-white font-semibold uppercase tracking-wider hover:bg-black  transition-all duration-300">
                    Notre Carte
                </a>
            </div>
        </div>
    </section>

    {{-- Chef Section --}}
    <section class="py-32 bg-brand-cream relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="w-full lg:w-5/12 relative">
                    <div
                        class="relative z-10 p-2 bg-white shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-700 duration-[1s]">
                        <img src="{{ asset('images/chef-antoine-delacroix.webp') }}" alt="Portrait du Chef Antoine Delacroix" class="w-full aspect-[3/4] object-cover filter sepia-[10%]">
                    </div>
                    <div class="absolute top-10 -left-10 w-full h-full border-2 border-brand-gold/20 -z-0"></div>
                </div>
                <div class="w-full lg:w-7/12">
                    <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">Le Chef</h3>
                    <h2 class="font-serif text-5xl md:text-6xl text-brand-black mb-8">Antoine Delacroix</h2>
                    <p class="text-xl text-brand-black mb-8 italic border-l-4 border-brand-gold pl-6 py-2">
                        "La cuisine n'est pas qu'une technique, c'est une sensibilité. Mon but est de rendre l'éphémère
                        inoubliable."
                    </p>
                    <p class="text-brand-gray leading-loose mb-6 font-light text-lg">
                        Disciple des plus grands maîtres, Antoine Delacroix a forgé son identité entre le respect absolu
                        du classicisme français et une modernité audacieuse. Son approche est celle d'un architecte des
                        saveurs, construisant chaque plat autour d'un produit central sublimé.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Seasonal Focus --}}
    <section class="py-24 bg-brand-black text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0">
             <img src="{{ asset('images/truffe-noire-macro.webp') }}" alt="Coupe de truffe noire du Périgord" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-6 font-bold">En ce moment</h3>
            <h2 class="font-serif text-5xl md:text-7xl mb-8">La Saison de la Truffe Noire</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto leading-relaxed mb-10">
                Le Diamant Noir du Périgord (Tuber Melanosporum) est à l'honneur. Le Chef Delacroix le décline en 5
                services pour un voyage olfactif envoûtant, de l'amuse-bouche au dessert.
            </p>
            <a href="{{ route('menu') }}"
                class="inline-block border border-brand-gold text-brand-gold px-8 py-3 hover:bg-brand-gold hover:text-brand-black transition-colors uppercase tracking-widest text-sm font-bold">
                Découvrir le Menu Truffe
            </a>
        </div>
    </section>

    {{-- Sourcing / Terroir Section --}}
    <section class="py-24 bg-white border-y border-brand-black/5">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">Origine & Terroir</h3>
                <h2 class="font-serif text-4xl md:text-5xl text-brand-black mb-6">L'Exigence du Produit Brut</h2>
                <p class="text-brand-gray leading-loose mb-6 font-light">
                    Notre quête d'excellence commence bien avant la cuisine. Nous tissons des liens étroits avec des
                    producteurs locaux, pêcheurs éthiques et maraîchers passionnés qui partagent notre vision d'une
                    agriculture durable et raisonnée.
                </p>
                <ul class="space-y-4 mt-8">
                    <li class="flex items-center gap-4 text-brand-black font-serif italic">
                        <span class="w-2 h-2 bg-brand-gold rounded-full"></span>
                        Légumes du Potager du Roi (Versailles)
                    </li>
                    <li class="flex items-center gap-4 text-brand-black font-serif italic">
                        <span class="w-2 h-2 bg-brand-gold rounded-full"></span>
                        Poissons de petite pêche (Bretagne)
                    </li>
                    <li class="flex items-center gap-4 text-brand-black font-serif italic">
                        <span class="w-2 h-2 bg-brand-gold rounded-full"></span>
                        Volailles de Bresse AOP
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mt-8">
                     <img src="{{ asset('images/legumes-terroir.webp') }}" alt="Carottes et betteraves du terroir" class="w-full h-64 object-cover shadow-lg">
                </div>
                <div>
                     <img src="{{ asset('images/pecheur-bretagne.webp') }}" alt="Pêcheur breton tenant un bar de ligne" class="w-full h-64 object-cover shadow-lg">
                </div>
            </div>
        </div>
    </section>

    {{-- Highlight Dish Section --}}
    <section class="py-32 bg-brand-cream">
        <div class="container mx-auto px-6 mb-20 text-center">
            <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">À la Carte</h3>
            <h2 class="font-serif text-5xl text-brand-black mb-4">Signatures de Saison</h2>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group cursor-pointer">
                <div class="overflow-hidden mb-8 relative shadow-lg">
                     <img src="{{ asset('images/plat-sole-meuniere.webp') }}" alt="La Sole Meunière revisitée, perles de citron" class="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <h3 class="font-serif text-3xl text-brand-black mb-3 group-hover:text-brand-gold transition-colors">La
                    Sole</h3>
                <p class="text-brand-gray">Façon Meunière revisitée, perles de citron de Menton.</p>
            </div>
            <div class="group cursor-pointer md:mt-16">
                <div class="overflow-hidden mb-8 relative shadow-lg">
                     <img src="{{ asset('images/plat-pigeon-roti.webp') }}" alt="Le Pigeon rôti au jus truffé" class="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <h3 class="font-serif text-3xl text-brand-black mb-3 group-hover:text-brand-gold transition-colors">Le
                    Pigeon</h3>
                <p class="text-brand-gray">Rôti sur coffre, jus truffé, légumes oubliés.</p>
            </div>
            <div class="group cursor-pointer">
                <div class="overflow-hidden mb-8 relative shadow-lg">
                     <img src="{{ asset('images/plat-vacherin-exotique.webp') }}" alt="Le Vacherin exotique mangue et coco" class="w-full h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <h3 class="font-serif text-3xl text-brand-black mb-3 group-hover:text-brand-gold transition-colors">Le
                    Vacherin</h3>
                <p class="text-brand-gray">Exotique, mangue et coco, meringue croquante.</p>
            </div>
        </div>

        <div class="text-center mt-20">
            <a href="{{ route('menu') }}"
                class="px-12 py-4 border border-brand-black text-brand-black hover:bg-brand-black hover:text-white transition-all duration-300 uppercase tracking-wider font-bold">
                Découvrir le Menu
            </a>
        </div>
    </section>

    {{-- History & Venue Section --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="order-2 md:order-1">
                <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">Le Lieu</h3>
                <h2 class="font-serif text-4xl leading-tight text-brand-black mb-6">Un Hôtel Particulier chargé
                    d'Histoire</h2>
                <p class="text-brand-gray leading-loose mb-6 font-light">
                    Avant de devenir l'écrin de notre cuisine, ce lieu fut la demeure du Comte de Valmont au XIXème
                    siècle, puis un célèbre atelier d'artistes durant les Années Folles. Nous avons conservé les
                    boiseries d'époque et les hauts plafonds moulurés pour offrir une atmosphère hors du temps.
                </p>
            </div>
            <div class="order-1 md:order-2 h-[500px] bg-brand-light-gray relative shadow-xl">
                 <img src="{{ asset('images/hotel-particulier-salle.webp') }}" alt="Salle de l'Hôtel Particulier du XIXème siècle" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    {{-- Cellar Section --}}
    <section class="py-32 bg-brand-black text-white relative">
        <div class="absolute inset-0 z-0 opacity-30">
             <img src="{{ asset('images/cave-a-vins.webp') }}" alt="Cave à vins aux millésimes prestigieux" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-6 relative z-10 flex justify-end">
            <div class="max-w-xl bg-brand-dark/90 p-12 border-l-4 border-brand-gold backdrop-blur-sm">
                <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-6 font-bold">Sommellerie</h3>
                <h2 class="font-serif text-4xl mb-6">Un Trésor Caché</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Avec plus de 1200 références, notre cave est un sanctuaire dédié aux vignobles français et
                    internationaux. Des Grands Crus classés aux pépites biodynamiques confidentielles, notre Chef
                    Sommelier vous guidera vers l'accord parfait.
                </p>
                <div class="flex gap-4">
                    <span
                        class="px-4 py-2 border border-white/20 text-xs uppercase tracking-widest text-brand-gold">Pétrus
                        1998</span>
                    <span
                        class="px-4 py-2 border border-white/20 text-xs uppercase tracking-widest text-brand-gold">Romanée-Conti</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Service / Art de Recevoir --}}
    <section class="py-24 bg-brand-cream relative">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <div class="w-24 h-24 mx-auto mb-8 rounded-full overflow-hidden border-2 border-brand-gold shadow-lg">
                 <img src="{{ asset('images/maitre-hotel-service.webp') }}" alt="Maître d'Hôtel polissant un verre en cristal" class="w-full h-full object-cover">
            </div>
            <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">L'Art de Recevoir</h3>
            <h2 class="font-serif text-4xl text-brand-black mb-8">Un Ballet Ordonnance</h2>
            <p class="text-brand-gray text-lg leading-relaxed font-serif italic">
                "Le luxe, c'est ce qui ne se voit pas mais se ressent."
            </p>
            <p class="text-brand-gray leading-loose mt-6 font-light">
                À l'Écrin Doré, le service est élevé au rang d'art. Discret, précis, anticipant vos moindres désirs sans
                jamais s'imposer. Notre équipe de salle, dirigée par Pierre-Yves Laurent, veille à ce que votre
                expérience soit fluide et magique, du premier accueil à la dernière mignardise.
            </p>
        </div>
    </section>

    {{-- Private Dining --}}
    <section class="py-24 bg-white border-t border-brand-black/5">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                 <img src="{{ asset('images/salon-montaigne.webp') }}" alt="Le Salon Montaigne, salle de réception privée" class="w-full h-96 object-cover shadow-2xl">
            </div>
            <div class="w-full md:w-1/2">
                <h3 class="text-brand-gold uppercase tracking-widest text-sm mb-4 font-bold">Privatisation</h3>
                <h2 class="font-serif text-4xl text-brand-black mb-6">Le Salon "Montaigne"</h2>
                <p class="text-brand-gray leading-relaxed mb-8">
                    Pour vos dîners d'affaires ou célébrations intimes, le Salon Montaigne offre une confidentialité
                    absolue. Service dédié, menu sur-mesure et accès direct à la terrasse privée.
                </p>
                <a href="{{ route('contact') }}"
                    class="text-brand-black font-bold uppercase tracking-widest border-b-2 border-brand-gold pb-1 hover:text-brand-gold transition-colors">
                    Organiser un événement
                </a>
            </div>
        </div>
    </section>

    {{-- Presse / Reviews --}}
    <section class="py-24 bg-brand-cream border-t border-brand-black/5">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="p-8">
                    <div class="text-brand-gold text-4xl font-serif mb-4">"</div>
                    <p class="text-brand-black text-lg italic mb-6 font-serif">Une révélation. La cuisine du chef
                        Delacroix touche au sublime par sa simplicité apparente.</p>
                    <div class="uppercase tracking-widest text-xs font-bold text-gray-400">Le Guide Michelin</div>
                </div>
                <div class="p-8 border-l border-r border-brand-black/5">
                    <div class="text-brand-gold text-4xl font-serif mb-4">"</div>
                    <p class="text-brand-black text-lg italic mb-6 font-serif">L'une des plus belles tables de Paris. Le
                        service est un ballet parfaitement orchestré.</p>
                    <div class="uppercase tracking-widest text-xs font-bold text-gray-400">Gault & Millau</div>
                </div>
                <div class="p-8">
                    <div class="text-brand-gold text-4xl font-serif mb-4">"</div>
                    <p class="text-brand-black text-lg italic mb-6 font-serif">Un décor époustouflant qui ne vole jamais
                        la vedette à l'assiette. Brillant.</p>
                    <div class="uppercase tracking-widest text-xs font-bold text-gray-400">Le Fooding</div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
