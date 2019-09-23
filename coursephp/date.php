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