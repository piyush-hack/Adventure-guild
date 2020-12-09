<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/styles.css?v=1.0">

  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>


        <script>

        $(document).ready(function () {

        if (screen.width < 512) {
            $("#intro").hide();
        }
        else {

            $("#intro").show();
        }

        });

        </script>


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
            float: left;
            height : 35vw;
            width: 25vw;
            margin:7vw 2vw 2vw 7vw;
            background-color: #E3783E;
            font-family: Courier, monospace;
            font-size: 1.5vw;
            border: 2px solid black;
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
            height: 15vw;
            border-bottom: 2px solid grey;
        }
        #noorderlink{
            font-size: 10vw;
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
                height: 165vw;
                width: 70vw;
                margin-left: 12vw;
                margin-bottom:1.5vw;
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
                height: 100vw;
                font-size: 7vw;

            }
        }


  </style>
</head>


<body>

<?php

$con = mysqli_connect('localhost','root','','registered_adventerer');

if(isset($_COOKIE['name']) || isset($_COOKIE['customername'])){
 ?>
    <div style="float:right"><h3></h3></div>


    <?php
    if(isset($_COOKIE['name'])){
                ?>

        <div class="welcome" >

            <div class = "guildhead"><p class = "heading">TWIN STAR ADVENTURE GUILD</p></div>
            
            <div class="menubar"> 
                <div class = "content" style="float: left;margin-left: 5vw;"><a class = "text" href = "#myprofile1" style="text-decoration: none;">Profile</a> </div>
                <div class ="content" style="float: left; "><a class = "text" href = "#acceptedorder1" style="text-decoration: none;" >To Do<a></div>
                <div class ="content" style="float: left; "><a class = "text" href = "publiccomment.php" style="text-decoration: none;" >MAKE SUGGESTIONS<a></div>



                
                <div class = "content" style="margin-right: 5vw;"><a class = "text" href = "logout.php" style="text-decoration: none;" >LOG OUT<a></div>
            </div>
            
            
        </div>
        
        <div class = "design">
                <div class = "upperdesign"></div>
            
            <?php
                $username = '';
                if(isset($_COOKIE['id'])){
                    
                    $id = $_COOKIE['id'];
                    $query = "SELECT *
                    FROM register
                    WHERE id = '$id'";

                    $run = mysqli_query($con, $query);
                    $result = mysqli_fetch_array($run);
                    $username = $result['username'];
                    if(mysqli_num_rows($run) > 0){
                        
                        ?>

                    <div class="bottomdesign">
                    
                        <div style="margin-top: 10vw;">
                        <a href="requests.php" class="design2"><b>Visit to guild request board</b></a>
                        </div>
                        <div style="height: 3vw;"></div>
                        <div style="text-align: center;font-family: Helvetica, sans-serif;font-size: 2vw;"><?php echo "Comment from admin here: ". $result['admincomment']; ?></div>
                    </div>
                    </div>
        </div>
                

                <div id= "myprofile1" class = "myprofile">
                    <div class = "profileback">
                    <div class="heading" style="width: 50vw;"><p class="intro">Welcome <b> <?php echo $result['username']?></b> to twin star adventure guild</p>
                        <p class="intro">we here by declere that now you are an </p>
                        <p class="intro">life adventurer your status screen has </p>
                        <p  class="intro"> you your details as mentioned below</p>
                        <p class="intro"><b>ID : <?php echo $result['id']?></b></p>
                        <p class="intro"><b>Email : <?php echo $result['email']?></b></p>
                        <p class="intro"><b>Address : <?php echo $result['address']?></b></p>
                        <p class="intro"><b>Contact : <?php echo $result['contactno']?></b></p>

                    </div>
                            <div style="background-image: url('1054067.png');width:50vw">
                            </div>

                    </div>
                </div>
                


                <?php
                    $query2 = "SELECT *
                    FROM requestboard
                    WHERE recievername = '$username'";
                    
                    $run2 = mysqli_query($con, $query2);
                   
                    ?>
                    <div id = "acceptedorder1" class = "acceptedorder">
                        <div class = "heading" style="margin-left: 25vw;color: white;"> Upcoming Orders </div>
                        <div style="height: 2vw;"></div>
                        <div style="background-color: #E3783E ;height : 30vw;padding-left: 5vw;padding-top: 5vw;">
                        <?php while($row2 = mysqli_fetch_array($run2, MYSQLI_ASSOC)){

                                    if(($row2['recievername'] != NULL)& ($row2['request'] != NULL)){
                        ?>
                        <!-- Main Content -->
                        <div class = "orders">
                        
                            <div class = "showbyhover" style="color: Black;">
                            <p class="intro">Order ID : <?php echo " " .$row2['id']; ?></p>      
                            <div class="intro">Customer Name :  <?php echo "  " .$row2['username']; ?></div>    
                            <div class="intro">Address : <?php echo " " .$row2['address']; ?></div>     
                            <div class="intro">Email :  <?php echo " " .$row2['email']; ?></div>    
                            <div class="intro">Contact No. : <?php echo "" .$row2['contactno']; ?></div>  
                            <div class="intro">FEE : <?php echo " " .$row2['fee']; ?></div>     
                            <div class="intro">BONUS REQUEST : <?php echo " " .$row2['special_bonus_request']; ?></div>   
                        </div>
                        

                        
                        <div class = "onhover" style="background-color:  #E3783E;height:8vw">
                        <div style="height: 8vw;"></div>
                            <div style="font-weight: bold;text-align: center;"><h2><a class="requestheading" onclick="document.getElementById('<?php echo $row2['id']; ?>').style.display='block'">Order Request</a></h2></b></div>
                            <div id="<?php echo $row2['id']; ?>" class="modal" >
                                <?php echo " " .$row2['request']; ?></b>
                                <div><input type = "submit" value = "back" onclick="document.getElementById('<?php echo $row2['id']; ?>').style.display='none'" >
                            </div>
                            </div>
                            </div>
                          
                    </div>         
                            <?php 
                    }
                    ?><?php
                }
                ?></div></div><?php

                }else{
                    echo "(error)";
                } 

            }else{
                echo "error fetching id";
            }


    }?>

                <div class="welcome" >

                    <div class = "guildhead"><p class = "heading">TWIN STAR ADVENTURE GUILD</p></div>
                    <?php if(isset($_COOKIE['customername'])){
                                ?>

                            <div class="menubar"> 
                            <div class = "content" style="float: left;margin-left: 5vw;"><a class = "text" href = "#myprofile2" style="text-decoration: none;">Profile</a> </div>
                            <div class ="content" style="float: left; "><a class = "text" href = "#acceptedorder2" style="text-decoration: none;" >Recent Adventures <a></div>
                            <div class ="content" style="float: left; "><a class = "text" href = "publiccomment.php" style="text-decoration: none;" >MAKE SUGGESTIONS<a></div>

                            <div class = "content" style="margin-right: 5vw;"><a class = "text" href = "logout.php" style="text-decoration: none;" >LOG OUT<a></div>
                    </div>


                </div>  

                <div class = "design">
                    <div class = "upperdesign"></div>

                        <!-- <a class = "text" href = "logout.php" style="text-decoration: none;" >LOG OUT<a> -->
                    <?php

        if(isset($_COOKIE['customerid'])){
                    
                        $id = $_COOKIE['customerid'];
                        $query = "SELECT *
                        FROM requestboard
                        WHERE id = '$id'";

                        $run = mysqli_query($con, $query);
                        $result = mysqli_fetch_array($run);

                    
                        if(mysqli_num_rows($run) > 0){
                            
                            ?>

                            <div class="bottomdesign">
                                    
                                    <div style="margin-top: 10vw;">
                                    <div style="height: 3vw;color: black;">
                                    
                                    </div>
                                            <a href="requests.php" class="design2"><b>Visit to guild request board</b></a>
                                            </div>
                                            <div style="height: 3vw;"></div>
                                            <div style="text-align: center;font-family: Helvetica, sans-serif;font-size: 2vw;"><?php echo "comment from admin here: ". $result['admincomment']; ?></div>
                                    </div>
                            </div>
                    </div>         
            
                            
                <div id="myprofile2"  class = "myprofile">
                        <div class = "profileback">
                        <div class="heading" style="width: 50vw;"><p class="intro">Welcome <b> <?php echo $result['username']?></b> to twin star adventure guild</p>
                            <p class="intro">we here by declere that can now put a </p>
                            <p class="intro">request for adventurer who will fulfill it </p>
                            <p  class="intro"> for you . Your details as mentioned below</p>
                            <p class="intro"><b>ID : <?php echo $result['id']?></b></p>
                            <p class="intro"><b>Email : <?php echo $result['email']?></b></p>
                            <p class="intro"><b>Address : <?php echo $result['address']?></b></p>
                            <p class="intro"><b>Contact : <?php echo $result['contactno']?></b></p>

                        </div>
                        <div style="background-image: url('1054067.png');width:50vw">
                        </div>

                        </div>
                </div>

                        
                        <?php
                    
                        }else{
                            echo "(error)";
                        } 
                        ?>
                        
                <div id = "acceptedorder2" class = "acceptedorder">
                            <div class = "heading" style="margin-left: 25vw;color: white;"> Recent Adventurers </div>
                            <div style="height: 2vw;"></div>
                            <div style="background-color: #E3783E ;height : 30vw;padding-left: 5vw;padding-top: 5vw;">
                            

                            <?php
                            $query2 = "SELECT *
                            FROM register";
                            
                            $run2 = mysqli_query($con, $query2);
                            // $row2 = mysqli_fetch_array($run2, MYSQLI_ASSOC);

                                $i =0;
                            while($row2 = mysqli_fetch_array($run2, MYSQLI_ASSOC)){
                                if($i < 3){
                                    $inid = rand(1, 4);
                                    $id  =  $row2['id'];
                                    $fid = $id + $inid;
                                    $query3 = "SELECT *
                            FROM register WHERE id = '$fid'";
                            
                            $run3 = mysqli_query($con, $query3);
                            $row3 = mysqli_fetch_array($run3, MYSQLI_ASSOC);
                            if($row3 == True){
                                ?>
                                <!-- Main Content -->
                                <div class = "orders">
                                
                                <div class = "showbyhover" style="color: Black;">
                                    <p class="intro">ID : <?php echo " " .$fid; ?></p>      
                                    <div class="intro">Adventurer Name :  <?php echo "  " .$row3['username']; ?></div>    
                                    <div class="intro">Address : <?php echo " " .$row3['address']; ?></div>     
                                    <div class="intro">Email :  <?php echo " " .$row3['email']; ?></div>    
                                    <div class="intro">Contact No. : <?php echo "" .$row3['contactno']; ?></div>    
                                    </div>



                                    <div class = "onhover" style="background-color:  #E3783E;height:8vw">
                                        <div style="height: 8vw;"></div>
                                        <div style="font-weight: bold;text-align: center;"><h2><a class="requestheading" onclick="document.getElementById('<?php echo $row3['id']; ?>').style.display='block'">Status screen</a></h2></b></div>
                                        <div id="<?php echo $row3['id']; ?>" class="modal" >
                                        <!-- status screen -->
                                        <p class="intro">ID : <?php echo " " .$row3['id']; ?></p>      
                                        <div class="intro">Adventurer Name :  <?php echo "  " .$row3['username']; ?></div>    
                                        <div class="intro">Address : <?php echo " " .$row3['address']; ?></div>     
                                        <div class="intro">Email :  <?php echo " " .$row3['email']; ?></div>    
                                        <div class="intro">Contact No. : <?php echo "" .$row3['contactno']; ?></div>
                                        <!-- status screen closed -->
                                        
                                        <div><input type = "submit" value = "back" onclick="document.getElementById('<?php echo $row3['id']; ?>').style.display='none'" >
                                        </div>
                                    </div>
                                </div>

                            </div>         
                                <?php
                            } }$i = $i + 1;}
                                ?>
                                </div>
                </div>
                        
                        
                        
                        <?php
                        if($result['request'] != NULL){
                    }else{
                        ?>
                            
                        
                            <div id = "norequestnotice">

                                    <div id="noorder" class="bottomdesign" style="background-color: #E3783E;background-color: rgba(605,805,105,0.5);height: 45vw;">
                                    <p  style="text-align: center;font-family: Helvetica, sans-serif;font-size: 5vw;color:#E3783E ;">No request put by you in guild</p>
                                            <div style="margin-top: 5vw;">
                                                    <a href="putrequest.php?link=<?php echo $result['id'] ?>" id="noorderlink" class="design2" style="color: white;"><b>PUT REQUEST ON GUILD BOARD</b></a>
                                                    </div>
                                                    <div style="height: 3vw;"></div>
                                                    <div style="text-align: center;font-family: Helvetica, sans-serif;font-size: 2vw;"> Help and be helped</div>
                                            </div>
                                    </div>
                        
                            </div> <?php
                    }

                }else{
                    echo "error fetching id";
                }
        }   




}else{?>

            <div id="bonus3" class="orders">
                                <div class="orderblock1" ><p style="font-family: Courier, monospace;">LOGIN AS REQUEST PROVIDER</p> 
                                </div>
                                
                                
                                <div class="orderblock2">
                                <div>As an REQUEST PROVIDER you can</div>
                                <div>give request to persons who will</div>
                                <div>fullfill it for you otherwise called adventurer</div>
                                <div>and you will pay accordingly</div>
                                <div class = "loginclass" style="font-weight: bold;"><h2>
                                    <a href = "customerlogin.php" style="text-decoration: none;color: white;">Login as customer</a>

                                </div>     
                                    
                                   

                                    </h2></b></div>
                                    
                                </div>
                                </div>
            </div>


            <div id="bonus3" class="orders">
                                <div class="orderblock1" ><p style="font-family: Courier, monospace;">LOGIN AS Adventurer</p> 
                                </div>
                                
                                
                                <div class="orderblock2">
                                <div>As an Adventurer you can</div>
                                <div>take request to persons who is</div>
                                <div>in need for yor help called as reqeust provider</div>
                                <div>and you will get pay accordingly</div>
                                <div class = "loginclass" style="font-weight: bold;"><h2>
                                    <a href = "login.php" style="text-decoration: none;color: white;">Login as adventurer</a>

                                </div>     
                                    
                                   

                                    </h2></b></div>
                                    
                                </div>
                                </div>
            </div>
    












        <?php
}
?>
  <script src="js/scripts.js"></script>

</body>
</html>