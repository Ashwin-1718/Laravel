<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Store</title>
    <style>
        /* Body style */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4faff; /* Soft light blue background */
            color: #333; /* Dark text color */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header style */
        header {
            background-color: #4e9dcf; /* Soft blue background */
            color: white;
            padding: 15px 30px;
            text-align: left; /* Align nav links to the left */
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            font-weight: 500;
        }

        header nav a:hover {
            text-decoration: underline;
            color: #ffffff; /* White hover effect */
        }

        /* Main content section */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 40px 20px;
            text-align: center;
        }

        .main-content h1 {
            font-size: 32px;
            color: #333;
        }
        /* Simplified Sidebar section (Now on the right) */
        .sidebar {
            width: 200px;
            background-color: #e6f0ff; /* Very light blue sidebar */
            color: #333;
            padding: 15px;
            position: fixed;
            top: 0;
            right: 0; /* Sidebar now on the right */
            height: 100vh;
            border-left: 1px solid #ccc; /* Light border between sidebar and content */
        }

        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .sidebar a {
            display: block;
            color: #333;
            text-decoration: none;
            padding: 10px;
            margin: 10px 0;
            background-color: #f4faff;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #4e9dcf; /* Soft blue background on hover */
            color: white;
        }

        /* Footer section */
        footer {
            background-color: #4e9dcf; /* Soft blue footer */
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/about')}}">About</a>
            <a href="{{url('/contact')}}">Contact</a>
        </nav>
    </header>

    <!-- Sidebar Section (Simplified and moved to the right) -->
    <div class="sidebar">
        <h2>Sidebar</h2>
        <a href="#">Store</a>
        <a href="#">Products</a>
        <a href="#">Categories</a>
        <a href="#">Offers</a>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        @yield('content')
    </div>
    
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Krishna | All Rights Reserved</p>
    </footer>

</body>
</html>
