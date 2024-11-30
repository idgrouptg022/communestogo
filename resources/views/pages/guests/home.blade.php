@extends('layouts.guests.app')

@push('extra-styles')
<link rel="stylesheet" href="{{ asset('assets/styles/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/guests/home.css') }}">
@endpush

@section('content')
    <section class="section-banner">
        <figure class="banner-image">
            <img src="{{ asset('assets/images/banniere.png') }}" alt="">
            <figcaption>
                <figure class="banner-image-box">
                    <img src="{{ asset('assets/images/logo2.png') }}" alt="">
                </figure>
                <div class="banner-text-box">
                    <h2 class="banh2">Bienvenue sur l'annuaire Numérique des Communes du Togo</h2>
                    {{-- <p>
                        <span class="banp">L'annuaire Numérique des Communes du Togo</span>
                    </p> --}}
                </div>
            </figcaption>
        </figure>
    </section>

    <div class="motif-band-container">
        <figure class="motif-band">
            <img src="{{ asset('assets/images/motif.png') }}" alt="Motif FCT">
        </figure>
    </div>

    <section class="section-container home-page">
        <div class="page-menu-container">
            <a href="{{ route('guests:presentation') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Présentation des communes</span>
                <span class="page-menu-description">Monograpie de chaque commune du Togo</span>
            </a>
            <a href="{{ route('guests:contact') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Contacter ma commune</span>
                <span class="page-menu-description">Contacter la commune de votre choix</span>
            </a>
            <a href="{{ route('guests:location') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Localiser ma commune</span>
                <span class="page-menu-description">Localiser la commune de votre choix</span>
            </a>
            <a href="{{ route('guests:etat') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Etat Civil</span>
                <span class="page-menu-description">Trouver les informations de l'etat civil de chaque commune</span>
            </a>
            <a href="{{ route('guests:bureau') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6v167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5v-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128h2.2z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Bureau du Citoyen</span>
                <span class="page-menu-description">Laisser des suggestions à votre commune</span>
            </a>
            <a href="{{ route('guests:taxes') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Les taxes dans ma commune</span>
                <span class="page-menu-description">Informez vous sur les différentes taxes de chaque commune</span>
            </a>
            <a href="{{ route('guests:bePartner') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Devenir partenaire sur un projet communal</span>
                <span class="page-menu-description">Proposez-vous sur un (des) projet(s) de la commune de votre choix</span>
            </a>
            <a href="{{ route('guests:proposer') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M512 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H192c20.1 0 39.1 9.5 51.2 25.6l19.2 25.6c6 8.1 15.5 12.8 25.6 12.8H448c35.3 0 64 28.7 64 64V416zM232 376c0 13.3 10.7 24 24 24s24-10.7 24-24V312h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V200c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H168c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Proposer un projet</span>
                <span class="page-menu-description">Proposer un projet à la commune de votre choix</span>
            </a>
            <a href="{{ route('guests:website') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Site web de ma commune</span>
                <span class="page-menu-description">Découvrez le site web de votre commune</span>
            </a>
            {{-- <a href="{{ route('guests:sante') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Santé dans ma commune</span>
                <span class="page-menu-description">Voir les actions sanitaires dans la commune de votre choix</span>
            </a> --}}
            <a href="{{ route('guests:tourisme') }}" class="page-menu-item">
                <span class="page-menu-icon">
                    <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M302.8 312C334.9 271.9 408 174.6 408 120C408 53.7 354.3 0 288 0S168 53.7 168 120c0 54.6 73.1 151.9 105.2 192c7.7 9.6 22 9.6 29.6 0zM416 503l144.9-58c9.1-3.6 15.1-12.5 15.1-22.3V152c0-17-17.1-28.6-32.9-22.3l-116 46.4c-.5 1.2-1 2.5-1.5 3.7c-2.9 6.8-6.1 13.7-9.6 20.6V503zM15.1 187.3C6 191 0 199.8 0 209.6V480.4c0 17 17.1 28.6 32.9 22.3L160 451.8V200.4c-3.5-6.9-6.7-13.8-9.6-20.6c-5.6-13.2-10.4-27.4-12.8-41.5l-122.6 49zM384 255c-20.5 31.3-42.3 59.6-56.2 77c-20.5 25.6-59.1 25.6-79.6 0c-13.9-17.4-35.7-45.7-56.2-77V449.4l192 54.9V255z"></path>
                    </svg>
                </span>
                <span class="page-menu-title">Tourisme dans ma commune</span>
                <span class="page-menu-description">Découvrez les sites touristiques de la commune de votre choix</span>
            </a>
        </div>
        <div class="functions-ads-container">
            <div class="functions-item">
                <h2 class="functions-title">
                    <span>Fonctionnalités de l'annuaire numérique</span>
                    <span class="functions-badge">24</span>
                </h2>
                <ul class="functions-list">
                    {{-- <li class="functions-list-item">
                        <a href="#"><i class="fas fa-chevron-right"></i> Monographie de ma commune</a>
                    </li> --}}
                    <li class="functions-list-item">
                        <a href="{{ route('guests:business') }}"><i class="fas fa-chevron-right"></i> Les opportunités d'affaires dans ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:jumelages') }}"><i class="fas fa-chevron-right"></i> Les jumelages dans ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:cantons') }}"><i class="fas fa-chevron-right"></i> Les cantons et quartiers de ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:bureau') }}"><i class="fas fa-chevron-right"></i> Bureau du citoyen de ma commune</a>
                    </li>
                    {{-- <li class="functions-list-item">
                        <a href="#"><i class="fas fa-chevron-right"></i> Devenir partenaire sur un projet à ma commune</a>
                    </li> --}}
                    {{-- <li class="functions-list-item">
                        <a href="#"><i class="fas fa-chevron-right"></i> Santé dans ma commune</a>
                    </li> --}}
                    <li class="functions-list-item">
                        <a href="{{ route('guests:social') }}"><i class="fas fa-chevron-right"></i> Actions sociales de ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:urbanisme') }}"><i class="fas fa-chevron-right"></i> Urbanisme dans ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:environnement') }}"><i class="fas fa-chevron-right"></i> Environnement dans ma commune</a>
                    </li>
                    {{-- <li class="functions-list-item">
                        <a href="#"><i class="fas fa-chevron-right"></i> Tourisme dans ma commune</a>
                    </li> --}}
                    <li class="functions-list-item">
                        <a href="{{ route('guests:education') }}"><i class="fas fa-chevron-right"></i> Education dans ma commune</a>
                    </li>
                    <li class="functions-list-item">
                        <a href="{{ route('guests:culture') }}"><i class="fas fa-chevron-right"></i> Culture dans ma commune</a>
                    </li>
                </ul>
                <div class="functions-see-all">
                    <a href="{{ route('guests:functions') }}" class="functions-see-all-btn">Voir tout</a>
                </div>
            </div>
            <div class="bann-item swiper" id="bannSwiper">
                <div class="swiper-wrapper">
                    @foreach ($annonces as $annonce)
                        <div class="swiper-slide" style="width: 0;">
                            <figure class="slide-img">
                                <img src="https://faitiere.test/storage/{{ $annonce->image }}" alt="Image">
                            </figure>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="annuaire-section">
        <h2 class="annuaire-title">Annuaire des communes du Togo</h2>
        <div class="annuaire-content">
            <div class="annuaire-item">
                <div class="annuaire-item-header">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                    </svg>
                    <h3 class="annuaire-item-title">
                        <span class="number">05</span>
                        <span>Régions</span>
                    </h3>
                </div>
                <div class="annuaire-item-body">
                    Ici sera renseigné un texte descriptif.
                    Ici sera renseigné un texte descriptif.
                </div>
            </div>
            <div class="annuaire-item">
                <div class="annuaire-item-header">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                    </svg>
                    <h3 class="annuaire-item-title">
                        <span class="number">117</span>
                        <span>Communes</span>
                    </h3>
                </div>
                <div class="annuaire-item-body">
                    Ici sera renseigné un texte descriptif.
                    Ici sera renseigné un texte descriptif.
                </div>
            </div>
            <div class="annuaire-item">
                <div class="annuaire-item-header">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                    </svg>
                    <h3 class="annuaire-item-title">
                        <span class="number">394</span>
                        <span>Cantons</span>
                    </h3>
                </div>
                <div class="annuaire-item-body">
                    Ici sera renseigné un texte descriptif.
                    Ici sera renseigné un texte descriptif.
                </div>
            </div>
            <div class="annuaire-item">
                <div class="annuaire-item-header">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
                    </svg>
                    <h3 class="annuaire-item-title">
                        <span class="number">39</span>
                        <span>Préfectures</span>
                    </h3>
                </div>
                <div class="annuaire-item-body">
                    Ici sera renseigné un texte descriptif.
                    Ici sera renseigné un texte descriptif.
                </div>
            </div>
        </div>
    </section>

    <div class="motif-band-container">
        <figure class="motif-band">
            <img src="{{ asset('assets/images/motif.png') }}" alt="Motif FCT">
        </figure>
    </div>
@endsection

@push('extra-scripts')
<script src="{{ asset('assets/scripts/swiper.min.js') }}"></script>
<script src="{{ asset('assets/scripts/anime.min.js') }}"></script>
<script src="{{ asset('assets/scripts/guests/home.js') }}"></script>
    <script>
        const bannSwiper = new Swiper('#bannSwiper', {
            // Optional parameters
            direction: 'horizontal',
            effect: 'slide',
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var textWrapper = document.querySelector('.banh2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.banh2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
            targets: '.banh2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });

        // var textWrapper2 = document.querySelector('.banp');
        // textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        // anime.timeline({loop: true})
        // .add({
        //     targets: '.banp .letter',
        //     scale: [4,1],
        //     opacity: [0,1],
        //     translateZ: 0,
        //     easing: "easeOutExpo",
        //     duration: 650,
        //     delay: (el, i) => 70*i
        // }).add({
        //     targets: '.banp',
        //     opacity: 0,
        //     duration: 800,
        //     easing: "easeOutExpo",
        //     delay: 800
        // });
    </script>
@endpush
