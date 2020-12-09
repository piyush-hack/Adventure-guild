
<?php
if(isset($_POST['username']) & isset($_POST['Password'])){
    $Uname = $_POST['username'];
    $password = $_POST['Password'];
    $address = $_POST['address'];
    $contact = $_POST['contactno'];
    $email = $_POST['email'];
 
    $con = mysqli_connect('localhost','root','','registered_adventerer');

    $query = "INSERT INTO `requestboard`(`username`, `password`, `address`, `contactno`, `email`) VALUES ('$Uname','$password','$address','$contact','$email')";

    $run = mysqli_query($con, $query);

    if($run==TRUE){
        echo "Loged in Successfully ";
        header('location:customerlogin.php');
    }else{
        echo "error";
    } 


}else{
 
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

        body {
            background-image: url('wp4946032.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
            margin: 0px;
        
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            background-color: #fefefe;
            margin: 5%  5% 10%  10%; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            font-size: 5vw;

        }

        .welcome{
            width : 100%;
            background-color: white;
            height: 10vw;
            vertical-align: middle;
            text-align: left;
        }

        .guildhead{
            padding-left: 5vw;
            height:7vw;
        }  
           


        .heading{
            display: inline-block;
            font-family: Courier, monospace;
            font-size: 2vw;
        }
        .menubar{
            background-color: #F7F7F7;
            width: 100%;
            height: 3vw;
        }

        .content{
            float: right;
            margin-right: 2vw;
            line-height: 1.8vw;
            text-align: center;
            font-size: 1vw;
            font-family: Helvetica, sans-serif;

        }

        .text{
            color: #000000;
            font-weight: 10;
            font-family: Helvetica, sans-serif;


        }
        .text:hover{
            color: orange;
        }

        .requestheading{
            display: inline-block;
            font-family: Courier, monospace;
            font-size: 2vw;
            color: white;
        }
        .requestheading:hover{
            color: orange;
        }

        .design{
            height: 54vw;
        }
        .upperdesign{
            height: 29vw;
        }

        .design2{
            float: none; 
            font-size: 5vw;
            color:#E3783E;
            font-family: Courier, monospace;
        }
        .bottomdesign{
            border: 2px solid white;
            height : 25vw;
            text-align: center;
             background-color: #fff;
            background-color: rgba(255,255,255,0.5);
        }
        .myprofile{
            height: 100%;
            background-color: orange ;
            padding-left: 5vw;
            padding-top: 5vw;
            padding-right: 5vw;
        }

        .profileback{
            background-color: #F7F7F7 ;
            height : 43vw;
            padding-left: 5vw;
            padding-top: 5vw;
        }
        
        .intro{

            font-size: 1.5vw;

        }

        .acceptedorder{
            height : 50vw;
            background-color: #E3783E ;
            padding-left: 5vw;
            padding-top: 5vw;
            padding-right: 5vw;
            padding-bottom: 5vw;
        }

        .orders{
            float: left;
            height : 30vw;
            width: 25vw;
            margin-right: 1.5vw;
            background-color: #E3783E;
            font-family: Courier, monospace;
            font-size: 1.5vw;
            border: 2px solid black;
        }
        #noorderlink{
            font-size: 10vw;
        }
        a{
            color: green;
        }
        a.hover{
            color: orange;
        }

        

        @media only screen and (max-width: 400px) { 
            .menubar { 
                height: 5vw;      
            }
            .content{
                font-size: 3vw;
                line-height: 5vw;
            }
            .guildhead{
                height: 15vw;
            }
            .intro{
                font-size: 3vw;
            }
            .myprofile{
                height: 100%;
            }
            .profileback{
                height : 90%;
            }
            .design{
                height: 100vw;
            }
            .welcome{
                height: 20vw;
            }
            .heading{
                font-size: 10vw ;
            }
            .intro{
                font-size: 5vw;
            }
            .acceptedorder{
                height: 220vw;
            }
            .orders{
                height: 65vw;
                width: 70vw;
                margin-left: 7vw;
                margin-bottom:1.5vw;
            }
            .upperdesign{
                height: 75vw;
            }
        }


  </style>
    </head>
    <body>
    <div id= "myprofile1" class = "myprofile">
                    <div class = "profileback">
                    <div class="heading"><p class="intro">LOGIN <b>Twin star adventure guild</b> to twin star adventure guild</p>
                        <p class="intro">This site provides you the serive of </p>
                        <p class="intro">HELPING OTHER AND EARN MONEY</p>
                        <p  class="intro">Visit and support us by logging in</p>
                        <form method="post">
                            <div class="intro" style="margin-left: 1vw;"> <label for="Username">Username:
                            <input class="intro" type="text" name="username" required="required"></div>
                            
                            <div style="height: 3vw;"></div>
                            <div class="intro">  <label for="Password" required="required">&nbsp;Password:
                            <input class="intro" type="password" name="Password"></div>

                            <div style="height: 3vw;"></div>
                            <div class="intro" style="margin-left: 1vw;"> <label for="Address">Address:
                            <input class="intro" type="text" name="address" required="required"></div>
                            <div style="height: 3vw;"></div>

                            <div class="intro" style="margin-left: 1vw;"> <label for="email">Email:
                            <input class="intro" type="email" name="email" required="required"></div>
                            <div style="height: 3vw;"></div>

                            <div class="intro" style="margin-left: 1vw;"> <label for="Contact">Conatct no.:
                            <input class="intro" type="number" name="contactno" required="required"></div>
                            <div style="height: 3vw;"></div>


                            <div class="intro">   <input class="intro" type="submit" value="REGISTER" style="text-decoration: none;border: none;color: orange;"><div> 
                
                           </label>
                        </form>
                            </div>
                            </div>

                    </div>
                
    </div>
    <!-- <form method="post">
           <div> <label for="Username">Username:
                <input type="text" name="username" required="required"></div>
                <div>  <label for="Password" required="required">&nbsp;Password:
                <input type="password" name="Password"></div> 
                <div>   <input type="submit" value="GO"><div> 
                
        </label>
        </form> -->
    
    </body>
</html>
