<label>Nom du Client
            <select name="nom">
                {% for client in clients %}
                <option value="{{ client.nom }}">{{ client.nom }}</option>
                {% endfor %}
            </select>
        </label>
        <label>Id du Client
            <select name="client_id">
                {% for client in clients %}
                <option value="{{ location.client_Id }}">{{ location.client_id }}</option>
                {% endfor %}
            </select>
        </label>