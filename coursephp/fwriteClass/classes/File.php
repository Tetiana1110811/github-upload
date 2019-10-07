<?php


class File
{
       public $file;
       public $fb;
       public $content;

       public function __construct($file)
       {   $this->file=$file;
           if (!is_writable($this->file))
                {
                   echo "Не могу открыть файл {$this->file}";
                   exit;
               }
               $this->fb= fopen($this->file, 'a');
           }


       public function __destruct()
       {
           fclose($this->fb);
       }

       public function write($content)
       {

           if (fwrite($this->fb,$content) === FALSE) {
               echo "Не могу произвести запись в файл ($this->file)";
               exit;
           }

       }


}