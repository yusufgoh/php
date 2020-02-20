<html>
<head>
<title>Member Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center"></div>
<table width="120" align="center" bgcolor="#FFFFCC">
  <tr>
    <td height="37" bgcolor="#990000"> 
      <div align="center"><font color="#FFFFFF" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Computer 
        Club Member Registration </strong></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC"><hr></td>
  </tr>
  <tr>
    <td><form method="post" action="skrip.php">
        <table width="469" align="center">
          <tr bgcolor="#FFFFCC"> 
            <td width="141"><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Name</font></td>
            <td width="316"><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              : 
              <input name="name" type="text">
              </font></td>
          </tr>
          <tr bgcolor="#FFFFCC"> 
            <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Date 
              Of Birth</font></td>
            <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              : 
              <select name="tgl">
                <option value="0">Day</option>
                <?php 
            		  for($i=1; $i<=31; $i++) {
            			echo ("<Option value=\"$i\">$i");
            		   }
            	   ?>
              </select>
              , 
              <select name="bln">
                <option value="-1">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <select name="thn">
                <option value="-1"> Year 
                <?php 
            		  $th1=1990;
            		  $th2=2000;
            		  for($i=$th1; $i<=$th2; $i++) {
            			echo ("<Option value=\"$i\">$i");
            		   }
            	   ?>
                </option>
              </select>
              </font></td>
          </tr>
          <tr bgcolor="#FFFFCC"> 
            <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Sex</font></td>
            <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              : 
              <input name="sex" type="radio" value="m" checked>
              Male 
              <input type="radio" name="sex" value="f">
              Female</font></td>
          </tr>
          <tr valign="top" bgcolor="#FFFFCC"> 
            <td><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Address</font></td>
            <td valign="top"><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
              <font color="#FFFFCC">: </font> 
              <textarea name="address" rows="3"></textarea>
              </font></td>
          </tr>
          <tr bgcolor="#FFFFCC"> 
            <td><strong><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></strong></td>
            <td><div align="left"><strong><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                <font color="#FFFFCC">: </font>
                <input name="show" type="submit" id="show" value="Show Profile">
                <input type="reset" name="Submit2" value="Reset">
                </font></strong></div></td>
          </tr>
          <tr bgcolor="#FFFFCC"> 
            <td><strong><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></strong></td>
            <td><strong><font color="#990000" size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></strong></td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#990000">
<div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Copyright 
        @UIB 2020</strong></font></div></td>
  </tr>
</table>
</body>
</html>
