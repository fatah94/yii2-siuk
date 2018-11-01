<?php 

namespace app\models;

use Yii;

class DBHelper {

    public static function getNextId($db, $field, $digit = 0){

        $sql = "SELECT MAX($field) AS LASTID FROM $db";
        $q = Yii::$app->db->createCommand($sql)->queryOne();    
    
        if(empty($q['LASTID'])){
            $id = 1;
        } else {
            $id = ((int)$q['LASTID'] + 1);
        }
    
        return str_pad($id, $digit, "0", STR_PAD_LEFT);
    }
}
