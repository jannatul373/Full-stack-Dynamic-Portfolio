<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects | Jannatul</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #111;
      color: white;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background-color: #000;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: white;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #ff4d4d;
    }

    .projects-section {
      padding: 60px 50px;
      background: #111;
    }

    .projects-section h2 {
      font-size: 36px;
      margin-bottom: 40px;
      color: #ff4d4d;
      text-align: center;
    }

    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 25px;
    }

    .project-card {
      background: #1a1a1a;
      padding: 20px;
      border: 1px solid #333;
      border-radius: 10px;
      transition: background 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }

    .project-card:hover {
      background: #222;
      transform: translateY(-5px);
    }

    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .project-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #fff;
    }

    .project-card p {
      font-size: 16px;
      color: #bbb;
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
      }

      .nav-links {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
      }

      .projects-section {
        padding: 40px 20px;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Jannatul Ferdaus</div>
    <ul class="nav-links">
     <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/projects') }}">Projects</a>
       <a href="{{ url('/about') }}">About</a>
     
  
      
      <a href="{{ url('/contacts') }}">Contact</a>
    </ul>
  </nav>

  <section class="projects-section">
    <h2>My Projects</h2>
    <div class="project-grid">
      <div class="project-card" onclick="alert('Project 1: Web Portfolio\nA sleek responsive portfolio.')">
        <img src="assets/images/project.png" alt="Profile Photo" />
        <h3>Web Portfolio</h3>
        <p>Responsive personal portfolio using HTML, CSS & JS.</p>
      </div>

      <div class="project-card" onclick="alert('Project 1: Web Portfolio\nA sleek responsive portfolio.')">
        <img src="assets/images/project.png" alt="Profile Photo" />
        <h3>Web Portfolio</h3>
        <p>Responsive personal portfolio using HTML, CSS & JS.</p>
      </div>

      <div class="project-card" onclick="alert('Project 1: Web Portfolio\nA sleek responsive portfolio.')">
       <img src="assets/images/project.png" alt="Profile Photo" />
        <h3>Web Portfolio</h3>
        <p>Responsive personal portfolio using HTML, CSS & JS.</p>
      </div>

      <div class="project-card" onclick="alert('Project 1: Web Portfolio\nA sleek responsive portfolio.')">
        <img src="assets/images/project.png" alt="Profile Photo" />
        <h3>Web Portfolio</h3>
        <p>Responsive personal portfolio using HTML, CSS & JS.</p>
      </div>
    </div>
  </section>
  <script>
  
  const projects = document.querySelectorAll(".project-card");

  projects.forEach((card) => {
    card.addEventListener("click", () => {
      const title = card.querySelector("h3").innerText;
      const desc = card.querySelector("p").innerText;
      alert(`Project: ${title}\n${desc}`);
    });
  });
</script>

</body>
</html>
