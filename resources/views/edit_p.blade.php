@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier un patient</h4>


                        <form method="POST" action="{{route('update.patient', $patient->id)}}" >

                        

                            @csrf
                            @method('put')

                            <div class="mb-3">
                    <label for="nom" class="form-label">Noms</label>
                    <input type="text" name="nom" class="form-control" id="nom"  value="{{$patient->nom}}" required>
                </div>
                <div class="mb-3">
                    <label for="date_naissance" class="form-label">Date_Naissance</label>
                    <input type="text" name="date_naissance" class="form-control" id="date_naissance" value="{{$patient->date_naissance}}" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" class="form-control" id="genre">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                    </select> 
                    </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse"  value="{{$patient->adresse}}" required>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="tel"  value="{{$patient->tel}}" required>
                </div>
                <div class="mb-3">
                    <label for="ACO" class="form-label">ACO</label>
                    <input type="text" name="ACO" class="form-control" id="ACO"  value="{{$patient->ACO}}" required>
                </div>
                <div class="mb-3">
                    <label for="AFTO" class="form-label">AFTO</label>
                    <input type="text" name="AFTO" class="form-control" id="AFTO"  value="{{$patient->AFTO}}" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="entrer le type de client" required>
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="entrer le type de client" required>
                </div> --}}

                <div class="mb-3">
                    <label for="type" class="form-label">Choisir le patient</label>
                    <select name="type" class="form-control" id="type">
                            <option value="grossiste">Anciens patient</option>
                            <option value="nouveau">Nouveau patient</option>
                    </select>                    
                </div>
        

                
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.patient')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
