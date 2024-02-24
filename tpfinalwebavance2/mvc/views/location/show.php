{{ include('layouts/header.php', {title: 'Show'})}}
    <div class="container">
        <h2>Location Show</h2>
        <hr>
        <p><strong>Date de location:</strong> {{ location.date_location }}</p>
        <p><strong>Id Client:</strong> {{ location.client_id }}</p>
        <p><strong>Date de retour:</strong> {{ location.date_retour }}</p>
        <a href="{{base}}/location/edit?id={{location.id}}" class="btn block">Edit</a>
        <form action="{{base}}/location/delete" method="post">
            <input type="hidden" name="id" value="{{ location.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php')}}