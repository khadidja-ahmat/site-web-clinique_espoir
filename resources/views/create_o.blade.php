@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
            <h4>Nouveau ordonnance</h4>

            <div class="container my-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-6 card">
            <h4 >Ajout de ordonnance</h4>


            <form method="POST" action="{{route('store.ordonnance')}}" enctype="multipart/form-data">

                @csrf
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
                    <input type="text" name="nom_medicament" class="form-control" id="nom_medicament" placeholder="entrer le nom du medicament" required>
                </div>
                <div class="mb-3">
                    <label for="dosage" class="form-label">Dosage</label>
                    <input type="text" name="dosage" class="form-control" id="dosage" placeholder="entrer le dosage de medecin" required>
                </div>

                <div class="mb-3">
                    <label for="frequence_utilisation" class="form-label">Frequence_utilisation</label>
                    <input type="text" name="frequence_utilisation" class="form-control" id="frequence_utilisation" placeholder="entrer la frequence du medicament" required>
                </div>

                <div class="mb-3">
                    <label for="date_prescription" class="form-label">Date</label>
                    <input type="date" name="date_prescription" class="form-control" id="date_prescription" placeholder="entrer le telephone de medecin" required>
                </div>
                <div class="mb-3">
                    <label for="duree_prescription" class="form-label">Duree</label>
                    <input type="date" name="duree_prescription" class="form-control" id="duree_prescription" placeholder="entrer l'adresse mail de medecin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
                <div class="mb-3">
                    <label for="date_expiration" class="form-label">Date_expiration</label>
                    <input type="date" name="date_expiration" class="form-control" id="date_expiration" placeholder="entrer l'adresse mail de medecin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
                <div class="flex-end" >
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Soumettre</button>
                    <a href="index.php" class="btn btn-outline-warning mb-3">Annuler</a>
                </div>

            </form>
        </div>
    </div>


            </div>
        </div>
    </section><!-- #about -->
@endsection
