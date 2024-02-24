{{ include('layouts/header.php', {title: 'Voiture Create'})}}
    <div class="container">
        <h2>Voiture Create</h2>
        <form method="post">
            <label>Marque
                <input type="text" name="marque" value="{{ voiture.marque }}">
            </label>
            {% if errors.marque is defined %}
                <span class="error">{{ errors.marque }}</span>
            {% endif %}
            <label>Modèle
                <input type="text" name="modele" value="{{ voiture.modele }}">
            </label>
            {% if errors.modele is defined %}
                <span class="error">{{ errors.modele }}</span>
            {% endif %}
            <label>Année
                <input type="text" name="annee" value="{{ voiture.annee }}">
            </label>
            {% if errors.annee is defined %}
                <span class="error">{{ errors.annee}}</span>
            {% endif %}
            <label>Prix de location
                <input type="text" name="prix_location" value="{{ voiture.prix_location }}">
            </label>
            {% if errors.prix_location is defined %}
                <span class="error">{{ errors.prix_location}}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php') }}
