<?php

include('conn.php');
if(isset($_POST['submit']))
{
    $uname = $_POST['userid'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM userpass WHERE uid='$uname' && pass='$pass'";
    $data = mysqli_query($con,$query);
    $row = mysqli_num_rows($data);
    if($row == 1)
    {
        header('location:index1.html');
        //echo "<h1>Login successfullll</h1>";
    }
    else
    {
        echo "<h2><font color='white'> Login Failed !!!</h2>";
    }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

    <style>
        body {

            background-image: url(assets1/images/the-ball-stadion-football-the-pitch-46798.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }

        fieldset {
            width: 300px;
            margin-left: 100px;
            margin-top: 100px;
            background-image: url(assets1/images/412136-2000x1250.jpg);
            opacity: 1.8;
            background-size: contain;
            background-attachment: fixed;
            height: 500px;

            color: floralwhite;

        }
        .fieldset-container1{
            border: 0px solid;padding: 10px 20px;
            -webkit-box-shadow: 2px 3px 43px 11px rgba(0,0,0,1);
            -moz-box-shadow: 2px 3px 43px 11px rgba(0,0,0,1);
            box-shadow: 2px 3px 43px 11px rgba(0,0,0,1);
        }

        .submit {
            width: 100px;
            height: auto;
            margin-left: 200px;
        }
        .btn {
              display: inline-block;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              vertical-align: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              border: 1px solid transparent;
              padding: 0.375rem 0.75rem;
              font-size: 1rem;
              line-height: 1.5;
              border-radius: 0.25rem;
              transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
        .btn-success {
              color: #fff;
              background-color: #28a745;
              border-color: #28a745;
            }

            .btn-success:hover {
              color: #fff;
              background-color:#d75a5a;
              border-color: #d75a5a;
            }



        marquee {
            margin-left: 100px;
            margin-right: 50px;
            shape-margin: 100px;
            color: black;
            font-size: 25px;
            font-family: monospace;
            font-style: italic;

        }


        body,
        html {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        .container1 {
            width: 100%;
            height: 100%;
        }

        .leftpane {
            width: 30%;
            height: 100%;
            float: left;

            border-collapse: collapse;
        }


        .rightpane {
            width: 70%;
            height: 80%;
            position: relative;
            float: right;

            border-collapse: collapse;
        }

        .msg {
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container1">

        <div class="leftpane">
           <a href="index.html"><h3 class="btn btn-success">Click here to HOME</h3></a>
            <h1>
                <fieldset class="fieldset-container1">
                    <legend> Login </legend>
                    <br/>

                    <br/>
                    <br/>
                    <br/>

                    <br/>
                    <br/><br>
                    <form action="" method="post">
                        UserID : <input type="text" name="userid" placeholder="your user id here" value="" /> PassWord : <input type="password" name="password" placeholder="your password here" value="" />

                        <input type="submit" class="submit btn btn-success" value="Login" name="submit" />
                    
                        <h6>Forgot Password. <a href="register.php" style="color:#5beb19">Register Here</a></h6>
                    </form>
                </fieldset>
            </h1>
        </div>

        <div class="rightpane">
            <h1>
                <marquee direction="down" class="fieldset-container1">
                    <p class="fieldset-container1">“I am not a perfectionist, but I like to feel that things are done well. More important than that, I feel an endless need to learn, to improve, to evolve, not only to please the coach and the fans but also to feel satisfied with myself. It is my conviction that here are no limits to learning, and that it can never stop, no matter what our age.”
                        <br/> -Cristiano Ronaldo
                        <br/>
                        <br/>
                        <br/> "I prefer to win titles with the team ahead of individual awards or scoring more goals than anyone else. I'm more worried about being a good person than being the best football player in the world. When all this is over, what are you left with? When I retire, I hope I am remembered for being a decent guy."

                        <br/> -Lionel Messi
                        <br/>
                        <br/>
                        <br/> “Some people think football [soccer]is a matter of life and death. I don’t like that attitude. I can assure them it is much more serious than that.”

                        <br/> -Bill Shankly
                        <br/>
                        <br/>
                        <br/> “Football is a simple game; 22 men chase a ball for 90 minutes and at the end, the Germans win.”
                        <br/>-Gary Lineker
                        <br/>
                        <br/>
                        <br/> “We must have had 99 percent of the game. it was the other three percent that cost us the match.”
                        <br/>-Ruud Gullit
                        <br/>
                        <br/>
                        <br/> “I learned all about life with a ball at my feet”
                        <br/>-Ronaldinho

                    </p>
                </marquee>
            </h1>
        </div>
    </div>
</body>

</html>
