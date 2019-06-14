<?php

/**
 * Контролер SortController
 */
class SortController {

    /**
     * Action для сортування
     */
    public function actionIndex() {

        $reverse1 = false;
        $reverse2 = false;
        $substr = false;

        // Обробка форми
        if (isset($_POST['sort1'])) {
            $data = $_POST;

            $reverse1 = Sort::reverseDigitByString($data['digit']);
            $reverse2 = Sort::reverseDigitWithoutStrings($data['digit']);
        }
        
        // Обробка форми
        if (isset($_POST['sort2'])) {
            $data = $_POST;
            
            $substr = Sort::findMaxSubString($data['string']);
           
        }

        // Підключаємо вид
        require_once(ROOT . '/views/sort/index.php');
        return true;
    }

}
