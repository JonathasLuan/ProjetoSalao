<?php
$lista = array('Leonardo', 'Rhafael', 'Michelangelo', 'Donatelo');

$alunos['aluno1'] = array('nome'=>'Leonardo','telefone'=>'');
$alunos['aluno2'] = ['nome'] = "Michelangelo";
$alunos['aluno2'] = ['telefone'] = "00000-00000";
$alunos['aluno3'] = "Rhafael";
$alunos['aluno4'] = "Donatelo";

$lista[] = 'Van Gogh';
$lista[] = 'Salvador Dali';
echo "Vetor lista";
var_dump($lista);

unset($lista[0]);


$links[]=array('link'=>'www.etecjk.com.br', 'descricao'=>'site da escola');
for($i=0;$i<count($links); $i++){
    echo "<br><a href=\"".$links[$i]['link']."\">".$links[$i]['descricao']."</a><br>"
}

?>