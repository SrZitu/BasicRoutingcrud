<!-- resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>

    <h3>Name: {{ $user->name }}</h3>
    <h3>Email: {{ $user->email }}</h3>

    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
</body>
</html>
