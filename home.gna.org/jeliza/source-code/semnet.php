<? include("head.php"); ?>

<div class="textcontentheading">Semantisches Netz - Einf&uuml;hrung</div>
<div class="textcontent">
<p>
Alle Informationen, das gesamte Wissen von JEliza, wird als ein sog. semantisches Netz abgespeichert.
Das macht es m&ouml;glich, nahezu alle Zusammenh&auml;nge zwischen bestimmten <b>Begriffen intelligent anzuordnen und
effizient Schl&uuml;sse zu ziehen</b>.
So kann JEliza von einem bestimmten Begriff zu anderen &uuml;ber diese Verbindungen Zusammenh&auml;nge 
in beliebiger Tiefe herstellen.
</p>
</div>
<div class="textcontentheading">Semantisches Netz</div>
<div class="textcontent">
<p>
Alle Informationen, das gesamte Wissen von JEliza, wird als ein sog. semantisches Netz abgespeichert.
Das macht es m&ouml;glich, nahezu alle Zusammenh&auml;nge zwischen bestimmten Begriffen intelligent anzuordnen und
effizient Schl&uuml;sse zu ziehen.
So kann JEliza von einem bestimmten Begriff zu anderen &uuml;ber diese Verbindungen Zusammenh&auml;nge 
in beliebiger Tiefe herstellen.
</p>
<p>
Bereits im Auslieferungszustand enthaelt JEliza ab Revision 1 ein Semantisches Netz mit 
<b>&uuml;ber 30000 Begriffen und &uuml;ber 41000 Verbindungen</b>. Diese sind allerdings noch nicht optimal vernetzt,
sodass es die Aufgabe des Benutzers ist, seine JEliza-Kopie auf ein bestimmtes Themengebiet hin zu "trainieren". 
Optimal vernetzt ist ein semantisches Netz, wenn jedes Wort in einem bestimmten Themengebiet &uuml;ber maximal 
4, 5 Zusammenh&auml;nge mit jedem anderen Wort verbunden ist.
</p>
</div>

<div class="textcontentheading">Semantisches Netz - Darstellung eines kleinen Teils</div>
<div class="textcontent">
<center>
<p>
<a href="netz.png" style="text-decoration: none;"><img src="netz.png" height="50%" width="50%"></a>
</p>
</center>
<p>
</p>
<p>
Jeder Begriffsknoten, intern "<i>Entity</i>" genannt, ist mit mindestens einem Verbknoten verkn&uuml;pft. 
JEliza unterscheidet 4 Arten von "<i>Knoten</i>" im semantischen Netz: "<i>Entities</i>", "<i>Relations</i>" (Verben) 
und "<i>Nebensatzknoten</i>" sowie "<i>Beschreibungsknoten</i>". 
Die Beschreibungsknoten existieren bisher nun in Verkn&uuml;pfung mit Nebnsatzknoten und stellen Fragew&ouml;rter und 
Konjunktionen dar. Zur (vereinfacht dargestellt) Verbindung dieser Knoten existiert allerdings nur eine Verbindungsart.
Es h&auml;ngt also vom "<i>Agent</i>" (sinngem&auml;&szlig; Subjekt) und vom "<i>Object</i>" ab, was f&uuml;r eine 
Beziehung die Verbindung darstellt.
</p>
<p>
Diese Abstraktion erm&ouml;glicht es uns, den entsprechenden Quellcode einfacher zu formulieren und verspricht 
eine bessere Wartbarkeit. Im November wurde eine umfangreiche Bereinigung durchgef&uuml;hrt, und JEliza ist nun so stabil,
zuverl&auml;ssig und einfach zu warten wie noch nie seit Beginn des Projektes.
</p>
<p>
Eine Besonderheit gibt es seit Revision 9 im der Implementierung des semantischen Netzes: 
eine <i>Relation</i> kann ein <i>Entity</i> imitieren und eine Dreifachbeziehung herstellen, worauf die 
Unterst&uuml;tzung f&uuml;r Bedingungen intensiv aufbaut. Mit einer solchen <i>Entity-Relation-Entity-Nebensatz</i>-Beziehung
ist es m&ouml;glich, bestimmte Vorg&auml;nge (Entity-Relation-Entity-Beziehung) an eine Bedingung zu kn&uuml;pfen.
Man kann also sagen, dass jede <i>Relation</i> ein <i>Entity</i> ist, aber zus&auml;tzlich beliebige Knoten verkn&uuml;pfen kann.
<i>Entities</i> ganz ohne semantische Beziehungen werden automatisch gel&ouml;scht, um Speicher zu sparen.
Negative Aussagen tauchen erst gar nicht im Netz auf, sie k&ouml;nnen sogar bei entsprechender Vertrauensw&uuml;rdigkeut 
zu einer automatischen L&ouml;schung des Sachverhaltes f&uuml;hren. Somit ist "nicht bekannt" equivalent zu
"falsch". Sollte JEliza jedoch eine Vermutung ableiten k&ouml;nnen, wird ihr eine Priorit&auml;t zugewiesen und
sie kann im Netz gefunden werden.
</p>
</div>
<div class="textcontentheading">Semantisches Netz - einfache Darstellung eines ganzen Netzes</div>
<div class="textcontent">
<p>
Bei der ersten Visualisierung unten handelt es sich um das erste semantische Netz, welches in JEliza enthalten war, 
mit nur wenigen hundert Begriffen. Im zweiten Screenshot sieht man ein relativ aktuelles semantiches Netz, wobei
rote Verbindungen Verben und blaue Orts- und Zeitangaben entsprechen. Bei aktuellen Revisionen sind beide Linientypen
zu der Farbe blau zusammengefasst. Auf diese Art und Weise kann man sich in der JEliza QT Gui das Netz
anzeigen lassen.
</p>
<p>
</p>
<center>
<p>
<a href="jeliza-semantic-net-screenshot-09.07.png" style="text-decoration: none;"><img src="jeliza-semantic-net-screenshot-09.07.png" height="200" width="200"></a>
<a href="jeliza-semantic-net-screenshot-09.07_2.png" style="text-decoration: none;"><img src="jeliza-semantic-net-screenshot-09.07_2.png" height="200" width="200"></a>
</p>
</center>
</div>


<? include("foot.php"); ?>
