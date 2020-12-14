<h1>Tous les visiteurs</h1>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>login</th>
        <th>adresse</th>
        <th>cp</th>
        <th>ville</th>
    </tr>
    </thead>
    @foreach($visiteurs as $visiteur)
        <tr>
            <td>{{$visiteur->id}}</td>
            <td>{{$visiteur->nom}}</td>
            <td>{{$visiteur->prenom}}</td>
            <td>{{$visiteur->login}}</td>
            <td>{{$visiteur->adresse}}</td>
            <td>{{$visiteur->cp}}</td>
            <td>{{$visiteur->ville}}</td>
        </tr>
    @endforeach
</table>

