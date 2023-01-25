<?php
session_start();
?>

<html>

  <head>
    <title> Home | BHOOKH </title>
    <link rel="stylesheet" href ="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon"/>
    
    <style>
      <?php include 'css/index.css'; ?>
    </style>

  </head>
  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <a href="index.php"><img src="images/bhookhlogo.jpg" width="50rem"></a>
            <a class="navbar-brand" href="index.php">Bhookh</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact</a></li>
          </ul>
<?php
if(isset($_SESSION['login_user1'])){
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">Control Panel</a></li>
            <li><a href="logout_m.php">Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php">Food Zone </a></li>
            <li><a href="cart.php">Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php">Log Out</a></li>
          </ul>
  <?php        
}
else {

  ?>

  <ul class="nav navbar-nav navbar-right">
    <li>
      <a href="managerlogin.php">Add Restaurant</a>
    </li>

    <li>
      <a href="customerlogin.php">Login</a>
    </li>
  </ul>

<?php
}
?>
       </div>
      </div>
    </nav>

    <div class="backgroundimg">
              <img src="images/bgimg.jpg">
          <div class="bglogo">
                <a href="index.php"><img src="images/bhookhlogo.jpg"/></a>
                <h1>Hello, Please Order Your Food!</h1>
                <input type="text" placeholder=" Please Select Your Location.....">

                <div class="socialicon">
                   <div class="fb">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                   </div>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg>
                   <div class="Youtube">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                   </div>
                </div>  
          </div>
    </div>
    
    

    <div class="offercontainer">
        <div class="offer">
            <a href="customerlogin.php"><img src="images/offer1.jpg"></a>
        </div>

        <div class="offer">
        <a href="customerlogin.php"><img src="images/offer2.jpg"></a>
        </div>

        <div class="offer">
        <a href="customerlogin.php"><img src="images/offer3.jpg"></a>
        </div>

        <div class="offer">
        <a href="customerlogin.php"><img src="images/offer4.jpg"></a>
        </div>
    </div>

    <div class="bookingcontainer">
        <div class="type">
            <a href="customerlogin.php"><img src="images/onlineorder.jpg"/></a>
            <h2>Order Online</h2>
            <h3>Your your tasty food.....</h3>
        </div>

        <div class="type">
            <a href="customerlogin.php"><img src="images/dining.jpg"/></a>
            <h2>Dinning</h2>
            <h3>Your your tasty food.....</h3>
        </div>

        <div class="type">
            <a href="customerlogin.php"><img src="images/couples.jpg"/></a>
            <h2>Couples Table</h2>
            <h3>Your your tasty food.....</h3>
        </div>

        <div class="type">
            <a href="customerlogin.php"><img src="images/nightclub.jpg"/></a>
            <h2>Nightlife & Club</h2>
            <h3>Your your tasty food.....</h3>
        </div>
    </div>

    <div class="foodtype">
        <h1><u>Inspiration for your first food order</u> :-</h1>
        
        <div class="fastfood">
            <a href="customerlogin.php"><img src="images/offer3.jpg"></a>
            <a href="customerlogin.php"><img src="images/dining.jpg"></a>
            <a href="customerlogin.php"><img src="images/onlineorder.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer1.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer2.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer4.jpg"></a>
        </div>
    </div>


    <div class="foodbrand">
        <h1><u>Top Brands For You</u> :-</h1>
        <div class="brand">
            <a href="customerlogin.php"><img src="images/offer1.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer4.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer2.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer3.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer2.jpg"></a>
            <a href="customerlogin.php"><img src="images/offer1.jpg"></a>
        </div>
    </div>

    <div class="appcontainer">
        <div class="phone">
            <img src="images/phoneimg.avif"/>
        </div>

        <div class="phonelink">
            <h1>Get the Website app</h1>
            <h2>We will send you a link, open it on your phone to<br> download the app</h2>
            <div class="select">
                <div class="email">
                    <input type="radio" value="E-mail">Email
                </div>
                <div class="phonenum">
                     <input type="radio" value="phone">Phone
                 </div>
            </div>
            
            <div class="enter">
                <div class="sharebtn">
                    <input type="search" placeholder="Email">
                    <span>
                        <input type="button" value="Share App Link">
                    </span>
                </div>
            </div>

            <div class="downloadcontainer">
                <p>Download app from</p>
                <a href="https://play.google.com/store/apps"><img src="images/playstore.png" width="200rem"></a>
                <span><a href="https://www.apple.com/in/app-store/"><img src="images/Appstore.png" width="200rem"></a></span>
            </div>
        </div>
    </div>

    <div class="description">
        <div class="name">
            <h1><u>BHOOKH</u>:</h1>
        </div>
        <div class="dd">
        <div class="about">
            <ul>
                <h2><i>ABOUT US</i></h2>
                <h3>Who We Are</h3>
                <h3>Blog</h3>
                <h3>Work With Us</h3>
                <h3>Report Fraud</h3>
                <a href="contactus.php"><h3>Contact us</h3></a>
            </ul>
        </div>

        <div class="restaurants">
            <ul>
                <h2><i>FOR RESTAURANTS</i></h2>
                <a href="managerlogin.php"><h3>Partner With Us</h3></a>
                <h3>App For You</h3>
                <h3>PandaFoodz For Work</h3>
            </ul>
        </div>

        <div class="more">
            <ul>
                <h2><i>LEARN MORE</i></h2>
                <h3>Privacy</h3>
                <h3>Security</h3>
                <h3>Terms</h3>
                <h3>Sitemap</h3>
            </ul>
        </div>
        </div>

        <div class="footer">
            <hr>
            <h3>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and content Policies. All trademarks are properities of their respective owners. 2022 PandaFoodz Ltd. All rights reserved.</h3>
        </div>
    </div>
    </div>
</body>
</html>