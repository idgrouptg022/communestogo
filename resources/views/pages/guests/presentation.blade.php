@extends('layouts.guests.app')

@push('extra-styles')

@endpush

@php
    $communes = new \App\Utils\Commune();
    $communeLink = new \App\Utils\CommuneLink();
@endphp

@section('content')
    <section class="section-container">
        <div class="page-header-container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('guests:home') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Présentation des communes</li>
            </ol>
            <form action="" method="get">
                @csrf
                <input type="text" name="" id="" placeholder="Rechercher une commune...">
            </form>
        </div>
    </section>
    <h2 class="page-title">Présentation des communes</h2>
    <section class="section-container">
        <div class="communes-container">
            @foreach ($prefectures as $prefecture)
                <details class="communes-content" open>
                    <summary>Préfecture de {{ $prefecture->name }}</summary>
                    <div class="communes-content-list">
                        @foreach ($communes::all($prefecture->id) as $commune)
                            <a
                                @if($communeLink::getCommuneLink($commune->id) != null && $communeLink::getCommuneLink($commune->id)->presentation != null)
                                    href="{{ route('guests:maquette', $commune->id) }}"
                                @endif
                                class="communes-item">
                                <h3 class="communes-item-title">{{ $commune->name }}</h3>
                            </a>
                        @endforeach
                    </div>
                </details>
                <hr>
            @endforeach
        </div>
    </section>
@endsection

@push('extra-scripts')

@endpush