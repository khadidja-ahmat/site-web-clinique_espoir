@extends('layouts')
@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2>Notre équipe médicale</h2>
    </div>

    @if($medecins->isEmpty())
        <p class="text-center">Aucun médecin n'est encore enregistré.</p>
    @endif

    <div class="row">
        @foreach($medecins as $m)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="mb-3"><i class="fas fa-user-md fa-3x"></i></div>
                    <h5>{{ $m->noms }}</h5>
                    <p class="text-muted mb-0">{{ $m->{'specialité'} }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
