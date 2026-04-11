@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier une historique</h4>


                        <form method="POST" action="{{route('update.historique', $historique->id)}}" >
                            @csrf
                            @method('put')
           <div class="mb-3">
                    <label for="patient_id" class="form-label">Choisir le patient</label>
                    <select name="patient_id" class="form-control" id="patient_id">
                        @foreach($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->nom}}</option>
                        @endforeach
                    </select>                      
                </div>    
                
                 <div class="mb-3">
                    <label for="resultat" class="form-label">Resultat_Examen</label>
                    <input type="text" name="resultat" class="form-control" id="resultat"  value="{{$historique->resultat}}" required>
                </div>
                <div class="mb-3">
                    <label for="prescription" class="form-label">prescription</label>
                    <input type="text" name="prescription" class="form-control" id="prescription" value="{{$historique->prescription}}" required>
                </div>

                <div class="mb-3">
                    <label for="antecedant" class="form-label">antecedant</label>
                    <input type="text" name="antecedant" class="form-control" id="antecedant" value="{{$historique->antecedant}}" required>
                </div>

                <div class="mb-3">
                    <label for="resultat_test" class="form-label">resultat_test</label>
                    <input type="text" name="resultat_test" class="form-control" id="resultat_test" value="{{$historique->resultat_test}}" required>
                </div>
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.historique')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
