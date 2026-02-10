<x-layout>
    <x-slot:title>Contact</x-slot>

        <div class="py-32 bg-brand-cream min-h-screen">
            <div class="container mx-auto px-6">
                <h1 class="font-serif text-5xl md:text-6xl text-brand-black mb-16 text-center">Nous Trouver</h1>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 bg-white shadow-xl p-8 lg:p-12">
                    {{-- Informations --}}
                    <div class="space-y-12 flex flex-col justify-center">
                        <div>
                            <h3 class="text-brand-gold text-2xl font-serif mb-6">L'Écrin Doré</h3>
                            <p class="text-brand-gray leading-loose text-lg font-light">
                                Situé au cœur du Triangle d'Or parisien, notre établissement vous accueille dans un
                                cadre intemporel, à deux pas des Champs-Élysées.
                            </p>
                        </div>

                        <div class="border-t border-brand-light-gray pt-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h4 class="text-brand-black font-bold uppercase text-xs mb-4 tracking-widest">
                                        Adresse</h4>
                                    <p class="text-brand-gray">12 Avenue Montaigne<br>75008 Paris<br>France</p>
                                </div>
                                <div>
                                    <h4 class="text-brand-black font-bold uppercase text-xs mb-4 tracking-widest">
                                        Contact</h4>
                                    <p class="text-brand-gray">Tél : +33 1 42 68 00 00<br>Mail :
                                        reservation@ecrindore.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-brand-light-gray pt-8">
                            <h4 class="text-brand-black font-bold uppercase text-xs mb-4 tracking-widest">Horaires
                                d'Ouverture</h4>
                            <table class="text-brand-gray w-full">
                                <tr class="border-b border-brand-light-gray">
                                    <td class="py-3">Mardi - Samedi</td>
                                    <td class="py-3 text-right font-bold text-brand-black">19h00 - 23h00</td>
                                </tr>
                                <tr>
                                    <td class="py-3">Dimanche - Lundi</td>
                                    <td class="py-3 text-right italic">Fermé</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    {{-- Map --}}
                    <div class="h-[500px] w-full bg-brand-light-gray relative">
                         <img src="{{ asset('images/carte-triangle-dor.webp') }}" alt="Plan du quartier Triangle d'Or, Paris 8ème" class="w-full h-full object-cover grayscale-[50%] contrast-125">
                    </div>
                </div>
            </div>
        </div>
</x-layout>
