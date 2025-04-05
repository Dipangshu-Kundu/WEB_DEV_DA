<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Account - LaunchSphere</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
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
    .profile-container {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      display: flex;
      gap: 40px;
    }

    .profile-pic {
      flex: 1;
      text-align: center;
    }

    .profile-pic img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #ccc;
    }

    .profile-details {
      flex: 2;
    }

    .profile-details h2 {
      margin-top: 0;
      color: #333;
    }

    .profile-details p {
      margin: 10px 0;
      line-height: 1.6;
    }

    footer {
      margin-top: 60px;
      background: #222;
      color: white;
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
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
        <li><a href="contact.php">Contact</a></li>
        <li><a href="account.php" class="active">Account</a></li>
        <li><a href="home.php">Logout</a></li>
        <li class="cart">
          <img src="cart.png" alt="Cart" />
          <span>0</span>
        </li>
      </ul>
    </nav>
  </header>
  <div class="profile-container">
    <div class="profile-pic">
      <!-- Replace this image with the user's actual profile picture -->
      <img src="aboutus3.png" alt="Profile Picture">
    </div>

    <div class="profile-details">
      <?php session_start()?>
      <h2 color="red"><?= $_SESSION["username"]?></h2>
      <p><strong>Address:</strong> 123 Fictional Lane, Booktown, BK 45678</p>
      <p><strong>Email:</strong> johndoe@example.com</p>
      <p><strong>Phone:</strong> +91 98765 43210</p>
      <p><strong>College:</strong> National Institute of Literature</p>
      <p><strong>Favorite Genres:</strong> Fantasy, Historical Fiction, Mystery</p>
      <p><strong>Membership Type:</strong> Premium Member</p>
      <p><strong>Books Borrowed:</strong> 27</p>
      <p><strong>Books Reviewed:</strong> 14</p>
      <p><strong>Member Since:</strong> March 2021</p>
    </div>
  </div>

  <footer>
    &copy; <?php echo date("Y"); ?> LaunchSphere. All rights reserved.
  </footer>

</body>
</html>
