<?php
	$input = array(
		"Schön das Sie mal vorbei kommen!",
		"Find ich nett, dass Sie mich mal besuchen!",
		"Naja... Nun gut... Weiter so...",
		"Ich bin zufrieden mit Ihren Leistungen!",
		"Hervorragend, Weiter so!",
		"Vielleicht sollten Sie mal die Steuern senken...", 
		"Wenn Sie so weiter machen werde ich Sie entlassen!",
		"Vielleicht mal nen Förderturm kaufen...",
		"Sie sollten sich gefälligst mehr Mühe geben!",
		"Sie brauchen nicht jede Runde zu kommen.",
		"Wissen Sie eigentlich, dass Sie mich bereits xx mal besucht haben?",
		"Und Sie sind sich sicher, dass Sie auch ohne eine Windfahne zurecht kommen?",
		"Schön, Sie zu sehen...",
		"Was soll ich denn in so einer frühen Phase schon sagen?",
		"Sie sollten mehr Geld verdienen, Fördertürme bauen und den Gegner besiegen.",
		"Ich habe Ihnen nichts neues zu sagen.",
		"Ballerburg ist klasse!",
		"Find ich nett, dass Sie mich mal besuchen!"
		);
	    $rand_keys = array_rand($input, 2);
	$page = '';

	if(isset($_REQUEST["page"]))
	{
		$page = $_REQUEST["page"];
	}

	switch($page)
	{
	case "sw":
	  require_once("includes/blackwhite.html");
	  break; 
	case "col":
	  require_once("includes/color.html");
	  break;
	case 'magic':
		require_once("includes/magic.html");
		break;
	default:
	  include("includes/color.html");
	}
?>