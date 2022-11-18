<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/appStyle.css"> 

    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- owl-carousel links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
</head>
<body>
<?php
    session_start();
    error_reporting(0);
    include('config/config.php');

    {  



?>

<!-- header section starts      -->

<header class="header">

    <!-- <a href="#" class="logo"> <span>Do</span>IT </a> -->
    <a href="#" class="logo"><img src="./images/doit_logo.jpeg" alt="logo"></a>
    <!-- DONT DELETE THIS MENU BUTTON!!! -->
    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#about">FITNESS CENTRE</a>
        <a href="#app">INDIVIDUALS</a>
        <!-- <a href="#pricing">pricing</a> -->
        <!-- <a href="#sports">sports</a> -->
        <a href="#blogs">CONTACT US</a>
        <a href=""><button class="newbtn">GET APP</button></a>
        <a href="loginPage.html"><button class="newbtn">START FREE</button></a>
    </nav>

</header>

<!-- header section ends     -->

<!-- adding fixed bottom right download buttons -->
<div class="fixedbadges">
    <a href="https://play.google.com/store/apps/details?id=doit.robatosystems.com"><img class="badge1" src="images/playstoreblack.png" alt="google play badge"></a>
    <a href="#"><img class="badge2" src="images/appstoreblack.png" alt="app store badge"></a>
</div>

<!-- top section(with images slider) starts -->
<section class="top">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/use.jpg) no-repeat;">
                <div class="content">
                    <h3>Meet the All-New DoIT App.</h3>
                    <p>• Workout Plans</p>
                    <p>• Sports Information</p>
                    <p>• Reference Generation</p>
                    <br>
                    <br>
                    <a href="https://play.google.com/store/apps/details?id=doit.robatosystems.com" class="newbtn">DOWNLOAD</a>
                </div>
            </div>
            
            <div class="swiper-slide slide" style="background: url(images/use.jpg) no-repeat;">
                <div class="content">
                    <!-- <h3>Free Fitness App.<br>Work Out Anytime. Anywhere.</h3> -->
                    <h3>Work Out Anytime. Anywhere.</h3>
                    <p>• Digital Workout Trainer</p>
                    <p>• Workout insights</p>
                    <p>• Products</p>
                    <br>
                    <br>
                    <a href="https://play.google.com/store/apps/details?id=doit.robatosystems.com" class="newbtn">DOWNLOAD</a>
                </div>
            </div>
            
            <div class="swiper-slide slide" style="background: url(images/use.jpg) no-repeat;">
                <div class="content">
                    <h3>Go the extra mile with the support of our experts</h3>
                    <!-- <h3>Also check out</h3> -->
                    <p>• Consult Dietician</p>
                    <p>• Consult Therapist</p>
                    <p>• Feedback</p>
                    <br>
                    <br>
                    <a href="https://play.google.com/store/apps/details?id=doit.robatosystems.com" class="newbtn">DOWNLOAD</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
<!-- top section(with images slider) ends -->



<!-- app ad/download section starts -->
<section class="download" id="download">
    <div class="box-container">

        <div class="box">
            <div class="test-image">
                <img src="./images/fiton_phones.jpg" alt="flying phones">
            </div>
            <div class="badges">
                <a href="https://play.google.com/store/apps/details?id=doit.robatosystems.com"><img class="badge1" src="images/playstoreblack.png" alt="google play badge"></a>
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
<!-- app ad ends -->



<!--app review section starts  -->

<!-- TESTIMONIALS -->
<section class="testimonials">
    <!-- <div class="container rounded"> -->
    <div class="wrapper">
        <div class="big-heading">
            <h1 class="text-primary text-center head">What our App Users Say</h1>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="owl-item">
                <div class="card d-flex flex-column">
                    <!-- images\quote-icon.svg -->
                    <img src="images\quote-icon.svg" alt="" class="icon-quote">
                    <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores
                        molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                        <div class="mt-2"> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span>
                        </div>
                    <div class="d-flex flex-row profile pt-4 mt-auto">
                        <div class="d-flex flex-column pl-2">
                            <div class="name">Josh</div>
                            <p class="text-muted designation">DoIT User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card d-flex flex-column">
                    <!-- images\quote-icon.svg -->
                    <img src="images\quote-icon.svg" alt="" class="icon-quote">
                    <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores
                        molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                        <div class="mt-2"> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span>
                        </div>
                    <div class="d-flex flex-row profile pt-4 mt-auto">
                        <div class="d-flex flex-column pl-2">
                            <div class="name">Megan</div>
                            <p class="text-muted designation">DoIT User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card d-flex flex-column">
                    <!-- images\quote-icon.svg -->
                    <img src="images\quote-icon.svg" alt="" class="icon-quote">
                    <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores
                        molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                        <div class="mt-2"> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span>
                        </div>
                    <div class="d-flex flex-row profile pt-4 mt-auto">
                        <div class="d-flex flex-column pl-2">
                            <div class="name">Megan</div>
                            <p class="text-muted designation">DoIT User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card d-flex flex-column">
                    <!-- images\quote-icon.svg -->
                    <img src="images\quote-icon.svg" alt="" class="icon-quote">
                    <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores
                        molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                        <div class="mt-2"> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span>
                        </div>
                    <div class="d-flex flex-row profile pt-4 mt-auto">
                        <div class="d-flex flex-column pl-2">
                            <div class="name">Megan</div>
                            <p class="text-muted designation">DoIT User</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card d-flex flex-column">
                    <!-- images\quote-icon.svg -->
                    <img src="images\quote-icon.svg" alt="" class="icon-quote">
                    <div class="testimonial"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores
                        molestias veniam inventore itaque eius iure omnis, temporibus culpa id. </div>
                        <div class="mt-2"> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span
                                class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span>
                        </div>
                    <div class="d-flex flex-row profile pt-4 mt-auto">
                        <div class="d-flex flex-column pl-2">
                            <div class="name">Megan</div>
                            <p class="text-muted designation">DoIT User</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- END OF TESTIMONIALS -->

<!-- app review section ends -->


<!-- features section starts -->
<section class="features">
    <div class="big-heading">What you get inside</div>
    
    <div class="box-container">
        
        <div class="box">
            <div class="content">
                <h1 class="heading">Makeme Fit</h1>
                
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Personalise your workout plans at your comfort.</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Workout anytime, anywhere.</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Join world-class fitness centers, gyms and expert trainers.</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Calendar logging of workouts</p>
                </div>
            </div>
        </div>    
        <div class="box">
            <div class="screenshot">
                <img src="./images/workout-planner-ss.jpg" alt="flying phones">
            </div>
            
        </div>

    </div>
    <div class="box-container">
        
        <div class="box">
            <div class="screenshot">
                <img src="./images/calories-counter-ss.jpg" alt="flying phones">
            </div>
            
        </div>
        <div class="box">
            <div class="content">
                <h1 class="heading">Calories counter</h1>
                
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Easy to track calories intake of all meals of your day</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Know calories for local & global cuisine foods and snacks</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Check nutritional values of food</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Manage your weight loss goals</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Water reminders</p>
                </div>
            </div>
        </div>    

    </div>
    <div class="box-container">
        
        <div class="box">
            <div class="content">
                <h1 class="heading">Therapy for Mental Wellness</h1>
                
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Heal and develop balance between your mind, body and soul.</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Medical and psychiatric care</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Meditation, nutritional and wellness counselling</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Yoga therapy</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Breath retention excercises</p>
                </div>
            </div>
        </div>    
        
        <div class="box">
            <div class="screenshot">
                <img src="./images/meditating.jpeg" alt="flying phones">
            </div>
            
        </div>
    </div>
    <div class="box-container" style="margin-bottom:0;">
        
        <div class="box">
            <div class="screenshot">
                <img src="./images/diet-food.jpeg" alt="flying phones">
            </div>
            
        </div>
        <div class="box">
            <div class="content">
                <h1 class="heading">Healthy diet and recipes</h1>
                
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Build a consistent routine with healthy recipes</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Customised weight loss/gain recipes</p>
                </div>
                <div class="list-item">
                    <p><i aria-hidden="true" class="fas fa-check-circle"></i>Explore delicious recipes as per your target</p>
                </div>
            </div>
        </div>    

    </div>
    
</section>
<!-- features section ends -->




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



<!-- faq section starts -->
<!-- <section class="faq">
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
</section> -->
<!-- faq section ends -->


<!-- including footer file -->
<?php include('include/footer.php');  ?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/softwareScript.js"></script>
<script src="js/animateslide.js"></script>
<script src="js/appScript.js"></script>

<?php } ?>
</body>
</html>