


<div id="card1" class="show" style="width:100%; padding-top:80px;" >


    Click on the link below. (Hint: look for the #1 below)
    <p><a onclick="change();style='display:none;'">1</a></p>
</div>

<div id="card2" class="hide" style="padding-top:80px;">
  <table width="100%">
      <tbody><tr>
          <td>Now the #2 over on the right.</td>
          <td align="right">
          <p><a onclick="change();style='display:none;'">2</a></p>
          </td>
          </tr>
      </tbody>
  </table>
</div>

<div id="card3" class="hide" style="padding-top:80px;">
  <table width="100%">
    <tbody>
      <tr>
        <td align="right">And down below.<br>

          <img src="<?php echo plugin_dir_url(__FILE__) . 'images/spacer.gif'; ?>">

          <br>
          <p><a onclick="change();style='display:none;'">3</a></p>
        </td>

      </tr>
    </tbody>
  </table>
</div>
<div id="card4" class="hide" style="padding-top:80px;" >
  <table width="100%">
  <tbody>
    <tr>
      <td align="left" valign="bottom">

        <img src="<?php echo plugin_dir_url(__FILE__) . 'images/spacer.gif'; ?>">
        <a onclick="change();style='display:none;'">4</a>
      </td>
      <td align="right" valign="bottom">Now over to the left.</td>
    </tr>
  </tbody>
  </table>
</div>

<div id="card5" class="hide" style="padding-top:80px;" >
  <table width="100%">
    <tbody>
      <tr>
        <td align="left"><a onclick="change();style='display:none;'">5</a><br>
          <img src="<?php echo plugin_dir_url(__FILE__) . 'images/spacer.gif'; ?>">


        <br>
        Back up to the top, but now<br>
        the numbers are a little smaller.</td>
      </tr>
    </tbody>
  </table>
</div>


<script type="text/javascript">



var clicks = 1;
    change =  function(){
        clicks += 1;
        console.log(clicks);
        
        var hider = document.getElementById("card" + clicks).classList.toggle("show");

    };

</script>
