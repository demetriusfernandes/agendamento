<?php include("../../config/config.php")?>
<?php include(DIRREQ."lib/html/header.php")?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));  ?>


        <div class="calendarUser">
                <form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
                        Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
                        Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
                        Nome Aluno: <input type="text" name="title" id="title"><br>
                        RA: <input type="text" name="description" id="description"><br>
                        Tempo de atendimento: 15min<br>
                        <input type="submit" value="Efetuar agendamento">
                </form>         
        </div>



<?php include(DIRREQ."lib/html/footer.php")?>