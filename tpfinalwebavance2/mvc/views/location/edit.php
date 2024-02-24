{{ include('layouts/header.php', {title: 'Edit'})}}
    <div class="container">
        <h2>Location Edit</h2>
        <form method="post">
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
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
{{ include('layouts/footer.php')}}