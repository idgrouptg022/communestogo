<footer>
    <div class="address-container">
        <figure class="logo">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="LOGO Commune Togo">
        </figure>
        <div class="contact-info">
            <p>
                <span class="bold">Adresse:</span>
                <span>Rue xxxxxxxxxxxxxxxxx</span>
            </p>
            <p>
                <span class="bold">Email:</span>
                <span>xxxxxxxx@communetogo.com</span>
            </p>
            <p>
                <span class="bold">Téléphone:</span>
                <span>(+228) xx xx xx xx</span><br>
                <span>(+228) xx xx xx xx</span>
            </p>
        </div>
    </div>
    <div class="links-container">
        <h2>Quelques liens</h2>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="#">Regions</a></li>
            <li><a href="#">Actu-communes</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="newsletter-container">
        <h3 class="newsletter-title">Abonnez vous à notre newsletter</h3>
        <p class="newsletter-text">Vous recevrez des notifications mails sur les actualités de la Faitière</p>
        <form action="#" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Votre adresse email" autocomplete="off">
            <button type="submit">S'abonner</button>
        </form>
        <div class="social-media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
    </div>
</footer>
<div class="footer-signature">
    <div>Copyright &copy; 2024, <span class="bold">Commune Togo</span>. Tous droits réservés</div>
    <div class="design-by">Développé par <span class="bold">ID Group</span></div>
</div>
