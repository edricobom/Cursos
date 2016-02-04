<?php

function soma(){
    $x=5;
    $y=1;
    echo $x + $y. "<hr>";
}
function media($p1,$p2,$p3){
    return $resultado=($p1+$p2+$p3)/3;
}
$alunos[0]["Nome"]="Pedro";
$alunos[0]["Media"]=media(6,8,3);

$alunos[1]["Nome"]="Maria";
$alunos[1]["Media"]=media(8,5,10);

$alunos[2]["Nome"]="Diego";
$alunos[2]["Media"]=media(6,8,7);

function passou($valor){
    if($valor>=7){
        return $passou='<font color="blue">' . $valor. '</font><br/>';
    }
    else
        return $passou='<font color="red">' . $valor . '</font><br/>';
}
function printMedias($a){
    for($i=0;$i<count($a);$i++){
        echo "<b>Nome do Aluno:</b> ".$a[$i]["Nome"]."<br/>";
        echo "<b>Media final:</b>".passou($a[$i][Media]);
    }
}

printMedias($alunos);
?>