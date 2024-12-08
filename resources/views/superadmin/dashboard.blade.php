<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .container {
            margin: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .logout-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .modal-header {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .modal-body {
            font-size: 18px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Super Admin Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}!</p>
    </div>

    <div class="container">
        <div class="card">
            <h2>Dashboard Overview</h2>
            <p>This is the main dashboard for Super Admin. You can manage users, approve accounts, and monitor system
                activity here.</p>
        </div>

        <div class="card">
            <h3>Pending User Approvals</h3>
            <p>Here you can approve or reject user accounts that require verification.</p>
            <a href="javascript:void(0)" class="logout-button" onclick="openModal()">View Pending Approvals</a>
        </div>

        <div class="card">
            <h3>System Settings</h3>
            <p>Manage system configurations and settings here.</p>
            <a href="#" class="logout-button">Go to Settings</a>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>

    <!-- Modal -->


    <x-admin.user-list />
</body>

</html>
