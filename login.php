<?php include 'includes/header.php'; ?>

<?php include 'db.php'; session_start();
if(isset($_POST['login'])){
$q=mysqli_query($conn,"SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");
if(mysqli_num_rows($q)>0){ $_SESSION['user']=$_POST['email']; header('location:myaccount.php'); }
}
?>
<form method="post">
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button name="login">Login</button>
</form>
<?php include 'includes/footer.php'; ?>
