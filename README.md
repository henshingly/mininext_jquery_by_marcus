[<img src="https://www.vest-sport.de/forum_files/addon_mininext_hack.svg">](https://www.vest-sport.de/forum/)

[![GitHub release](https://img.shields.io/github/release/henshingly/mininext_jquery_by_marcus?include_prereleases=&sort=semver&color=blue)](https://github.com/henshingly/mininext_jquery_by_marcus/releases/)
[![download-badge](https://img.shields.io/github/downloads/henshingly/mininext_jquery_by_marcus/total.svg?style=flat-square "Download status")](https://github.com/henshingly/mininext_jquery_by_marcus/releases/latest "Download status")
[![Donate](https://img.shields.io/badge/-Buy%20me%20a%20coffee-brown.svg)](https://paypal.me/LMOforum)
# mininext - Archiv-Spiele ein- und ausblenden

Mit dem Addon mininext lassen sich die Statistiken der archivierten Saisons einbinden. Zum kommenden Spiel werden dann die letzten Ergebnisse gegen denselben Gegner angezeigt. Bei vielen Mannschaften kommen pro Saison 2 neue Einträge hinzu, so dass die Liste immer länger wird.

Der Autor: Marcus ([BC Erlbach](http://www.bcerlbach.de/)), hat dafür ein kleines Addon gebastelt: Zu Beginn werden nur ein paar Spiele aufgelistet, ein Klick auf einen runden Button zeigt alle Spiele an, ein weiterer Klick blendet sie wieder aus.
[Hier eine Beispielseite mit beiden Ansichten.](http://lmo8.bplaced.net/history/test.php)

Diese Version ist für **PHP 8** und die aktuelle LMO-Version (lmo_php8) überarbeitet.

## Was ist neu gegenüber der Erstversion?

- Basiert auf der aktuellen PHP-8-Version von `lmo-mininext.php` (nicht mehr auf v2.1.2)
- **jQuery wird nicht mehr benötigt** - das Umschalten erledigt ein kleines JavaScript im Template
- Die Anzahl der zuerst sichtbaren Spiele ist **per URL, Variable oder Config** einstellbar (kein Eingriff in den Code mehr)
- Mehrere mininext-Boxen auf einer Seite funktionieren unabhängig voneinander (keine festen HTML-IDs)
- Button und CSS/JS erscheinen nur, wenn es mehr Spiele gibt als eingestellt
- Neue **runde SVG-Buttons** mit hellem Hintergrund (Plus/Minus, mit Hover-Effekt)
- Button-Texte kommen aus den Sprachdateien (`lang/mini/`, Einträge `018` und `019`)
- Cache berücksichtigt die eingestellte Anzahl, Mannschaftsnamen im `title` werden maskiert
- PSR-12-formatiert, UTF-8

## Dateien

| Datei                                  | Zweck                                                     |
|----------------------------------------|-----------------------------------------------------------|
| `addon/mini/lmo-mininext.php`          | mininext mit der neuen Funktion                           |
| `template/mini/mininext_all.tpl.php`   | Template mit Button und ausklappbarem Block               |
| `img/mehr1.svg`, `img/mehr2.svg`       | Button "einblenden" (normal / Hover)                      |
| `img/weniger1.svg`, `img/weniger2.svg` | Button "ausblenden" (normal / Hover)                      |
| `lang/mini/lang-*.txt`                 | Sprachdateien mit den neuen Texten                        |
| `minitest.php`                         | Beispielseite                                             |
| `AENDERUNGEN_mininext_mehr.txt`        | Änderungsliste                                            |

## Installation

1. Die Ordner `addon`, `template`, `img` und `lang` in das LMO-Verzeichnis kopieren (Struktur beibehalten, vorhandene Dateien überschreiben). Wer `lmo-mininext.php` oder die Sprachdateien angepasst hat, sollte vorher eine Sicherung machen.
2. `minitest.php` ins LMO-Hauptverzeichnis kopieren und oben anpassen:

   ```php
   $file = 'LIGENFILE.l98';        // Ligadatei
   $folder = 'archiv/ORDNER';      // Archivordner
   $mini_template = 'mininext_all.tpl.php';
   $mini_anzahlSpiele = 4;         // Anzahl der zuerst sichtbaren Spiele
   ```
3. Seite aufrufen. Gibt es mehr Archiv-Spiele als eingestellt, erscheint unter der Liste der runde Button.

Für die eigene Seite genügt es, `mininext_all.tpl.php` als Template zu verwenden (`$mini_template`) und `lmo-mininext.php` wie gewohnt einzubinden.

## Anzahl der zuerst sichtbaren Spiele

Standard sind **4** Spiele. Die Reihenfolge der Einstellungen (wie bei den anderen `mini_`-Werten):

1. URL: `...?mini_anzahlSpiele=6`
2. Variable vor dem `include`: `$mini_anzahlSpiele = 6;`
3. Config: `$cfgarray['mini']['anzahlSpiele']`
4. Standardwert: `4`

Mindestens 1 Spiel bleibt immer sichtbar.

## Anpassen

- **Aussehen der Buttons:** die SVG-Dateien in `img/` austauschen (15 x 15 px) oder das CSS am Anfang von `mininext_all.tpl.php` ändern.
- **Texte:** in `lang/mini/lang-*.txt`, Eintrag `018` (einblenden) und `019` (ausblenden).

## Hinweise

- Das Template nutzt kein jQuery mehr. Eine eingebundene jQuery-Datei (früher `jquery-1.6.2.min.js`) wird nicht mehr gebraucht.
- Nach dem Update ggf. die mininext-Cachedateien im Ausgabeordner (`mini_*.txt`) löschen.
- Das mininext-Addon ist Teil des LMO; die Urheberhinweise im Quelltext dürfen nicht entfernt werden.

## Lizenz

GNU General Public License, Version 2 oder höher - siehe [LICENSE](LICENSE).
