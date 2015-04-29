function eliminar(pos)
{
    if(confirm("Desea borrar el registro?"))
        location.href="eliminar.php?id="+pos;
    else
        return false;
}
function modificar(pos)
{
    if(confirm("Desea cambiar los datos"))
        location.href="modificar.php?id="+pos;
    else
        return false;
}