<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="st.css">
    <title>Document</title>
</head>
<body>
<div class="side-bar">
   
   <ul>
   <div class="top">
       <!-- <h2><?php echo "Hi, $ID($Name)";?> -->
       <button type="button" class="btn" onclick="location.href='Logout.php'">
           LOGOUT
       </button>
    </div>
       <li><a class="Home" href="#">홈</a></li>
       <li><a class="Search" href="#">방문자 조회</a></li>
       <li><a class="Statistics" href="st.php">방문자 통계</a></li>
   </ul>
</div> 
<div class="Content">
    <div class="title">
        <h1>방문자 통계</h1>
    </div>
</div>
</body>
</html>