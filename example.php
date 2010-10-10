<?php
	/* Dribbble API Class Example. This uses the Dribbble API Class created by Jamie. It's open source, so feel free to edit it as you please. */
	include 'dribbble.php'; //include the class file
	$dribbble = new Dribbble(); //set a class variable
	$simple = $dribbble->get_info("simplebits"); //Gets information for the user "simplebits"
	echo $simple;
	/* Other Functions
	$dribbble->get_shot("63996"); //Gets shot information for the shot with the id 63996
	$dribbble->get_rebound("63996"); //Gets the rebounds for the shot with the id 63996
	$dribbble->get_comment("63996"); //Gets the comments for the shot with the id 63996
	$dribbble->get_list("everyone"); //Gets all shots in the everyone list (can also be "popular" or "debuts")
	$dribbble->get_shots("jam"); //Gets the most recent shots for the player with the username "jam"
	$dribbble->get_shots_following("jam"); //Gets the most recent shots for the player's "jam" is following
	$dribbble->get_id_following("jam"); //Gets info for the players "jam" is following
	$dribbble->get_id_followers("jam"); //Gets info for the players "jam" is followed by
	$dribbble->get_id_draftees("jam"); //Gets info for the players "jam" has drafted
	$dribbble->get_id_likes("jam"); //Gets info for shots "jam" has liked
	*/
?>