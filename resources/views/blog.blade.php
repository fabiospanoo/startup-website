<x-layout title="Blog">
    <main class="blog-section container">
        <header class="blog-header">
            <p class="blog-eyebrow">// Approfondimenti tecnici</p>
            <h1>Blog</h1>
            <p>Articoli e riflessioni su sviluppo web, applicazioni digitali e tecnologia.</p>
        </header>

        <ul class="blog-list">
            @foreach ($posts as $post)
                <li class="blog-item" id="post-{{ $post['id'] }}">
                    <div class="blog-item-content">
                        <p class="blog-date">{{ $post['date'] }}</p>
                        <h2 class="blog-title">
                            <a href="{{ route('blog-show', ['id' => $post['id']]) }}">{{ $post['title'] }}</a>
                        </h2>
                        <p class="blog-excerpt">{{ \Illuminate\Support\Str::limit($post['content'], 120, '...') }}</p>
                    </div>
                    <a class="blog-read-more" href="{{ route('blog-show', ['id' => $post['id']]) }}" aria-label="Leggi {{ $post['title'] }}">
                        Leggi l'articolo <span aria-hidden="true">&rarr;</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>