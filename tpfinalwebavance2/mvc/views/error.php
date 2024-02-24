{{ include('layouts/header.php', {title: 'Error'})}}
</head>
<body>


    <div class="container">
        <h2>Error 404 - Page not found!</h2>
        <strong class="error">{{ message }}</strong>
    </div>
</body>
</html>

{{ include('layouts/footer.php') }}
