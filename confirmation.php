 <?php
    $con = mysqli_connect("localhost", "root", "", "book_db");
    $sql = "SELECT * FROM book_form ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($con, $sql);
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>confirmation</title>

     <!-- swiper css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- custom css file link -->
     <link rel="stylesheet" href="css/style.css">
 </head>

 <body>
     <!-- header section starts -->
     <section class="header">
         <a href="home.php" class="logo">DKTravels</a>
         <nav class="navbar">
             <a href="home.php">Home</a>
             <a href="about.php">About</a>
             <a href="package.php">Package</a>
             <a href="book.php">Book</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>
     </section>
     <!-- header section ends -->

     <div class="heading" style="background: url(images/heading-bg-3.jpg) no-repeat">
         <h1>Book Now</h1>
     </div>

     <!-- booking section starts -->
     <section class="booking">
         <h1 class="heading-title">ticket confirmed!</h1>
         <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Step 4: Print or display the data


            ?>
                 <form action="book_form.php" method="POST" class="book-form">
                     <div class="flex">
                         <div class="inputBox">
                             <span>name :</span>
                             <p class="input"> <?php echo  $row["name"]  ?></p>
                            </div>
                            <div class="inputBox">
                                <span>email :</span>
                                
                                <p class="input"> <?php echo  $row["email"]  ?></p>
                            </div>
                            <div class="inputBox">
                                <span>phone :</span>
                                 <p class="input"> <?php echo  $row["phone"]  ?></p>
                               
                         </div>
                         <div class="inputBox">
                             <span>address :</span>
                              <p class="input"> <?php echo  $row["address"]  ?></p>
                         </div>
                         <div class="inputBox">
                             <span>where to :</span>
                              <p class="input"> <?php echo  $row["location"]  ?></p>
                         </div>
                         <div class="inputBox">
                             <span>how many :</span>
                              <p class="input"> <?php echo  $row["guests"]  ?></p>
                         </div>
                         <div class="inputBox">
                             <span>arrivals :</span>
                              <p class="input"> <?php echo  $row["arrivals"]  ?></p>
                         </div>
                         <div class="inputBox">
                             <span>leaving :</span>
                              <p class="input"> <?php echo  $row["leaving"]  ?></p>
                         </div>
                     </div>
                 </form>
         <?php
                }
            } else {
                echo "0 results";
            }
            ?>
     </section>
     <!-- booking section ends -->


     <!-- footer section starts -->
     <section class="footer">
         <div class="box-container">
             <div class="box">
                 <h3>Quick Links</h3>
                 <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                 <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                 <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                 <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
             </div>

             <div class="box">
                 <h3>Extra Links</h3>
                 <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                 <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                 <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                 <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
             </div>
             <div class="box">
                 <h3>Contact info</h3>
                 <a href="#"><i class="fas fa-phone"></i> +91 1234567890</a>
                 <a href="#"><i class="fas fa-phone"></i> +91 3265987458</a>
                 <a href="#"><i class="fas fa-envelope"></i> dktravels@gmail.com</a>
                 <a href="#"><i class="fas fa-envelope"></i> Rajkot, india - 360002</a>
             </div>

             <div class="box">
                 <h3>Follow Us</h3>
                 <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
                 <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
                 <a href="#"> <i class="fab fa-instagram"></i>Facebook</a>
                 <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
             </div>
         </div>

         <div class="credit">Created By <span>DKTravels</span> | all rights reserved! </div>
     </section>
     <!-- footer section ends -->

     <!-- swiper js file link -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
     <!-- custom js file link -->
     <script src="js/script.js"></script>
 </body>

 </html>