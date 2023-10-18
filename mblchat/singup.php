<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/home.css">
    <title>Chat App</title>
</head>

<body>

    <div class="singup_container">
        <div class="form singup">
            <header>Realtime Chat app</header>

            <form action="#">
                <div class="err_message">

                    <p><span>This is error message</span> </p>
                </div>
                <div class="full_name">

                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" id="first_name" placeholder="Enter First name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" id="last_name" placeholder="Enter Last name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter new Password">
                    <i id="icon" class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Chose Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Chat to continue">
                </div>
                <div class="field link">
                    <p><span>Already have account <a href="login.php">Login? </a></span></p>
                </div>

            </form>
        </div>
    </div>


    <script src="js/Singup.js"></script>

</body>

</html>