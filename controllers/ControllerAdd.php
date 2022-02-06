<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();

#coletar e inserir dados no DB
$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$id=0;
$aluno="Demétrius Fernandes";
$tel="88998883345";
$email="teste@gmail.com";
$matricula="22334495";
$curso="Direito";
$atendente="Diego";
$deletado=0;
$ativo=1;
$description=filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$title= 'RA: '.$description.' - '.filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$horasAtendimento= 15;
$end= '';
$color="blue";
$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));
$startRecur='';
$startTime='';
$endTime='';
$backgroundColor='blue';
$daysOfWeek='';
$status='Andamento';
$objEvents->createEvent(
$id,
$aluno,
$tel,
$email,
$matricula,
$curso,
$atendente,
$deletado,
$ativo,
$title,
$description,
$color,
$start->format("Y-m-d H:i:s"),
$start->modify('+'.$horasAtendimento.'minutes')->format("Y-m-d H:i:s"),
$startRecur,
$startTime,
$endTime,
$backgroundColor,
$daysOfWeek,
$status
);

echo "<a href=/git/agendamento/views/user>Voltar</a>";