<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
