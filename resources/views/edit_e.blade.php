@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5">
                <div class="container my-5 row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 card">
                        <h4 >Modifier un employe</h4>


                        <form method="POST" action="{{route('update.employe', $employe->id)}}" >

                        

                            @csrf
                            @method('put')

                            <div class="mb-3">
                    <label for="noms" class="form-label">Noms</label>
                    <input type="text" name="noms" class="form-control" id="noms" value="{{$employe->noms}}" required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" class="form-control" id="genre">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                    </select> 
                    </div>
                <div class="mb-3">
                    <label for="poste" class="form-label">Poste</label>
                    <input type="text" name="poste" class="form-control" id="poste" value="{{$employe->poste}}"required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse" value="{{$employe->adresse}}" required>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="tel" value="{{$employe->tel}}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{$employe->email}}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" value="<a href='{{$employe->image}}'></a>"/>
                </div>
                
                <div class="flex-end" >
                                <button type="submit" class="btn btn-primary mb-3 mx-3">Update</button>
                                <a href="{{route('list.employe')}}" class="btn btn-outline-warning mb-3">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #about -->
@endsection
