<?php
class Wrapper
{
    public $_stringVar;
    public $_columnVar = 20;
    
    public function __construct($_stringVar, int $_columnVar)
    {
        $this->_stringVar = $_stringVar;
        $this->_columnVar = $_columnVar;
    }
    
    public function resultWrap($_stringVar, int $_columnVar)
    {
        
        $totalLength = strlen($_stringVar);
        $nbrPart     = ceil($totalLength / $_columnVar);
        
        
        $offset  = 0;
        $result2 = '';
        
        $part = substr($_stringVar, $offset, $_columnVar);
        
        //find last char of part
        $lastChar = substr($part, -1);
        
        
        
        
        do {
            
            $_columnVarTemp = $_columnVar + 1; //on prend un caractere de plus au cas ou c'est un espace
            
            
            do {
                $_columnVarTemp--;
                
                $part     = substr($_stringVar, $offset, $_columnVarTemp);
                $lastChar = substr($part, -1);
                
                
                $partLength = strlen($part);
                
                
                
                
            } while (!ctype_space($lastChar)); //tant que le caractere n'est pas un espace
            
            $offset += $partLength;
            
            $result2 .= $part . '</br>';
            
            
            
            
            
        } while (($totalLength - $offset) > $_columnVar);
        
        //sortir les derniers caractères
        $lastCharPosition = $totalLength - $offset;
        $lastChar         = substr($_stringVar, -$lastCharPosition);
        $result2          = $result2 . $lastChar;
        
        echo $result2;
        
        
        
    }
}

?> 