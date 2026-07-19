<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Listing</title>
    <style>

        * {
            padding: 5px;
        }
        th, td, tr {
            border: 1px solid blue;
            font-family: cambria;
        }
        th {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Employee Management</h1>
    <div style="margin-bottom: 20px;">
        <a href="{{ route('insert') }}" class="btn btn-primary" style="padding: 10px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;">Add Employee</a>
    </div>
    <table cellspacing="10px" cellpadding="10px">
        <tr>
            <th>Employee Name</th>
            <th>Salary</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
        @foreach ($Employees as $Employee)
        <tr>
            <td>{{ $Employee->name }}</td>
            <td>{{ $Employee->Salary }}</td>
            <td>{{ $Employee->Department }}</td>
            <td>
                <a href="{{ route('edit', $Employee->id) }}">Edit</a>
                <form action="{{ route('delete', $Employee->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
