<?php
include 'config.php';

session_start();
$user_id = $_SESSION['user_id'];


if(isset($_POST['valider'])){
    $ID=$_GET['id'];

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Aricle ajouté ';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'Aricle ajouté ';
   }

};






?>






<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code generator using vanilla js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    
        



            <?php            
                
            $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');

            if(mysqli_num_rows($select_user) > 0){




                  $fetch_user = mysqli_fetch_assoc($select_user);


            }; 
           ?>

        <!--<p>Panier: <span><?php echo $fetch_user['name']; ?></span> </p>-->



        <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){

        ?>


        <div class="container">
            <div class="user-data">


                                   
                  
                

                <input type="text" class="user-name input" value="<?php echo $fetch_cart['name']; ?>: <?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>€">

                

        

        
    
                      
                                   
                <?php




                $grand_total += $sub_total;
                

        
            }   


        //}else{

           //echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6"> Panier vide</td></tr>';

               }

               ?>


                <label for="user-email">Nom d'acheteur :</label>
                <input  type="text" class="user-email input" value="<?php echo $fetch_user['name']; ?>"> 
                <label for="ser-phone" width="10px">prix Total:</label> 
                <input type="text" class="user-phone input" value="<?php echo $grand_total; ?>"€ >

              
                             
                 
        
               
            
               <button class="generate-qr-code">Generate QR code</button>

           </div>


      


           


            
               
           <div class="qr-canvas">





           <h2>QR code</h2>
           <div class="loading"></div>

           <img src="" alt="" class="qr-image">
        
           </div>
        </div>        
          



    

           
           
           
 
          
       
    
          
            
       
    


   
     
    

    <script src="js/index.js"></script>
</body>
</html>