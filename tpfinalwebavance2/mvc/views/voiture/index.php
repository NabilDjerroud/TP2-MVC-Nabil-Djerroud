{{ include('layouts/header.php', {title: 'Voiture'})}}
<h1>Voitures</h1>
<table>
    <thead>
        <tr>
            <th>Id du voiture</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Prix de location</th>
        </tr>
    </thead>
    <tbody>
        {% for voiture in voitures %}
        <tr>
            <td><a href="{{ base }}/voiture/show?id={{ voiture.id }}">{{ voiture.id }}</a></td>
            <td>{{ voiture.marque }}</td>
            <td>{{ voiture.modele }}</td>
            <td>{{ voiture.annee }}</td>
            <td>{{ voiture.prix_location }}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
<a href="{{ base }}/voiture/create" class="btn">Voiture Create</a>
{{ include('layouts/footer.php') }}