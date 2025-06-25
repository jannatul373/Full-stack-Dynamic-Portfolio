<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Jannatul</title>
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

    .contact-section {
      padding: 60px 30px;
      background: #0d0d0d;
      color: white;
      text-align: center;
    }

    .contact-section h2 {
      font-size: 36px;
      margin-bottom: 40px;
      color: #ff4d4d;
    }

    .contact-form {
      max-width: 500px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 14px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      background: #1a1a1a;
      color: white;
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
      color: #888;
    }

    .contact-form button {
      background: #ff4d4d;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background: #e63939;
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 10px;
        padding: 20px;
      }

      .nav-links {
        flex-direction: column;
        align-items: center;
      }

      .contact-section {
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
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/projects') }}">Projects</a>
      <a href="{{ url('/contacts') }}">Contact</a>
    </ul>
  </nav>

  <section class="contact-section">
    <h2>Contact Me</h2>
    <form class="contact-form">
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <textarea placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const form = document.querySelector(".contact-form");

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = form.querySelector("input[type='text']").value.trim();
        const email = form.querySelector("input[type='email']").value.trim();
        const message = form.querySelector("textarea").value.trim();
        const button = form.querySelector("button");

        if (!name || !email || !message) {
          alert("Please fill in all fields.");
          return;
        }

        
        button.textContent = "Sending...";
        button.disabled = true;

        setTimeout(() => {
          alert(`Thank you, ${name}! Your message has been sent.`);
          form.reset();
          button.textContent = "Send Message";
          button.disabled = false;
        }, 1000);
      });
    });
  </script>

</body>
</html>
