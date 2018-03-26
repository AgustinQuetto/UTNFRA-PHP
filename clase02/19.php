<?php

class FiguraGeometrica {
    protected $_color;
    protected $_superficie;
    protected $_perimetro;

    function __construct($unColor, $unaSuperficie, $unPerimetro){
        $this->setColor($unColor);
        $this->CalcularDatos($unaSuperficie, $unPerimetro);
    }

    public function getColor() {
        return $this->_color;
    }
    public function setColor($x) {
        $this->_color = $x;
    }

    protected function CalcularDatos($superficie, $perimetro) {
        $this->_superficie = $superficie;
        $this->_perimetro = $perimetro;
    }

    function toString() {
        return $this->getColor();
    }

    public function Dibujar() {
        print("<div style='display: flex'>");
        print("<div style='flex-direction: row'>");
        for ($i=0; $i < $this->_perimetro; $i++) {
            for($j = 0; $j < $this->_perimetro - $i - 1; $j++) {
                print("&nbsp;");
            }
            for($j = 0; $j <= $i; $j++) {
                print('<span style="color:'.$this->_color.'">*</span>');
            }
            print("<br/>");
        }
        print("</div>");

        print("<div style='flex-direction: row; margin-left: 20px;'>");
        for ($i=0; $i < $this->_perimetro; $i++) {
            for($j = 0; $j < $this->_superficie; $j++) {
                print('<span style="color:'.$this->_color.'">*</span>');
            }
            print("<br/>");
        }
        print("</div>");
        print("</div>");
    }
}

$figura = new FiguraGeometrica("red", 7, 3);
$figura->Dibujar();