
<?php
$name = "Panchasara Harshil";
$course = "Computer Engineering Student";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Panchasara Harshil | Computer Engineering Student Portfolio</title>

<meta name="description" content="Visit the portfolio of Panchasara Harshil, a Computer Engineering student from Gujarat, India. Explore programming skills, web development projects, PHP, SQL and networking interests.">

<meta name="robots" content="index, follow">

<meta name="author" content="Panchasara Harshil">

<link rel="canonical" href="https://harshilpanchasara.infinityfreeapp.com/">

<meta property="og:title" content="Panchasara Harshil | Computer Engineering Student">

<meta property="og:description" content="Explore Panchasara Harshil's portfolio, technical skills and web development projects.">

<meta property="og:url" content="https://harshilpanchasara.infinityfreeapp.com/">

<meta property="og:type" content="website">

<link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header">
    <a href="#home" class="logo"><?php echo htmlspecialchars($name); ?></a>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<main>
<section class="hero" id="home">
    <div class="hero-content">
        <p class="small-title">WELCOME TO MY PORTFOLIO</p>

        <h1>Hello, I'm <span><?php echo htmlspecialchars($name); ?></span></h1>

        <h2><?php echo htmlspecialchars($course); ?></h2>

        <p class="intro">
            I am interested in programming, web development and networking.
            I enjoy learning new technologies and creating useful projects.
        </p>

        <a href="#projects" class="button">View My Projects</a>
        <a href="#contact" class="button outline">Contact Me</a>
    </div>

    <div class="profile-box">
        <img src="images/profile.jpg"
             alt="My profile photo"
             class="profile-photo">
        <h2><?php echo htmlspecialchars($name); ?></h2>
        <p><?php echo htmlspecialchars($course); ?></p>
    </div>
</section>

<section class="section" id="about">
    <p class="small-title">GET TO KNOW ME</p>
    <h2>About <span>Me</span></h2>

    <div class="about-box">
        <div>
            <h3>Who am I?</h3>
            <p>
                Hello! I am a Computer Engineering student.
                I am interested in programming, web development,
                databases and computer networking. I enjoy learning
                new technologies and improving my technical skills.
            </p>
        </div>
        <div class="details">
            <p><strong>Name:</strong> Panchasara Harshil</p>
            <p><strong>Course:</strong> Computer Engineering</p>
            <p><strong>Location:</strong> Gujarat, India</p>
            <p><strong>Interests:</strong> Coding and Technology</p>
        </div>
    </div>
</section>

<section class="section" id="skills">
    <p class="small-title">WHAT I AM LEARNING</p>
    <h2>My <span>Skills</span></h2>

    <div class="grid">
        <div class="card"><h3>C Programming</h3><p>Programming fundamentals and logic.</p></div>
        <div class="card"><h3>HTML</h3><p>Creating website structure.</p></div>
        <div class="card"><h3>CSS</h3><p>Designing and styling websites.</p></div>
        <div class="card"><h3>PHP</h3><p>Learning server-side development.</p></div>
        <div class="card"><h3>SQL</h3><p>Creating and managing databases.</p></div>
        <div class="card"><h3>Networking</h3><p>Learning computer networks.</p></div>
    </div>
</section>

<section class="section" id="projects">
    <p class="small-title">MY WORK</p>
    <h2>My <span>Projects</span></h2>

    <div class="grid">
        <div class="card project">
            <div class="project-icon">01</div>
            <h3>Personal Portfolio Website</h3>
            <p>A personal website built with HTML, CSS and PHP to showcase my profile and skills.</p>
            <p class="technology">HTML · CSS · PHP</p>
        </div>

        <div class="card project">
            <div class="project-icon">02</div>
            <h3>Student Database</h3>
            <p>A practice project for storing and managing student information in a database.</p>
            <p class="technology">PHP · SQL</p>
        </div>

        <div class="card project">
            <div class="project-icon">03</div>
            <h3>Web Development Practice</h3>
            <p>Small practice webpages created while learning website development.</p>
            <p class="technology">HTML · CSS</p>
        </div>
    </div>
    <p class="hint">Replace these sample projects with your real projects when ready.</p>
</section>

<section class="section" id="contact">
    <p class="small-title">LET'S CONNECT</p>
    <h2>Contact <span>Me</span></h2>
    <p class="contact-intro">Have a question? Send me a message below.</p>

    <form action="contact.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your Name"
               maxlength="100" required>
        <input type="email" name="email" placeholder="Your Email"
               maxlength="190" required>
        <textarea name="message" placeholder="Your Message"
                  maxlength="3000" required></textarea>
        <button type="submit" class="button">Send Message</button>
    </form>
</section>
</main>

<footer>
    <p>© <?php echo date("Y"); ?> <?php echo htmlspecialchars($name); ?>. All Rights Reserved.</p>
    <a href="#home">Back to Top ↑</a>
</footer>

</body>
</html>
