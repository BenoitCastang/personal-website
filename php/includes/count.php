<?php 
    // file open, reading + writing
    $count_file = fopen($_SERVER['DOCUMENT_ROOT'].'/php/files/count.txt', 'r+');
    // read first line
    $count = fgets($count_file);
    ?>
    <div class="count">
        <?php echo 'View count = ' . $count; ?>
    </div>
    <?php
    // increase count each loading
    $count += 1;
    // reset caret location
    fseek($count_file, 0);
    // write in file
    fputs($count_file, $count);
    // file close
    fclose($count_file);
?>