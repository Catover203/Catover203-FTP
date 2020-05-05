<?php
$req_ssl = 0;

if ($req_ssl == 0)
{
echo header('Location: http://');
}
else
{
echo header('Location: https://');
}
?>