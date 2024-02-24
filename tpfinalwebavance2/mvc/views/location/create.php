{{ include('layouts/header.php', {title: 'Location Create'})}}

<div>
    
    <h3>Client</h3>
        <table>
            <thead>
                <tr>
                <th>Id du client</th>
                <th>Name</th>
                    <th>phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            {% for client in clients %}
                <tr>
                    <td><a href="{{ base }}/client/show?id={{ client.id }}">{{ client.id }}</a></td>
                    <td>{{ client.nom }}</td>
                    <td>{{ client.telephone }}</td>
                    <td>{{ client.email }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h3>Voiture</h3>
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
</div>

<div class="container">

    <h2>Location Create</h2>
    <form method="post">
        
    <label>Identifiant du client
            <input type="Text" name="client_id" value="{{ location.client_id }}">
        </label>
        {% if errors.client_id is defined %}
        <span class="error">{{ errors.client_id }}</span>
        {% endif %}
        <label>Identifiant de la voiture
        <input type="Text" name="voiture_id" value="{{ location.voiture_id }}">
        </label>
        {% if errors.voiture_id is defined %}
        <span class="error">{{ errors.voiture_id }}</span>
        {% endif %}
        </label>
        <label>Date de Location
            <input type="date" name="date_location" value="{{ location.date_location }}">
        </label>
        {% if errors.date_location is defined %}
        <span class="error">{{ errors.date_location }}</span>
        {% endif %}
        <label>Date de retour
            <input type="date" name="date_retour" value="{{ location.date_retour }}">
        </label>
        {% if errors.date_retour is defined %}
        <span class="error">{{ errors.date_retour}}</span>
        {% endif %}
        <input type="submit" class="btn" value="Save">
    </form>
</div>
{{ include('layouts/footer.php') }}