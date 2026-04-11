@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
            <h4>Nouveau medecin</h4>

            <div class="container my-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-6 card">
            <h4 >Ajout d'un medecin</h4>


            <form method="POST" action="{{route('store.medecin')}}" enctype="multipart/form-data">

                @csrf

                            <div class="mb-3">
                    <label for="noms" class="form-label">Noms</label>
                    <input type="text" name="noms" class="form-control" id="noms" placeholder="entrer le nom de medecin" required>
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
                    <input type="text" name="specialité" class="form-control" id="specialité" placeholder="entrer le specialité de medecin" required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="adresse" placeholder="entrer l'adresse de medecin" required>
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="entrer le telephone de medecin" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="entrer l'adresse mail de medecin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
               <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter l'image du medecin">
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
