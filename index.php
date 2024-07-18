<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGS Homepage</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
}

header {
    background-color: ;
    border-radius: 10px;
    background-image: url('contract.jpg');
    color: white;
    padding: 15px 0;
    text-align: center;
}

header nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin: 0 10px;
}

header nav ul li a {
    color: white;
    text-decoration: none;
}

#hero {
    background-image: url('contract.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

#hero .hero-content {
    animation: fadeIn 2s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

section {
    padding: 60px 20px;
    text-align: center;
}

#about {
    background-color: #f9f9f9;
}

#services {
    background-color: #ffffff;
}

.service {
    display: inline-block;
    width: 30%;
    margin: 20px 1%;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    animation: slideIn 1s ease-in-out;
}

@keyframes slideIn {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

#projects {
    background-color: #f9f9f9;
}

.project {
    display: inline-block;
    width: 30%;
    margin: 20px 1%;
    animation: fadeIn 2s ease-in-out;
}

.project img {
    width: 100%;
    height: auto;
}

footer {
    background-color: brown;
    color: white;
    padding: 10px 0;
    text-align: center;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>DIGS IT Solutions</h1>
            <ul>
                <li><a href="#about_us.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <div class="hero-content">
            <h2>Welcome to DIGS IT Solutions</h2>
            <p>Your partner in innovative IT and programming solutions.</p>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a group of dedicated IT professionals providing top-notch solutions for your business needs.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="service">
            <h3>Web Development</h3>
            <p>Building responsive and modern websites.</p>
        </div>
        <div class="service">
            <h3>App Development</h3>
            <p>Creating user-friendly mobile applications.</p>
        </div>
        <div class="service">
            <h3>IT Consulting</h3>
            <p>Providing expert advice to optimize your IT infrastructure.</p>
        </div>
    </section>

    <section id="projects">
        <h2>Our Projects</h2>
        <div class="project">
            <img src="id replace.jpg" alt="Project 1">
            <h3>Project 1</h3>
            <p>ID REPLACEMENT SYSTEM.</p>
        </div>
        <div class="project">
            <img src="online filing.jpg" alt="Project 2">
            <h3>Project 2</h3>
            <p>ONLINE FILING SYSTEM.</p>
        </div>
        <div class="project">
            <img src="contract2.jpg" alt="Project 3">
            <h3>Project 3</h3>
            <p>CONTRACT JOB AND APPLICATION PORTAL.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 DIGS IT Solutions. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.service, .project').forEach((section) => {
        observer.observe(section);
    });
});
    </script>
</body>
</html>
