<?php

namespace Framework;

class Validation {
    /**
     * Validate a string
     * 
     * @param string $string
     * @param int $min
     * @param int $max
     * @return bool
     */

    //  static utk guna kelas dia sendiri
     public static function string($value, $min = 1, $max = INF) {
        if(is_string($value) ){
            $value = trim($value);
            $length = strlen($value);

            return $length >= $min && $length <= $max;
        }

        return false;
     }

     /**
      * Validate an email
      * 
      * @param string $email
      * @return mixed
      */
     public static function email($value) {
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
     }

     /**
      * Match a value against another value
      * 
      * @param string $value1
      * @param string $value2
      * @return bool
      */

      public static function matches($value1, $value2) {
        $value1 = trim($value1);
        $value2 = trim($value2);

        return $value1 === $value2;
      }

      public static function number($value) {
        return is_numeric($value) && $value >= 0;
      }
     
}

?>