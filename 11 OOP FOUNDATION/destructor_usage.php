<?php

class FileUtil
{
    private $handle;
    private $filename;

    function __construct($filename, $filemode)
    {
        $this->filename = $filename;
        $this->handle = fopen($filename, $filemode);
    }

    public function __destruct(){
        if($this->handle){
            fclose($this->handle);
        }
    }

    public function display()
    {
        echo fread($this->handle, filesize($this->filename));
    }
}

$file = new FileUtil('./sample.txt', 'r');
$file->display;