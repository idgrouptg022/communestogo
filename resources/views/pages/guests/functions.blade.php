@extends('layouts.guests.app')

@push('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/functions.css') }}">
@endpush

@section('content')
    <section class="section-container">
        <div class="page-header-container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('guests:home') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fonctionnalités de l'annuaire</li>
            </ol>
            {{-- <form action="" method="get">
                @csrf
                <input type="text" name="" id="" placeholder="Rechercher une commune...">
            </form> --}}
        </div>
    </section>
    <h2 class="page-title">Fonctionnalités de l'annuaire</h2>
    <section class="section-container">
        <div class="functions-content">
            <ul class="functions-list">
                <li class="functions-list-item">
                    <a href="{{ route("guests:presentation") }}"><i class="fas fa-chevron-right"></i> Monographie de ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:location') }}"><i class="fas fa-chevron-right"></i> Localiser ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:contact') }}"><i class="fas fa-chevron-right"></i> Contacter ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:bureau') }}"><i class="fas fa-chevron-right"></i> Bureau du citoyen de ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:business') }}"><i class="fas fa-chevron-right"></i> Les opportunités d'affaires dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:jumelages') }}"><i class="fas fa-chevron-right"></i> Les jumelages dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:bePartner') }}"><i class="fas fa-chevron-right"></i> Devenir partenaire sur un projet communal</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:proposer') }}"><i class="fas fa-chevron-right"></i> Proposer un projet à ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:publicMarket') }}"><i class="fas fa-chevron-right"></i> Marchés publics de ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:social') }}"><i class="fas fa-chevron-right"></i> Actions sociales de ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:taxes') }}"><i class="fas fa-chevron-right"></i> Les taxes dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:website') }}"><i class="fas fa-chevron-right"></i> Site web de ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:etat') }}"><i class="fas fa-chevron-right"></i> Etat civil de ma commune</a>
                </li>
                {{-- <li class="functions-list-item">
                    <a href="#"><i class="fas fa-chevron-right"></i> Site web de ma commune</a>
                </li> --}}
                <li class="functions-list-item">
                    <a href="{{ route('guests:cantons') }}"><i class="fas fa-chevron-right"></i> Les cantons et quartiers de ma commune</a>
                </li>
                {{-- <li class="functions-list-item">
                    <a href="#"><i class="fas fa-chevron-right"></i> Grandes réalisations dans ma commune</a>
                </li> --}}
                <li class="functions-list-item">
                    <a href="{{ route('guests:emploi') }}"><i class="fas fa-chevron-right"></i> Emplois dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:sante') }}"><i class="fas fa-chevron-right"></i> Santé dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:urbanisme') }}"><i class="fas fa-chevron-right"></i> Urbanisme dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:environnement') }}"><i class="fas fa-chevron-right"></i> Environnement dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:tourisme') }}"><i class="fas fa-chevron-right"></i> Tourisme dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:education') }}"><i class="fas fa-chevron-right"></i> Education dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:culture') }}"><i class="fas fa-chevron-right"></i> Culture dans ma commune</a>
                </li>
                <li class="functions-list-item">
                    <a href="{{ route('guests:securite') }}"><i class="fas fa-chevron-right"></i> Sécurité dans ma commune</a>
                </li>
            </ul>
        </div>
    </section>
@endsection

@push('extra-scripts')

@endpush
