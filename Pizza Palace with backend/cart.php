<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>My cart</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <div class="container">
      <div class="row">
      <button onclick="goback()" style="float:right;border: none;background-color:turquoise;height:30px;
      color:white;width:70px;border-radius: 8px;margin-top:2px;">Back</button><br><br>
        <div class="col-lg-12 text-center border rounded bg-light my-2">
           <h2>Ciao Foodie!</h2>
        </div>
        <div class="col-lg-9"><br><br>
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col"></th>
             </tr>
           </thead>
           <tbody class="text-center">
             <?php
             $total=0;
             $i=0;
             if(isset($_SESSION['cart'])){
             foreach($_SESSION['cart'] as $key => $value)
             {
               //print_r($value);
               $total=$total+$value['Price'];
               $i=$i+1;
               echo"
               <tr>
               <td>$i</td>
               <td>$value[Item_Name]</td>
               <td>$value[Price]</td>
               <td><input type='number' class='text-center' value='$value[Quantity]' min='1' max='10'></td>
               <td>
               <form action='managecart.php' method='POST'>
               <button name='remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
               <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
               </form>
               </td>";
             }
            }
             ?>
              
           </tbody>
          </table>
        </div>
        <div class="col-lg-3" style="margin-top:44px;">
          <div class="border bg-light rounded p-4">
            <h4>Total:</h4>
            <h5 class="text-right">Rs.<?php echo $total?></h5><br>
            <form action='placeorder.php' method="POST">
            <button class="btn btn-primary btn-block">Continue</button>
            <input type="hidden" name="total" value="<?php echo $total?>">
            </form>
          </div>
        </div>
      </div>
   </div>
   <script>
     function goback(){
       window.history.back();
     }
   </script>
  </body>
</html>