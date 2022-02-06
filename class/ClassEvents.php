<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #Trazer os dados de eventos do banco
    public function getEvents()
    {
        $b=$this->conectDB()->prepare("select * from rem_flf2022");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    #Criação da consulta no banco
    public function createEvent($id=0,$aluno,$tel,$email,$matricula,$curso,$atendente,$deletado,$ativo,$title,$description,$color='blue',$start,$end,$startRecur,$startTime,$endTime,$backgroundColor,$daysOfWeek,$status)
    {
        $b=$this->conectDB()->prepare("insert into rem_flf2022 values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $aluno, \PDO::PARAM_STR);
        $b->bindParam(3, $tel, \PDO::PARAM_STR);
        $b->bindParam(4, $email, \PDO::PARAM_STR);
        $b->bindParam(5, $matricula, \PDO::PARAM_STR);
        $b->bindParam(6, $curso, \PDO::PARAM_STR);
        $b->bindParam(7, $atendente, \PDO::PARAM_STR);
        $b->bindParam(8, $deletado, \PDO::PARAM_INT);
        $b->bindParam(9, $ativo, \PDO::PARAM_INT);
        $b->bindParam(10, $title, \PDO::PARAM_STR);
        $b->bindParam(11, $description, \PDO::PARAM_STR);
        $b->bindParam(12, $color, \PDO::PARAM_STR);
        $b->bindParam(13, $start, \PDO::PARAM_STR);
        $b->bindParam(14, $end, \PDO::PARAM_STR);
        $b->bindParam(15, $startRecur, \PDO::PARAM_STR);
        $b->bindParam(16, $startTime, \PDO::PARAM_STR);
        $b->bindParam(17, $endTime, \PDO::PARAM_STR);
        $b->bindParam(18, $backgroundColor, \PDO::PARAM_STR);
        $b->bindParam(19, $daysOfWeek, \PDO::PARAM_STR);
        $b->bindParam(20, $status, \PDO::PARAM_STR);
        $b->execute();
        
        
        
        
        
        
        
    }

} #fim ClassEvents