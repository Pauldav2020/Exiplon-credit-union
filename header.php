<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cerulean/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Exiplon Federal</title>
    <style>

</style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="navigation">
                    <div class="close">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <div class="logo">
                    <a href="/">
                    <img src="./cap-asset/img/fedlog.png" alt="Bank Logo">
                    </a>
                    </div>
                    <div class="signin">
                        <div class="links">
                            <a href=""><img src="./cap-asset/img/search_FILL0_wght400_GRAD0_opsz48.png" alt=""></a>
                           <a href="contact-us"><img src="./cap-asset/img/help_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="help-icon"></a>
                        </div>
                        <a href="login">
                            <img src="./cap-asset/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="">
                            <p>Sign in</p>
                        </a>
                    </div>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a href="#">About Us <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a>
                            <div class="dropdown">
                                <ul class="drop">
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="#">Senior Management</a></li>
                                    <li><a href="#">Board of Directors</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="">Personal <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a>
                            <div class="dropdown">
                                <ul class="drop">
                                <li><a href="personal-banking"><span class="material-symbols-outlined"></span>Personal Checking</a></li>
                                <li><a href="#">Senior Interest Checking</a></li>
                                <li><a href="#">Personal Money Market</a></li>
                                <li><a href="personal-banking">Personal Savings</a></li>
                                <li><a href="#">Personal CD</a></li>
                                <li><a href="#">IRA</a></li>
                                <li><a href="#">Holiday Club</a></li>
                                <li><a href="loans">Personal Loans</a></li>
                                <li><a href="contact-us">Personal Account Services</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">business <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a>
                        <div class="dropdown">
                            <ul class="drop">
                                <li><a href="#">Business Checking</a></li>
                                <li><a href="businnes-banking">Business Savings</a></li>
                                <li><a href="#">Business Money Market</a></li>
                                <li><a href="business-banking">Business CD</a></li>
                                <li><a href="#">Non for Profit Checking</a></li>
                                <li><a href="#">IOLA Account</a></li>
                                <li><a href="commercial-banking">Commercial Lending</a></li>
                                <li><a href="#">CB Express Deposit</a></li>
                                <li><a href="#">Account Services</a></li>
                            </ul>
                        </div>
                        </li>
                        <li><a href="#">Resources <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a>
                            <div class="dropdown">
                                <ul class="drop">
                                <li><a href="rate">Rates </a></li>
                                <li><a href="#">Community </a></li>
                                <li><a href="contact-us">Security Center</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Careers <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a></li>
                        <li><a href="#">Contact us <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a>
                            <div class="dropdown">
                                <ul class="drop">
                                <li><a href="about-us">Locations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Learn & Grow <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a></li>
                        <div class="links">
                            <li class="search">
                            <img src="./cap-asset/img/search_FILL0_wght400_GRAD0_opsz48.png" alt=""> <input type="text" name="" id="" placeholder="Search">
                            </li>
                            <li class="help"><img src="./cap-asset/img/help_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="help-icon"><a href="#"><span>Help Center</span> <img src="./cap-asset/img/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="forward"></a></li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="top-login">
                <form action="" method="POST" class="content">
                    <input type="hidden" name="" id="ip">
                    <div class="input-group">
                        <label for="">Username</label>
                        <input type="text" name="Username" id="username">
                        <img src="./cap-asset/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="">
                      
                        <label>
                            <input type="checkbox" name="chek" id=""> Remember me
                            <p id="user_error" style="color:red; display:block; z-index:10"></p>
                        </label>
                    </div>
                    <div class="input-group">
                        <label for="" class="pass">password</label>
                        <input type="password" name="Password" id="password">
                        <img src="./cap-asset/img/lock_FILL0_wght400_GRAD0_opsz48.svg" alt="">
                        <a href="#">Forgot username or password?</a>
                        <p id="pass_error" style="color:red; display:block; z-index:10"></p>
                    </div>
                    <div class="input-group">
                        <button name="submit" id="login_submit" >Sign in</button>
                        <a href="register" class="online">Set up online access</a>
                    </div>
                </form>
            </div>
        </nav>
    </header>