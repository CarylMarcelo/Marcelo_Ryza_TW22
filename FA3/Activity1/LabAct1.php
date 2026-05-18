<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted Contact List</title>
    <link rel="stylesheet" href="LabAct1.css">
</head>
<body>
<?php
$contacts = [
    ["name" => "S.Coups", "image" => "Scoups.jpg", "age" => "30", "birthday" => "August 8, 1995", "contact" => "09741852963"],
    ["name" => "Jeonghan", "image" => "Jeonghan.jpg", "age" => "30", "birthday" => "October 4, 1995", "contact" => "09123456789"],
    ["name" => "Joshua", "image" => "Joshua.jpg", "age" => "29", "birthday" => "December 30, 1995", "contact" => "09789456123"],
    ["name" => "Jun", "image" => "Jun.jpg", "age" => "29", "birthday" => "June 10, 1996", "contact" => "09753951741"],
    ["name" => "Hoshi", "image" => "Hoshi.jpg", "age" => "29", "birthday" => "June 15, 1996", "contact" => "09951852963"],
    ["name" => "Wonwoo", "image" => "Wonwoo.jpg", "age" => "29", "birthday" => "July 17, 1996", "contact" => "09246813579"],
    ["name" => "Woozi", "image" => "Woozi.jpg", "age" => "28", "birthday" => "November 22, 1996", "contact" => "09135798462"],
    ["name" => "Mingyu", "image" => "Mingyu.jpg", "age" => "28", "birthday" => "April 6, 1997", "contact" => "09775689412"],
    ["name" => "Minghao", "image" => "Minghao.jpg", "age" => "27", "birthday" => "November 7, 1997", "contact" => "09852456123"],
    ["name" => "Seungkwan", "image" => "Seungkwan.jpg", "age" => "27", "birthday" => "January 16, 1998", "contact" => "09741852639"]
];

usort($contacts, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $counter = 1;
            foreach ($contacts as $person): 
            ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td><?php echo ($person['name']); ?></td>
                    <td>
                        <img src="<?php echo ($person['image']); ?>" alt="Profile" class="profile-img">
                    </td>
                    <td><?php echo ($person['age']); ?></td>
                    <td><?php echo ($person['birthday']); ?></td>
                    <td><?php echo ($person['contact']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>