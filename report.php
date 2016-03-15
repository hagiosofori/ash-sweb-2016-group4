<html>
<head>
</head>
<body>



  <?php

  function generateReport(){
    $File = "Report.txt";
    $Handle = fopen($File, 'a');
    $Data = "Drug Master\n";
    fwrite($Handle, $Data);
    $Data = "Tool Master\n";
    fwrite($Handle, $Data);
    print "Data Added";
    fclose($Handle);
  }

  ?>

  <input type="submit" value=generateReport()>

</body>
</html>
