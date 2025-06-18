<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Layout</title>
  <link rel="stylesheet" href="styles.css"/>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  padding: 20px;
}

header {
  background-color: #333;
  padding: 10px 20px;
}

.nav-links {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  gap: 20px;
}

.nav-links li a {
  color: white;
  text-decoration: none;
}

.intro {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 40px 0;
}

.intro-text {
  flex: 1;
}

.intro-text h1 {
  font-size: 2em;
  margin-bottom: 20px;
}

.intro-text button {
  margin-right: 10px;
  padding: 10px 15px;
}

.intro-image .circle {
  width: 150px;
  height: 150px;
  background-color: #ccc;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
}

.tech-icons {
  display: flex;
  justify-content: space-between;
  margin: 30px 0;
}

.icon {
  background-color: #eee;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #ccc;
}

.skills {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 30px 0;
  flex-wrap: wrap;
}

.skill {
  width: 30%;
  margin-bottom: 20px;
}

.bar {
  width: 100%;
  height: 20px;
  background-color: #007bff;
  margin-bottom: 10px;
}

.about-me-box {
  width: 30%;
  background-color: #f4f4f4;
  padding: 20px;
  text-align: center;
  font-weight: bold;
}

.stats {
  display: flex;
  justify-content: space-around;
  margin-top: 40px;
}

.stat-box {
  background-color: #e0e0e0;
  padding: 20px;
  width: 30%;
  text-align: center;
  font-weight: bold;
}

  </style>
</head>
<body>
  <header>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="intro">
    <div class="intro-text">
      <h1>About Intro</h1>
      <button>Projects</button>
      <button>Resume</button>
    </div>
    <div class="intro-image">
      <div class="circle">Image</div>
    </div>
  </section>

  <section class="tech-icons">
    <div class="icon">lan1</div>
    <div class="icon">lan1</div>
    <div class="icon">lan1</div>
   
  </section>

  <section class="skills">
    <div class="skill">
      <div class="bar"></div>
      <p>Skill 1</p>
    </div>
    <div class="skill">
      <div class="bar"></div>
      <p>Skill 2</p>
    </div>
    <div class="skill">
      <div class="bar"></div>
      <p>Skill 3</p>
    </div>
    <div class="about-me-box">About Me</div>
  </section>

  <section class="stats">
    <div class="stat-box">Completed Project</div>
    <div class="stat-box">Satisfied Client</div>
    <div class="stat-box">Experience</div>
  </section>
</body>
</html>
