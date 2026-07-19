<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $student->email }}" required><br><br>

        <label for="course">Course:</label>
        <input type="text" name="course" id="course" value="{{ $student->course }}" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
