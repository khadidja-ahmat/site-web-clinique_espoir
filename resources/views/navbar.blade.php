<nav class="navbar navbar-expand-lg navbar-success bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">ESPOIR DE VUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('list.article')}}">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('list.client')}}">Clients</a>
        </li> --}}
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('list.patient')}}">Patients</a></li>
            <li><a class="dropdown-item" href="{{route('list.rdv')}}">Rdvs</a></li>
            <li><a class="dropdown-item" href="{{route('list.medecin')}}">Medecins</a></li>
            <li><a class="dropdown-item" href="{{route('create_c')}}">Consultations</a></li>
            <li><a class="dropdown-item" href="{{route('list.historique')}}">Historiques Médical</a></li>  
            <li><a class="dropdown-item" href="{{route('list.employe')}}">Employés</a></li>  
            <li><a class="dropdown-item" href="{{route('list.ordonnance')}}">Ordonnance</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('list.patient')}}">Patients</a></li>
            <li><a class="dropdown-item" href="{{route('list.rdv')}}">Rdvs</a></li>
            <li><a class="dropdown-item" href="{{route('list.medecin')}}">Medecins</a></li>
            <li><a class="dropdown-item" href="{{route('list.consultation')}}">Consultations</a></li> 
            <li><a class="dropdown-item" href="{{route('list.historique')}}">Historiques Médical</a></li>
            <li><a class="dropdown-item" href="{{route('list.employe')}}">Employés</a></li>  
            <li><a class="dropdown-item" href="{{route('list.ordonnance')}}">Ordonnance</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
{{-- 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Apropos
          </a>
        </li> --}}

      </ul>

    </div>
  </div>
</nav>
