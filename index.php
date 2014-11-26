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
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="description" content="Kleine Webseite die zufällig den Königstext vom Atari ST Spiel Ballerburg ausgibt">
<meta name="keywords" content="Atari ST, Ballerburg, König">
<meta name="author" content="ragnar">
<title>Der König meint:</title>

</head>
<body>
<div id="menu_bar">&nbsp;&nbsp;DESK  DATEI  INDEX  EXTRAS</div>
<div id="drives">
    <ul>
        <li><img src="images/lw_a.png" alt="Atari Laufwerk A"></li>
        <li><img src="images/lw_b.png" alt="Atari Laufwerk B"></li>
        <li><img src="images/lw_c.png" alt="Atari Laufwerk C"></li>
        <li><img src="images/lw_d.png" alt="Atari Laufwerk D"></li>
        <li><img src="images/lw_e.png" alt="Atari ROM Modul"></li>
        <li><img src="images/drucker.png" alt="Atari Drucker"></li>
        <li><img src="images/king.png" alt="Atari Programm"></li>
    </ul>
</div>
        <div class="container">
                <div class="inner_container">
                        
                        <div class="header">Der König meint:</div>
                        
                        <p><?php echo $input[$rand_keys[0]] . "\n"; ?></p>
                        
                        <div class="button">
                                <form method="post" action="index.php" onSubmit="window.location.reload()">
                                        <input name="Submit" type="submit" value="Demütig zur Kenntnis genommen">
                                </form>
                        </div>
                </div>
        </div>
        <div id="footer">
            <a href='javascript:window.alert("Sorry, konnte nicht wiederstehen!");'>
            <img src="images/trash.png" alt="Atari Trashbin">
        </a>
        </div>
</body>
</html>