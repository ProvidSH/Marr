<?php
  extract ($_REQUEST)
  $file=fopen("Answers.txt","a");

  fwrite($file,"ex1:");
  fwrite($file, $ex1 ."\n");
  fwrite($file,"ex2p1:");
  fwrite($file, $ex2p1 ."\n");
  fwrite($file,"ex2p2:");
  fwrite($file, $ex2p2 ."\n");
  fwrite($file,"ex2p3:");
  fwrite($file, $ex2p3 ."\n");
  fwrite($file,"ex2p4:");
  fwrite($file, $ex2p4 ."\n");
  fwrite($file,"ex2p5:");
  fwrite($file, $ex2p5 ."\n");
  fwrite($file,"others:");
  fwrite($file, $others ."\n");
  fclose($file);
  header("location: Lecture1.php");
?>

