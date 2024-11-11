<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>

@foreach ($courses as $course)
    <h2>{{ $course->course }}</h2>
    <h3>Instructor: {{ $course->instructor }}</h3>

    @if($course->users)
        @foreach ($course->users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
    @else
        <p>No users found for this course.</p>
    @endif

    <hr>
@endforeach

</body>

</html>
