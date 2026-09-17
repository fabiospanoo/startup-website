<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            
            <!-- Colonna 1: Brand e Social -->
            <div class="footer-col brand-col">
                <a href="{{ route('welcome') }}" class="footer-logo">
                    Logo
                </a>
                <p class="brand-desc">
                    Sviluppiamo soluzioni web efficienti e manutenibili, dalla progettazione tecnica alla messa online.
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            
            <!-- Colonna 2: Link Navigazione -->
            <div class="footer-col">
                <h4>Navigazione</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('chi-siamo') }}">Chi Siamo</a></li>
                    <li><a href="{{ route('contact') }}">Contatti</a></li>
                </ul>
            </div>
            
            <!-- Colonna 3: Servizi -->
            <div class="footer-col">
                <h4>Servizi</h4>
                <ul class="footer-links">
                    <li><a href="#">Sviluppo frontend</a></li>
                    <li><a href="#">Backend e API</a></li>
                    <li><a href="#">Manutenzione web</a></li>
                </ul>
            </div>
            
            <!-- Colonna 4: Newsletter -->
            <div class="footer-col newsletter-col">
                <h4>Newsletter</h4>
                <p>Contattaci per discutere il tuo progetto web e individuare la soluzione tecnica più adatta.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Inserisci la tua email" required />
                    <button type="submit" class="btn-newsletter">Iscriviti</button>
                </form>
            </div>
            
        </div>
        
        <!-- Barra Inferiore -->
        <div class="footer-bottom">
            <p>&copy; 2026 Brand. Tutti i diritti riservati.</p>
        </div>
    </div>
</footer>