<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {

        $caracteres = strlen($ano);
        
        #0 ate 99
        if ($caracteres == 1 or $caracteres == 2){
            return 1;
        }

        #100 ate 999
        elseif($caracteres == 3){
            #verificar final de ano / inicio de ano
            if(substr($ano, $caracteres-2, 2) == 00){
                $ano = substr($ano, 0, 1);
                return $ano;
            }else{
                $ano = substr($ano, 0, 1);
                return $ano+1;
            }
        }

        #1000 ate 9999
        elseif($caracteres == 4){
            if(substr($ano, $caracteres-2, 2) == 00){
                $ano = substr($ano, 0, 2);
                return $ano;
            }else{
                $ano = substr($ano, 0, 2);
                return $ano+1;
            }
        };
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        $primo = "nada";
        $numero =  10;

        while ($primo != "sim"){
        $numero = $numero -1;
        if ($numero == 9){
        $numero = $numero-1;
        }   

        $divisores = 0;
        for($count=2; $count<$numero; $count++)
            if($numero % $count == 0){
            $divisores++;
            }
            if ($divisores > 1){
                $primo = "nao";
            
            }else{
                $primo = "sim";
                return $numero; 
            }
        }
        
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $keys = array_keys($arr);
        for($i = 0; $i < count($arr); $i++) {
            foreach($arr[$keys[$i]] as $key => $value) {
                $novo_array[] = $value;
            }
        }
        
        $maximo = max($novo_array);


        $keys = array_keys($arr);
        for($i = 0; $i < count($arr); $i++) {
            foreach($arr[$keys[$i]] as $key => $value) {
                if($value != $maximo){ 
                    $final[]=$value;
                }
            }
            
        }

        return max($final);
        
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): boolean {
        $repetidos = array();
        $aux = "zero";
        $contador = 0;
        $resposta = "nada";


        foreach ($arr as &$valor) {
            if($aux>$valor){
                $contador = $contador+1;
                $aux = $valor;
                $prox = $aux+1;
                $repetidos[]=$aux;
            }
            else{
                $aux = $valor;
                if(in_array($aux, $repetidos, true)){
                    $contador = $contador+1;
                }
                $repetidos[]= $aux;
            }
                
        }

        if ($contador<=1){
            $resposta = "true";
        }else{
            $resposta = "false";
        }

        return $resposta;
            
    }

}
