<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <form action="{{ route('update', $Employee->id) }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $Employee->name }}" required><br><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="Salary" value="{{ $Employee->Salary }}" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="Department" value="{{ $Employee->Department }}" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
