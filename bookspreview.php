<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blue Hues</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      /* display: flex;
      flex-direction: row; */
      background-color: #f4f4f4;
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
      margin: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .left {
      flex: 1;
      padding-right: 20px;
    }
    .left img {
      width: 100%;
      border-radius: 10px;
    }
    .right {
      flex: 1;
    }
    .title {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .price {
      font-size: 18px;
      color: #b12704;
    }
    .review {
      color: #e67e22;
    }
    .desc {
      margin: 15px 0;
    }
    select, input[type="number"] {
      padding: 8px;
      margin-top: 10px;
    }
    button {
      padding: 10px 20px;
      background-color: #555;
      color: white;
      border: none;
      margin-top: 15px;
      cursor: pointer;
    }
    .meta {
      margin-top: 15px;
      color: #666;
    }
    button:hover{
        background-color: green;
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
  <div class="container">
    <div class="left">
      <img src="books2.jpg" alt="Blue Hues Cover">
    </div>
    <div class="right">
      <div class="title">Blue Hues</div>
      <div class="price">$18.00 – $27.00</div>
      <div class="review">★★★★★ (1 customer review)</div>
      <div class="desc">
        This is a responsive demo product.<br><br>
        This is a book "blue hues of the world" describing the stunning photograph of the world's water.
      </div>
      <label for="type">Type</label><br>
      <select id="type">
        <option>Choose an option</option>
        <option>Hardcover</option>
        <option>Paperback</option>
        <option>Digital</option>
      </select><br>
      <input type="number" value="1" min="1">
      <br>
      <form action="addtocart.php" method="post">
  <input type="hidden" name="book" value="blue hues">
  <button type="submit">ADD TO CART</button>
</form>


      <div class="meta">SKU: N/A Category: Fiction</div>
    </div>
  </div>
</body>

</html>
