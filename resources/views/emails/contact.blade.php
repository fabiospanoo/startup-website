<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Contatto dal Sito</title>
</head>
<body>
    <h2>Nuovo Contatto dal Sito</h2>
    <p><strong>Nome:</strong> {{ $formdata['name'] }}</p>
    <p><strong>Email:</strong> {{ $formdata['email'] }}</p>
    <p><strong>Messaggio:</strong> {{ $formdata['message'] }}</p>
</body>
</html>