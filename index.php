<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <link rel="stylesheet" type="text/css" href="ucup.css">
</head>
<body>
  <header>
    <h1>My Portfolio</h1>
    <nav>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="about">
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nibh nec urna placerat mollis et nec metus.</p>
  </section>

  <section id="projects">
    <h2>My Projects</h2>
    <div class="project">
      <h3>Project 1</h3>
      <p>Description of Project 1</p>
    </div>
    <div class="project">
      <h3>Project 2</h3>
      <p>Description of Project 2</p>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <input type="submit" value="Send">
    </form>
  </section>

  <footer>
    <p>&copy; 2023 My Portfolio. All rights reserved.</p>
  </footer>
</body>
</html>