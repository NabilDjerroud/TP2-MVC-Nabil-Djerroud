{{ include('layouts/header.php', {title: 'Voiture Show'})}}
    <div class="container">
        <h2>Voiture Show</h2>
        <hr>
        <p><strong>Marque:</strong> {{ voiture.marque }}</p>
        <p><strong>Modèle:</strong> {{ voiture.modele }}</p>
        <p><strong>Année:</strong> {{ voiture.annee }}</p>
        <p><strong>Prix de Location:</strong> {{ voiture.prix_location }}</p>
        <a href="{{base}}/voiture/edit?id={{voiture.id}}" class="btn block">Edit</a>
        <form action="{{base}}/voiture/delete" method="post">
            <input type="hidden" name="id" value="{{ voiture.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}