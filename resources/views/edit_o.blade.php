@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier une ordonnance</h4>


                        <form method="POST" action="{{route('update.ordonnance', $ordonnance->id)}}" >
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
                    <label for="nom_medicament" class="form-label">Nom_medicament</label>
                    <input type="text" name="nom_medicament" class="form-control" id="nom_medicament"  value="{{$ordonnance->nom_medicament}}" required>
                </div>
                <div class="mb-3">
                    <label for="dosage" class="form-label">Dosage</label>
                    <input type="text" name="dosage" class="form-control" id="dosage" value="{{$ordonnance->dosage}}" required>
                </div>

                <div class="mb-3">
                    <label for="frequence_utilisation" class="form-label">Frequence_utilisation</label>
                    <input type="text" name="frequence_utilisation" class="form-control" id="frequence_utilisation" value="{{$ordonnance->frequence_utilisation}}" required>
                </div>

                <div class="mb-3">
                    <label for="date_prescription" class="form-label">Date</label>
                    <input type="date" name="date_prescription" class="form-control" id="date_prescription" value="{{$ordonnance->date_prescription}}" required>
                </div>
                <div class="mb-3">
                    <label for="duree_prescription" class="form-label">Duree</label>
                    <input type="date" name="duree_prescription" class="form-control" id="duree_prescription"  value="{{$ordonnance->duree_prescription}}"  required>
                </div>
                <div class="mb-3">
                    <label for="date_expiration" class="form-label">Date</label>
                    <input type="date" name="date_expiration" class="form-control" id="date_expiration" value="{{$ordonnance->date_expiration}}"  required>
                </div>
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.ordonnance')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
