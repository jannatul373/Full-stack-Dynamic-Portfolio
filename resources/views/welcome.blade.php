<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>portfollio | Software Developer</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  transition: all 0.3s ease-in-out;
}

html {
  scroll-behavior: smooth;
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
  transition: background-color 0.3s ease;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  transition: color 0.3s ease;
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

.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 60px 50px;
  background: #1c1c1c;
  flex-wrap: wrap;
  transition: background 0.3s ease;
}

.hero-text h2,
.hero-text p,
.hero-text h1 {
  transition: color 0.3s ease;
}

.hero-text h2 {
  font-size: 36px;
}


.hero-text p {
  font-size: 22px;
  margin: 10px 0;
}

.hero-text h1 {
  font-size: 48px;
  font-weight: bold;
  margin-bottom: 20px;
}

.buttons {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.project-btn,
.resume-btn {
  padding: 10px 20px;
  font-size: 16px;
  border: 2px solid #ff4d4d;
  background: none;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.2s ease;
}
.nav-btn{

  padding: 10px 20px;
  font-size: 16px;
  border: 2px solid #ff4d4d;
  background: none;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.2s ease;
  border-radius: 30px; 


}

.project-btn:hover,
.resume-btn:hover {
  background: #ff4d4d;
  transform: scale(1.05);
}
.nav-btn{
  background: #ff4d4d;
  transform: scale(1.05);

}
.hero-image img {
  width: 300px;
  border-radius: 50%;
  border: 4px solid #ff4d4d;
  margin-top: 30px;
  transition: transform 0.3s ease;
}

.hero-image img:hover {
  transform: scale(1.05);
}

.skills {
  background-color: #0d0d0d;
  padding: 40px 0;
  text-align: center;
  transition: background 0.3s ease;
}

.skills-wrapper {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
  color: #ccc;
  font-size: 18px;
  font-weight: 500;
}

.skills-stats {
  display: flex;
  flex-direction: column;
  padding: 50px;
  background-color: #0d0d0d;
  color: white;
}

.skills-section {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 40px;
}

.skill {
  display: flex;
  align-items: center;
  gap: 15px;
  background: #1a1a1a;
  padding: 10px;
  border-radius: 8px;
  transition: background 0.3s ease, transform 0.3s ease;
}

.skill:hover {
  background: #2a2a2a;
  transform: scale(1.05);
}

.skill img {
  width: 40px;
  height: 40px;
  background: white;
  border-radius: 5px;
}

.about-text {
  margin-bottom: 40px;
}

.about-text h2 {
  font-size: 28px;
  margin-bottom: 10px;
}

.about-text p {
  color: #ccc;
  font-size: 16px;
  transition: color 0.3s ease;
}

.stats-section {
  display: flex;
  justify-content: space-between;
  text-align: center;
  flex-wrap: wrap;
  gap: 20px;
}

.stat {
  flex: 1;
  min-width: 150px;
  transition: transform 0.3s ease;
}

.stat:hover {
  transform: scale(1.05);
}

.stat img {
  width: 50px;
  height: 50px;
  margin-bottom: 10px;
  background: white;
  border-radius: 5px;
}

.stat p {
  color: #bbb;
}

footer {
  background-color: #000;
  color: #aaa;
  text-align: center;
  padding: 20px 0;
  font-size: 14px;
  margin-top: 40px;
  transition: background 0.3s ease;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .hero {
    flex-direction: column;
    text-align: center;
  }

  .buttons {
    justify-content: center;
  }

  .stats-section {
    flex-direction: column;
    align-items: center;
  }

  .skills-wrapper {
    gap: 20px;
  }
}

  </style>
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">Jannatul Ferdaus</div>
      <ul class="nav-links">
     
        <a href="{{ url('/') }}">Home</a>
         <a href="{{ url('/projects') }}">Projects</a>
          <a href="{{ url('/skill') }}">Skills</a>
        
        <a href="{{ url('/about') }}">About</a>
     
     
      
      <a href="{{ url('/contacts') }}">Contact</a>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h2>Hello</span></h2>
      <p>I'm Jannatul</p>
      <h1>Software Developer</h1>
      <div class="buttons">
        <button class="project-btn" onclick="location.href='projects.html'">Got a project?</button>
        <button class="resume-btn" onclick="location.href='{{ url('/resume') }}'">My Resume</button>


      </div>
    </div>
    <div class="hero-image">
      <img src="assets/images/diya.jpg" alt="Profile Photo" />
    </div>
  </section>

  <section class="skills">
    <div class="skills-wrapper">
      <span>HTML5</span>
      <span>CSS</span>
      <span>JavaScript</span>
      <span>Node.js</span>
      <span>React</span>
      <span>Git</span>
      <span>GitHub</span>
    </div>
  </section>

  <section class="skills-stats">
    <div class="about-text">
      <h2>About Me</h2>
      <p>I started my software journey from diu. Through that, I learned the importance of design, visuals, and user-focused experiences. Eventually, I moved into web development to combine visual creativity with functional engineering.</p>
    </div>

    <div class="stats-section">
      <div class="stat">
       <button class="nav-btn" onclick="location.href='https://daffodilvarsity.edu.bd/'">10+ Projects Completed</button>
        
      </div>
      <div class="stat">
       <button class="nav-btn" onclick="location.href='https://daffodilvarsity.edu.bd/'">5+ satisfied client</button>
     
      </div>
      <div class="stat">
        <button class="nav-btn" onclick="location.href='https://daffodilvarsity.edu.bd/'">2+ years Experience</button>
   
      </div>
    </div>
  </section>

  <footer>
  jannatuldiya959@gmail.com All rights reserved.
  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
  </div>
</footer>

  <script>
  
  const typingText = document.querySelector('.hero-text p');
  const originalText = typingText.textContent;
  typingText.textContent = '';
  let index = 0;
  function typeText() {
    if (index < originalText.length) {
      typingText.textContent += originalText.charAt(index);
      index++;
      setTimeout(typeText, 80);
    }
  }
  window.addEventListener('load', typeText);
</script>


</body>
</html>
