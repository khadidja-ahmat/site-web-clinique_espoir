@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des consultations</h4>

            <div class="flex-end" >
            <a href="{{route('create_c')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
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
                    <th scope="col">Resultat</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($consultation as $consultation)
                            <tr valign="middle">
                                <td>{{$consultation ->created_at}}</td>
                                    <td>{{$consultation ->date}}</td>
                                    <td>{{$consultation ->nom}}</td>
                                    <td>{{$consultation ->noms}}</td>
                                    <td>{{$consultation ->type}}</td>
                                    <td>{{$consultation ->resultat}}</td>
                                   
                        
                                    <td>
                                    <a class='btn btn-sm btn-outline-warning' href='{{route('edit_c', $consultation ->id)}}' role='button'>Editer</a>
                                    
                                    <a class='btn btn-sm btn-outline-danger' href='#'  role='button' onClick="deleteConsultation({{$consultation ->id}});">Supprimer</a>
          
                                    <form action="{{route('delete.consultation', $consultation ->id)}}" method="post" id="delete-{{$consultation->id}}">
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
        function deleteConsultation(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>






@endsection
