<?php
echo '<table>';
for($lower =0; $lower <=100; $lower++)
{
    if($lower == 0)
    {
        echo '<tr><td></td>';
        for($upper = 1; $upper<=100; $upper++)
        {
            echo '<th scope ="col" class="col">' . $upper . '</th> ';
        }
        echo '</tr>';

    }
    else
    {
        echo'<tr>';
        echo '<th>' . $lower . '</th>';
        for($bound =1; $bound<=100; $bound++)
        {
            echo '<td>' . $lower*$bound .'</td>';

        }
        echo '</tr>';

    }
}

echo '</table>';

?>