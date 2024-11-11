<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <h1 style="color: red;">User's Courses</h1>
    @foreach ($users as $user)
    <h2 style="color: grey;">{{ $user->name }}</h2>
    @if($user->courses)
    @foreach ($user->courses as $course)
    <dl>
        <dt>
            <h3>{{ $course->course }}</h3>
        </dt>
        <dd>
            <p>Instructor: {{ $course->instructor }}</p>
        </dd>
    </dl>
    @endforeach
    @else
    <p>No courses found for this user.</p>
    @endif
    <hr>
    @endforeach

</body>

</html>