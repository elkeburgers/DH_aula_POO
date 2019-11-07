<?php
    include "Pessoas.php"; //incluindo o arquivo aqui para criar outras pessoas.
    include "Funcionarios.php";  //incluindo o arquivo da classe FUncionarios.

    $pessoaUm = new Pessoas();      //criando uma nova pessoa, (objetos). Para criar um objeto, uso o new e pego a 'planta' (classe)
    $pessoaUm->nome = "Elke";        //atribuindo um nome para o objeto.
    $pessoaUm->setIdade(44);              //atribuindo uma idade para o objeto (private). Deu erro. Quando o atributo é privado, apenas a variável pode acessar essa informação. Somente preenchendo a informação ele não deixa. Temos de criar um método dentro da classe pra isso 
    //métodos acessores, permitem alterar o atributo. Em geral, sempre serão públicos, para que possamos manipular. Se colocar private, ele não deixa realizar a operação.
    //com o setIdade é possível alterar a idade.
    //var_dump($pessoaUm);
    echo "<h3>".$pessoaUm->nome."<h3>"; //esse imprime deboas
    // echo "<h1>".$pessoaUm->idade."</h1>"; tb não consigo mostrar pro usuário, pois a informação é privada. var_dump da certo pq mostra pro desenvolvedor. Temos de ter um método acessor pra tb poder funcionar
    echo "<h3>".$pessoaUm->getIdade()."<h3>"; 

    //set -> é pra alterar informações. Setar novas informações.
    //get -> pega as informações.
?>
<hr>


<?php
    //criando nova pessoa.
    $pessoaDois = new Pessoas();
    $pessoaDois->nome = "Irene";
    var_dump($pessoaDois);
?>
<hr>

<?php
    //criando um novo funcionario. Esse novo objeto herda as características da classe Pessoas.
    $funcionarioUm = new Funcionarios();
    $funcionarioUm->nome = "Lorena"; //atribuindo o nome no objeto da nova classe. Pela herança a informação é aceita, pois é público.
    $funcionarioUm->setIdade(29);   //aqui é possível setar a idade, mesmo sendo privada e de outra classe mãe.
    var_dump($funcionarioUm);

// var_dump($pessoaUm);
// var_dump sem alterar nada 
// object(Pessoas)#1 (4) {
//     ["nome"]=>
//     NULL
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }
//ESTADO ATUAL DO OBJETO, COMO ELE ESTÁ NO MOMENTO. PARA ALTERAR O ESTADO, BASTA ALTERAR ALGO (EX. COLOCAR O NOME). Var_dump abaixo
// object(Pessoas)#1 (4) {
//     ["nome"]=>
//     string(5) "Luana"
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }
// var_dump($pessoaDois);
// object(Pessoas)#2 (4) {
//     ["nome"]=>
//     string(6) "Daniel"
//     ["idade":"Pessoas":private]=>
//     NULL
//     ["cpf":protected]=>
//     NULL
//     ["email"]=>
//     NULL
//   }


?>