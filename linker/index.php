<!doctype html>
<html  lang="en">
<head>
<meta charset="utf-8"> 
<title>Index</title>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.

_9_LAWS_OF_GEOMETRON_:

EVERYTHING IS PHYSICAL
EVERYTHING IS FRACTAL
EVERYTHING IS RECURSIVE

NO MONEY
NO PROPERTY
NO MINING

EGO DEATH:
    LOOK AT THE INSECTS
    LOOK AT THE FUNGI
    LANGUAGE IS HOW THE MIND PARSES REALITY
    
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">

<!-- links to MathJax JavaScript library, un-comment to use math-->
<!--

<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script>
	MathJax.Hub.Config({
		tex2jax: {
		inlineMath: [['$','$'], ['\\(','\\)']],
		processEscapes: true,
		processClass: "mathjax",
        ignoreClass: "no-mathjax"
		}
	});//			MathJax.Hub.Typeset();//tell Mathjax to update the math
</script>
-->

<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<div id = "memedatadiv" style = "display:none"><?php

echo file_get_contents("../aligner/json/currentmeme.txt");

?></div>
<div id = "memedatadiv" style = "display:none"><?php

echo file_get_contents("json/linklist.txt");

?></div>
<?php
    echo file_get_contents("../uploader/html/page.txt");
    echo "\n";
    echo file_get_contents("html/index.txt");
?>
</body>
</html>