<?php 
    
    /**
     * Defina uma função que receba um id númerico e retorne a
     * pizza que tem como id este que foi dado
     */
    function pizzaPorId($id){
    
        // trazendo a variavel pizzas do escopo global para o escopo local
        global $pizzas;
        // Percorrer o array de pizzas
        foreach($pizzas as $pizza){
            if($pizza['id'] == $id) {
                return $pizza;
            }
        }
        
        return false;

    }

    /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasComDestaque(){

        
    }

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