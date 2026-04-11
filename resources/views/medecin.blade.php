@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des medecins</h4>

            <div class="flex-end" >
            <a href="{{route('create.medecin')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{Session::get('success')}}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            @endif

            <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                   
                    
                    <th scope="col">Date</th>
                    <th scope="col">Noms</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Specialité</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($medecin as $medecin)
                            <tr valign="middle">
                                <td>{{$medecin ->created_at}}</td>
                                    <td>{{$medecin ->noms}}</td>
                                    <td>{{$medecin -> genre}}</td>
                                    <td>{{$medecin -> specialité}}</td>
                                    <td>{{$medecin -> adresse}}</td>
                                    <td>{{$medecin -> tel}}</td>
                                    <td>{{$medecin -> email}}</td>                      
                                    <td>
                                        @if($medecin -> image != '' && file_exists(public_path().'/images/articles/'.$medecin -> image))
                                            <img src="{{url('images/articles/'.$medecin -> image)}}" alt="" width="40" height="50"
                                                class="rounded-circle">
                                        @else
                                            <img src="{{url('assets/images/profile.jpeg')}}" alt="" width="40" height="40"
                                                 class="rounded-circle">
                                        @endif

                                    </td> 

                                    
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.medecin', $medecin ->id)}}' role='button'>Editer</a>
                                    
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteMedecin({{$medecin ->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.medecin', $medecin ->id)}}" method="post" id="delete-{{$medecin->id}}">
                                    @csrf
                                                @method('delete')

                                   </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- #about -->


    <script>
        function deleteMedecin(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
