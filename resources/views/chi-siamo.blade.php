<x-layout title="Chi Siamo">
    <section class="team-section container text-center">
        <div class="team-intro">
            <h6 class="blog-eyebrow">// PARLIAMO DI NOI</h6>
            <h1 class="section-title">Il nostro team</h1>
            <p class="section-subtitle">
                Siamo un team di professionisti appassionati di tecnologia e sviluppo web. Ogni membro del nostro team porta competenze uniche e una prospettiva diversa, contribuendo a creare soluzioni innovative per i nostri clienti.
            </p>
        </div>

        <div class="team-grid">
            @foreach ($team as $member)
                <article class="team-card">
                    <img src="{{ asset($member['immagine']) }}"
                        class="rounded-circle p-1 bg-white border border-2 shadow-sm mb-3"
                        style="width: 140px; height: 140px; object-fit: cover;" alt="Foto di {{ $member['nome'] }}">

                    <h5>{{ $member['nome'] }}</h5>
                    <p>{{ $member['ruolo'] }}</p>
                    <a href="{{ route('chi-siamo-show', ['id' => $member['id']]) }}" class="btn-primario w-100 w-sm-auto">Visualizza dettagli</a>
                </article>
            @endforeach
        </div>
    </section>

    <div class="about-sections">
        <section class="about-panel text-start">
            <div class="about-panel-content">
                <div class="about-panel-layout">
                    <div>
                        <span class="blog-eyebrow d-block">// LA NOSTRA MISSIONE</span>
                        <h2>Costruire tecnologia che semplifica</h2>
                        <p>
                            Aiutiamo aziende e persone a trasformare idee e processi complessi in prodotti digitali chiari, affidabili e utili ogni giorno.
                        </p>
                        <p class="mb-0">
                            Lavoriamo con attenzione a performance, sicurezza e manutenibilita, per creare soluzioni che continuano a dare valore nel tempo.
                        </p>
                    </div>
                    <img src="{{asset('media/chi-siamo2.jpg')}}" alt="Team al lavoro su un progetto digitale">
                </div>
            </div>
        </section>

        <section class="about-panel about-panel-history text-start">
            <div class="about-panel-content">
                <div class="about-panel-layout about-panel-layout-reverse">
                    <div>
                        <span class="blog-eyebrow d-block">// LA NOSTRA STORIA</span>
                        <h2>Esperienza, curiosita e collaborazione</h2>
                        <p>
                            Siamo nati dall'incontro tra competenze diverse e dalla voglia di affrontare il digitale con un approccio concreto, umano e orientato ai risultati.
                        </p>
                        <p class="mb-0">
                            Da allora continuiamo a crescere insieme, condividendo conoscenze e costruendo rapporti duraturi con chi lavora al nostro fianco.
                        </p>
                    </div>
                    <img src="{{asset('media/chi-siamo1.jpg')}}" alt="Collaborazione e crescita del team">
                </div>
            </div>
        </section>
    </div>
</x-layout>
