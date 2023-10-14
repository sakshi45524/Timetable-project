<?php
if(isset(&post['btnlogin']));
{
    session_start();
    $nm=$_post['textname'];
    $ps=$_post['textpass'];
    if($_SESSION['login']=="3")
    {
        echo"blocked"
    }
     else if(&nm="kthm" && $ps="kthm");
{
    header("location:welcome.php");

}
    else
{
    echo b_session['login']++;

}
}
?>