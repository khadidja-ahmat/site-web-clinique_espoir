@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des historiques</h4>

            <div class="flex-end" >
            <a href="{{route('create.historique')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                    <th scope="col">Patient</th>
                    <th scope="col">Examen</th>
                    <th scope="col">Prescription_lunette</th>
                    <th scope="col">Antécédent_chirurgie</th>
                    <th scope="col">Résultats_test</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($historique as $historique)
                            <tr valign="middle">
                                <td>{{$historique ->created_at}}</td>
                                    <td>{{$historique ->nom}}</td>
                                    <td>{{$historique -> resultat}}</td>
                                    <td>{{$historique -> prescription}}</td>
                                    <td>{{$historique -> antecedant}}</td>
                                    <td>{{$historique -> resultat_test}}</td>
                                   
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.historique', $historique ->id)}}' role='button'>Editer</a>
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteHistorique({{$historique ->id}});">Supprimer</a>
           
                                    <form action="{{route('delete.historique', $historique ->id)}}" method="post" id="delete-{{$historique->id}}">
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
        function deleteHistorique(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
