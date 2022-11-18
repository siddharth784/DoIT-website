<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOIT-All in one Sports Platform</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/blogs.css">
</head>

<body>
    
<?php
    session_start();
    error_reporting(0);
    include('config/config.php');

    {  

        // Get Blog ID
        if(isset($_GET['bid']))
        {
            $blogid=$_GET['bid'];
        }

        $sql = "SELECT headername, subheadername, blogimage, blogdesc, tags, metadescription, blogwrittenby, blogreviewby, status, created_at from blogs where id = (:blogid)";
		$query = $db -> prepare($sql);
		$query->bindParam(':blogid',$blogid,PDO::PARAM_INT);
		$query->execute();
        $result_bg_dt=$query->fetch(PDO::FETCH_OBJ);

?>
    
<!-- TOP NAV BAR -->

<?php include('include/top_navbar.php');  ?>


<!-- ARTICLE/BLOG STARTS -->
<div class="wrapper container">
    <!-- <div class="row"> -->
        <div class="blog content">
            <!-- <div class="container"> -->
                <div class="blog-header">
                    <div class="header-text">
                        <div class="container">
                            <h1 class="heading"> <?php echo $result_bg_dt->headername; ?> </h1>
                            <h3 class="subheading"><?php echo $result_bg_dt->subheadername; ?></h3>
                            <h4 class="details row">
                                <div class="author">Written by <span><?php echo $result_bg_dt->blogwrittenby;?></span></div>
                                <!-- <div class="date"><span><?php echo date('j M,  Y', strtotime($result_bg_dt->created_at));?></span></div> -->
                            </h4>
                        </div>
                    </div>
                    <div class="header-img">
                        <img class="image" alt="" src="<?php echo $result_bg_dt->blogimage; ?>">
                    </div>                    
                </div>
                <div class="description">
                        <?php echo $result_bg_dt->blogdesc; ?>
                </div>
            <!-- </div> -->
        </div>
    <!-- </div> -->
</div>
<!-- ARTICLE/BLOG ENDS -->



<!-- related blogs section starts  -->

<section class="related" id="blogs">

    <h1 class="heading">RELATED ARTICLES</h1>

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

<!-- related blogs section ends -->



<!-- including footer file -->
<?php include('include/footer.php');  ?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php } ?>

</body>
</html>