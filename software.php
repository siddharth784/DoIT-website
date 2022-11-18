<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our purpose is to change how you view health and fitness to the core, not get you hyped enough to do a few workouts. So, we want you to leave this record with a new mindset.">
    <title>DOIT Software Support</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/softwareStyle.css"> 
</head>
<body>
<?php
    session_start();
    error_reporting(0);
    include('config/config.php');

    {  



?>

<!-- header section starts -->

<header class="header">
    <a href="#" class="logo"><img src="./images/doit_logo.jpeg" alt="logo"></a>
    <!-- DONT DELETE THIS MENU BUTTON!!!!!! -->
    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <!-- <a href="#home">home</a> -->
        <a href="#home">FITNESS CENTERS</a>
        <a href="signupPage.php">INDIVIDUALS</a>
        <a href="#footer">CONTACT US</a>
        <a href="appPage.php"><button class="newbtn">GET APP</button></a>
        <a href="signupPage.php"><button class="newbtn">START FREE</button></a>
    </nav>

</header>

<!-- top section(with images slider) starts -->
<section class="top">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <!-- <span>be strong, be fit</span> -->
                    <h3>DoIT Fitness Services</h3>
                    <p>• Complete Fitness & Sports Solutions</p>
                    <p>• On-demand Features Development</p>
                    <p>• 100% Customer Satisfaction</p>
                    <p>• World Class Quality</p>
                    <p>• Proactive After Sales Support</p>
                    <br>
                    <br>
                    <a href="signupPage.php" class="newbtn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <h3>DoIT Fitness Services</h3>
                    <p>• Complete Fitness & Sports Solutions</p>
                    <p>• On-demand Features Development</p>
                    <p>• 100% Customer Satisfaction</p>
                    <p>• World Class Quality</p>
                    <p>• Proactive After Sales Support</p>
                    <br>
                    <br>
                    <a href="signupPage.php" class="newbtn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <h3>DoIT Fitness Services</h3>
                    <p>• Complete Fitness & Sports Solutions</p>
                    <p>• On-demand Features Development</p>
                    <p>• 100% Customer Satisfaction</p>
                    <p>• World Class Quality</p>
                    <p>• Proactive After Sales Support</p>
                    <br>
                    <br>
                    <a href="signupPage.php" class="newbtn">get started</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
<!-- top section(with images slider) ends -->



<!-- sports section starts  -->

<section class="sports" id="sports">

    <div class="wrapper">
        <h1 class="heading">Who can benefit from us</h1>
       
        <div class="box-container container">
            <div class="row">
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/machine-management.jpg" alt="">
                        <div class="title">Gyms</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/dance-class.jpg" alt="">
                        <div class="title">Dance Classes</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/tennis-court.jpg" alt="">
                        <div class="title">Tennis Courts</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/cricket-academy.jpg" alt="">
                        <div class="title">Cricket Academies</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/zumba.jpg" alt="">
                        <div class="title">Zumba Classes</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/taekwondo.jpg" alt="">
                        <div class="title">Martial Arts Centers</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/football.jpg" alt="">
                        <div class="title">Football Academies</div>
                    </div>
                </div>
                <div class="box col-sm-6 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="images/boxing-boy.jpg" alt="">
                        <div class="title">Boxing Centers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> 

<!-- sports section ends -->




<!-- home section starts  -->

<section class="home" id="home">
    
    <div class="problemsection">
        <div class="heading">
            <h1>Your Problems, Our Solutions.</h1>
        
            <!-- <p>To live your best life
                To influence others positively
                To leave behind a legacy.
            </p> -->
        </div>
        <!-- NEW SYSTEM OF GRIDS WITH IMAGES AND ICONS -->
        <div class="container">

            <div class="box-container container-fluid">
                <div class="row gx-8 justify-content-center" text-center>
                    <div class="col-lg-3 one col-md-3 col-sm-6">
                        <div class="content">
                            <div class="icon">
                                <img src="icons\Problem icons\PAPER WASTE.png" alt="papers" height="100px" width="100px">
                            </div>
                            <h3>PAPER WORK</h3>
                            <p>Maintaining & record keeping is a hassel</p>
                        </div>
                    </div>
                    <div class="two col-lg-3 col-md-3 col-sm-6">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\TIME WASTE.png" alt=""></div>
                            <h3>TIME WASTE</h3>
                            <p>Repetitive tasks are unproductive & time consuming</p>
                        </div>
                    </div>
                    <div class="three col-lg-3 col-md-3 col-sm-6">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\manual_efforts.png" alt=""></div>
                            <h3>DAILY MANUAL EFFORTS</h3>
                            <p>Manpower is required each day for unnecessary tasks</p>
                        </div>
                    </div>
                    <div class="four col-lg-3 col-md-3 col-sm-6">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\machine_service.png" alt=""></div>
                            <h3>NO MACHINE SERVICE HISTORY</h3>
                            <p>No record of machine maintenance & repairs</p>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="box-container container-fluid">
                <div class="row gx-8 justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 five">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\no_expense_tracking.png" alt=""></div>
                            <h3>NO EXPENSE TRACKING</h3>
                            <p>No record expenses leads to overspending</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 six">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\no-app.png" alt=""></div>
                            <h3>NO DIGITAL LEADS</h3>
                            <p>Customer acquisition is very difficult</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 seven">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\slow-process.png" alt=""></div>
                            <h3>SLOW PROGRESS</h3>
                            <p>No insights to improve weak points</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 eight">
                        <div class="content">
                            <div class="icon"><img src="icons\Problem icons\icons8-internet-100.png" alt=""></div>
                            <h3>NO DIGITAL PLATFORM/APP</h3>
                            <p>Lack of digital infrastructure leads to no data</p>
                        </div>
                    </div>
                </div>
            </div>    

        </div>
    </div>

</section>

<!-- home section ends -->







<!-- saas for owners -->

<section class="features">
    <div class="big-heading">
        <h1>How we can help you</h1>
    </div>
    <div class="title">Reinvent Your Business With Our Digital Solutions And Services</div>
    <div class="box-container second">

        <div class="box">
            <section class="content">
                <h1 class="heading">Increase Revenue</h1>
                <p class="description">Grow your business by enhancing business acquisitions through:</p>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Customer Satisfaction</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Time Management</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Enquiry Management</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Digital Marketing</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Machine Health</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Expense History</p>
                </div>
            </section>
        </div>       
        
        <div class="box">
            <div class="test-image">
                <img src="./images/cash.jpg" alt="screen">
            </div>
        </div>

    </div>

    <div class="box-container">
        
        <div class="box">
            <div class="test-image">
                <img src="./images/report.jpg" alt="screen">
            </div>
        </div>
        <div class="box">
            <section class="content">
                <h1 class="heading">Administrative Report</h1>
                <p class="description">Easy to analyse each component of your business in depth based on sales and marketing reports including:</p>
                <div class="list">
                    <div class="list-item">
                        <p><i class="fas fa-check"></i>Day Summary</p>
                    </div>
                    <div class="list-item">
                        <p><i class="fas fa-check"></i>Member Report</p>
                    </div>
                    <div class="list-item">
                        <p><i class="fas fa-check"></i>Machine Report</p>
                    </div>
                    <div class="list-item">
                        <p><i class="fas fa-check"></i>Expense Report</p>
                    </div>
                </div>
            </section>
        </div>       
    </div>

    <div class="box-container second">
        <div class="box">
            <section class="content">
                <h1 class="heading">Digital Marketing</h1>
                
                <div class="list-item">  
                    <p><i class="fas fa-check"></i>Promotion/Advertising</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Business Lead</p>
                </div>
                <div class="list-item"> 
                    <p><i class="fas fa-check"></i>Personalised Videos</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Membership plans</p>
                </div>
            </section>
        </div>       
        
        <div class="box">
            <div class="test-image">
                <img src="./images/marketing.jpg" alt="screen">
            </div>
        </div>
    </div>

    <div class="box-container">
        <div class="box">
            <div class="test-image">
                <img src="./images/additional-services.jpg" alt="screen">
            </div>
        </div>

        <div class="box">
            <section class="content">
                <h1 class="heading">Additional Services</h1>
                
                <div class="list-item">   
                    <p><i class="fas fa-check"></i>Book a Dietician</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Book a Therapist</p>
                </div>
                <div class="list-item">  
                    <p><i class="fas fa-check"></i>Purchase fitness Products</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Buy Equipments on discount</p>
                </div>
            </section>
        </div>       
    </div>

    <div class="box-container second">
        
        <div class="box">
            <section class="content">
                <h1 class="heading">Members Management</h1>
                <p class="description">Easily track the activities, excercises, schedules, in/out timings and memberships from anywhere on any device.</p>
                <div class="list-item">   
                    <p><i class="fas fa-check"></i>Members Management</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Diet Plan</p>
                </div>
                <div class="list-item">
                        
                    <p><i class="fas fa-check"></i>Workout Plan</p>
                </div>
                <div class="list-item">
                     
                    <p><i class="fas fa-check"></i>Staff Management</p>
                </div>
                <div class="list-item">
                     
                    <p><i class="fas fa-check"></i>Invoicing</p>
                </div>
            </section>
        </div>     
        <div class="box">
            <div class="test-image">
                <img src="./images/members.jpg" alt="screen">
            </div>
        </div>
  
    </div>

    <div class="box-container">
        <div class="box">
            <div class="test-image">
                <img src="./images/sessions.jpg" alt="screen">
            </div>
        </div>

        <div class="box">
            <section class="content">
                <h1 class="heading">Session Management</h1>
                <p class="description">Decrease administrative workload using our software to manage different schedules</p>
                <div class="list-item">                        
                    <p><i class="fas fa-check"></i>Schedule classes/training sessions</p>
                </div>
                <div class="list-item">                     
                    <p><i class="fas fa-check"></i>Check employee availability</p>
                </div>
                <div class="list-item">                        
                    <p><i class="fas fa-check"></i>Manage sessions-Individual/Family packs</p>
                </div>
            </section>
        </div>       
    </div>

    <div class="box-container second">
        
        <div class="box">
            <section class="content">
                <h1 class="heading">Machine Management</h1>
                <div class="list-ite
                    <p><i class="fas fa-check"></i>Keep records of Machines and their records</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Keep track of Machine service history</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Keep track of Machine health status</p>
                </div>
            </section>
        </div>   
        <div class="box">
            <div class="test-image">
                <img src="./images/gym-machines.jpg" alt="screen">
            </div>
        </div>
    
    </div>

    <div class="box-container">
        <div class="box">
            <div class="test-image">
                <img src="./images/client-card-photo.jpg" alt="screen">
            </div>
        </div>

        <div class="box">
            <section class="content">
                <h1 class="heading">Client Feedback</h1>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Feedback reviews from clients</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Rating scores of services</p>
                </div>
            </section>
        </div>       
    </div>

    <div class="box-container second">
        <div class="box">
            <section class="content">
                <h1 class="heading">Instant Messaging</h1>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Instant messaging bulk/one-to-one</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Offers</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Pop-up notes</p>
                </div>
                <div class="list-item">
                    <p><i class="fas fa-check"></i>Follow-up reminders</p>
                </div>
            </section>
        </div>       
        <div class="box">
            <div class="test-image">
                <img src="./images/messaging.jpg" alt="screen">
            </div>
        </div>
    </div>
</section>













<!-- review section starts  -->

<section class="review">

    <div class="information">
        <span>testimonials</span>
        <h3>what our clients say</h3>
        <p>Trusted by the best etc. etc. etc. etc.  amet consectetur adipisicing elit. Nobis voluptas praesentium asperiores fugiat, excepturi odit obcaecati a voluptatibus earum quisquam?</p>
        <a href="signupPage.php" class="newbtn">Start Free</a>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->




<!-- faq section starts -->
<section class="faq">
    <div class="heading">
        <h1>Frequently asked Questions</h1>
    </div>

    <div class="wrapper">
        <div class="box">
            <div class="qa">
                <div class="ques">
                    <h3>What are the features of a great gym?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        The features of the best gym are:<br>
                        <ul>
                            <li>Great Gym Flooring: A great gym should have a great gym floor. When you walk into the gym, you want to be in the zone. The colors need to appeal to a mindset that gets you ready to exercise. You want to feel welcome and comfortable</li>
                            <li>Layout: A structure needs to be obvious in the setup of the gym</li>
                            <li>Equipment: There needs to be the right equipment for what you are trying to get out of the workouts</li>
                            <li>People: The people in the gym need to reflect the goals of the individuals who occupy it. The staff needs to be helpful and respectful</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What are the basic facilities should present in the gym?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        Where it be a basic, moderate or a hi-tech gym, some of the basic facilities that should always be present in the gym are:
                        <ul>
                            <li>Enough Equipment with good maintenance</li>
                            <li>Clean environment</li>
                            <li>Well illumination</li>
                            <li>Drink water, Facility for changing clothes, provision for keeping bags & valuables like mobile phones, purse watch etc.</li>
                            <li>Important is a Good couch or trainer who does not just sit on a round chair and watch mobile. Need to keep with trainees all time.</li>
                            <li>First aid box</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What are the best workouts for a fit body?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        Some of the best workouts for a fit body are:<br>
                        <ul>
                            <li>Lunges</li>
                            <li>Pushups</li>
                            <li>Squats</li>
                            <li>Standing overhead, dumbbell presses</li>
                            <li>Dumbbell rows</li>
                            <li>Single led deadlifts</li>
                            <li>Burpees</li>
                            <li>Side Planks</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What type of workouts is available at the gym
                    </h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        There are lots of workouts which are available in the gym. Some of them are:<br>
                        <ul>
                            <li>Horizontal Seated Leg Press.</li>
                            <li>Lat Pull-Down</li>
                            <li>Cable Biceps Bar</li>
                            <li>Cable Triceps Bar (or Triceps Push down)</li>
                            <li>Chest Press</li>
                            <li>Hanging Leg Raise</li>
                            <li>Cardio: Rowing Machine</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What are the benefits of going to the gym
                    </h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        Some of the benefits of going to the gym are:<br>
                        <ul>
                            <li>It can help you lose weight</li>
                            <li>It is good for your health</li>
                            <li>It makes you feel happier</li>
                            <li>It will improve your self-esteem</li>
                            <li>It will enrich your social life</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>How often should you go to the gym?
                    </h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        There’s no magic number of times you should hit the gym every week. How often you go depends on your body, your fitness goals, and your schedule. Still, there are some general guidelines:<br>
                        <ul>
                            <li>General fitness: 4 - 5 days per week</li>
                            <li>Weight loss: 5 - 6 days per week</li>
                            <li>Muscle building: 3 - 4 days per week</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What are the basic things you should carry to the gym?
                    </h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        Some of the basic things that we should carry in the gym are:<br>
                        <ul>
                            <li>Workout clothing</li>
                            <li>Water bottle</li>
                            <li>Bluetooth headphones</li>
                            <li>Towel</li>
                            <li>Activity-specific essentials</li>
                            <li>Deodorant and face wipes</li>
                            <li>Post-workout snacks</li>
                        </ul>
                </p>
                </div>
            </div>
            <div class="qa">
                <div class="ques">
                    <h3>What are the benefits of personal trainers in the gym?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="ans">
                    <p>
                        Benefits Of Working Out With A Personal Trainer Are:<br>
                        <ul>
                            <li>Set Purposeful Goals</li>
                            <li>Stay Accountable And Motivated</li>
                            <li>Exercise With Correct Form</li>
                            <li>Personalize Your Routine</li>
                            <li>Receive Continual Support</li>
                        </ul>
            
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section ends -->






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
                echo '<div class="swiper-slide slide">
                            <div class="image">
                                <img src="'.$result->blogimage.'" alt="">
                            </div>
                            <div class="content">
                                <p> '.$result->blogwrittenby.' <span>|</span> '.date('j M,  Y', strtotime($result->created_at)).'</p>
                                <h3>'.$result->headername.'</h3>
                                <a href="bg_dt.php?bid='.$result->id.'" class="readmorebtn">read more</a>
                            </div>
                        </div>';
              }
            }
          ?>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->





<!-- footer section starts  -->

<section class="footer" id="#footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="links" href="#">home</a>
            <a class="links" href="#about">about</a>
            <a class="links" href="#app">Our App</a>
            <!-- <a class="links" href="#pricing">pricing</a> -->
            <!-- <a class="links" href="#sports">sports</a> -->
            <a class="links" href="#blogs">blogs/videos</a>
        </div>

        <!-- <div class="box">
            <h3>opening hours</h3>
            <p> monday : <i> 7:00am - 10:30pm </i> </p>
            <p> tuesday : <i> 7:00am - 10:30pm </i> </p>
            <p> wednesday : <i> 7:00am - 10:30pm </i> </p>
            <p> friday : <i> 7:00am - 10:30pm </i> </p>
            <p> saturday : <i> 7:00am - 10:30pm </i> </p>
            <p> sunday : <i> closed </i> </p>
        </div> -->

        <div class="box">
            <h3>contact information</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
            <p> <i class="fas fa-envelope"></i> mesiddharth.001@gmail.com </p>
            <p> <i class="fas fa-map"></i> delhi, india - 400104 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>
       

    </div>

</section>

<div class="credit"> credit for icons goes to <span>icons8.com</span> | all rights reserved. </div>

<!-- footer section ends -->










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/softwareScript.js"></script>
<script src="js/animateslide.js"></script>

<?php } ?>
</body>
</html>