<x-layout title="Home">
<main class="text-center d-flex align-items-center flex-column" style="background-color: var(--bg-page);">

    <!-- 1. HERO SECTION -->
   <header class="hero-section min-vh-100 d-flex align-items-center justify-content-center py-5 w-100 position-relative"
       style="border-color: var(--border-subtle) !important;">
        <canvas id="network" aria-hidden="true"></canvas>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 mx-auto">
                    
                    <h1 class="display-5 display-md-4 fw-bold mb-3" style="color: var(--text-main);">
                        Sviluppo web affidabile per il tuo progetto
                    </h1>
                    
                    <p class="blog-excerpt fs-6 fs-md-5 mb-4 mx-auto" style="max-width: 650px;">
                        Realizziamo siti, applicazioni web e soluzioni digitali solide, performanti e facili da mantenere.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 align-items-center">
                        <a href="{{ route('blog') }}" class="btn-primario w-100 w-sm-auto">Scopri i nostri progetti &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. CAROSELLO -->
    <section class="home-carousel-section py-5 w-100">
        <div class="container">
            <div class="home-carousel-intro text-center mb-4">
                <span class="blog-eyebrow d-block mb-2">// IL NOSTRO APPROCCIO</span>
                <h2 class="fs-2 fw-bold">Idee che diventano prodotti digitali</h2>
                <p class="blog-excerpt mx-auto mb-0" style="max-width: 600px;">
                    Un assaggio del modo in cui uniamo design, tecnologia e attenzione ai dettagli per costruire soluzioni efficaci.
                </p>
            </div>

            <div id="homeCarousel" class="carousel slide home-carousel rounded-3 overflow-hidden shadow-sm" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('media/carosello1.jpg') }}" class="d-block w-100 custom-carousel-img" alt="Sviluppo web">
                        <div class="carousel-caption p-3 p-md-4 rounded-3">
                            <span class="blog-eyebrow d-block mb-1">// SVILUPPO WEB</span>
                            <h3 class="fs-4 fs-md-2 fw-bold">Esperienze digitali solide</h3>
                            <p class="d-none d-sm-block mb-0">Progettiamo interfacce veloci, accessibili e pronte a crescere con il tuo business.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('media/carosello2.jpg') }}" class="d-block w-100 custom-carousel-img" alt="Software su misura">
                        <div class="carousel-caption p-3 p-md-4 rounded-3">
                            <span class="blog-eyebrow d-block mb-1">// SOFTWARE SU MISURA</span>
                            <h3 class="fs-4 fs-md-2 fw-bold">Strumenti costruiti intorno a te</h3>
                            <p class="d-none d-sm-block mb-0">Trasformiamo processi complessi in soluzioni semplici da usare e mantenere.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('media/carosello3.jpg') }}" class="d-block w-100 custom-carousel-img" alt="Cloud & Security">
                        <div class="carousel-caption p-3 p-md-4 rounded-3">
                            <span class="blog-eyebrow d-block mb-1">// CLOUD &amp; SECURITY</span>
                            <h3 class="fs-4 fs-md-2 fw-bold">Infrastrutture pronte per il futuro</h3>
                            <p class="d-none d-sm-block mb-0">Rendiamo il tuo stack più resiliente, sicuro e semplice da evolvere.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Precedente</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Successiva</span>
                </button>
            </div>
        </div>
    </section>

    <!-- 3. SERVIZI -->
    <section class="py-5 w-100">
        <div class="container py-4">
            <div class="mb-5 text-center text-md-start">
                <span class="blog-eyebrow d-block mb-2">// COSA FACCIAMO</span>
                <h2 class="fs-2 mb-0 fw-bold">Servizi di Sviluppo e Ingegneria</h2>
            </div>

            <!-- Grid ottimizzata per Mobile, Tablet (6) e Desktop (4) -->
            <div class="row g-4 justify-content-center">
                
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between text-start">
                        <div>
                            <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                                <i class="bi bi-window-stack fs-4"></i>
                            </div>
                            <h3 class="fs-5 mb-2 fw-semibold">Web App &amp; SaaS</h3>
                            <p class="blog-excerpt small mb-3">
                                Applicazioni web complesse progettate per gestire moli elevate di dati con tempi di risposta minimi.
                            </p>
                        </div>
                        <div>
                            <div class="d-flex flex-wrap gap-1 mb-3">
                                <span class="tech-badge">React</span>
                                <span class="tech-badge">Node.js</span>
                                <span class="tech-badge">API REST</span>
                            </div>
                            <a href="{{ route('contact') }}" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                                Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between text-start">
                        <div>
                            <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                                <i class="bi bi-code-slash fs-4"></i>
                            </div>
                            <h3 class="fs-5 mb-2 fw-semibold">Software su Misura</h3>
                            <p class="blog-excerpt small mb-3">
                                Sviluppo di piattaforme proprietarie e gestionali custom cuciti sulle metriche del tuo business.
                            </p>
                        </div>
                        <div>
                            <div class="d-flex flex-wrap gap-1 mb-3">
                                <span class="tech-badge">Custom ERP</span>
                                <span class="tech-badge">CRM</span>
                                <span class="tech-badge">Workflow</span>
                            </div>
                            <a href="{{ route('contact') }}" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                                Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between text-start">
                        <div>
                            <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                                <i class="bi bi-shield-check fs-4"></i>
                            </div>
                            <h3 class="fs-5 mb-2 fw-semibold">Cloud &amp; Security</h3>
                            <p class="blog-excerpt small mb-3">
                                Infrastrutture resilienti, audit di sicurezza e refactoring per eliminare il debito tecnico.
                            </p>
                        </div>
                        <div>
                            <div class="d-flex flex-wrap gap-1 mb-3">
                                <span class="tech-badge">AWS / Azure</span>
                                <span class="tech-badge">DevOps</span>
                                <span class="tech-badge">Audit</span>
                            </div>
                            <a href="{{ route('contact') }}" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                                Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. BANNER FINALE -->
    <section class="py-5 w-100" style="background-color: var(--bg-surface); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
        <div class="container py-2 py-md-4">
            <span class="blog-eyebrow d-block mb-2">// AVVIA IL TUO PROGETTO</span>
            <h2 class="display-6 fw-bold mb-3" style="color: var(--text-main);">Hai un'idea o un'infrastruttura da scalare?</h2>
            <p class="blog-excerpt mx-auto mb-4" style="max-width: 600px;">
                Analizziamo il tuo stack attuale e proponiamo una roadmap di sviluppo concreta senza impegno.
            </p>
            <a href="{{ route('contact') }}" class="btn-primario fs-6 px-4 py-3 d-inline-block w-100 w-sm-auto">Richiedi una Consulenza Tecnica</a>
        </div>
    </section>

    <!-- 5. RECENSIONI -->
    <section class="reviews-section py-5 w-100">
        <div class="container py-4">
            <div class="reviews-intro text-center mb-5">
                <span class="blog-eyebrow d-block mb-2">// COSA DICONO DI NOI</span>
                <h2 class="fs-2 fw-bold">Le recensioni dei nostri clienti</h2>
                <p class="blog-excerpt mx-auto mb-0" style="max-width: 600px;">
                    Il valore di un progetto si vede anche dal rapporto che costruiamo lungo il percorso.
                </p>
            </div>

            <!-- Utilizzo della griglia Bootstrap nativa per le recensioni -->
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="review-card p-4 rounded-3 h-100 text-start d-flex flex-column justify-content-between">
                        <div>
                            <div class="review-rating mb-2" aria-label="5 stelle">★★★★★</div>
                            <blockquote class="mb-3">
                                “Team davvero disponibile e professionale, cura dei dettagli eccezionale.”
                            </blockquote>
                        </div>
                        <footer>
                            <strong>Elon Musk</strong>
                            <span class="d-block small">CEO, Tesla</span>
                        </footer>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="review-card p-4 rounded-3 h-100 text-start d-flex flex-column justify-content-between">
                        <div>
                            <div class="review-rating mb-2" aria-label="5 stelle">★★★★★</div>
                            <blockquote class="mb-3">
                                “Un team concreto e disponibile, capace di trovare soluzioni efficaci anche nei momenti più delicati.”
                            </blockquote>
                        </div>
                        <footer>
                            <strong>Gerry Scotti</strong>
                            <span class="d-block small">Prime Minister, Italy</span>
                        </footer>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <article class="review-card p-4 rounded-3 h-100 text-start d-flex flex-column justify-content-between">
                        <div>
                            <div class="review-rating mb-2" aria-label="5 stelle">★★★★★</div>
                            <blockquote class="mb-3">
                                “Ottimo lavoro e grande professionalità. Sono rimasto impressionato dal loro approccio e dai risultati ottenuti.”
                            </blockquote>
                        </div>
                        <footer>
                            <strong>Tony Stark</strong>
                            <span class="d-block small">CEO, Stark Industries</span>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

</x-layout>