<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
<h1 style="color: red;">Profile</h1>
@foreach ($profiles as $profile)
    @if ($profile->user)
        <h2 style="color: grey;">{{ $profile->user->name }}</h2>
        <p>Email: {{ $profile->user->email }}</p>
        <p>Birthdate: {{ $profile->user->birthdate }}</p>
        <p>Status: {{ $profile->user->status }}</p>
        <p>Bio: {{ $profile->bio }}</p>
        <p>Occupation: {{ $profile->occupation }}</p>
    @else
        <p>User information not available</p>
    @endif
    <hr>
@endforeach

</body>

</html>
