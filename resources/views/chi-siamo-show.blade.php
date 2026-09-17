<x-layout title="{{ $member['nome'] }}">
    <main class="blog-article container">
        <a class="blog-back-link" href="{{ route('chi-siamo') }}">&larr; Torna al Chi-Siamo</a>

        <article>
            <div class="badge-container mb-5">
                <img class="badge-img" src="{{ asset($member['immagine']) }}" alt="Foto profilo">
            </div>
            <header class="blog-article-header">
                <h1>{{ $member['nome'] }}</h1>
                <p class="blog-date">{{ $member['ruolo'] }}</p>
            </header>

            <div class="blog-article-content">
                <p>{{ $member['descrizione'] }}</p>
            </div>
        </article>
    </main>
</x-layout>