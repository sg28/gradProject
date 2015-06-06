<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<script type="text/javascript">
function usePage(frm,nm){
for (var i_tem = 0, bobs=frm.elements; i_tem < bobs.length; i_tem++)
if(bobs[i_tem].name==nm&&bobs[i_tem].checked)
frm.action=bobs[i_tem].value;
}

$(document).foundation();
</script>

              <!---Adding the Style sheet-->
    <style>
    body {
      background:url("http://f.cl.ly/items/0m1s041Z2e0E1J2v2I3M/Galaxy_dark2.jpg") no-repeat center center fixed;
      font: 18px/24px Calibri;
  
    }



    input {
      display:none;
    }
    input + label span {
      content:"";
      display:inline-block;
      width:19px;
      height:19px;
      margin:-1px 4px 0 0;
      vertical-align:middle;
      background:url(http://d3pr5r64n04s3o.cloudfront.net/tuts/391_checkboxes/check_radio_sheet.png) no-repeat;
      cursor:pointer;
    }

    /*input[type="checkbox"] + label span { background-position:left top; }*/
    input[type="radio"] + label span { background-position:-38px top; }

    /*input[type="checkbox"]:checked + label span { background-position:-19px top; }*/
    input[type="radio"]:checked + label span { background-position:-57px top; }

    /*body { background:url(http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/low_contrast_linen.png) repeat; font:14px/20px Verdana; color:#aaa; }*/
    div { width:150px; margin:50px auto; }
    input:checked + label { color:#fff; }

    #submit {
      border-radius: 3px;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      background-color: #8CC152;
      color: #eee;
      font-weight: bold;
      margin-bottom: 2em;
      text-transform: uppercase;
      width: 250px;
      height: 50px;
    }

    
    </style>







</head>
  <body>
  <div class="container" id="login">

  <!-- onsubmit = "usePage(this, 'bob');return checktheform();"
  *   <form action="#" method="post" onsubmit="usePage(this, 'bob');">

  -->

  <form  id="form" action="#"   method="post"  onsubmit = "usePage(this, 'bob');return checktheform();">
      
  <p>
    <input type="radio" id="r1" name="bob" value="../zeb/actionDisplay.php">
    <label for="r1"><span></span>ACTION</label>
    </p>
  
  <p>
    <input type="radio" id="r2" name="bob" value="../zeb/adventureDisplay.php">
    <label for="r2"><span></span>ADVENTURE</label>
    </p>
    
    <p>
    <input type="radio" id="r3" name="bob" value="../zeb/animationDisplay.php">
    <label for="r3"><span></span>ANIMATION</label>
    </p>
    
    <p>
    <input type="radio" id="r4" name="bob" value="../zeb/comedyDisplay.php">
    <label for="r4"><span></span>COMEDY</label>
    </p>
    
    <p>
    <input type="radio" id="r5" name="bob" value="../zeb/crimeDisplay.php">
    <label for="r5"><span></span>CRIME</label>
    </p>
    
    <p>
    <input type="radio" id="r6" name="bob" value="../zeb/familyDisplay.php">
    <label for="r6"><span></span>FAMILY</label>
    </p>
    
    <p>
    <input type="radio" id="r7" name="bob" value="../zeb/historyDisplay.php">
    <label for="r7"><span></span>HISTORY</label>
    </p>
    
    <p>
    <input type="radio" id="r8" name="bob" value="../zeb/horrorDisplay.php">
    <label for="r8"><span></span>HORROR</label>
    </p>
    
    <p>
    <input type="radio" id="r9" name="bob" value="../zeb/warDisplay.php">
    <label for="r9"><span></span>WAR</label>
    </p>

  <button type="submit" id="submit">CRAWL</button>
  
  </form>
<button type="submit" value="REPOSITORY" id="submit"onclick="window.location='http://localhost:9000/zeb/.fileUpload.php';" />DIRECTORY LISTING</button>



  </div>

  </body>
</html>