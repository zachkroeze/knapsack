<html>

<head>
<title>Registration. Please fill in the form below. </title>
</head>

<body bgcolor="white" text="black" link="blue" alink="blue" vlink="blue" background="" >

<font face="verdana,arial" size=-1>
<center>
  <table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
    <tr>
      <td bgcolor="black">
        <table cellpadding='0' cellspacing='0' border='0' width='100%'>
          <tr>
            <td bgcolor="black" align=center style="padding:2;padding-bottom:4">
              <font size=-1 color="white" face="verdana,arial"><b>Registration. Please fill in the form below.</b>
              </font>
            </td>
          </tr>
          <tr>
            <td bgcolor="white" style="padding:5">
            <br>
              <form method="post" action="insert.php" name="aform">
              <input type="hidden" name="action" value="reg2">
              <input type="hidden" name="user" value="orthodoxrings">
              <center>
              <table>
                <tr>
                  <td><font face="verdana,arial" size=-1>Choose username:</td>
                  <td><font face="verdana,arial" size=-1><input type="text" name="username"></td></tr>
                <tr>
                  <td><font face="verdana,arial" size=-1>Choose password:</td>
                  <td><font face="verdana,arial" size=-1><input type="password" name="password1"></td></tr>
                <tr>
                  <td><font face="verdana,arial" size=-1>Verify password:</td>
                  <td><font face="verdana,arial" size=-1><input type="password" name="password2"></td></tr>
                <tr>
                  <td><font face="verdana,arial" size=-1>Ownbox hexidecimal code (See manual):</td>
                  <td><font face="verdana,arial" size=-1><input type="text" name="hexcode"></td></tr>
                <tr>
                  <td><font face="verdana,arial" size=-1></td>
                  <td><font face="verdana,arial" size=-1><input type="submit" value="Submit"></td>
                </tr>
              </table>
              </center>
              </form>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <br>
  <?php /* Display errors */ ?>
    <?php if($USER->error!="") { ?>
     <p class="error">Error: <?php echo $USER->error; ?></p>
    <?php }

 ?>

</body>

</html>

