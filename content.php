<?php
	echo '<div data-id="tab-data-wrap" class="wrapper">';
	echo '<div class="tabContent" data-id="News" style="display:none">';
    echo '<section class="clearfix">';
	require_once("News.php");
	echo '</section>';
	echo '</div>';
	for ($x = 0; $x < 10; $x++) {
    	echo '<div class="tabContent" data-id="Chapter0'.$x.'" style="display:none">';
		echo "<h3><a href=\"Lectures\\Chapter0".$x.".pdf\">PDF下載連結</a></h3> ";
		require_once("Chapter0".$x.".php");
		echo '</div>';
	} 
	echo '<div class="tabContent" data-id="Introduction" style="display:none">';
	echo "<h3><a href=\"Lectures\\Introduction.pdf\">PDF下載連結</a></h3> ";
	require_once("Introduction.php");
	echo '</div>';
	for ($x = 10; $x <= 16; $x++) {
    	echo '<div class="tabContent" data-id="Chapter'.$x.'" style="display:none">';
		echo "<h3><a href=\"Lectures\\Chapter".$x.".pdf\">PDF下載連結</a></h3> ";
		require_once("Chapter".$x.".php");
		echo '</div>';
	} 
	for ($x = 1; $x <= 5; $x++) {
    	echo '<div class="tabContent" data-id="HW'.$x.'" style="display:none">';
		require_once("HW".$x.".php");
		echo '</div>';
	}
	echo '<div class="tabContent" data-id="Homework" style="display:none">';
	require_once("Homework.php");
	echo '</div>';
	echo '<div class="tabContent" data-id="Resources" style="display:none">';
	require_once("Resources.php");
	echo '</div>';
	echo '<div class="tabContent" data-id="Contact" style="display:none">';
	require_once("Contact.php");
	echo '</div>';
	echo '</div>';
?>
