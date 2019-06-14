<?php

/**
 * Клас Sort - модель для сортування
 */
class Sort {

    /**
     * Повертає обернуте число
     * за допомогою переведення в String
     * @param type $digit <p>Число</p>
     * @return type <p>Обернене число</p>
     */
    public static function reverseDigitByString($digit) {
        $reverse = '';
        $i = 0;

        while (!empty($digit[$i])) {
            $reverse = $digit[$i] . $reverse;
            $i++;
        }
        return $reverse;
    }

    /**
     * Повертає обернуте число
     * без переведення в String
     * @param type $digit <p>Число</p>
     * @return type <p>Обернене число</p>
     */
    public static function reverseDigitWithoutStrings($digit) {
        $tmp = 0;

        while ($digit > 0) {
            $tmp *= 10;
            $tmp += $digit % 10;
            $digit = (int) ($digit / 10);
        }

        return $tmp;
    }

    /**
     * Повертає максимальну підстрічуку
     * без повторення 
     * @param type $string <p>Строка</p>
     * @return type <p>Мінімальна підстрока</p>
     */
    public static function findMaxSubString($string) {

        $string = str_split($string);

        $results = [];
        $current = [];
        for ($t = 0; $t < (count($string)); $t++) {

            
            
            if (in_array($string[$t], $current)) {
                
                if (count($current) > count($results)) {
                    
                    $results = $current;
                }
                $current = array_slice($current, array_search($string[$t], $current)+1, count($current) - array_search($string[$t], $current));
                array_push($current, $string[$t]);
            } else {
                
                array_push($current, $string[$t]);
            }
        }
        if (count($current) > count($results)) {
            $results = $current;
        }
        return implode($results);
    }

}
