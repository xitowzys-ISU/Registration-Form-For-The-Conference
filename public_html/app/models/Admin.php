<?php

namespace app\models;

use app\core\Model;

class Admin extends Model
{

    /**
     * Get an array of users from a json file
     *
     * @return array
     */
    public function getUsers() {

        $db = USERS_DATABASE . '.json';

        if(!file_exists(STATIC_DIR . $db)) {
            return [];
        }

        $content = file_get_contents(STATIC_DIR . $db);
        $arr = json_decode($content, true);

        return $arr;
    }

    /**
     * Deleting a user from a json file
     *
     * @param array $id
     * @return void
     */
    public function deleteUser($id) {
        $db = USERS_DATABASE . '.json';

        $content = file_get_contents(STATIC_DIR . $db);
        $arr = json_decode($content, true);

        foreach ($id as $key => $value) {
            unset($arr[$value]);
        }

        file_put_contents(STATIC_DIR . $db, json_encode($arr, JSON_PRETTY_PRINT));
    }
}