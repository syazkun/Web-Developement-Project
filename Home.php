<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./this.css">
    <title>HOME | SA CAKE SHOP</title>
</head>

<body>
    <!-- Headers -->
    <section class="header">
        <nav>
            <a href="login/logout.php"><img src="./assets/logo2.png" alt="logo1.png" id="logo"></a>
            <div class="nav-links" id="nav-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#Menu">Menu</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="login/logout.php">Log out</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <a href="login/logout.php"><img src="./Assets/logo1.png" alt="logo1.png" id="logo1"></a>

            <h1>Welcome to Cake Online Shop</h1>
            <p>Setia Alam City Mall, SACC Mall and AEON Shah Alam.</p>
        </div>
    </section>

    <!-- Menu -->
    <section class="Menu" id="Menu">
        <h1>Cakes on Sale</h1>
        <p>Those cakes and muffins can be bought and sold with MYR (Malaysian Ringgit).
            In each outlet, you have certain amount for each cake in stock. For instance, the Setia
            City Mall and Aeon Shah Alam branch may be having 5 units of each cake in one time,
            while in SACC Mall, you may have 3 units of each cake in one time when the outlet
            opens at any time of day. This holds true for the amount of MYR that the outlet has in
            stock.</p>
        <div>
            <div class="col">
                <div class="cake-row">
                    <a href="menuChocolate.php">
                        <div class="inside">
                            <img src="./Assets/choc-cake.jpg" alt="logo2.png">
                            <div class="layer">
                                <h3>Heavenly Chocolate Cake</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cake-row">
                    <a href="menuRed.php">
                        <div class="inside">
                            <img src="./Assets/red-velvet.jpg" alt="logo2.png">
                            <div class="layer">
                                <h3>Red Velvet Standard</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cake-row">
                    <a href="menuPandan.php">
                        <div class="inside">
                            <img src="./Assets/pandan.jpg" alt="logo2.png">
                            <div class="layer">
                                <h3>Pandan Gula Melaka</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cake-row">
                    <a href="menuNutella.php">
                        <div class="inside">
                            <img src="./Assets/tart.jpg" alt="logo2.png">
                            <div class="layer">
                                <h3>Nutella Cheese Tarte</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cake-row">
                    <a href="menuButter.php">
                        <div class="inside">
                            <img src="./Assets/butterscotch.jpg" alt="logo2.png">
                            <div class="layer">
                                <h3>Pecan ButterscotchCake</h3>
                            </div>
                        </div>
                </div>
                </a>
            </div>
    </section>

    <!-- Footer -->
    <section class="Footer">

        <h1>What Our Supporter Says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="./Assets/logo2.png" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod tepo rarain ugt
                        labore.
                        Lorem ipsum dolor sit amt, consectet adop adipisicing elit, .Lorem ipsum dolor sit amt,
                        consectet
                        adop adipisicing elit, sed do eiusmod
                        tepo raraincididunt ugt labore.</p>
                    <h3>Syazwan</h3>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="./Assets/logo2.png" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod tepo rarain ugt
                        labore.
                        Lorem ipsum dolor sit amt, consectet adop adipisicing elit, .Lorem ipsum dolor sit amt,
                        consectet
                        adop adipisicing elit, sed do eiusmod
                        tepo raraincididunt ugt labore.</p>
                    <h3>Areez</h3>
                </div>
            </div>
        </div>
        <div class="row-bot">
            <nav>
                <ul>
                    <li><a href="menuChocolate.php">Heavenly Chocolate Cake</a></li>
                    <li><a href="menuRed.php">Red Velvet Standard</a></li>
                    <li><a href="menuPandan.php">Pandan Gula Melaka</a></li>
                    <li><a href="menuNutella.php">Nutella Cheese Tart</a></li>
                    <li><a href="menuButter.php">Pecan ButterscotchCake</a></li>
                </ul>
                <div class="copyright">
                    <p>© 2022 SA Cake Shop. All rights reserved.</p>
                </div>
            </nav>
        </div>

    </section>
</body>

</html>