<!DOCTYPE html>
<html>

<head>
    <title>Weight Monitoring Dashboard</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 150px;
            background-color: #333;
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 0;
            display: block;
            font-size: 14px;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main-content {
            margin-left: 150px;
            padding: 20px;
            width: calc(100% - 150px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        .table-container {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
            border: 1px solid #ccc;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
            background-color: #ffffff;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
            cursor: pointer; /* Ubah kursor menjadi pointer saat dihover */
        }
    </style>
    @yield('styles')
</head>

<body>
    <div class="sidebar">
        <h2 style="font-size: 18px;">Menu</h2>
        <a href="#">Dashboard</a>
        <a href="#">Datalog</a>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</body>

</html>
