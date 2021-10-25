//////////////////////////////////////////////////////////////////////
//                                                                  //
//   This function uses the RecursiveDirectoryIterator class        //
//   to iterate through every pdf file in a directory               //
//   and returns the most recent file by modified date              //
//   Author: Anthony George                                         //
//                                                                  //
//////////////////////////////////////////////////////////////////////

<?php

  function latestPDF($filepath){

    $iterator = new RecursiveDirectoryIterator($filepath);
    $lastModified = "";

    foreach ($iterator as $file) {
      if ($file->isFile()) {
        if(empty($lastModified)){
          $lastModified = $file;
        } else {
          $ext   = pathinfo($file, PATHINFO_EXTENSION);
          $date1 = filemtime($lastModified);
          $date2 = filemtime($file);

          if(($date1 < $date2) && ($ext == 'pdf')) {
            $lastModified = $file;
          }}}}

    if(empty($lastModified)){
      throw new exception("No file");
    }

    return $lastModified;
  }
  
?>
