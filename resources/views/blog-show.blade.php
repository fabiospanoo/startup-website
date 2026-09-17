<x-layout title="{{ $post['title'] }}">
    <main class="blog-article container">
        <a class="blog-back-link" href="{{ route('blog') }}">&larr; Torna al blog</a>

        <article>
            <header class="blog-article-header">
                <p class="blog-date">{{ $post['date'] }}</p>
                <h1>{{ $post['title'] }}</h1>
            </header>

            <div class="blog-article-content">
                <p>{{ $post['content'] }}</p>
            </div>
        </article>
    </main>
</x-layout>
