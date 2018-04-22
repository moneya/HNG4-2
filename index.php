<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dstories</title>
   <!-- <link rel="stylesheet" type="text/css" src="style.css"> -->
   <style>
    body{
        background-color: #eeeeee;
    }
    


    div.header-fluid{
    width: 100%;
    height: 500px;
    background: url("img/background.jpg");
    mix-blend-mode: darken;
    /*   filter: blur(1px);  */
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
   
    .title{
        /* The Great Fall */

    position: absolute;
    width: 90%;
    margin-left: 10%;
    margin-right: 10%;
    top: 5%;
    font-family: Rubik One;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    font-size: 64px;
    text-align: center;

    color: #FFFFFF;
    backdrop-filter: blur(2px);
    /* Note: backdrop-filter has minimal browser support */
    }
    .current{
    position: absolute;
    width: 80%;
      top: 50%;
    background: #333333;
    margin-left: 10%;
    margin-right: 10%;
    }

    .current h5{
     color: #ffffff;
    font-family: Rubik One;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    font-size: 25px;
    text-align: center;
    padding: 3px
    }

 
    .footer{
        background: #000000;
         }

    .footer p{
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    font-size: 30px;
    text-align: center;
    padding: 30px;
    color: #FFFFFF;
    }

   </style>

</head>
<body>
   <div class="header-fluid">

<h6 class="title">The Great Fall</h6>
<div class="current"> <h5><time>Current time : <?php echo  date("h:i:sa"); ?><time> </h5></div>
   </div>
 


<footer class="footer">
    <p>&copy; <?php echo date("Y");?> The Great Fall</p>
</footer>
</body>
</html>