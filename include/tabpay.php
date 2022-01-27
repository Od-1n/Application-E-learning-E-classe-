<?php
$tableau = [
    [
        "id" => 1,
        "First" => 'test',
        "last" => 'test@gmail.com',
        "handle" => 'test',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 2,
        "First" => 'test1',
        "last" => 'test1@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 3,
        "First" => 'test2',
        "last" => 'test2@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 4,
        "First" => 'test2',
        "last" => 'test2@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 5,
        "First" => 'test3',
        "last" => 'test3@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 6,
        "First" => 'test4',
        "last" => 'test4@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 7,
        "First" => 'test5',
        "last" => 'test5@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],

]
?>

<?php foreach ($tableau as $key => $value) : ?>
    <tr>
        <td><?php echo $value['First'] ?></td>
        <td><?php echo $value['last'] ?></td>
        <td><?php echo $value['handle'] ?></td>
        <td><?php echo $value['handle'] ?></td>
        <td><?php echo $value['handle'] ?></td>
        <td><i class="bi bi-eye fs-4 text-info eye-btn"></i></td>
    </tr>
<?php endforeach ?>