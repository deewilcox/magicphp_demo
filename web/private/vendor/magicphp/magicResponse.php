<?php

namespace Magic;

class MagicResponse {
	private $responseObject;
	
    public function __construct() {
        $this->responseObject = array();
    }

    public function assign($elementId,$data) {
        if($elementId !== '') {
            $formattedElementId = '"#' . $elementId . '"';
            $formattedProperty = '"' . $property . '"';
            $formattedData = '"' . $data . '"';

            $javascript = <<<JS
            $.fn.magicAssign($formattedElementId, $formattedProperty, $formattedData);
JS;

            $this->responseObject[] = $javascript;
        }
        else {
            return false;
        }
    }

    public function script($script) {
        // This could be any and everything, so $script must be formatted correctly when it is passed in
        if($script) {
            $javascript = <<<JS
            $script
JS;

            return $javascript;
        }
        else {
            return false;
        }
    }

    public function alert($string) {
        if($string) {
            $formattedString = '"' . $string . '"';
            $javascript = <<<JS
            $.fn.magicAlert($formattedString);
JS;

            return $javascript;
        }
        else {
            return false;
        }
    }


    public function getFormValues($formId) {
        if($formId) {
            $formattedFormId = '"#' . $formId . '"';
            $javascript = <<<JS
            $.fn.magicGetFormValues($formattedFormId);
JS;
            return $javascript;
        }
        else {
            return false;
        }
    }
}
