<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>

@foreach ($users as $user)
    <h2>{{ $user->name }}</h2>
    @if($user->courses)
        @foreach ($user->courses as $course)
            <h3>{{ $course->course }}</h3>
            <p>Instructor: {{ $course->instructor }}</p>
        @endforeach
    @else
        <p>No courses found for this user.</p>
    @endif
    <hr>
@endforeach

</body>

</html>
