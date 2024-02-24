{{ include('layouts/header.php', {title: 'Client'})}}
    <h1>Clients</h1>
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
    <a href="{{ base }}/client/create" class="btn" >Client Create</a>
{{ include('layouts/footer.php') }}