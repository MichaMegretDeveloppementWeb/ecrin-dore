<x-layout>
    <x-slot:title>Réservation</x-slot>

        <div class="min-h-screen flex items-center justify-center relative py-20 px-6 bg-brand-cream">

            <div class="w-full max-w-4xl bg-white shadow-2xl p-8 md:p-16 relative overflow-hidden">
                {{-- Decorative Border --}}
                <div class="absolute top-0 left-0 w-full h-2 bg-brand-gold"></div>

                <div class="text-center mb-12">
                    <h3 class="text-brand-gold uppercase tracking-widest text-xs font-bold mb-3">Réservez votre table
                    </h3>
                    <h1 class="font-serif text-4xl md:text-5xl text-brand-black">Une Soirée d'Exception</h1>
                </div>

                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <label
                                class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Date</label>
                            <input type="date"
                                class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none">
                        </div>
                        <div>
                            <label
                                class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Heure</label>
                            <select
                                class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none">
                                <option>19:00</option>
                                <option>19:30</option>
                                <option>20:00</option>
                                <option>20:30</option>
                                <option>21:00</option>
                                <option>21:30</option>
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Couverts</label>
                            <select
                                class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none">
                                <option>2 personnes</option>
                                <option>3 personnes</option>
                                <option>4 personnes</option>
                                <option>5+ personnes</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label
                                class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Nom</label>
                            <input type="text" placeholder="Votre nom"
                                class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none">
                        </div>
                        <div>
                            <label
                                class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Email</label>
                            <input type="email" placeholder="votre@email.com"
                                class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-brand-black text-xs uppercase tracking-widest mb-3 font-bold">Demandes
                            particulières</label>
                        <textarea rows="3" placeholder="Allergies, anniversaire, occasion spéciale..."
                            class="w-full bg-brand-cream border-b-2 border-brand-light-gray text-brand-black px-4 py-3 focus:border-brand-gold focus:outline-none transition-colors rounded-none"></textarea>
                    </div>

                    <div class="pt-8 text-center">
                        <button type="button"
                            class="bg-brand-black text-white px-12 py-4 font-bold uppercase tracking-widest hover:bg-brand-gold transition-colors duration-300 shadow-lg">
                            Confirmer la demande
                        </button>
                        <p class="text-center text-xs text-brand-gray mt-6 italic">*Aucune réservation réelle ne sera
                            effectuée (Démo).</p>
                    </div>
                </form>
            </div>
        </div>
</x-layout>