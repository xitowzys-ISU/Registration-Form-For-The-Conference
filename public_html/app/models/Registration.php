<?php

namespace app\models;

use app\core\Model;

class Registration extends Model
{
    public function templateErr($style, $nameErr)
    {
        return '<div class="' . $style . '">' . $nameErr . '</div>';
    }

    /**
     * Add a user to a json file
     *
     * @param array $data
     * @return bool
     */
    public function addUser($data) {

        $db = USERS_DATABASE . '.json';

        if(!file_exists(STATIC_DIR . $db)) {
            file_put_contents(STATIC_DIR . $db, json_encode(array($data), JSON_PRETTY_PRINT));
            return true;
        }

        $content = file_get_contents(STATIC_DIR . $db);
        $arr = json_decode($content, true);

        if($arr === NULL)
        {
            $arr = [];
        }

        array_push($arr, $data);
        file_put_contents(STATIC_DIR . $db, json_encode($arr, JSON_PRETTY_PRINT));

        return true;
        
    }
}
