<?php

if($task) {
    foreach ($task as $item):
var_dump($item["filename"]);
$FileName = $item["filename"];

endforeach;
    function DownloadFIle($FileName)
    {
        $fileName = basename($FileName );

        $filePath = 'uploads/' . $fileName;

        if (!empty($fileName) && file_exists($filePath)) {

            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: docx/doc/pdf/txt");
            exit;
        } else {
            echo 'The file does not exist.';
        }
    }

    DownloadFIle($FileName);


     }
else {

    print_r("hjgbhjfghdsadSDFGHJK");
}

