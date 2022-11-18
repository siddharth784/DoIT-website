<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign up Form</title>
    <!-- custom css -->
    <link rel="stylesheet" href="css/signupStyle.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <!-- jquery link -->
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="center">
        <h1>JOIN US</h1>
        <div class="tabs">
            <button class="individ-btn tab" id="individ-btn" onclick="show_individ()">Individual</button>
            <button class="academy-btn tab" id="academy-btn" onclick="show_academy()">Academy</button>
        </div>

        <div class="panels">
            <div class="individual data-tab-content active" id="individual">
                <form method="post">
                    <div class="txt_field">
                        <input type="text" required autofocus>
                        <span></span>
                        <label>Name</label>
                    </div>
                    <div class="txt_field">
                        <input type="email" required>
                        <span></span>
                        <label>Email ID</label>
                    </div>
                    <div class="txt_field">
                        <!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required> -->
                        <input type="tel" required>
                        <label>Mobile no.</label>
                    </div>
            
                    <div class="txt_field">
                        <input type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" required>
                        <label>Profession</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" required>
                        <label>City</label>
                    </div>
                    <div class="txt_field msg" style="border:none;">
                        <label for="feedback">Message(optional):</label>
                        <textarea id="feedback" name="message" maxlength="300"></textarea>  
                    </div>
                    <p class="disclaimer">By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .</p>
                    <input type="submit" value="REGISTER">
                    <!-- <div class="signup_link">
                        Already registered? <a href="loginPage.html">Login</a>
                    </div> -->
                    <!-- <div style="display:flex;">
                        <hr style="width:40%;">
                        <p style="text-align:center;width:20%;color:gray;transform: translateY(15%);">OR</p>
                        <hr style="width:40%;">
                    </div> -->
                    <!-- <button type="button" class="login-with-google-btn">
                        <img src="images\google-logo.svg" alt="logo">
                        Sign in with Google
                    </button> -->
                </form>
            </div>
            <div class="academy data-tab-content" id="academy">
                <form method="post">
                    <div class="txt_field">
                        <!-- <input type="radio" required>
                        <label>Academy Type</label> -->
                        <div class="row">
                            <!-- <label for="type">Academy Type</label> -->
                            <select id="type">
                                <option disabled selected style="color:#adadad;">Select your academy type</option>
                                <option value="yoga-center">Yoga Center</option>
                                <option value="dance-center">Dance Center</option>
                                <option value="gym">Gym</option>
                                <option value="boxing">Boxing</option>
                                <option value="multi-sports">Multi Sports</option>
                                <option value="indoor-sports">Indoor Sports</option>
                                <option value="outdoor-sports">Outdoor Sports</option>
                            </select>
                        </div>
                    </div>            
                    <div class="txt_field">
                        <!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required> -->
                        <input type="tel" required>
                        <label>Academy Name</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" required>
                        <label>Email</label>
                    </div>
                    <div class="txt_field">
                        <input type="tel" required>
                        <label>Mobile no.</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" required>
                        <label>City</label>
                    </div>
                    <div class="txt_field msg" style="border:none;">
                        <label for="feedback">Message(optional):</label>
                        <textarea id="feedback" name="message" maxlength="300"></textarea>  
                    </div>
                    <p class="disclaimer">By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .</p>
                    <input type="submit" value="REGISTER">
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script>
        document.onload(show_individ());
    </script>
</body>

</html>