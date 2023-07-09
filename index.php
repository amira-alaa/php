<?php
$out="";
if(!empty($_POST['email']) && !empty($_POST['pass']) && $_SERVER['REQUEST_METHOD']=='POST'){
    
    $input_e=$_POST['email'];
    $input_p=$_POST['pass'];
    $out="you entered : " .$input_e .$input_p;
}
else{
    $out="please fill all the form";
};

// $cookie_name='mode';
// //$cookie_value='#dddddd';
// //$count=2;
// //$c=isset($_POST['mode']);
// //echo $c;
// //setcookie($cookie_name,$cookie_value,time()+3600*24);


//change color of background
if(isset($_POST['mode'])){
    //$color=isset($_COOKIE['mode'])&& $_COOKIE['mode']=='blue' ? 'red' :'blue';

    if($_COOKIE['mode_bg'] && $_COOKIE['mode_bg']=='#ffffff'){
        $color='#000000';
        setcookie('mode_bg',$color,time()+3600*24);
    }
    else{
        $color='#ffffff';
        setcookie('mode_bg',$color,time()+3600*24);
    }
}

//change color of text
if(isset($_POST['mode'])){
    if($_COOKIE['mode_c'] && $_COOKIE['mode_c']=='#ffffff'){
        $color_c='#253342';
        setcookie('mode_c',$color_c,time()+3600*24);
    }
    else{
        $color_c='#ffffff';
        setcookie('mode_c',$color_c,time()+3600*24);
    }
}
//     $count=0;
//     $count++;
//     echo $count;
//     if($count== 0){
//         $cookie_value='#006400';
//         //setcookie($cookie_name,$cookie_value,time()-3600*24);
//         //setcookie($cookie_name,$cookie_value,time()+3600*24);
//     }
//     elseif($count==1){
        
//         $cookie_value='#dddddd';
//         //setcookie($cookie_name,$cookie_value,time()-3600*24);
//         //setcookie($cookie_name,$cookie_value,time()+3600*24);
//     }     
//setcookie('modeo','blue',time()-3600*24);
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>project</title>
</head>
<body bgcolor="<?php echo $_COOKIE['mode_bg']; ?> "
      style=" color:<?php echo $_COOKIE['mode_c']; ?> ">
    <div class="formm ">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post" >
            <!-- email -->
            <div class="email">
            <label for="email">email</label>
            <input type="email" id="email" name="email">
            </div>
            <!-- password -->
            <div class="pass">
            <label for="pass">password</label>
            <input type="Password" id="pass" name="pass">
            </div>
            <!-- submit button -->
            <input type="submit" value="submit" name="submit">
            <div class="out">
                <?php echo $out; ?>
            </div>
            <button class="mode" name="mode" >mode</button>

        </form>
    </div>
    
</body>
</html>