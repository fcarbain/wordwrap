<?php

$result = '';

$_stringVar = "

 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum tellus quis sapien vestibulum molestie. Morbi rhoncus magna sit amet turpis rhoncus lacinia rutrum nec metus. Nunc vulputate leo sed ex dapibus pellentesque. Pellentesque interdum, ex sed aliquam semper, nunc lectus scelerisque ante, commodo interdum ante est quis ante. Curabitur ac diam sed metus volutpat semper. Curabitur tempus felis elit, id mollis ligula malesuada eu. Sed porttitor libero eu mauris accumsan, id consequat sapien sodales. Nunc vel lacinia turpis. Pellentesque sit amet neque a neque tincidunt efficitur.
 
 Phasellus facilisis elementum volutpat. Nam faucibus, orci a pharetra elementum, nulla ipsum faucibus nisi, et luctus mi dui at turpis. Quisque ultricies bibendum gravida. Donec fringilla eleifend quam, non dapibus est tempus nec. Proin vehicula ac neque a consequat. Nam luctus, dolor vitae sodales sodales, turpis sem gravida sem, nec sodales dui dui ut turpis. Donec mollis pharetra facilisis. Aliquam id interdum metus. Vestibulum venenatis ut elit quis luctus.
 
 Curabitur lobortis arcu sed tempor tincidunt. Donec at ullamcorper mi, nec ornare felis. Phasellus non ex vel neque congue scelerisque. Curabitur non faucibus turpis. Quisque nibh velit, fringilla ac purus non, rhoncus accumsan purus. Sed egestas viverra libero, vitae tincidunt metus blandit in. Aliquam tincidunt, lorem et sodales bibendum, leo nunc gravida ligula, a ornare lorem ipsum nec ipsum. In ultricies, ex rhoncus auctor faucibus, leo eros varius libero, id sodales sapien tellus in arcu. Donec eget ex ac enim condimentum pulvinar gravida nec metus. Phasellus convallis massa eros, id vulputate tortor fringilla quis. Sed bibendum, enim sit amet eleifend ornare, sapien sem aliquam mauris, eu eleifend velit diam vel odio. Etiam aliquam enim in pulvinar tristique.
 
 Integer vitae pulvinar eros. Integer aliquam massa cursus erat bibendum suscipit. Donec rhoncus leo sollicitudin metus sagittis venenatis. Fusce dignissim mattis turpis, id viverra ante vulputate quis. Aenean felis magna, pellentesque non diam a, fermentum rhoncus ante. Integer blandit imperdiet massa, sed feugiat lacus fermentum sed. Suspendisse tempor quis diam in tincidunt. Aliquam erat sem, feugiat nec sem at, eleifend bibendum risus. Phasellus suscipit porta tellus eget tristique. Maecenas pretium viverra nunc, et pellentesque mi ultrices eget. Mauris id sagittis erat. In nisi erat, mollis et arcu ut, iaculis aliquet magna. Vivamus massa felis, lobortis quis risus ac, varius finibus metus. Ut at orci fringilla, dignissim massa vitae, posuere odio. Sed et tincidunt lorem. Vestibulum vitae erat et eros varius tincidunt id id dui.
 
 Fusce nec risus nec dolor semper venenatis quis non eros. Nam ac odio commodo, fringilla quam sed, hendrerit ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum risus velit, facilisis in consectetur ac, fermentum volutpat lacus. Nunc fringilla sapien ac pellentesque efficitur. Phasellus est diam, ornare in molestie quis, faucibus vel mauris. Maecenas eleifend congue tellus eu porta. ";

//set minimum to 20
$_columnVar = 20;


$totalLength = strlen($_stringVar);
$nbrPart     = ceil($totalLength / $_columnVar);

echo '$nbrPart' . $nbrPart;
echo '$totalLength' . $totalLength;

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
    $result .= $part . '<br/>';
    $result2 .= $part . '</br>';
    
} while (($totalLength - $offset) > $_columnVar);

//sortir les derniers caractères
$lastCharPosition = $totalLength - $offset;
$lastChar         = substr($_stringVar, -$lastCharPosition);
$result2          = $result2 . $lastChar;

echo '<br/><br/><br/><br/><br/><br/>' . $result2;


?> 