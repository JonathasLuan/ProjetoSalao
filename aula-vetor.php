<?php
/*
$lista = array('Leonardo', 'Rhafael', 'Michelangelo', 'Donatelo');
$alunos['aluno1'] = array('nome' => 'Leonardo', 'telefone' => '');
$alunos['aluno2'] = ['nome'] = "Michelangelo";
$alunos['aluno2'] = ['telefone'] = "00000-00000";
$alunos['aluno3'] = "Rhafael";
$alunos['aluno4'] = "Donatelo";
$lista[] = 'Van Gogh';
$lista[] = 'Salvador Dali';
echo "Vetor lista";
var_dump($lista);
unset($lista[0]);
$links[] = array('link' => 'www.etecjk.com.br', 'descricao' => 'site da escola');
for ($i = 0; $i < count($links); $i++) {
echo "<br><a href=\"" . $links[$i]['link'] . "\">" . $links[$i]['descricao'] . "</a><br>";
}
*/

$nome = "Jonathas";
$sobrenome = "Luan";
$idade = "23";
$cidade = "Diadema";

$info = array($nome, $sobrenome, $idade, $cidade);
$info = [$nome, $sobrenome, $idade, $cidade];

print_r($info);
echo "<br><hr>";

echo count($info);
$total = count($info);
echo $total;

foreach ($info as $caract) {
    echo "<ul>" . $caract . "</ul>";
}

$pessoa = array("nome" => "Jonathas", "idade" => 23, "altura" => 1.60);
echo $pessoa["altura"] . "<br><hr>";

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

$times = array(
    "cariocas" => array("campeão"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
    "paulistas" => array("santos", "são paulo", "palmeiras"),
    "baianos" => array("bahia", "vitória", "itabuna")
);

/*echo $times["cariocas"][0];
echo "<hr>";*/

echo $times["paulistas"][1];
echo "<br><hr>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

?>