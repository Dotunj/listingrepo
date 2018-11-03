<?php

namespace Core;

class View
{
    public function render($path, $data= [])
    {
        if ($data) {
            // Extract the rendering variables.
            foreach ($data as $key => $value) {
                ${$key} = $value;
            }
        }

        $filepath = APPDIR."views/$path.php";

        if (file_exists($filepath)) {
            require $filepath;
        } else {
            die("View: $path not found!");
        }
    }
}