<?php
    interface BillInterface {
        public function calculateBill( Bill $bill );
        public function totalValue( Bill $bill );
    }

    class Bill implements BillInterface {
        private $value;
        private $quality;

        public function getValue() {
            return $this->value;
        }

        public function setValue($value) {
            $this->value = $value;
        }

        public function getQuality() {
            return $this->quality;
        }

        public function setQuality($quality) {
            $this->quality = $quality;
        }

        public function calculateBill(Bill $bill) {
            if($bill === null) {return 0;}

            return $bill->getValue() * ($bill->getQuality() / 100);
        }

        public function totalValue(Bill $bill) {
            if($bill === null) {return 0;}

            return $bill->getValue() + $this->calculateBill($bill);
        }
    }
 
    enum Quality: int {
        case Excellent = 10;
        case Great = 8;
        case Good = 5;
        case Bad = 2;
    }
