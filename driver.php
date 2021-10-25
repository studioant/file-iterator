////////////////////////////////////////////////////
//                                                //
//   Driver code for file_iterator function       //
//   Author: Anthony George                       //
//                                                //
////////////////////////////////////////////////////

<?php

  ini_set("display_errors", "on");
  error_reporting(-1);

  include('file_iterator.php');

  header("refresh: 60");

  $file_path = 'c:/filepath';
  $todays_bulletin = latestPDF($file_path);

?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Anthony George">
    <meta name="version 1" content="10/06/2019">
  </head>
  <body>
    <embed src="<?php header("Content-type: application/pdf");
      @readfile($todays_bulletin);?>">
  </body>
</html>
