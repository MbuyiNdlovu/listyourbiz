<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if(!function_exists("pullimage"))
{
    function pullimage($imagename)
    {
        return "<img width='100%' height='30%' src='/criticize2/images/".$imagename.".png'>";
    }
}
?>
