{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Create</h2>
        <form method="post">
            <label>Name
                <input type="text" name="nom" value="{{ client.nom }}">
            </label>
            {% if errors.nom is defined %}
                <span class="error">{{ errors.nom }}</span>
            {% endif %}
            <label>Telephone
                <input type="text" name="telephone" value="{{ client.telephone }}">
            </label>
            {% if errors.telephone is defined %}
                <span class="error">{{ errors.telephone}}</span>
            {% endif %}
            <label>email
                <input type="email" name="email" value="{{ client.email }}">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email}}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php') }}
