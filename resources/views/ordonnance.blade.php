@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des ordonnances</h4>

            <div class="flex-end" >
            <a href="{{route('create.ordonnance')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                    <th scope="col">Nom_medicament</th>
                    <th scope="col">Dosage</th>
                    <th scope="col">Frequence_utilisation</th>
                    <th scope="col">Date</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($ordonnance as $ordonnance)
                            <tr valign="middle">
                                <td>{{$ordonnance ->created_at}}</td>
                                    <td>{{$ordonnance ->nom}}</td>
                                    <td>{{$ordonnance -> nom_medicament}}</td>
                                    <td>{{$ordonnance -> dosage}}</td>
                                    <td>{{$ordonnance -> frequence_utilisation}}</td>
                                    <td>{{$ordonnance -> date_prescription}}</td>
                                    <td>{{$ordonnance -> duree_prescription}}</td>
                                    <td>{{$ordonnance -> date_expiration}}</td>
                                   
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.ordonnance', $ordonnance ->id)}}' role='button'>Editer</a>
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteOrdonnance({{$ordonnance ->id}});">Supprimer</a>
           
                                    <form action="{{route('delete.ordonnance', $ordonnance ->id)}}" method="post" id="delete-{{$ordonnance->id}}">
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
        function deletePrescription(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
