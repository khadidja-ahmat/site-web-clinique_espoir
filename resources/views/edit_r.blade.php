@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier un rendez-vous</h4>


                        <form method="POST" action="{{route('update.rdv', $rdv->id)}}" >

                        

                            @csrf
                            @method('put')

                            <div class="mb-3">
                    <label for="dates" class="form-label">Dates</label>
                    <input type="date" name="dates" class="form-control" id="dates" value="{{$rdv->dates}}" required>
                </div>
                     <div class="mb-3">
                    <label for="patient_id" class="form-label">Choisir le patient</label>
                    <select name="patient_id" class="form-control" id="patient_id">
                        <!-- <option>Choisir la Matiere</option> -->
                        @foreach($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->nom}}</option>
                        @endforeach
                    </select> 
                                       
                </div>  
                
                <div class="mb-3">
                    <label for="medecin_id" class="form-label">Choisir le medecin</label>
                    <select name="medecin_id" class="form-control" id="medecin_id">
                        <!-- <option>Choisir la Matiere</option> -->
                        @foreach($medecin as $medecin)
                            <option value="{{$medecin->id}}">{{$medecin->noms}}</option>
                        @endforeach
                    </select>                    
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" value="{{$rdv->type}}" required>
                </div>
                <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                      <select name="statut" class="form-control" id="statut">
                            <option value="planifié">Planifier</option>
                            <option value="encours">Encours</option>
                            <option value="annulé">Annuler</option>
                    </select>                    
                </div>
                {{-- <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="entrer le type de client" required>
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="entrer le type de client" required>
                </div> --}}


                
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.rdv')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
