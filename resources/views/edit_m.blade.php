@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier un medecin</h4>


                        <form method="POST" action="{{route('update.medecin', $medecin->id)}}" >

                        

                            @csrf
                            @method('put')

                            <div class="mb-3">
                    <label for="noms" class="form-label">Noms</label>
                    <input type="text" name="noms" class="form-control" id="noms" value="{{$medecin->noms}}" required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" class="form-control" id="genre">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                    </select> 
                    </div>
                <div class="mb-3">
                    <label for="specialité" class="form-label">Specialité</label>
                    <input type="text" name="specialité" class="form-control" id="specialité" value="{{$medecin->specialité}}"required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse" value="{{$medecin->adresse}}" required>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="tel" value="{{$medecin->tel}}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{$medecin->email}}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" value="<a href='{{$medecin->image}}'></a>"/>
                </div>
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.medecin')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
