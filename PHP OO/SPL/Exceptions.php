<?php

class Math
{
    public function soma($x,$y)
    {
        if(!is_numeric($x) OR !is_numeric($y))
            throw new InvalidArgumentException('Numeros invalidos');

        $resultado = $x + $y;
        if($resultado > 10)
            throw new OutOfRangeException('Resultado maior que 10',10);

        return $resultado;
    }
}

$math = new Math;


try {
    echo $math->soma(10,10);
}
catch(InvalidArgumentException $e) {
    echo 'Houve um erro durante o calculo: '.$e->getMessage();
}
catch(OutOfRangeException $e) {
    echo 'Erro durante o processamento: '.$e->getMessage();
}