<?php

namespace app\models;

use app\core\Model;

class Registration extends Model
{
    public function templateErr($style, $nameErr)
    {
        return '<div class="' . $style . '">' . $nameErr . '</div>';
    }

    // /**
    //  * Add a user to a json file
    //  *
    //  * @param array $data
    //  * @return bool
    //  */
    public function addUser($data)
    {
        $separator = " || ";

        $db = USERS_DATABASE . '.txt';

        $fp = fopen(STATIC_DIR . $db, "a");

        fwrite($fp, date("d-m-Y-H-i-s") . $separator . $_SERVER['REMOTE_ADDR'] . $separator);

        foreach ($data as $key => $value) {
            if ($value == end($data)) {
                fwrite($fp, $value . "\n");
            } else {
                fwrite($fp, $value . $separator);
            }
        }
    }
}
