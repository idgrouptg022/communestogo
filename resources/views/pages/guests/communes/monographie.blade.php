@extends("layouts.guests.app")

@push('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/maquette.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/monographie.css') }}">
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
            <span id="pdfDoc" hidden data-url="https://faitiere.test/auth/cmpdf/{{ $commune }}"></span>
            <div class="pdf-container">
                <canvas id="pdf-renderer"></canvas>
            </div>
        </div>
    </section>
@endsection

@push('extra-scripts')
    <script type="module" src="https://mozilla.github.io/pdf.js/build/pdf.mjs"></script>
    <script type="module" src="{{ asset('assets/scripts/guests/pdf.js') }}"></script>
@endpush
