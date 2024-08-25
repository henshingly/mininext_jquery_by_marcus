<?php if (session_id()=="") session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml/">
<head>
  <title>minitest</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
  <style type="text/css">
    .nextgame caption, .nextgame td, .nextgame th {font-family:sans-serif;font-size:8pt;}
    .nextgame table {border:none;border-collapse:collapse;border:0px solid #ccc;}
    .nextgame .lost  {color: #900;}
    li.lost, li.win, li.draw { font-size:8pt; }
    .nextgame .win  {color: #090;}
    .nextgame .draw  {color: #999;}
    .nextgame .noResult {color: #000;}
    .nextgame .result  {font-weight:bold;font-size:100%;}
    .nextgame ul {margin:0.1em 0;padding:0;list-style:none;}
    .nextgame caption { color:#D8E4EC;background:#889CB0;font-weight:bold;padding:0.2em;margin-top:6px;}
    .nextgame acronym { cursor:help;border-bottom:1px dotted; }
    .nextgame small {font-size:11px;}
    .nextgame caption { -moz-border-radius: 0.3em; /* Ecken gerundet, FF only */ }

    tr#allespiele {
      display:none;
    }
    a.einblenden {
      background: transparent url('img/mehr1.svg') no-repeat;
      text-decoration:none;
      width:20px;
      height:20px;
      display:block;
    }
    a.einblenden:hover {
      background: transparent url('img/mehr2.svg') no-repeat;
    }
    a.ausblenden {
      background: transparent url('img/weniger1.svg') no-repeat;
      text-decoration:none;
      width:20px;
      height:20px;
      display:block;
    }
    a.ausblenden:hover {
      background: transparent url('img/weniger2.svg') no-repeat;
    }
  </style>

  <script src="./js/jquery-3.7.1.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $("a#einausblenden").click( function() {
      if ( $(this).hasClass("einblenden") ) {
        $("a#einausblenden").removeClass("einblenden").addClass("ausblenden").attr({ title: "ausblenden" });
      $("#allespiele").show();
      }
      else {
        $("a#einausblenden").removeClass("ausblenden").addClass("einblenden").attr({ title: "alle Spiele aus dem Archiv einblenden" });
        $("#allespiele").hide();
      }
    });
  });
  </script>

</head>
<body>
<table class="minitabs" border="0">
  <tr>
    <td colspan="2" align="center">
      <?php
      $file = "LIGENFILE.l98";  //ändern
      $folder="archiv/ORDNER";  //ändern
      $mini_template="mininext_all.tpl.php";
      include("addon/mini/lmo-mininext_jquery.php");
      ?>
    </td>
  </tr>
</table>
</body>
</html>
