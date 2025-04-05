<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e5e6e7;
            color: #111;
        }
        header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 5%;
  background: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.logo span {
  color: red;
  font-size: 30px;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 25px;
  align-items: center;
}

nav ul li a {
  text-decoration: none;
  color: #000;
  font-weight: 500;
  transition: color 0.3s;
}

        nav ul li a.active,
        nav ul li a:hover {
          color: #e74c3c;
        }
        .cart {
          position: relative;
        }

        .cart img {
          height: 25px;
        }
        .cart span {
  position: absolute;
  top: -8px;
  right: -10px;
  background: red;
  color: white;
  font-size: 12px;
  padding: 2px 6px;
  border-radius: 50%;
}
        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 80px;
            gap: 40px;
        }

        .section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .text-content {
            flex: 1;
            max-width: 600px;
        }

        .text-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .text-content p {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .image-container {
            flex: 1;
            max-width: 500px;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
        }

        .team-section {
            text-align: center;
            padding: 60px 40px;
        }

        .team-section h1 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .team-members {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
        }

        .member {
            text-align: center;
            width: 220px;
        }

        .member img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
        }

        .member h3 {
            margin: 15px 0 5px;
            font-size: 20px;
        }

        .member p {
            margin: 0 0 10px;
            font-size: 15px;
            color: #555;
        }

        .social-icons i {
            margin: 0 8px;
            font-size: 18px;
            cursor: pointer;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            background-color: #f74b4b;
            color: #fff;
            padding: 40px 20px;
            flex-wrap: wrap;
        }

        .stat {
            text-align: center;
            min-width: 150px;
            margin: 10px;
        }

        .stat h2 {
            font-size: 36px;
            margin-bottom: 5px;
        }

        .stat p {
            font-size: 18px;
        }
    </style>

    <!-- Font Awesome (for social icons) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="logo"><span>L</span>aunch Sphere</div>
    <nav>
      <ul>
        <li><a href="home2.php">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="aboutus.php" class="active">About</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="account.php">Account</a></li>
        <li><a href="home.php">Logout</a></li>
        <li class="cart">
          <img src="cart.png" alt="Cart" />
          <span>0</span>
        </li>
      </ul>
    </nav>
  </header>

<!-- Who We Are -->
<section class="section">
    <div class="image-container">
        <img src="aboutus1.png" alt="Who We Are Image Placeholder">
    </div>
    <div class="text-content">
        <h1>Who We Are</h1>
        <p>We are a passionate team of book lovers on a mission to bring stories, knowledge, and imagination closer to everyone.</p>
        <p>At our bookstore startup, we blend the charm of traditional reading with the ease of modern tech.</p>
        <p>From classics to the latest releases, we curate every shelf with love and purpose. Our community is built around curiosity, learning, and the joy of reading.</p>
          
    </div>
</section>

<!-- What We Do -->
<section class="section">
    <div class="image-container">
        <img src="aboutus2.png" alt="What We Do Image Placeholder">
    </div>
    <div class="text-content">
        <h1>What We Do</h1>
        <p>We connect readers with books that inspire, entertain, and inform. Whether it’s through our curated recommendations, seamless online platform, or personalized reading lists. </p>
        <p>We make book discovery simple and meaningful. We also support local authors and promote diverse voices in literature.</p>
        <p>Our goal is to make reading a joyful habit for everyone, everywhere.</p>


    </div>
</section>

<!-- Our Team -->
<section class="team-section">
    <h1>Our Team</h1>
    <div class="team-members">
        <div class="member">
            <img src="aboutus3.png" alt="Patricia Naumann">
            <h3>Dipangshu Kundu</h3>
            <p>CEO</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
        <div class="member">
            <img src="aboutus4.png" alt="Eddie Johnson">
            <h3>Ambuj Mishra</h3>
            <p>Operations Head</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
        <div class="member">
            <img src="aboutus5.png" alt="Mary Wright">
            <h3>Mohit Jain</h3>
            <p>Digital Marketing Head</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats">
    <div class="stat">
        <h2>2000+</h2>
        <p>Readers</p>
    </div>
    <div class="stat">
        <h2>2000+</h2>
        <p>Orders</p>
    </div>
    <div class="stat">
        <h2>50000+</h2>
        <p>Books</p>
    </div>
    <div class="stat">
        <h2>15000+</h2>
        <p>Customers</p>
    </div>
</section>

</body>
</html>
