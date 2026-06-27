<?php include("php/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta name="description" content="Vokalna skupina Kreativo, vocal group"-->

    <title>Kreativo - Vokalni Band</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66011772-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body id="page-top" class="index">
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <div id="poll-header">
        <div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
					<br>
                    <h2 class="section-heading" style="margin-top:10%;">kreativo</h2>
                    <h3 class="section-subheading text-muted">
					
					<?php 
					$a = new webPoll(array(
						'What subjects would you like to learn more about?',
						'HTML & CSS',
						'JavaScript',
						'JS Frameworks (jQuery, etc)',
						'Ruby/Ruby on Rails',
						'PHP',
						'mySQL'));
					
					class webPoll {
 
    # makes some things more readable later
    const POLL = true;
    const VOTES = false;
 
    # number of pixels for 1% on display bars
    public $scale = 2;
 
    # the poll itself
    public $question = '';
    public $answers = array();
 
    # the HTML
    private $header = '<form class="webPoll" method="post" action="%src%">
                       <input type="hidden" name="QID" value="%qid%" />
                       <h4>%question%</h4>
                       <fieldset><ul>';
    private $center = '';
    private $footer = "\n</ul></fieldset>%button%\n</form>\n";
    private $button = '<p class="buttons"><button type="submit" class="vote">Vote!</button></p>';
 
    # question identifier
    private $md5 = '';
					
					?>
					
					
					
					NAKUP VSTOPNIC ZA LETNI KONCERT VOKALNEGA BANDA KREATIVO
					<br>
					13. MAJ 2017, OB 20.00, LJUBLJANA - ANTONOV DOM VIČ
					</h3>
					<br>
					<div class="info_text" >
					<p style="color:black; font-size:16px;">Cena vstopnice v predprodaji je 12€, na dan koncerta 15€
					<br>
					<br>
					Za nakup vstopnice v predprodaji izpolnite spodnji obrazec. 
					<br>
					Po elektronski pošti boste prejeli navodila za plačilo.
					<br>
					Po prejetem plačilu vam pošljemo račun, ki velja kot vstopnica za koncert.
					<br>
					Možnost plačila je samo nakazilo na TRR.
					<br>
					
					
					</p>
					</div>
            </div>
            <div class="intro-text">
                <!--div><img class="logo" src="img/kreativo_logo5.png" alt=""></div>
				<div class="intro-lead-in">VOKALNI BAND</div>
				<a href="http://www.facebook.com/KreativoVocalBand" target="_blank"><div class="social_icon"><img class="soc_ico" src="img/icons/fb_icon.png" alt="http://www.facebook.com/KreativoVocalBand"></div></a>
				<a href="https://plus.google.com/u/0/111271737500704237056/about" target="_blank"><div class="social_icon"><img class="soc_ico" src="img/icons/google_icon.png" alt="https://plus.google.com/u/0/111271737500704237056/about"></div></a>
				<a href="http://twitter.com/KreativoVocal" target="_blank"><div class="social_icon"><img class="soc_ico" src="img/icons/twitter_icon.png" alt="http://twitter.com/KreativoVocal"></div></a>
				<a href="https://www.youtube.com/channel/UCCIB5qImkrdnJA_yjVjQaNg" target="_blank"><div class="social_icon"><img class="soc_ico" src="img/icons/youtube_icon.png" alt="https://www.youtube.com/channel/UCCIB5qImkrdnJA_yjVjQaNg"></div></a>
                <!--a href="#services" class="page-scroll btn btn-xl"></a-->
				<!--br>
				<ul class="lang">
					<li><a href="http://www.kreativo.si" class="lang_active">SI</a></li>
					<li><a href="http://www.kreativo.si/en">EN</a></li>
					<li><a href="http://www.kreativo.si/de">DE</a></li>
				</ul>
            </div-->
			<div class="col-lg-12 text-center">
				<br>
				<br>
			    <a href="#vstopnice" class="portfolio-link" data-toggle="modal">
                    <button type="submit" class="btn btn-xl">KUPI VSTOPNICE</button>
				</a>
            </div>
			</div>
		
			</div>
		</div>
    </div>

    <!-- Modals -->
	
    <!-- Narocilnica -->
    <div class="modal fade" id="vstopnice" tabindex="-1" role="dialog" aria-labelledby="koncert_info" aria-hidden="true">
		<div class="modal-dialog">
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">NAKUP VSTOPNIC</h4>
			</div>
			<div class="modal-body">
			
			<div>
					<!--h4>13. MAJ 2017, OB 20.00, LJUBLJANA - ANTONOV DOM VIČ</h4-->
					<p>Cena: 12€ - plačilo možno samo z nakazilom na TRR</p>
					<br>
					<form name="narocilnica" id="narocilnicaVST" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="narocilnica" class="form-control narocilnica ime" placeholder="Ime in Priimek *" id="ime" required data-validation-required-message="Vnesite ime in priimek">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-naslov *" id="eposta" required data-validation-required-message="Vnesite e-naslov">
                                    <p class="help-block text-danger"></p>
                                </div>
								
								<div class="form-group">
                                    <input type="number" min="1" class="form-control" placeholder="Število vstopnic *" id="kolicina" required data-validation-required-message="Vnesite število vstopnic">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Dodatno sporočilo" id="sporocilo"></textarea>
                                </div>
								<br>
								<br>
								<br>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Kupi vstopnice</button>
								<br>
								<br>
                            </div>
                        </div>
                    </form>
					
					<div id="uspesno_narocilo_vstopnic"></div>
                        
                    </div>
				
			</div>
				
			</div>
		</div>
    </div>

  
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	
	<script src="js/jquery.ui.totop.js"></script>
	
	<!-- Narocilnica Java Script -->
	<script src="js/vstopnice.js"></script>
	
	<script src="js/koncert_info.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
