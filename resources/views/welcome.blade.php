<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{session('errorMessage')}}
        </div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-50">
            {{session('message')}}
        </div>
    @endif
    <header class="rounded-header py-5">
        <div class="container">
            <h1 class="display-4 h1header">Claim.it</h1>
            <p class="lead pheader"> {{__('ui.headerp')}}</p>
        </div>
    </header>
    <div class="row height-custom justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <div class="col-12 col-md-4">
                <x-card :article="$article"/>
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono trovati articoli
                </h3>
            </div>
        @endforelse
    </div>
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">{{__('ui.chisiamo')}}</h2>
            <p>{{__('ui.info')}}</p>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4">{{__('ui.servizi')}}</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>{{__('ui.servizio1')}}</h3>
                    <p>Raccomandazioni Personalizzate: Prodotti suggeriti in base agli acquisti precedenti e agli interessi dell'utente offrendoti
                    Promozioni Mirate ed esperienze di acquisto curate
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>{{__('ui.servizio2')}}</h3>
                    <p>Consegne Regolari di Prodotti: Abbonamenti per prodotti di uso quotidiano, come caffè, articoli per la casa, o prodotti di bellezza, con consegne automatiche a intervalli prestabiliti.
                    Accesso a Contenuti Esclusivi: Contenuti premium, come tutorial, guide, e webinar, riservati agli abbonati per migliorare l'esperienza del prodotto.
                    Sconti e Offerte Esclusive: Promozioni speciali, sconti e accesso anticipato ai nuovi lanci di prodotto riservati ai membri del programma di abbonamento.</p>
                </div>
                <div class="col-md-4">
                    <h3>{{__('ui.servizio3')}}</h3>
                    <p>Chatbot Avanzati: Utilizzo di chatbot alimentati dall'intelligenza artificiale per rispondere rapidamente alle domande frequenti, assistere nella navigazione del sito, e risolvere problemi comuni in qualsiasi momento del giorno o della notte.
Live Chat con Operatori Umani: Accesso a rappresentanti del servizio clienti in tempo reale per risolvere problemi più complessi e fornire consigli personalizzati.</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>