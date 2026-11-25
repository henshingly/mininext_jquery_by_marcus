<?php

/**
 * Beispielseite: mininext mit ein-/ausklappbarer Archiv-Liste.
 * Diese Datei liegt im LMO-Hauptverzeichnis (neben init.php).
 */

if (session_id() == '') {
    session_start();
}

$file = 'LIGENFILE.l98';          // anpassen: Ligadatei
$folder = 'archiv/ORDNER';        // anpassen: Archivordner
$mini_template = 'mininext_all.tpl.php';
$mini_anzahlSpiele = 4;           // Anzahl der zuerst sichtbaren Spiele
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>minitest</title>
  <style type="text/css">
    .nextgame caption, .nextgame td, .nextgame th { font-family: sans-serif; font-size: 8pt; }
    .nextgame table { border: none; border-collapse: collapse; }
    .nextgame .lost { color: #900; }
    li.lost, li.win, li.draw { font-size: 8pt; }
    .nextgame .win { color: #090; }
    .nextgame .draw { color: #999; }
    .nextgame .noResult { color: #000; }
    .nextgame .result { font-weight: bold; font-size: 100%; }
    .nextgame ul { margin: 0.1em 0; padding: 0; list-style: none; }
    .nextgame caption { color: #D8E4EC; background: #889CB0; font-weight: bold; padding: 0.2em; margin-top: 6px; border-radius: 0.3em; }
    .nextgame acronym { cursor: help; border-bottom: 1px dotted; }
    .nextgame small { font-size: 11px; }
  </style>
</head>
<body>
  <table class="minitabs" border="0">
    <tr>
      <td colspan="2" align="center">
        <?php include __DIR__ . '/addon/mini/lmo-mininext.php'; ?>
      </td>
    </tr>
  </table>
</body>
</html>
