<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
</head>
<body>
    <h1>View Student</h1>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Course: {{ $student->course }}</p>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>

