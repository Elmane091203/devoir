<ul class="nav bg-dark sticky-top p-2 justify-content-lg-between">
    <li class="nav-item text-white">
        <a class="nav-link active  text-white" aria-current="page" href="/">Acceuil</a>
    </li>
    <ul class="nav bg-dark sticky-top justify-content-end">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('etudiants.create')}}">Etudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('etudiants.moyenne')}}">Moyenne Generale</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('etudiants.premier')}}">Premier de la classe</a>
        </li>
    </ul>
</ul>
