<!DOCTYPE html>
<html>
<head>

<title>Säbylund Konst</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- reset css dokument -->    
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

<link rel="stylesheet" href="Style/style.css" type="text/css">

<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.0.min.js'></script>

<link rel="stylesheet" href="slider/flexslider.css" type="text/css">
<script src="slider/jquery.flexslider.js"></script>

    
<!-- Configuring the language -->
<meta charset="UTF-8">
    
    
<!-- Place in the <head>, after the three links -->
<script type="text/javascript">
  // Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
	controlNav: false,
	controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a"),
  });
});
</script>
   
</head>


<body>    
<div class="container">    
    <div class="row loga">
        <div class="col-lg-12">
            <h1>SÄBYLUND</h1>
            <h2>KONST & ANTIK</h2>
        </div>
    </div>
	
	

	
	<div class="row navigation">
		<div class="col-lg-12">
		<nav>
			<ul>
                <li class="navItem"><a href="index.html">Hem</a></li>
				<li class="navItem"><a class="active" href="konst.php">Konst</a></li>
				<li class="navItem"><a href="antik.html">Antik</a></li>
				<li class="navItem"><a href="lokal.html">Lokal</a></li>
			</ul>
		</nav>
		</div>
	</div>
    
    
    <div class="row indexParagraph information">
        <div class="col-lg-4 col-lg-offset-1 mobileHide calenderMargin">
            <img class="img-responsive" src="images/calendar.png" alt="Calendar">
        </div>
        <div class="col-lg-6">
            <h2>Information och kalendarium</h2>
            <pre id="kalendarium"><?
                if(file_get_contents("kalendariumText.txt")) {
                    echo file_get_contents("kalendariumText.txt");
                }
                else
                {
                    echo "Just nu har vi inget planerat att ta del av.";
                }
                ?>
            </pre>
        </div>
    </div>
   
    
    <div class="row indexParagraph">
        <div class="col-lg-12 indexText">
            <div class="col-lg-7">
            <h2>"Ulf har uppdrag som illustratör och bildpedagog"</h2>
            <p>Säbylund Konst & Antik ägs och drivs bl.a av konstnär Ulf Erixon. Han visar sina verk i gårdens galleri – när inte andra konstnärer arrangerar utställningar där. <br><br>
Ulf har arbetat aktivt med konst sedan mitten av 70-talet med figurativ konst i varierande tekniker såsom akvarell, torr- och oljepastell, akryl och collage. Ulf har uppdrag som illustratör och bildpedagog. Han har bl.a. en BA från Konstfack, examensår 1984. <br><br>
Fritt konstnärligt skapande och utställningar finns också utrymme för och sedan sin första separatutställning 1978 har han hunnit med många separatutställningar och deltagit i ett antal samlingsutställningar. Hans verk finns representerade på många stora företag i både Stockholm och Göteborg. 
            </p>
            </div>
            
            <div class="col-lg-5 mobileHide">
            <img class="img-responsive" src="images/7.jpg" alt="Konst-bild">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="bildrad col-lg-10 col-lg-offset-1">
            <div class="col-lg-12 indexParagraph">
                <h2>Konst av Ulf Erixon</h2>
            </div>
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst1.png" alt="Konst">
            </div>
            
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst2.png" alt="Konst">
            </div>
            
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst3.png" alt="Konst">
            </div>
            
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst4.png" alt="Konst">
            </div>
            
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst5.png" alt="Konst">
            </div>
            
            <div class="col-lg-4">
                <img class="img-responsive img-rounded item" src="images/Konst6.png" alt="Konst">
            </div>
        </div>
    </div>
      
	    
    <div class="row footer">
        <div class="col-lg-4 col-lg-offset-4">
            <footer>
                <p>
                    Säbylund Konst & Antik
                <br>
                    Säbyvägen 23, Tjörn. Tel nr. 070-566 93 75
                </p>
                
                <p class="createdBy">
                    Webbsida skapad av <a href="http://webdesign-sto.se">Webdesign STO</a>
                </p>
            </footer>
        </div>
    </div>
	
</div>
</body>
</html>