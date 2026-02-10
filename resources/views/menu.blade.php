<x-layout>
    <x-slot:title>La Carte</x-slot>

        {{-- Header --}}
        <div class="relative py-32 bg-brand-cream text-center border-b border-brand-black/5">
            <div class="relative z-10">
                <h1 class="font-serif text-5xl md:text-6xl text-brand-black mb-4">La Carte</h1>
                <p class="text-brand-gold italic text-xl font-serif">Saison Automne - Hiver</p>
            </div>
        </div>

        {{-- Menu Content --}}
        <div class="container mx-auto px-6 py-20 max-w-4xl">

            {{-- Menus Dégustation (New) --}}
            <div class="mb-24 border-2 border-brand-gold/20 p-8 md:p-12 relative">
                <h3 class="text-center font-serif text-2xl text-brand-black mb-2 uppercase tracking-widest">Les Menus
                </h3>
                <div class="w-16 h-1 bg-brand-gold mx-auto mb-10"></div>

                <div class="space-y-12">
                    {{-- Menu Truffe --}}
                    <div class="text-center">
                        <h4 class="font-serif text-3xl text-brand-black mb-2">Menu "Diamant Noir"</h4>
                        <p class="text-brand-gray italic mb-4">L'expérience immersive autour de la Truffe Melanosporum
                        </p>
                        <p class="text-brand-gray text-sm leading-relaxed max-w-lg mx-auto mb-4">
                            Amuse-bouche truffé • Brouillade d'œuf bio • Saint-Jacques contisées • Poularde de Bresse en
                            demi-deuil • Brie de Meaux truffé • Le Tout-Chocolat
                        </p>
                        <div class="text-xl font-bold text-brand-gold">185€</div>
                        <div class="text-xs text-brand-gray mt-1">Accord Mets & Vins : +95€</div>
                    </div>

                    <div class="w-full border-b border-brand-black/5"></div>

                    {{-- Menu Dégustation --}}
                    <div class="text-center">
                        <h4 class="font-serif text-3xl text-brand-black mb-2">Menu "Signature"</h4>
                        <p class="text-brand-gray italic mb-4">Une promenade en 5 temps à travers les classiques de la
                            Maison</p>
                        <div class="text-xl font-bold text-brand-gold">145€</div>
                        <div class="text-xs text-brand-gray mt-1">Accord Mets & Vins : +75€</div>
                    </div>
                </div>
            </div>

            @php
                $carte = [
                    'Pour Commencer' => [
                        [
                            'name' => 'Le Foie Gras de Canard',
                            'desc' => 'Mi-cuit au torchon, chutney de figues de Solliès, brioche toastée.',
                            'price' => '42€'
                        ],
                        [
                            'name' => 'Les Légumes du Potager du Roi',
                            'desc' => 'Déclinaison de racines anciennes, crues et cuites, vinaigrette à la truffe.',
                            'price' => '36€'
                        ],
                        [
                            'name' => 'Le Langoustine Royale',
                            'desc' => 'Rôtie au beurre demi-sel, ravioles de céleri, bouillon léger.',
                            'price' => '48€'
                        ]
                    ],
                    'Les Poissons & Viandes' => [
                        [
                            'name' => 'La Sole Meunière Revisitée (Signature)',
                            'desc' => 'Levée en filets, beurre noisette citronné, perles de citron de Menton, pommes vapeur.',
                            'price' => '68€'
                        ],
                        [
                            'name' => 'Le Pigeon de Mesquer (Signature)',
                            'desc' => 'Rôti sur le coffre, cuisses confites, jus corsé à la truffe, légumes oubliés glacés.',
                            'price' => '62€'
                        ],
                        [
                            'name' => 'Le Ris de Veau',
                            'desc' => 'Braisé entier, croustillant, mousseline de pomme de terre à la vanille.',
                            'price' => '58€'
                        ]
                    ],
                    'Les Douceurs' => [
                        [
                            'name' => 'Le Chariot de Fromages Affinés',
                            'desc' => 'Sélection de nos maîtres fromagers, confitures maison.',
                            'price' => '24€'
                        ],
                        [
                            'name' => 'Le Vacherin Exotique (Signature)',
                            'desc' => 'Meringue croquante, sorbet mangue plein fruit, chantilly coco, tuile croustillante.',
                            'price' => '26€'
                        ],
                        [
                            'name' => 'La Sphère Chocolat',
                            'desc' => 'Chocolat Valrhona 70%, cœur coulant praliné noisette, glace vanille bourbon.',
                            'price' => '28€'
                        ]
                    ]
                ];
            @endphp

            @foreach($carte as $category => $items)
                <div class="mb-20">
                    <h2
                        class="text-center font-serif text-3xl text-brand-black mb-12 border-b border-brand-black/10 pb-6 uppercase tracking-widest">
                        {{ $category }}</h2>

                    <div class="space-y-8">
                        @foreach($items as $item)
                            <div class="flex justify-between items-baseline group cursor-default">
                                <div class="flex-grow pr-8 overflow-hidden relative">
                                    <h3
                                        class="font-serif text-2xl text-brand-black mb-2 group-hover:text-brand-gold transition-colors">
                                        {{ $item['name'] }}</h3>
                                    <p class="text-brand-gray text-base font-light italic">{{ $item['desc'] }}</p>
                                </div>
                                <div class="flex-shrink-0 text-xl font-bold text-brand-black">{{ $item['price'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-12 text-brand-gray text-sm italic">
                <p>Prix nets en euros, taxes et service compris.</p>
                <p>Viandes d'origine française. Poissons de pêche durable.</p>
            </div>
        </div>
</x-layout>