<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Cards</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 0px;
      margin: 0;
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
    .book-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 8px;
      width: 300px;
      padding: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      position: relative;
      text-align: center;
    }

    .card img {
      width: 100%;
      height: 380px;
      object-fit: cover;
      border-radius: 6px;
    }

    .sale-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: red;
      color: white;
      font-size: 14px;
      padding: 5px 10px;
      border-radius: 50px;
    }

    .book-title {
      font-size: 18px;
      font-weight: bold;
      margin: 12px 0 5px;
    }

    .category {
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .price {
      font-size: 16px;
      margin-bottom: 8px;
    }

    .price del {
      color: #999;
      margin-right: 8px;
    }

    .stars {
      color: #e74c3c;
      margin-bottom: 15px;
    }

    .btn {
      padding: 10px 20px;
      border: 2px solid black;
      background: white;
      cursor: pointer;
      transition: 0.3s;
      font-weight: bold;
    }

    .btn:hover {
      background: black;
      color: white;
    }
  </style>
</head>
<body>

<header>
    <div class="logo"><span>L</span>aunch Sphere</div>
    <nav>
      <ul>
        <li><a href="home2.php">Home</a></li>
        <li><a href="books.php" class="active">Books</a></li>
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

  <div class="book-container">
    <!-- Card 1 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books1.jpg" alt="Abstract Art">
      <div class="book-title">Abstract Art</div>
      <div class="category">Non-Fiction</div>
      <div class="price"><del>$59.00</del> $49.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books2.jpg" alt="Blue Hues">
      <div class="book-title">Blue Hues</div>
      <div class="category">Fiction</div>
      <div class="price">$18.00 – $27.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn" type="button" onclick="move()">Add to Cart</button>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books3.jpg" alt="Buildings">
      <div class="book-title">Buildings</div>
      <div class="category">Philosophy</div>
      <div class="price"><del>$47.00</del> $42.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books4.jpg" alt="Business Leaders">
      <div class="book-title">Business Leaders</div>
      <div class="category">Philosophy</div>
      <div class="price">$23.00</div>
      <div class="stars">★★★★★</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 5 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books5.jpg" alt="Energy">
      <div class="book-title">Energy</div>
      <div class="category">Health</div>
      <div class="price">$32.00 – $37.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 6 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="book6.jpg" alt="Everest">
      <div class="book-title">Everest</div>
      <div class="category">Travel</div>
      <div class="price"><del>$49.00</del> $39.00</div>
      <div class="stars">★★★★★</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 7 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books7.jpg" alt="Featuring The Future">
      <div class="book-title">Featuring The Future</div>
      <div class="category">Mystery</div>
      <div class="price"><del>$29.00</del> $19.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn">Add to cart</button>
    </div>

    <!-- Card 8 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books8.jpg" alt="Food Adventure">
      <div class="book-title">Food Adventure</div>
      <div class="category">Cookbooks</div>
      <div class="price">$30.00 – $35.00</div>
      <div class="stars">★★★★☆</div>
      <button class="btn">Add to Cart</button>
    </div>

    <!-- Card 9 -->
    <div class="card">
      <div class="sale-badge">Sale</div>
      <img src="books9.jpg" alt="Golden Stylus">
      <div class="book-title">Golden Stylus</div>
      <div class="category">Kids Books</div>
      <div class="price">$40.00 – $45.00</div>
      <div class="stars">★★★★★</div>
      <button class="btn">Add to cart</button>
    </div>

  </div>

</body>
<script>
    function move(){
        window.location.href="bookspreview.php";
    }
</script>
</html>
