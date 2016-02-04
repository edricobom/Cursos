<?php

$animais = array("gato","cachorro","coelho");
#echo $animais[2];
$nomes= array(0=>"pedro",2=>"Mariana",1=>"Michael");
#echo $nomes[1];

$matriz = array(0=>array(0=>"Peek-a-boo"));
#echo $matriz[0][0];


$matriz2 = array(
            0=>array(
                0=>"Peek-a-boo"),
            1=>"numero 1");
#echo $matriz2[0][0];
#echo $matriz2[1];


#Arrays associativos;

$config= array();
$config["nome"]="Nome legal";
$config["slang"]="O nome mais legal ;)";

#echo $config["nome"]." - ".$config["slang"];

//print_r($config);
//var_dump($config);
//?>
<!--<hr />-->

<?php for($i=0; $i< count($animais);$i++): ?>
    <?php echo $animais[$i];?>
    <hr/>
<?php   endfor; ?>



