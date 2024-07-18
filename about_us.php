<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333;
}

header {
    background-color: #4CAF50;
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

section {
    padding: 60px 20px;
    text-align: center;
}

section img {
    width: 100%;
    max-width: 600px;
    height: auto;
    margin-top: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#overview, #mission, #values, #team {
    animation: fadeIn 2s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#values ul {
    list-style-type: none;
    padding: 0;
}

#values ul li {
    display: inline-block;
    margin: 10px 20px;
    font-size: 18px;
}

.team-member {
    display: inline-block;
    width: 30%;
    margin: 20px 1%;
    text-align: center;
}

.team-member img {
    width: 100%;
    max-width: 200px;
    height: auto;
    border-radius: 50%;
    margin-bottom: 15px;
}

.team-member h3 {
    margin: 10px 0 5px;
    font-size: 22px;
}

footer {
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    text-align: center;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Our IT Solutions</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="overview.php">Overview</a></li>
                <li><a href="mission.php">Mission</a></li>
                <li><a href="values.php">Values</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="overview">
        <h2>About DIGS</h2>
        <p>We are a group of dedicated IT professionals committed to providing innovative IT solutions and exceptional programming services.</p>
        <img src="overview.jpg" alt="Overview Image">
    </section>

    <section id="mission">
        <h2>DIGS Mission</h2>
        <p>Our mission is to deliver cutting-edge technology solutions that drive success and innovation for our clients.</p>
        <img src="mission.jpg" alt="Mission Image">
    </section>

    <section id="values">
        <h2>DIGS Values</h2>
        <ul>
            <li>Innovation</li>
            <li>Integrity</li>
            <li>Customer Satisfaction</li>
            <li>Excellence</li>
        </ul>
        <img src="values.jpg" alt="Values Image">
    </section>

    <section id="team">
        <h2>DIGS Team</h2>
        <div class="team-member">
            <img src="team-member1.jpg" alt="Team Member 1">
            <h3>Steven Mukhebi</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="PSX_20240315_122336.jpg" alt="Team Member 2">
            <h3>Hannibal Osore</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3">
            <h3>Gideon Kareithi</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3">
            <h3>Davy</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3">
            <h3>Ian</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3">
            <h3>Konquest</h3>
            <p>Member</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3">
            <h3>Jefferey</h3>
            <p>Member</p>
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

    document.querySelectorAll('section').forEach((section) => {
        observer.observe(section);
    });
});
    </script>
</body>
</html>
