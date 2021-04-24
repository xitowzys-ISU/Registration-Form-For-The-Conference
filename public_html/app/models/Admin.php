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
    public function getUsers()
    {

        $arr = array();

        $separator = " || ";
        $db = USERS_DATABASE . '.txt';

        $fp = fopen(STATIC_DIR . $db, 'r');

        while (!feof($fp)) {
            $data = fgets($fp);

            if (empty($data))
                break;

            $data = explode($separator, $data);

            if (!($data[0] === "DELETED"))
                array_push($arr, $data);
        }

        return $arr;
    }

    /**
     * Deleting a user from a json file
     *
     * @param array $id
     * @return void
     */
    public function deleteUser($id)
    {

        foreach ($id as $key => $value) {

            $separator = " || ";
            $db = USERS_DATABASE . '.txt';

            $lineNumber = 0;
            $remoteUser = "";

            $fp = fopen(STATIC_DIR . $db, 'r+');

            while (!feof($fp)) {
                $data = fgets($fp);

                $arr = explode($separator, $data);
                if ($arr[0] === $key) {
                    $remoteUser = "DELETED" . $separator . $data . "";
                    fclose($fp);
                    break;
                }

                $lineNumber++;
            }


            $file = file(STATIC_DIR . $db);

            for ($i = 0; $i < sizeof($file); $i++)
                if ($i == $lineNumber) unset($file[$i]);

            $fp = fopen(STATIC_DIR . $db, 'w+');
            fputs($fp, implode("", $file));
            fwrite($fp, $remoteUser);
            fclose($fp);
        }
    }
}
