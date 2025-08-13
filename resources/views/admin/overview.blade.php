<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #0d0d0d;
      color: white;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background: #000;
      padding-top: 20px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #ff4d4d;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
      font-size: 16px;
      border-left: 4px solid transparent;
      transition: background 0.3s ease, border-color 0.3s ease;
    }
    .sidebar a:hover {
      background: #1a1a1a;
      border-left: 4px solid #ff4d4d;
    }
    .sidebar a i {
      margin-right: 10px;
    }

    /* Main Content */
    .main {
      margin-left: 250px;
      padding: 20px;
      flex: 1;
    }

    /* Top Navbar */
    .topbar {
      background: #000;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #222;
    }
    .topbar h1 {
      font-size: 22px;
      margin: 0;
    }
    .topbar .user {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .topbar img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    /* Dashboard Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .card {
      background: #1a1a1a;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
      transition: transform 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card h3 {
      margin: 10px 0;
      font-size: 18px;
    }
    .card p {
      font-size: 24px;
      font-weight: bold;
      color: #ff4d4d;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }
      .main {
        margin-left: 200px;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
<div class="sidebar">
    <h2>Admin</h2>
    <a href="{{ route('welcome') }}"><i class="fas fa-house"></i> Home</a>
    <a href="{{ route('admin.overview') }}"><i class="fas fa-home"></i> Dashboard</a>
    <a href="{{ route('admin.users') }}"><i class="fas fa-users"></i> Users</a>
    <a href="{{ route('admin.projects') }}"><i class="fas fa-briefcase"></i> Projects</a>
    <a href="{{ route('admin.skills') }}"><i class="fas fa-file-alt"></i> Skills</a>
    <a href="{{ route('admin.personalinfo') }}"><i class="fas fa-cog"></i> Personal-Info</a>
    <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>


  <!-- Main Content -->
  <div class="main">
    <!-- Topbar -->
    <div class="topbar">
      <h1>Dashboard</h1>
      <div class="user">
        <span>Admin</span>
       <img src="assets/images/diya.jpg" alt="Profile Photo" />
      </div>
    </div>

    <!-- Cards -->
    <div class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p>120</p>
      </div>
      <div class="card">
        <h3>Projects</h3>
        <p>45</p>
      </div>
      <div class="card">
        <h3>Skills</h3>
        <p>8</p>
      </div>
      
    </div>

  </div>

</body>
</html>
