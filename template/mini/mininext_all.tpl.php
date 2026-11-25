<!-- BEGIN mehrhead -->
<style type="text/css">
  a.mini_toggle { display:block; width:15px; height:15px; text-decoration:none; background:transparent url('<!--mehrImgDir-->/mehr1.svg') no-repeat; }
  a.mini_toggle:hover { background-image:url('<!--mehrImgDir-->/mehr2.svg'); }
  a.mini_toggle.mini_ausblenden { background-image:url('<!--mehrImgDir-->/weniger1.svg'); }
  a.mini_toggle.mini_ausblenden:hover { background-image:url('<!--mehrImgDir-->/weniger2.svg'); }
</style>
<script type="text/javascript">
(function () {
  if (window.miniToggleInit) { return; }
  window.miniToggleInit = true;
  document.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a.mini_toggle') : null;
    if (!a) { return; }
    e.preventDefault();
    var rows = document.getElementsByClassName(a.getAttribute('data-target'));
    var show = a.classList.contains('mini_einblenden');
    for (var i = 0; i < rows.length; i++) {
      if (rows[i].tagName === 'TR') { rows[i].style.display = show ? '' : 'none'; }
    }
    a.classList.toggle('mini_einblenden', !show);
    a.classList.toggle('mini_ausblenden', show);
    a.title = a.getAttribute(show ? 'data-title-hide' : 'data-title-show');
  });
})();
</script>
<!-- END mehrhead -->
<table class="nextgame" border="0" width="155">
  <tr>
    <td>
      <table width="100%">
        <caption><!--gameTxt--></caption>
        <tr>
         <th><!--gameDate--> <!--gameTime--></th>
        </tr>
        <tr>
          <td align="center"><!--imgHomeBig--><br /><!--homeName--><br />-<br /><!--guestName--><br /><!--imgGuestBig-->
</td>
        </tr>
<!--        <tr>
          <td align="center">&nbsp;-&nbsp;</td>
        </tr>
        <tr>
          <td align="center"></td>
        </tr>
-->        
        <tr>
          <td><small><!--gameNote-->&nbsp;</small></td>
        </tr>
        <tr>
          <th><!--matchesTxt--></th>
        </tr>
        <tr>
          <td align="center"><!--winCount--> / <!--drawCount--> / <!--lostCount--> (<!--winTxt-->/<!--drawTxt-->/<!--lostTxt-->)</td>
        </tr>
        <tr>
          <th>  
            <table align="center" border="0" cellpadding="0" cellspacing="0">
             	<tr>
                <th bgcolor="#009900" height="7" width="<!--winWidth-->"></th>
                <th bgcolor="#999999" height="7" width="<!--drawWidth-->"></th>
                <th bgcolor="#990000" height="7" width="<!--lostWidth-->"></th>
             	</tr>
            </table>
          </th>
        </tr>
        <tr>
          <td align="center">
            <ul>
        <!-- BEGIN matches -->
        <li class="<!--class-->"><!--date--> <!--time--> <!--hTore-->:<!--gTore--> (<!--where-->) <small><!--matchingName--></small></li>
        <!-- END matches -->
           </ul>
         </td>
       </tr>
       <!--mehr-->
       <!-- BEGIN mehrarchivspiele -->
       <tr class="mini_allespiele <!--mehrId-->" style="display:none">
         <td align="center">
           <ul>
             <!-- BEGIN matches2 -->
             <li class="<!--class-->"><!--date--> <!--time--> <!--hTore-->:<!--gTore--> (<!--where-->) <small><!--matchingName--></small></li>
             <!-- END matches2 -->
           </ul>
         </td>
       </tr>
       <!-- END mehrarchivspiele -->
       <tr>
         <td align="right"><small><!--ligaDatum-->&nbsp;<!--copy--></small></td>
       </tr>
      </table>
      <!-- BEGIN previous -->
      <table width="100%">
        <caption><!--previous_gameTxt--></caption>
        <tr>
         <th><!--previous_gameDate--> <!--previous_gameTime--></th>
        </tr>
        <tr>
          <td align="center"><!--previous_homeName--></td>
        </tr>
        <tr>
          <th class="result"><!--previous_hTore--> : <!--previous_gTore--></th>
        </tr>
        <tr>
          <td align="center"><!--previous_guestName--></td>
        </tr>
      </table>
      <!-- END previous -->
    </td>
  </tr>
</table>