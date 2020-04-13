<?php 
    
    /**
     * Defina uma função que receba o id inteiro e retorne a
     * pizza quem tem como id este que foi dado
     */
    function pizzaPorId($id){
    
        // trazendo a variavel pessoas do escopo global para o escopo local
        global $pizzas;
        // Percorrer o array de pessoas para verificar se string ocorre no nome da pessoa
        foreach($pizzas as $pizza){
        
        if($pizza['id'] == $id) {

            // Retornar o resultado
            return $pizza[] = $pizza;

        }
 
    }


    }

    /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasComDestaque(){}

     /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasSemDestaque(){}

    /**
     * Defina uma função que retorne a pizza mais cara do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisCara(){}

    /**
     * Defina uma função que retorne a pizza mais barata do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisBarata(){}

    /**
     * Defina uma função que recebe o trecho de nome de uma pizza
     * e retorna um array contendo todas as pizzas que contenham
     * o trecho
     */
     function buscaPizza($trecho){}

     /**
     * Defina uma função que impima as informações de uma pizza
     */
    function pizzaPrint($pizza){}
?>