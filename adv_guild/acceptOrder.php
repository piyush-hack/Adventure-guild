

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>

        body {
            background-color: white;
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
            font-size: 2vw;

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
            color: green;
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
            height: 40vw;
            background-color: white ;
            padding-left: 5vw;
            padding-top: 5vw;
            padding-right: 5vw;
        }

        .profileback{
            background-color: #F7F7F7 ;
            height : 30vw;
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
            height : 30vw;
            width: 70%;
            margin-right: 1.5vw;
            padding-bottom: 5vw;
            background-color: white;
            font-family: Courier, monospace;
            font-size: 1.5vw;
            border: 2px solid black;
            margin-left: 15vw;
            margin-bottom: 5vw;
        }
        #noorderlink{
            font-size: 10vw;
        }
        .orderblock1{
            height: 8vw;
            text-align: center;
            font-family: Helvetica, sans-serif;
            border-bottom: 2px solid grey;
            font-size: 2vw;
            margin: 0vw 2vw 0vw 2vw;
        }
        .orderblock2{
            margin: 2vw 2vw 2vw 2vw;
            height: 13vw;
            border-bottom: 2px solid grey;
        }
        .submitbutton{
            height: 4vw;
            width: 28vw;
            float: right;
            margin: 03vw 2vw 2vw 0vw;
            padding-top: 0.5vw;
            padding-left: 1vw;   
            color: #E3783E;
            font-size: 3vw;
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
                height: 90vw;
            }
            .profileback{
                height : 80vw;
            }
            .design{
                height: 100vw;
            }
            .welcome{
                height: 20vw;
            }
            .heading{
                font-size: 5vw ;
            }
            .acceptedorder{
                height: 220vw;
            }
            .orders{
                height: 88vw;
                width: 70%;
                font-size: 5vw;
                margin-left: 12vw;
                margin-bottom:5vw;
            }
            .upperdesign{
                height: 75vw;
            }
            .orderblock1{
                height: 16vw;
                font-size: 5vw;
            }
            .orderblock2{
                margin-left:4vw;
                height: 50vw;
            }
            .submitbutton{
                float: right;
                height: 7vw;
                width: 28vw;
                font-size: 3vw;
            }
            
        }


</style>

</head>

<body>

    <div>

    <div class="welcome" >

            <div class = "guildhead"><p class = "heading">TWIN STAR ADVENTURE GUILD</p></div>
                <div class="menubar"> 
                        <div class = "content" style="float: left;margin-left: 5vw;"><a class = "text" href = "front.php" style="text-decoration: none; margin-left:0vw ;">HOME</a> </div>
                        <div class ="content" style="float: left; "><a class = "text" href = "front.php#acceptedorder1" style="text-decoration: none; margin-left:0vw ;" >MY REQUESTS <a></div>
                        <div class = "content" style="margin-right: 5vw;"><a class = "text" href = "logout.php" style="text-decoration: none; margin-left:0vw ;" >LOG OUT<a></div>
                </div>


    </div>
      
    
    <div id="ordering" class="bottomdesign">
                                            
                    <div>
                    <a href="#welcoming" class="design2"><b>WELCOME <?php echo $_COOKIE['name'];?></b></a>
                    </div>
                    <div style="height: 3vw;"></div>
                    <div style="text-align: center;font-family: Helvetica, sans-serif;font-size: 2vw;">you are now going to accept this request of given details
            </div>
      </div>
    
    
    
    <?php $customerid = $_GET['link'];
    $con = mysqli_connect('localhost','root','','registered_adventerer');

    $query = "SELECT * FROM `requestboard` WHERE id ='$customerid'";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run, MYSQLI_ASSOC)
    ?>
    <div id="bonus3" class="orders">
                    <div class="orderblock1" ><p style="font-family: Courier, monospace;">YOU ARE ABOUT TO</p> 
                        ACCEPT THIS REQUEST!
                    </div>
                    
                    <div class="orderblock2">
                        <div>Order ID : <?php echo " " .$row['id']; ?></div>      
                        <div>Customer Name :  <?php echo "  " .$row['username']; ?></div>    
                        <div>Address : <?php echo " " .$row['address']; ?></div>     
                        <div>Email :  <?php echo " " .$row['email']; ?></div>    
                        <div>Contact No. : <?php echo "" .$row['contactno']; ?></div>
                        <div>FEE : <?php echo " " .$row['fee']; ?></div>     

                    </div>
                    <div style="float: left; margin-top : 8vw;margin-left: ; "><a class="text" style="text-decoration: none;" href = "acceptingrequest.php?link=<?php echo $row['id']; ?>">ACCEPT ORDER</div>
                    
                    <div style="font-weight: bold;"><h2><input class="submitbutton" type = "submit" style="text-decoration: none;border: none;color:white;background-color: #E3783E;"value="REQUEST DETAILS"
                        onclick="document.getElementById('id01').style.display='block'"></h2></b></div>
                                <div id="id01" class="modal" >
                                    <?php echo " " .$row['request']; ?></b>
                                    <div>BONUS REQUEST : <?php echo " " .$row['special_bonus_request']; ?></div>    

                                    <div><input type = "submit"  value = "back" onclick="document.getElementById('id01').style.display='none'" >
                                    </div>  
                                           
                                </div>    
                
                     


    </div>

         
    

    </div>     
    </div>

  <script src="js/scripts.js"></script>
</body>
</html