<x-layout title="Contatti">
    <div class="contact-section container">
        <div class="row align-items-center justify-content-center g-5 vh-lg-100">
            <div class="col-12 col-lg-6">
                <div class="contact-intro">
                    <span class="blog-eyebrow d-block mb-2">// PARLIAMO DEL TUO PROGETTO</span>
                    <h1 class="mb-3">Invia una richiesta</h1>
                    <p class="blog-excerpt mb-0">
                        Raccontaci la tua idea o il problema che vuoi risolvere. Ti risponderemo per capire insieme la soluzione piu adatta.
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact-form-panel">
                    <form action="{{ route('contatti.submit') }}" method="POST" class="contact-form">
                        @csrf

                        @if(session('success'))
                            <div class="contact-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="contact-field">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" required>
                            @error('name') <span class="contact-error">{{ $message }}</span> @enderror
                        </div>

                        <div class="contact-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                            @error('email') <span class="contact-error">{{ $message }}</span> @enderror
                        </div>

                        <div class="contact-field">
                            <label for="message">Messaggio</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                            @error('message') <span class="contact-error">{{ $message }}</span> @enderror
                        </div>

                        <button class="btn-primario" type="submit">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
