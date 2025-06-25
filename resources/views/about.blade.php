<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About | Jannatul</title>
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
      line-height: 1.6;
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
      color: #fff;
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

    .about {
      padding: 60px 50px;
      background-color: #1a1a1a;
    }

    .about h2 {
      font-size: 36px;
      color: #ff4d4d;
      margin-bottom: 20px;
    }

    .about p {
      font-size: 18px;
      color: #ccc;
      margin-bottom: 15px;
      max-width: 800px;
    }

    .skills-stats {
      background-color: #0d0d0d;
      padding: 60px 40px;
      text-align: center;
    }

    .skills-section h3 {
      font-size: 28px;
      margin-bottom: 40px;
      color: #ff4d4d;
    }

    .skill-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 30px;
      max-width: 900px;
      margin: 0 auto;
    }

    .skill {
      background-color: #1a1a1a;
      padding: 20px;
      border-radius: 12px;
      transition: transform 0.3s ease, background 0.3s ease;
      cursor: pointer;
    }

    .skill:hover {
      background-color: #222;
      transform: translateY(-8px);
    }

    .skill img {
      width: 60px;
      height: 60px;
      margin-bottom: 10px;
      background: white;
      padding: 10px;
      border-radius: 12px;
    }

    .skill p {
      font-size: 16px;
      color: #ccc;
      margin-top: 8px;
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 10px;
      }

      .nav-links {
        flex-direction: column;
        gap: 10px;
      }

      .about,
      .skills-stats {
        padding: 30px 20px;
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

  <section class="about">
    <h2>Who Am I?</h2>
    <p>I'm Jannatul Ferdaus, a passionate software developer with a background in cse and a drive to build impactful digital solutions.</p>
    <p>I specialize in front-end development, love working with JavaScript frameworks, and enjoy creating intuitive, responsive UIs.</p>
  </section>

  <section class="skills-stats">
    <div class="skills-section">
      <h3>Core Skills</h3>
      <div class="skill-container">
        <div class="skill">
          <img src="assets/images/R.png" alt="Profile Photo" />
          <p>HTML5</p>
        </div>
        <div class="skill">
          <img src="assets/images/c.png" alt="Profile Photo" />
          <p>CSS3</p>
        </div>
        <div class="skill">
         <img src="assets/images/j.png" alt="Profile Photo" />
          <p>JavaScript</p>
        </div>
        <div class="skill">
          <img src="assets/images/R.png" alt="Profile Photo" />
          <p>React</p>
        </div>
        <div class="skill">
          <img src="assets/images/R.png" alt="Profile Photo" />
          <p>Node.js</p>
        </div>
        <div class="skill">
          <img src="assets/images/R.png" alt="Profile Photo" />
          <p>Git</p>
        </div>
      </div>
    </div>
  </section>
  <script>

  const heading = document.querySelector(".about h2");
  const originalText = heading.textContent;
  heading.textContent = "";
  let i = 0;

  function typeEffect() {
    if (i < originalText.length) {
      heading.textContent += originalText.charAt(i);
      i++;
      setTimeout(typeEffect, 100);
    }
  }
  window.addEventListener('load', typeEffect);


  const skills = document.querySelectorAll(".skill");
  skills.forEach(skill => {
    skill.addEventListener("click", () => {
      const skillName = skill.querySelector("p").textContent;
      alert(`You clicked on ${skillName}`);
    });
  });
</script>


</body>
</html>
