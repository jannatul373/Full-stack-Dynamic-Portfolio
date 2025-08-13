<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skills Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-color: #0d0d0d;
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background: #1a1a1a;
      padding: 20px;
      border-radius: 10px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #ff4d4d;
    }
    label {
      display: block;
      margin-top: 10px;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      background: #000;
      border: 1px solid #333;
      color: white;
      border-radius: 5px;
    }
    button {
      background: #ff4d4d;
      border: none;
      padding: 10px 15px;
      margin-top: 15px;
      width: 100%;
      color: white;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }
    button:hover {
      background: #e03e3e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Add New Skill</h2>
    <form action="{{ route('admin.skills.store') }}" method="POST">
      @csrf
      <label>Skill Name</label>
      <input type="text" name="name" placeholder="e.g. Laravel" required>

      <label>Proficiency (%)</label>
      <input type="number" name="percentage" placeholder="e.g. 90" min="0" max="100" required>

      <label>Description</label>
      <textarea name="description" rows="4" placeholder="Describe the skill..." required></textarea>

      <button type="submit">Save Skill</button>
    </form>
  </div>
</body>
</html>
