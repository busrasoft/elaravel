<h1>Metodlar</h1>
<p>Method :
<?php echo $_SERVER['REQUEST_METHOD']; ?>
 </p>
 <form action="post" method="post">
 @csrf
<input type="submit" value="Gönder">

 </form>