<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Personal Info</title>
    <style>
        body { background: #0d0d0d; color: white; font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 50px auto; background: #1a1a1a; padding: 20px; border-radius: 10px; }
        h2 { color: #ff4d4d; text-align: center; }
        label { display: block; margin-top: 10px; }
        input, textarea { width: 100%; padding: 10px; margin-top: 5px; background: #000; border: 1px solid #333; color: white; border-radius: 5px; }
        button { background: #ff4d4d; border: none; padding: 10px; margin-top: 15px; width: 100%; color: white; border-radius: 5px; }
        button:hover { background: #e03e3e; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Personal Information</h2>
        <form method="POST" action="{{ route('admin.personalinfo.store') }}">
            @csrf
            <label>Full Name</label>
            <input type="text" name="full_name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Phone</label>
            <input type="text" name="phone">

            <label>Address</label>
            <textarea name="address" rows="3"></textarea>

            <button type="submit">Save Info</button>
        </form>
    </div>
</body>
</html>
