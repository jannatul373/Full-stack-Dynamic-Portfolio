<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Resume - Jannatul Ferdaus</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <style>
    body {
      background: #0d0d0d;
      color: white;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
    }

    header {
      background-color: #000;
      padding: 15px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h2 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
      color: #ff4d4d;
    }

    header a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      background: #ff4d4d;
      padding: 8px 15px;
      border-radius: 5px;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    header a:hover {
      background: #e63e3e;
      transform: scale(1.05);
    }

    .resume-container {
      max-width: 1100px;
      margin: auto;
      padding: 30px 20px;
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .resume-container img {
      width: 350px; /* Medium size */
      border: 2px solid #ff4d4d;
      border-radius: 12px;
      box-shadow: 0px 5px 15px rgba(0,0,0,0.6);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .resume-container img:hover {
      transform: scale(1.05);
      box-shadow: 0px 8px 20px rgba(255, 77, 77, 0.6);
    }

    footer {
      background: #000;
      padding: 15px;
      text-align: center;
      font-size: 14px;
      color: #aaa;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <header>
    <h2>My Resume</h2>
    <a href="{{ url('/') }}">⬅ Back to Portfolio</a>
  </header>

  <div class="resume-container">
    <img src="{{ asset('assets/images/r1.jpg') }}" alt="Resume Page 1">
    <img src="{{ asset('assets/images/r2.jpg') }}" alt="Resume Page 2">
  </div>

  <footer>
    &copy; {{ date('Y') }} Jannatul Ferdaus. All Rights Reserved.
  </footer>

</body>
</html>
