/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function votar(pos)
{
    
   
        location.href="votar.php?id="+pos;
   
}
function modificar(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificar.php?id="+pos;
    else
        return false;
}

