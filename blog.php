<?php
// blog.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2rem;
        }
        .card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 1rem;
            width: 300px;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            cursor: pointer;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 1rem;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 0.95rem;
            color: #555;
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
        <li><a href="blog.php"  class="active">Blog</a></li>
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
    

    <div class="container">
        <!-- Blog Post 1 -->
        <div class="card">
            <img src="blog1.jpg" alt="Blog Image 1">
            <div class="card-content">
                <div class="card-title">Turning Pages: Must-Read Books of the Year</div>
                <div class="card-text">Explore a curated list of this year’s most compelling reads across genres. From thrillers to memoirs, find your next favorite book.</div>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="card">
            <img src="blog2.jpg" alt="Blog Image 2">
            <div class="card-content">
                <div class="card-title">Beyond the Cover: Hidden Gems in Literature</div>
                <div class="card-text">Discover underrated books that deserve a spot on every reader’s shelf. These hidden treasures offer powerful stories and unique perspectives.</div>
            </div>
        </div>

        <div class="card">
            <img src="blog3.jpg" alt="Blog Image 3">
            <div class="card-content">
                <div class="card-title">Books vs. Screen: Why Reading Still Wins</div>
                <div class="card-text">In the age of streaming, books continue to offer unmatched depth and imagination. Here’s why turning pages still beats watching screens.</div>
            </div>
        </div>

        <div class="card">
            <img src="blog4.jpg" alt="Blog Image 4">
            <div class="card-content">
                <div class="card-title">From Shelf to Soul: Books That Change Lives</div>
                <div class="card-text">Some books leave a lasting mark long after the last page. Dive into transformative reads that have inspired readers worldwide.</div>
            </div>
        </div>

        <div class="card">
            <img src="blog5.jpg" alt="Blog Image 5">
            <div class="card-content">
                <div class="card-title">Travel the World Through Books</div>
                <div class="card-text">Experience different cultures, cities, and eras through the magic of storytelling. These books take you places without leaving home.</div>
            </div>
        </div>

        <div class="card">
            <img src="blog6.jpg" alt="Blog Image 6">
            <div class="card-content">
                <div class="card-title">The Art of Re-reading: Why Great Books Deserve a Second Look</div>
                <div class="card-text">Revisiting beloved books can offer fresh insights and deeper appreciation. Here's why some stories are worth reading more than once.</div>
            </div>
        </div>
    </div>
</body>
</html>
