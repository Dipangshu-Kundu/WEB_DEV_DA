<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bookstore Startup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }
    header, section, footer {
      padding: 40px 20px;
      text-align: center;
    }
    .section-dark {
      background-color: #f4f4f4;
    }
    .container {
      max-width: 1100px;
      margin: 0 auto;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
    }
    .grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
    }
    .grid-item {
      flex: 1 1 30%;
      min-width: 250px;
    }
    .contact-info {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 20px;
    }
    .form-map {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
      background-color: #f0f0f0;
    }
    .form-section, .map-section {
      flex: 1 1 45%;
      min-width: 300px;
      padding: 10px;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    img.placeholder {
      width: 100%;
      height: 250px;
      background-color: #ddd;
      display: block;
      margin-bottom: 20px;
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
  </style>
</head>
<body>
<header>
    <div class="logo"><span>L</span>aunch Sphere</div>
    <nav>
      <ul>
        <li><a href="home2.php">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
        <li><a href="account.php">Account</a></li>
        <li><a href="home.php">Logout</a></li>
        <li class="cart">
          <img src="cart.png" alt="Cart" />
          <span>0</span>
        </li>
      </ul>
    </nav>
  </header>

  <!-- CONTACT SECTION -->
  <section class="section-dark">
    <div class="container">
        <img src="contact1.jpg" alt="" width="100%">
      <h2>Get In Touch With Us</h2>
      <p>Have questions or need help finding a book? Reach out to us anytime. We're here to help you find your next favorite read.</p>

      <div class="contact-info">
        <div>
          <h4>📍 Location</h4>
          <p>Vit Vellore,<br> Vellore-632014</p>
        </div>
        <div>
          <h4>📞 Call Us</h4>
          <p>+917001105512<br>+919733340334</p>
        </div>
        <div>
          <h4>📧 Mail</h4>
          <p>dipangshurnj@gmail.com<br>dipangshukundurnj@gmail.com</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP AND FORM -->
  <section class="form-map">
    <div class="map-section">
      <!-- Replace with actual embedded map if needed -->
      <iframe 
  src="https://www.google.com/maps?q=Vellore,Tamil+Nadu,India&output=embed" 
  width="100%" 
  height="500" 
  frameborder="0" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
    </div>
    <div class="form-section">
      <h2>Get In Touch</h2>
      <form>
        <label>Name *</label>
        <input type="text" name="name" required />
        <label>Email *</label>
        <input type="email" name="email" required />
        <label>Your Message *</label>
        <textarea name="message" rows="5" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>

</body>
</html>
