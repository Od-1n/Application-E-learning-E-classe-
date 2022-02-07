<?php

//get json content
$data = file_get_contents("user.json");


$convertable = json_decode($data,true);

?>

    <?php foreach ($convertable as $user):?>
    <tr>
       
        <td><?php echo $user["name"] ?></td>
        <td><?php echo $user["payment_schedule"] ?></td>
        <td><?php echo $user["amount_paid"] ?></td>
        <td><?php echo $user["balance_amount"] ?></td>
        <td><?php echo $user["date"] ?></td>
        <td><i class="bi bi-eye fs-4 text-info eye-btn"></i></td>
</tr>

<?php endforeach  ?>