@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des Rendez-vous</h4>

            <div class="flex-end" >
            <a href="{{route('create.rdv')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                    <th scope="col">Dates</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Medecin</th>
                    <th scope="col">Type</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($rdv as $rdv)
                            <tr valign="middle">
                                <td>{{$rdv ->created_at}}</td>
                                    <td>{{$rdv ->dates}}</td>
                                    <td>{{$rdv ->nom}}</td>
                                    <td>{{$rdv ->noms}}</td>
                                    <td>{{$rdv ->type}}</td>
                                    <td>{{$rdv ->statut}}</td>
                                   
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit.rdv', $rdv ->id)}}' role='button'>Editer</a>
                                    
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteRdv({{$rdv->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.rdv', $rdv ->id)}}" method="post" id="delete-{{$rdv->id}}">
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
        function deleteRdv(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
