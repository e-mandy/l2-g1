<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="">Nom Complet</label>
            <input type="text" name="fullname" value="{{ old('fullname') }}">
        </div>

        <div>
            <label for="">Numéro de téléphone</label>
            <input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}">
        </div>

        <button type="submit">Enregistrer</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Nom complet</th>
                <th>Numéro de téléphone</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->full_name }}</td>
                    <td>{{ $contact->phone_number }}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>