<?php
function goToPage($pagename,$link)
{
?>
	<br>
	You'll be redirected to <?php echo strtoupper($pagename); ?> now....if not then <a href="<?php echo $link; ?>">click here</a>
	<meta http-equiv="refresh" content="3;url=<?php echo $link; ?>" />
<?php 
}
?>