<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>

    @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
    @endsession 

    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name">Nom complet</label>
            <input type="text" name="name" id="name">
            @error('name')
                <p>{{ $message }} </p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            @error('email')
                <p>{{ $message }} </p>
            @enderror
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            @error('password')
                <p>{{ $message }} </p>
            @enderror
        </div>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>