<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <title>Non-Veg</title>
    <link rel="stylesheet" href="non-veg.css">

    <style>
        /* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color:whitesmoke;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  background-color: whitesmoke;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #ec6911 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
    </style>
</head>
<body>
    <div class="main">
        <h1 style="color:red; background-color: white; font-weight:bolder;font-family:sans-serif; height:50px;padding-top: 10px;" >
            Non-Veg Pizza</h1>
            <a href="foodhome.html"> <button style="float: right;border: none;background-color:turquoise;height:30px;color:white;width:70px;border-radius: 8px;">
                Back</button></a>
                <a href="cart.php" ><i class="fa fa-shopping-cart" style="float: right;border: none;padding-right:18px;font-size:36px; color:black;"></i></a><br><br>
        <ul class="cards">
          <li class="cards_item">
          <form action="managecart.php" method="POST">
            <div class="card">
              <div class="card_image"><img src="10.jpeg" style=" height:200px; width:550px;"></div>
              <div class="card_content">
                <br>
                <h2 class="card_title">Peri Peri Chicken Pizza</h2>
                <h2 class="card_title">Rs 350</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Peri Peri Chicken Pizza">
                <input type="hidden" name="Item_Price" value="350">
              </div>
            </div>
          </form>
          </li>
          <li class="cards_item">
            <div class="card">
            <form action="managecart.php" method="POST">
              <div class="card_image"><img src="11.jpeg" style=" height:200px; width:550px;"></div>
              <div class="card_content">
                  <br>
                <h2 class="card_title"> Chicken Fiesta Pizza</h2>
                <h2 class="card_title">Rs 440</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Chicken Fiesta Pizza">
                <input type="hidden" name="Item_Price" value="440">
              </div>
            </div>
           </form>
          </li>
          <li class="cards_item">
            <div class="card">
            <form action="managecart.php" method="POST">
              <div class="card_image"><img src="12.jpeg" style=" height:200px; width:550px"></div>
              <div class="card_content">
                  <br>
                <h2 class="card_title">Barbeque Chicken Pizza</h2>
                <h2 class="card_title">Rs 400</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Barbeque Chicken Pizza">
                <input type="hidden" name="Item_Price" value="400">
              </div>
            </div>
           </form>
          </li>
          <li class="cards_item">
            <div class="card">
            <form action="managecart.php" method="POST">
              <div class="card_image"><img src="13.jpeg" style="height:200px; width:550px;"></div>
              <div class="card_content">
                <h2 class="card_title">Chicken Mexicana Pizza</h2>
                <h2 class="card_title">Rs 520</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Chicken Mexicana Pizza">
                <input type="hidden" name="Item_Price" value="520">
              </div>
            </div>
           </form>
          </li>
          <li class="cards_item">
            <div class="card">
            <form action="managecart.php" method="POST">
              <div class="card_image"><img src="14.jpeg" style="height:200px; width:550px;"></div>
              <div class="card_content">
                <h2 class="card_title">Chicken Golden Delight Pizza</h2>
                <h2 class="card_title">Rs 620</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Chicken Golden Delight Pizza">
                <input type="hidden" name="Item_Price" value="620">
              </div>
            </div>
           </form>
          </li>
          <li class="cards_item">
            <div class="card">
            <form action="managecart.php" method="POST">
              <div class="card_image"><img src="15.jpeg" style="height:200px; width:550px;"></div>
              <div class="card_content">
                <h2 class="card_title">Spicy Triple Tango Chicken Pizza</h2>
                <h2 class="card_title">Rs 540</h2>
                <br>
                <button type="submit" name="Add" class="btn card_btn">Add</button>
                <input type="hidden" name="Item_Name" value="Spicy Triple Tango Chicken Pizza">
                <input type="hidden" name="Item_Price" value="540">
              </div>
            </div>
           </form>
          </li>
        </ul>
      </div>
      
      <h3 class="made_by">Made with ♡</h3>
</body>
</html>