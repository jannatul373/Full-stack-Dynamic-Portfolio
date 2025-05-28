<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio</title>
  <style>
    /* Utility classes */
    .disp-flex {
      display: flex;
    }

    .justify-space {
      justify-content: space-between;
    }

    .align-center {
      align-items: center;
    }

    nav {
      background-color: aqua;
      padding: 10px 20px;
    }

    nav a {
      margin: 0 10px;
      text-decoration: none;
      color: black;
      font-weight: bold;
    }

    nav p {
      font-weight: bold;
      font-size: 1.2em;
    }

    section {
      padding: 30px;
      
    }


    .no_decor{
      text-decoration:none;
    }
    .no_decor:hover{
        background-color:red;
        
    }

  </style>
</head>
<body>

  <nav>
    <div class="disp-flex justify-space align-center">
      <div style="max-width:50px">
        <p>Diya</p>
      </div>
      <div>
        <a href="#" class="no_decor">About</a>
        <a href="#" class="no_decor">Home</a>
        <a href="#" class="no_decor">Contact</a>
        <a href="#" class="no_decor">GitHub</a>
      </div>
    </div>
  </nav>

  <section>
    <div class="intro-container">
      <div>
        <h2>Introduction</h2>
        <p>This is an introduction section of the portfolio.</p>
      </div>
      <div>
        <h3>Image</h3>
        
      </div>
    </div>

    <div class="intro-buttons">
      <div>Project Goto</div>
      <div>Resume</div>
    </div>
  </section>

</body>
</html>
