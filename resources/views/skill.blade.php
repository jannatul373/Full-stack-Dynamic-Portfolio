<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Skills - Jannatul Ferdaus</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

    .skills-section {
      max-width: 1000px;
      margin: auto;
      padding: 40px 20px;
    }

    .skills-section h1 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 30px;
      color: #ff4d4d;
    }

    .skill-category {
      margin-bottom: 40px;
    }

    .skill-category h2 {
      font-size: 22px;
      border-left: 4px solid #ff4d4d;
      padding-left: 10px;
      margin-bottom: 20px;
    }

    .skill {
      margin-bottom: 15px;
    }

    .skill-name {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
      margin-bottom: 5px;
    }

    .skill-bar {
      background: #222;
      border-radius: 20px;
      overflow: hidden;
      height: 12px;
    }

    .skill-bar-fill {
      background: #ff4d4d;
      height: 100%;
      width: 0;
      transition: width 1.5s ease-in-out;
    }

    footer {
      background: #000;
      padding: 15px;
      text-align: center;
      font-size: 14px;
      color: #aaa;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h2>My Skills</h2>
    <a href="{{ url('/') }}">⬅ Back to Portfolio</a>
  </header>

  <!-- Skills Content -->
  <section class="skills-section">
    <h1>Technical Skills</h1>

    <!-- Programming Languages -->
    <div class="skill-category">
      <h2><i class="fas fa-code"></i> Programming Languages</h2>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-java"></i> Java</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 85%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-python"></i> Python</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 90%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-php"></i> PHP</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 75%;"></div></div>
      </div>
    </div>

    <!-- Web Development -->
    <div class="skill-category">
      <h2><i class="fas fa-laptop-code"></i> Web Development</h2>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-html5"></i> HTML5</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 95%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-css3-alt"></i> CSS3</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 90%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-js"></i> JavaScript</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 85%;"></div></div>
      </div>
    </div>

    <!-- Tools -->
    <div class="skill-category">
      <h2><i class="fas fa-tools"></i> Tools & Technologies</h2>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-git-alt"></i> Git</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 80%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fab fa-github"></i> GitHub</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 85%;"></div></div>
      </div>
      <div class="skill">
        <div class="skill-name"><i class="fas fa-database"></i> MySQL</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width: 75%;"></div></div>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer>
    &copy; {{ date('Y') }} Jannatul Ferdaus. All Rights Reserved.
  </footer>

  <!-- Animate skill bars on load -->
  <script>
    window.addEventListener('load', function() {
      document.querySelectorAll('.skill-bar-fill').forEach(function(bar) {
        let width = bar.style.width;
        bar.style.width = '0';
        setTimeout(() => { bar.style.width = width; }, 200);
      });
    });
  </script>

</body>
</html>
