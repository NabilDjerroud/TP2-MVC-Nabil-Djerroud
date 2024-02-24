{{ include('layouts/header.php', {title: 'Location'})}}
    <h1>Locations</h1>
    <table>
        <thead>
            <tr>
                <th>Id de la location</th>
                <th>Id de la voiture</th>
                <th>Date de Location</th>
                <th>Date de Retour</th>
                
            </tr>
        </thead>
        <tbody>
        {% for location in locations %}
            <tr>
                <td><a href="{{ base }}/location/show?id={{ location.id }}">{{ location.id }}</a></td>
                <td>{{ location.voiture_id }}</td>
                <td>{{ location.date_location }}</td>
                <td>{{ location.date_retour }}</td>

                
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/location/create" class="btn" >Location Create</a>
{{ include('layouts/footer.php') }}