<?php
include("../Model/model.php");

if(isset($_POST['input'])){
    $input =$_POST['input'];

    $connection = new db();
    $conobj=$connection->opencon();
    $userQuery=$connection->Search($input,"nurse",$conobj);
    if ($userQuery->num_rows > 0) 
    {
        ?>
        <div class="Section">
        <table class="table table-bordered table-striped mt-4">
        <thead>
        <tr>
           <th>&nbsp;&nbsp;NAME&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;ID&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;HOSPITAL&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;DUTY TIME&nbsp;&nbsp;</th>
           <th>&nbsp;&nbsp;PHONE&nbsp;&nbsp;</th>
           <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $userQuery->fetch_assoc()){
            $name=$row["nname"];
            $id=$row["nID"];
            $hospital=$row["hospital"];
            $duty=$row["duty_time"];
            $phn=$row["phn"];

            ?>


            <tr>
                <td>&nbsp;&nbsp;<?php echo $name; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $id; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $hospital; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $duty; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $phn; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<button type="button" class="btn btn-primary">Call now</button>&nbsp;&nbsp;</td>
            </tr>

            <?php

        }
        ?>
        </tbody>
        </table>
        <?php
    } else{
        ?>
        <td>No data founded</td><?php
    }?>
    </div>
    <?php
}

?>