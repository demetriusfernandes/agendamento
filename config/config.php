<?php
#Caminhos absolutos
$dirInt="git/agendamento/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}"); 
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

// echo DIRPAGE.'<br>'.DIRREQ;

#Banco de Dados
define('HOST','localhost');
define('DB','rem_flf_sisdev');
define('USER','root');
define('PASS','');

#Incluir arquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');