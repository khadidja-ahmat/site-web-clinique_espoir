@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">
        <div class="container my-5">
    <h4>Liste des patients</h4>
            <div class="flex-end" >
            <a href="{{route('create.patient')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                    <th scope="col">Date_Naissance</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">ACO</th>
                    <th scope="col">AFTO</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($patients as $patient)
                            <tr valign="middle">
                                <td>{{$patient ->created_at}}</td>
                                    <td>{{$patient ->nom}}</td>
                                    <td>{{$patient -> genre}}</td>
                                    <td>{{$patient -> date_naissance}}</td>
                                    <td>{{$patient -> adresse}}</td>
                                    <td>{{$patient -> tel}}</td>
                                    <td>{{$patient -> ACO}}</td>
                                    <td>{{$patient -> AFTO}}</td>
                                   
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.patient', $patient ->id)}}' role='button'>Editer</a>
                                    
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deletePatient({{$patient ->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.patient', $patient ->id)}}" method="post" id="delete-{{$patient->id}}">
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
        function deletePatient(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
