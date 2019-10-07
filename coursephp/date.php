<?php


/*
  if ($date_today,$time_now )


{
    show_note function



}
   */


  function show_note($note)
  {
      echo $note;
  }







  $note_today = 'Good Night';


  show_note($note_today);


  $today = date("F j, Y, g:i a");
   echo "<p> $today </p> ";


   $time = '9';

   /*if ( $time <'12' and $time>'6')

   {
       show_note('Good Morning');
   }
   elseif ($time >'12' and $time < '18')
   {
       show_note('Good Afternoon');
   }
   elseif ($time < '22' and $time >'18');
   {
    show_note('Good Evening');
   }
   elseif ($time >'22' and $time <'24')
   {
              show_note('Good Nightttttt');
   }

   //$time как сохранить в переменной?
   */


   $getdate =getdate();
   echo '<pre>';
   print_r($getdate);
   echo '</pre>';
   echo '<br>';
   echo $getdate['year'];
   echo '</br>';
   echo '<br>';
   echo $getdate['weekday'];
   echo '</br>';
   echo '<br>';
   echo date('Y-m-d H:i:s',strtotime("+1 day 1 hour"));
   echo '</br>';
   //object
   $date_created1 = date_create(date('Y-m-d H:i:s'));
   echo '<pre>';
   var_dump($date_created1);
   echo '<pre>';

   echo date_format($date_created1,'Y-m-d H:i:s');

   date_add($date_created1,date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
   echo '<br>';
   echo date_format($date_created1,'Y-m-d H:i:s');

   //date_diff();

   //echo microtime();

   $start =microtime(true);
   usleep(1000000);
   $end = microtime(true);
   echo '<br>';
   echo $end - $start;