<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        @include("components.navbar")
    </div>
    @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
    @endsession 

    <form action={{ route("login") }} method="post" class="w-[400px] m-auto pt-5 min-h-[400px]">
        @csrf
        <h1 class="title h2">Login form</h1>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Email</legend>
                <input type="email" id="email" name="email" value="{{ old("email") }}" class="input">
                @error('email')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Password</legend>
                <input type="password" id="password" name="password" value="{{ old("password") }}" class="input">
                @error('password')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
        <button class="btn btn-primary mt-5">Submit</button>
    </form>
</body>
</html>