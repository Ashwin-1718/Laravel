<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <style>
        /* Basic Reset and Flex Layout */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0a1d2d; /* Deep blue background */
            color: #e1e1e1; /* Light gray text */
            min-height: 100vh;
            display: flex;
            flex-direction: column; /* Column layout for header, main-content, and footer */
        }

        /* Header section */
        header {
            background-color: #1a2b39; /* Darker blue for header */
            color: #f0f0f0; /* Light text for header */
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        header nav a {
            margin: 0 25px;
            color: #f0f0f0;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
        }
        header nav a:hover {
            text-decoration: underline;
            color: #3ecf8e; /* Neon green hover effect */
        }

        .main-content {
            margin-left: 200px; /* Create space for the sidebar */
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .game {
            background-color: #1e2a35; /* Dark card background */
            border: 2px solid #2f3b49;
            padding: 20px;
            width: 320px;
            height: 400px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            border-radius: 10px;
        }
        .game:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
            border-color: #3ecf8e;
        }
        .game img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }
        .game h3 {
            color: #f5f5f5;
            margin: 15px 0;
            font-size: 22px;
        }
        .game p {
            color: #bbb;
            font-size: 14px;
        }

        /* Sidebar styles */
        .sidebar {
            width: 200px; /* Small sidebar width */
            background-color: #1a2b39; /* Dark blue for sidebar */
            color: #f0f0f0;
            padding: 20px;
            height: 100vh; /* Full height */
            position: fixed; /* Fixed on the left */
            top: 0;
            left: 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
            color: #f0f0f0;
            text-align: center;
        }
        .sidebar a {
            color: #f0f0f0;
            text-decoration: none;
            font-size: 18px;
            margin: 15px 0;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: block; /* Make each link a block-level element */
        }
        .sidebar a:hover {
            background-color: #3ecf8e; /* Neon green hover effect */
        }

        /* Footer section */
        footer {
            background-color: #1a2b39;
            color: #f0f0f0;
            padding: 20px 0;
            text-align: center;
            margin-top: auto;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{url('/about')}}">About</a>
            <a href="{{url('/contact')}}">Contact</a>
        </nav>
    </header>

    <!-- Sidebar Section -->
    <div class="sidebar">
        <h2>Game Store</h2>
        <a href="#store">Store</a>
        <a href="#games">Games</a>
        <a href="#categories">Categories</a>
        <a href="#offers">Offers</a>
    </div>

       <section>@yield('content')</section> 
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Krishna | All Rights Reserved</p>
    </footer>

</body>
</html>
