<?php
      function hydrater(array $donne ){
         foreach($donne as $cle=>$value){
             $methode="set".ucfirst($cle);
             if(method_exists($this,$methode)){
                $this-> $methode("$value");
             }
         }
    }