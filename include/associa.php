<?php
$array = [
    [
        "id" => 1,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 2,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 3,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 4,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 5,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 6,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],
    [
        "id" => 7,
        "username" => 'mohamed el mezouari',
        "email" => 'mohamed el mezouari@gmail.com',
        "phone" => '06313223',
        "date" => "08/Dec/2022",
    ],

]

?>

<tr>
    <?php foreach ($array as $key => $value) : ?>
        <td><img src="pexels-photo-2379004 1.png" alt=""></td>
        <td><?php echo $value["username"] ?></td>
        <td><?php echo $value["email"] ?></td>
        <td><?php echo $value["username"] ?></td>
        <td><?php echo $value["phone"] ?></td>
        <td><?php echo $value["date"] ?></td>
        <td><a href=""><i class="bi bi-pencil fs-5 text-info"></i></a> <a href="" class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a></td>
</tr>

<?php endforeach  ?>