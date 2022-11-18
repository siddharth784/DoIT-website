<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Do IT is an easy to use application to join best gyms, fitness centre or yoga sessions, to manage your daily workout sessions, to know about different healthy recepies according to the need of body, to inculcate healthy lifestyle by following therapies, meditations and yoga sessions.">
    <meta name="keywords" content="Workout Insights,Healthy Diet,Sports Management,Member access management,Therapy">
    <title>DOIT-All in one Sports Platform</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
    session_start();
    error_reporting(0);
    include('config/config.php');

    {  



?>
    
<!-- TOP NAV BAR -->

<?php include('include/top_navbar.php');  ?>

<!-- home section starts  -->

<div class="home" id="home">
    <div class="wrapper">
        <div class="vid-container">
            <video height="100%" width="100%" autoplay muted loop id="myVideo" alt="">
                <source src="images/backgroundvid.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        <div class="content">
            <h1 class="title">DoIT helps to keep your actions focused and consistent</h1>
            <!-- <p>To live your best life
                To influence others positively
                To leave behind a legacy.
            </p> -->
        </div>
    </div>
</div>

<!-- home section ends -->








<!-- pricing/software/banner section starts  -->

<section class="banner" id="banner">

    <!-- <span>xerryt</span> -->
    <div class="ad">
        <h1><b>Multisports Management Platform</b></h1>
        <p>Reinvent your Business with our Digital Solutions and Services</p>
        <button onclick="window.open('software.php')" class="newbtn">
            <span class="button-text">Know More</span>
        </button>
<!-- NEWBTN WITH ARROW ANIMATION'S HTML CODE:
        <a href="#" class="newbtn">
            <section id="#container">
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                      <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Start Free</span>
                </button>
            </section>
        </a> -->
    </div>


<!-- <h1 class="heading"> <span>DoIT Gym and Fitness Management Software</span> </h1> -->
<section class="pricing">

    <div class="information">
        <h3>FOR FITNESS CENTERS AND SPORTS ACADEMIES</h3>
        <!-- <p>A unique and ultimate solution for the growth of your Fitness Business -->
            <!-- DoIT software is best suited for /the world class gym and fitness centers to grow and scale up their businesses more easily and efficiently.</p> -->
        <p> <i class="fas fa-check"></i> Run your business smartly </p>
        <p> <i class="fas fa-check"></i> Ultimatum growth of your business </p>
        <p> <i class="fas fa-check"></i> Business lead acquisition </p>
        <p> <i class="fas fa-check"></i> Automatic Controlled System </p>
        <!-- <a href="software.html" class="btn">Know More</a> -->
    </div>

    <div class="plan basic">
        <h3>FOR ASSOCIATED INDIVIDUALS</h3>
        <p> <i class="fas fa-check"></i>Unique platform for personal growth</p>
        <p> <i class="fas fa-check"></i>Free Promotions</p>
        <p> <i class="fas fa-check"></i>One to One client interaction</p>
        <p> <i class="fas fa-check"></i>Online/Offline sessions</p>
        
        
        <!-- <a href="software.html" class="btn">Know More</a> -->
    </div>

    <div class="plan">
        <h3> FOR END USERS - DOIT APP</h3>
        <!-- <div class="price"><span>$</span>90<span>/mo</span></div> -->
        <!-- <p>DoIT software supports a wide range of business needs. We provide an individual platform to our associated individual trainers, instructors for their professional growth. We believe in providing easy to use and manage solutions to our associates, so that they can work hassle free.</p> -->
        <p> <i class="fas fa-check"></i>One application to meet all future needs</p>
        <p> <i class="fas fa-check"></i>Get customized plans</p>
        <p> <i class="fas fa-check"></i>Calorie Counter and nutritients tracker</p><br>
        <p style="display:block;text-align:inline-start;float: inline-start;"> <i class="fas fa-check"></i>Daily Reminders</p>
       <!-- <a href="software.html" class="btn">Know More</a> -->
    </div>

</section>
</section>
<!-- pricing section ends -->






<!-- fiton app starts -->
<section class="fiton">
    <div class="box-container">

        <div class="box">
            <div class="test-image">
                <img src="./images/fiton_phones.jpg" alt="flying phones">
            </div>
            <div class="badges">
                <a href="#"><img class="badge1" src="images/playstoreblack.png" alt="google play badge"></a>
                <a href="#"><img class="badge2" src="images/appstoreblack.png" alt="app store badge"></a>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <h1 class="big-heading"><span>DoIT</span>. A <span>hybrid wellness platform</span> made for the hybrid workforce. </h1>
                
                <div class="list-item">
                    <img src="./images/li_icon.svg">    
                    <p>One stop online platform of health and fitness</p>
                </div>
                <div class="list-item">
                    <img src="./images/li_icon.svg"> 
                    <p>Explore gyms and fitness centers</p>
                </div>
                <div class="list-item">
                    <img src="./images/li_icon.svg"> 
                    <p>Get customized diet & excercise plans</p>
                </div>
                <div class="list-item">
                    <img src="./images/li_icon.svg"> 
                    <p>Count calories and nutrients</p>
                </div>
                <div class="list-item">
                    <img src="./images/li_icon.svg"> 
                    <p>Access to multiple fitness routines and guides 24X7</p>
                </div>
                <div class="list-item">
                    <img src="./images/li_icon.svg">    
                    <p>Manage memberships & renewal on a single click</p>
                </div>
            </div>
        </div>            

    </div>
</section>
<!-- fiton app ends -->

















<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>


    </div>

</section>

<!-- trainers section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading">fitness blogs</h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

        <?php $sql = "SELECT id, blogsubcatgis, headername, subheadername, blogimage, blogwrittenby, created_at FROM blogs 
                        where (status= 'Add' or status= 'Update') ORDER BY id DESC limit 5";
            $query = $db -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            {
              foreach($results as $result)
              {
                echo '<a href="bg_dt.php?bid='.$result->id.'">
                    <div class="swiper-slide slide">
                                <div class="image">
                                    <img src="'.$result->blogimage.'" alt="">
                                </div>
                                <div class="content">
                                    <p> '.$result->blogwrittenby.' <span>|</span> '.date('j M,  Y', strtotime($result->created_at)).'</p>
                                    <h3>'.$result->headername.'</h3>
                                    <a href="bg_dt.php?bid='.$result->id.'" class="readmorebtn">read more</a>
                                </div>
                            </div>
                </a>';
              }
            }
          ?>
        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->

<!-- including footer file -->
<?php include('include/footer.php');  ?>


<!-- testing section starts -->

<!-- testing section ends -->




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- personal js -->
<script> 
//  ONSCROLL CHANGING NAVBAR from https://www.youtube.com/watch?v=RxnV9Xcw914&t=301s
const header= document.querySelector("header");
const sectionOne=document.querySelector(".home");

const sectionOneOptions={
    rootMargin: "0px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
    entries, 
    sectionOneObserver
){
    entries.forEach(entry => {
        if(!entry.isIntersecting){
            header.classList.add('nav-scrolled');
        }
        else{
            header.classList.remove('nav-scrolled');
        }
    });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);
</script>

<?php } ?>

</body>
</html>