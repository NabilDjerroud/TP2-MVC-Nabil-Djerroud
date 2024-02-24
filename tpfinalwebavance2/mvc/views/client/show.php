{{ include('layouts/header.php', {title: 'Client Create'})}}
    <div class="container">
        <h2>Client Show</h2>
        <hr>
        <p><strong>Name:</strong> {{ client.nom }}</p>
        <p><strong>Phone:</strong> {{ client.telephone }}</p>
        <p><strong>Email:</strong> {{ client.email }}</p>
        <a href="{{base}}/client/edit?id={{client.id}}" class="btn block">Edit</a>
        <form action="{{base}}/client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php') }}