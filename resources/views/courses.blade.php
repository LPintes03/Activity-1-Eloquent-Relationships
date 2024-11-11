<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
<h1 style="color: red;">Courses</h1>

@foreach ($courses as $course)
    <h2 style="color: grey;">{{ $course->course }}</h2>
    <h3>Instructor: {{ $course->instructor }}</h3>
    <h4>Students Enrolled:</h4>

    @if($course->users)
        @foreach ($course->users as $user)
        <ul>
            <li>{{ $user->name }}</lis>
        </ul>
        @endforeach
    @else
        <p>No users found for this course.</p>
    @endif

    <hr>
@endforeach

</body>

</html>
