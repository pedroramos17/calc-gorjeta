<?php
    include_once 'quality.php';

    $value = $_POST['acc-value'];
    $quality = $_POST['service-quality'];

    class Tip {
        private int $value;
        private Quality $quality;

        function getValue(){
            return $this->value;
        }

        function setValue($value) {
            $this->value = $value;
        }

        function getQuality(){
            return $this->quality;
        }

        function setQuality($quality) {
            $this->quality = $quality;
        }
    }

    $tip = new Tip();

    $tip->setValue($value);
    $tip->setQuality($quality);

    header('index.php');
?>