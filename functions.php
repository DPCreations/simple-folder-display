<?php
    function getName()
    {
        include('variables.php');

        if(isset($name)) {
            echo $name;
            return;
        }

        echo 'Local directory';
    }

    function render()
    {
        require('variables.php');

        //Check that variables exists
        $directory = (isset($directory) ? $directory : null);
        $folder = (isset($folder) ? $folder : null);
        $excludes = (isset($excludes) ? $excludes : null);
        $append = (isset($append) ? $append : null);
        $prepend = (isset($prepend) ? $prepend : null);

        if (!is_dir($directory)) {
            exit('Invalid diretory path');
        }

        foreach (scandir($directory) as $folder) {
            if (!in_array($folder, $excludes) ) {
                echo "<a target='_blank' href='{$prepend}{$folder}{$append}'>
                        <div class='folder flex-2 text-green-400 text-center bg-black p-5 m-2'>
                            <p>{$folder}</p>
                        </div>
                    </a>";
            }
        }
    }
?>
