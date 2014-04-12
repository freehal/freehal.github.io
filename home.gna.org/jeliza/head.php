<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<title>JEliza - the open source artificial intelligence</title>
	<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>
<body>

<div id="top">&nbsp;</div>



<div class="jelizaeigenschaften">
	<table border="0" style="border: 0px;">
		<tr>
			<td>
				<a href="download.php">
					<img src="download.gif" alt="Download" /><br/>
					Download
				</a>
			</td>
			<td>
				<a href="http://jeliza.sourceforge.net/wiki/">
					<img src="support.gif" alt="Wiki" /><br/>
					Wiki
				</a>
			</td>
		</tr>
	</table>
</div>
<div id="sidebartop_l">
	<div class="menuheading">Navigation</div>
	<div class="sidebar">
		<ul>
		<li><a href="index.php"><span class="topic">Startseite</span></a></li>
		<li><a href="download.php"><span class="topic">Download</span></a></li>
		<li><a href="http://jeliza.sourceforge.net/wiki/index.php/JEliza-Erste_Schritte"><span class="topic">Erste Schritte</span></a></li>
		<li><a href="http://jeliza.sourceforge.net/wiki/index.php/JEliza-FAQ"><span class="topic">H&auml;ufig gestellte Fragen</span></a></li>
		<li><a href="screenshots.php"><span class="topic">Screenshots</span></a></li>
		<li><a href="license.php"><span class="topic">Lizenz</span></a></li>


		</ul>
	</div>
	
	<div class="menuheading">Funktionsweise</div>
	<div class="sidebar">
		<ul>
		<li><a href="semnet.php"><span class="topic">Das Semantische Netz</span></a></li>
		<li><a href="http://jeliza.sourceforge.net/wiki/index.php/JEliza_Dokumentation"><span class="topic">Dokumentation</span></a></li>
		<li><a href="features.php"><span class="topic">Features</span></a></li>
		</ul>
	</div>
	
	<div class="menuheading">Entwicklung</div>
	<div class="sidebar">
		<ul>
		<li><a href="http://jeliza.sourceforge.net/developer/"><span class="topic">Entwicklerportal</span></a></li>
		<li><a href="http://jeliza.sourceforge.net/wiki/index.php/JEliza-Entwicklertagebuch"><span class="topic">Entwickler- Tagebuch</span></a></li>
		<li><a href="roadmap.php"><span class="topic">Roadmap</span></a></li>
		</ul>
	</div>
	
	<div class="menuheading">Extras</div>
	<div class="sidebar">
		<ul>
		<li><a href="http://jeliza.sourceforge.net/wiki/index.php"><span class="topic">Wiki (KiWiki)</span></a></li>
		<li><a href="http://www.das-kiforum.de.vu/"><span class="topic">Forum (KiForum)</span></a></li>
		<li><a href="museum.php"><span class="topic">JEliza Museum</span></a></li>
		</ul>
	</div>

	<div class="menuheading">Kontakt</div>
	<div class="sidebar">
		<ul>
		<li><a href="team.php"><span class="topic">Das JEliza Team</span></a></li>
		<li><a href="kontakt.php"><span class="topic">Kontakt</span></a></li>
		</ul>
	</div>

	<div class="menuheading">Entwicklung</div>
	<div class="sidebar">
<?
# ############### FORTSCHRITT !!! #################### 
$fortschritt_prozent = 23;
# ############### END FORTSCHRITT !!! #################### 
echo "<p><strong>Fortschritt bis R1:</strong></p><p>";
$ProzentBalken = $fortschritt_prozent * 1.7;
echo '<img height="11" src="UmfrageBalkenLinks.gif" width="5"><img height="11" src="UmfrageBalkenMitte.gif"  width="'; echo $ProzentBalken; echo '"><img height="11" src="UmfrageBalkenRechts.gif" width="5">
<br />'; echo $fortschritt_prozent; echo '% fertig
</p>';
?>
	</div>

	<div class="menuheading">Sonstiges</div>
	<div class="sidebar">

<!-- BlogCounter Code START -->
<p><a href="http://www.blogcounter.de/" id="bclink" title="kostenloser Counter fuer Weblogs"><span id="bccount" style="font-size:"8px"">kostenloser Counter</span></a></p><script type="text/javascript" src="http://track.blogcounter.de/js.php?user=jeliza-ki&amp;style=1"></script><noscript><p><a href="http://www.blogcounter.de/"><img style="border: "0px";" alt="Weblog counter" src="http://track.blogcounter.de/log.php?id=jeliza-ki"/></a> - <a href="http://lustich.de/videos/">lustige Videos</a></p></noscript>
<!-- BlogCounter Code END -->

<a href="http://sourceforge.net">
        <img src="http://sflogo.sourceforge.net/sflogo.php?group_id=XXXXX&amp;type=1" width="88"
        height="31" border="0" alt="SourceForge.net Logo" /></a>

<p>&nbsp;</p>

<a href='http://www.schaeuble-wegtreten.de/' title='Schäuble! Wegtreten!' alt='Schäuble! Wegtreten!'><img src='http://www.schaeuble-wegtreten.de/pics/banner/gg_schuetzen_fl.gif' border="0" alt='Schaeuble! Wegtreten!'/></a>

	</div>
</div>

<div id="sidebartop_r">
	<div class="menuheading">Screenshots</div>
	<div class="sidebar">
	<p><a href="screenshots.php" style="text-decoration: none;"><img src="http://jeliza.sourceforge.net/jeliza/2.3.4_osx_thumb.png" width="145" height="105" /><br/>mehr Screenshots</a></p>

	</div>
	<div class="menuheading">News</div>
	<div class="sidebar">
	<p>
	Datum: <?=date ("d.m.Y", filemtime("news.inc"));?><br />
	
	Autor: Tobias Schulz
	</p>
	<p>
	<?=file_get_contents("news.inc");?>
	</p>
	</div>
	
</div>


<div class="contentpart">
