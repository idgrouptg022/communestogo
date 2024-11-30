@extends("layouts.guests.app")

@push('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/maquette.css') }}">
@endpush

@section('content')
    <section class="section-container">
        <div class="page-header-container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('guests:home') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('guests:presentation') }}">Présentation des communes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Golfe 1</li>
            </ol>
        </div>
    </section>

    <section class="section-container">
        <div class="maquette-container">
            <div class="maquette-header">
                <figure class="maquette-logo">
                    <img src="{{ asset('assets/logos/golfe1.jpg') }}" alt="">
                </figure>
                <div class="maquette-header-content">
                    <h2 class="maquette-header-title">la Commune Golfe 1</h2>
                    <figure class="maquette-bannner">
                        <img src="{{ asset('assets/images/maq1.jpg') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="maquette-header-divider"></div>
            <div class="maquette-subheader">
                <h3 class="maquette-subheader-title">Domaines de développement prioritaires</h3>
                <figure class="maquette-subheader-image">
                    <img src="{{ asset('assets/images/maq2.jpeg') }}" alt="">
                </figure>
            </div>
            <div class="maquette-body">
                <div class="domaines-container">
                    <div class="domaines-item">
                        <h4>Infrastructures</h4>
                    </div>
                    <div class="domaines-item">
                        <h4>Services sociaux et inclusion</h4>
                    </div>
                    <div class="domaines-item">
                        <h4>Administration moderne</h4>
                    </div>
                </div>
                <div class="prior-info-container">
                    <div class="prior-info-prime">
                        <div class="prior-info1">
                            <figure class="prior-info1-img1">
                                <img src="{{ asset('assets/images/maq3.jpeg') }}" alt="">
                            </figure>
                            <figure class="prior-info1-img2">
                                <img src="{{ asset('assets/images/maq4.jpg') }}" alt="" style="object-position: center;">
                            </figure>
                            <div class="prior-info1-images">
                                <figure class="prior-info1-img1">
                                    <img src="{{ asset('assets/images/maq5.jpg') }}" alt="">
                                </figure>
                                <figure class="prior-info1-img2">
                                    <img src="{{ asset('assets/images/maq6.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="prior-info1-content">
                                <h4>Vision de développement </h4>
                                <p>
                                    D'ici 2030, Golfe 1 dispose d'une gouvernance locale partagée dans un climat de quiétude
                                    et de cohésion sociale, renforçant sa position de pôle de développement économique durable,
                                    contribuant à l'autonomisation économique des femmes et des jeunes, avec des
                                    infrastructures et services sociaux de base résilients et accessibles pour tous.
                                </p>
                            </div>
                        </div>

                        <div class="prior-info2">
                            <h3 class="prior-info2-title">Quelques chiffres</h3>
                            <h4 class="prior-info2-subtitle">Superficie: 60 km²</h4>
                            <h4 class="prior-info2-subtitle">Population: 395.190 hbts</h4>
                            <div class="prior-info2-content">
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">03 Centres de santé</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">41 Hôtels</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">13 Ecoles préscolaires</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">14 Ecoles primaires</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">04 Ecoles secondaires</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">00 Centres artisanaux</div>
                                </div>
                                <div class="prior-info2-item">
                                    <div class="prior-info2-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="prior-info2-text">12 agences bancaires</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prior-info3">
                        <h3 class="prior-info3-title">Golfe1 en un clin d'oeil</h3>
                        <div class="prior-info3-content">
                            <p>
                                Créée par la loi N° 2017-08 du 29 Juin 2017 portant création des communes
                                au Togo et le décret N°2017-144/PR du 22 décembre 2017 qui a fixé son
                                ressort territorial, elle est située au Nord-Ouest par la commune du
                                Golfe 2 (Hédzranawoé), au Nord par la Commune du Zio1, au Sud par l’Océan
                                Atlantique, à l’Est par la commune du Golfe 6 (Baguida), et à l’Ouest par
                                la commune du Golfe 4 (Amoutivé). Son chef-lieu est Bè-Afédomé.
                            </p>
                            <p>
                                Bè-Hédjé, Bè-Apéyémé, Bè-Dangbuipé, Bè-Adzrometi, Bè-Agodo, Bè-Agodogan,
                                Bè-Allaglo, Bè-Ahligo, Bè-Hounvémé, Bè-Adanlekponsi, Bè-Wété-komé, Bè-Akodessewa,
                                Bè-Kotokou-Kondji, Bè-Ablogamé, Bè-Kanyikopé, Bè-Adakpamé, Bè-Adakpamé-Dangbuipé,
                                Bè-Adakpamé-Apéyémé, Bè-Adakpamé-Kpota-Colas, Bè-Kpota-Adidomé, Bè-Akodesséwa-Kpota,
                                Bè-Akodessewa-Kponou, Bè-Anfamé, Bè-Kpota-Dénouvimé, Bè-Kpota-Atchantimé, Bè-Kpota,
                                Bè-Kpota-Tokoin , Ntifafa komé Nord, Bè-Attiégou, Bè-Souza-Nétimé N°1,
                                Bè-Souza-Nétimé N°2, Bè-Souza-Nétimé N°3, Bè-Anthony-Nétimé, Katanga, Kélégougan
                                et Klobatèmé sont les 36 quartiers qui la composent.
                            </p>
                        </div>
                    </div>

                    <div class="prior-info4">
                        <h3 class="prior-info4-title">Atouts de la commune</h3>
                        <div class="prior-info4-content">
                            <div class="prior-info4-item">
                                <figure class="prior-info4-img">
                                    <img src="{{ asset('assets/images/maq7.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info4-item-title">
                                    La pêche
                                </div>
                                <div class="prior-info4-text">
                                    La pêche artisanale maritime occupe environ 3 000
                                    pêcheurs et 5 000 commerçantes et transformatrices
                                    de poissons. Sa production représente plus de 80%
                                    de la production nationale mais elle est en baisse
                                    ces cinq dernières années (22 150 tonnes en 2011
                                    contre 16 732 tonnes en 2015).
                                </div>
                            </div>
                            <div class="prior-info4-item">
                                <figure class="prior-info4-img">
                                    <img src="{{ asset('assets/images/port.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info4-item-title">
                                    Port Autonome de Lomé
                                </div>
                                <div class="prior-info4-text">
                                    La Commune Golfe 1 arbitre le Port Autonome de Lomé qui
                                    est un port maritime et de commerce de l'Etat togolais dont
                                    la tutelle de l'Etat est exercée par la société d’État à Gestion Autonome.
                                    Premier port franc et en eaux profondes en Afrique de l'Ouest, il a pour vocation de gérer
                                    l'activité maritime et portuaire de la région maritime du Togo.
                                </div>
                            </div>
                            <div class="prior-info4-item">
                                <figure class="prior-info4-img">
                                    <img src="{{ asset('assets/images/artisanat.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info4-item-title">
                                    Commerce et artisanat
                                </div>
                                <div class="prior-info4-text">
                                    Les objets artisanaux haut de gamme, fabriqués par les résidents de la commune Golfe1,
                                    sont mis sur le marché à un prix promotionnel et leurs auteurs bénéficient directement des
                                    retombées. Ceci donne plus d’engouement autour du travail et excite les reconvertis à
                                    œuvrer davantage pour leur réinsertion intégrale dans la société.
                                </div>
                            </div>
                            <div class="prior-info4-item">
                                <figure class="prior-info4-img">
                                    <img src="{{ asset('assets/images/environnement.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info4-item-title">
                                    Environnement
                                </div>
                                <div class="prior-info4 text">
                                    La commune Golfe 1 met un accent fort sur les opérations régulières de salubrité au sein de
                                    la commune. Le Ministre Maire Koamy GOMADO, engagé pour la propreté du Golfe 1 et
                                    fidèle à son engagement de rendre le Golfe 1 propre et beau. Le développement de la commune
                                    Golfe 1 est l'affaire de tous.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prior-info5">
                        <h3 class="prior-info5-title">Nous contacter</h3>
                        <div class="prior-info5-content">
                            <div class="prior-info5-item">
                                <figure class="prior-info5-img">
                                    <img src="{{ asset('assets/images/maq8.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info5-text">
                                    <h4>GOMADO Koamy</h4>
                                    <h5>Maire</h5>
                                </div>
                            </div>
                            <div class="prior-info5-item">
                                <figure class="prior-info5-img">
                                    <img src="{{ asset('assets/images/boko.png') }}" alt="">
                                </figure>
                                <div class="prior-info5-text">
                                    <h4>BOKO Koffi Fofo</h4>
                                    <h5>1er Adjoint au maire</h5>
                                </div>
                            </div>
                            <div class="prior-info5-item">
                                <figure class="prior-info5-img">
                                    <img src="{{ asset('assets/images/amesse.jpg') }}" alt="">
                                </figure>
                                <div class="prior-info5-text">
                                    <h4>AMESSE Anoumou</h4>
                                    <h5>2eme Adjoint au maire</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prior-info6">
                        <h3 class="prior-info6-title">Partenaires</h3>
                        <div class="prior-info6-content">
                            <div class="prior-info6-item">
                                <figure class="prior-info6-img">
                                    <img src="{{ asset('assets/images/armoiries.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="prior-info6-item">
                                <figure class="prior-info6-img">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="prior-info6-item">
                                <figure class="prior-info6-img">
                                    <img src="{{ asset('assets/images/partner1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="prior-info6-item">
                                <figure class="prior-info6-img">
                                    <img src="{{ asset('assets/images/partner2.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="prior-info6-item">
                                <figure class="prior-info6-img">
                                    <img src="{{ asset('assets/images/partner3.jfif') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('extra-scripts')

@endpush
