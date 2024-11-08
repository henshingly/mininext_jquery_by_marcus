[<img src="https://www.vest-sport.de/forum_files/addon_mininext_hack.svg">](https://www.vest-sport.de/forum/)

[![GitHub release](https://img.shields.io/github/release/henshingly/mininext_jquery_by_marcus?include_prereleases=&sort=semver&color=blue)](https://github.com/henshingly/mininext_jquery_by_marcus/releases/)
[![download-badge](https://img.shields.io/github/downloads/henshingly/mininext_jquery_by_marcus/total.svg?style=flat-square "Download status")](https://github.com/henshingly/mininext_jquery_by_marcus/releases/latest "Download status")
[![Donate](https://img.shields.io/badge/-Buy%20me%20a%20coffee-brown.svg)](https://paypal.me/LMOforum)
# mininext - Archiv-Ligen ein- und ausblenden mittels JQuery 
Mit dem Addon mininext ist es möglich, die Statistiken der archivierten Saisons einzubinden. Es werden dann die letzten Ergebnisse für das kommende Spiel angezeigt. Bei vielen Mannschaften kommen pro Saison 2 neue Einträge hinzu, so dass die Anzahl der angezeigten Ergebnisse stark ansteigt.

__marcus__, vom BC Erlbach, hat hier ein kleines Addon gebastelt. Am Anfang werden nur ein paar Spiele angezeigt.  
(Die Anzahl der voreingestellten Spiele ist schnell geändert - Zeile 275 in der Datei addon/mini/lmo-mininext_jquery.php)  
```
$anzahl = 4;  //hier die Anzahl der Spiele einstellen beim öffnen von mininext
```  
Durch Anklicken eines Buttons werden dann alle Spiele angezeigt. Dazu wird das Ajax-Framework JQuery verwendet.  
[Hier mal eine Beispielseite mit beiden Ansichten.](http://lmo8.bplaced.net/history/test.php)
