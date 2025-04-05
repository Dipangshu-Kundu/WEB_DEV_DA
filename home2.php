<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Spot</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #fff5ee;
}

/* Navbar Styles */
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

/* Hero Section */
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 60px 5%;
  min-height: 80vh;
}

.hero-image {
  width: 55%;
  height: 500px;
  background-color: #faefe6;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 10px;
  /* You can replace this background with your own image */
  background-image: url('bookstore.png');
}

.hero-text {
  width: 40%;
}

.hero-text h1 {
  font-size: 40px;
  font-weight: bold;
  margin-bottom: 20px;
}

.hero-text p {
  color: #333;
  margin-bottom: 25px;
  line-height: 1.6;
}

.hero-text button {
  padding: 12px 25px;
  border: 2px solid #000;
  background: transparent;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.3s;
}

.hero-text button:hover {
  background: #000;
  color: #fff;
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <div class="logo"><span>L</span>aunch Sphere</div>
    <nav>
      <ul>
        <li><a href="home2.php" class="active">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="aboutus.php">About</a></li>
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-image">
      <!-- You will place your background image here via CSS -->
    </div>
    <div class="hero-text">
      <h1>Get All The Books You Need!</h1>
      <p>From bestsellers to hidden gems, find every book you're looking for — all in one place. We’ve got genres for every reader and titles for every mood. Just search, select, and start your next reading adventure.</p>
      <button>Start Reading</button>
    </div>
  </section>

</body>
</html>
