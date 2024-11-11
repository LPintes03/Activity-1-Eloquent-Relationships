<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
<h1 style="color: red;">Users</h1>
@foreach ($users as $user)
    <h2 style="color: grey;">{{ $user->name }}</h2>
    @if ($user->profile)
        <p>Bio: {{ $user->profile->bio }}</p>
        <p>Occupation: {{ $user->profile->occupation }}</p>
    @else
        <p>No profile available.</p>
    @endif
    <hr>
@endforeach

</body>

</html>
