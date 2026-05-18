<!DOCTYPE html>
<html>
<head>
    <title>Star Signs Directory</title>
    <link rel="stylesheet" href="StarSigns.css">
</head>
<body>

<h1>Star Signs Directory</h1>

<?php
$star_signs = array(
    array(
        "name" => "Aquarius",
        "image" => "ImagesSA2/Aquarius.jpg",
        "description" => "January 20 - February 18",
        "facts" => "Aquarius is known for being independent, humanitarian, and inventive. They love to think outside the box."
    ),
    array(
        "name" => "Aries",
        "image" => "ImagesSA2/Aries.jpg",
        "description" => "March 21 - April 19",
        "facts" => "Aries are courageous, determined, confident, and enthusiastic. They are natural leaders."
    ),
    array(
        "name" => "Cancer",
        "image" => "ImagesSA2/Cancer.jpg",
        "description" => "June 21 - July 22",
        "facts" => "Cancer is emotional, loyal, and sympathetic. They value family and home deeply."
    ),
    array(
        "name" => "Capricorn",
        "image" => "ImagesSA2/Capricorn.jpg",
        "description" => "December 22 - January 19",
        "facts" => "Capricorns are disciplined, responsible, and ambitious. They strive for success in their goals."
    ),
    array(
        "name" => "Gemini",
        "image" => "ImagesSA2/Gemini.jpg",
        "description" => "May 21 - June 20",
        "facts" => "Geminis are adaptable, curious, and outgoing. They love communication and social interactions."
    ),
    array(
        "name" => "Leo",
        "image" => "ImagesSA2/Leo.jpg",
        "description" => "July 23 - August 22",
        "facts" => "Leos are creative, passionate, and generous. They are natural performers and leaders."
    ),
    array(
        "name" => "Libra",
        "image" => "ImagesSA2/Libra.jpg",
        "description" => "September 23 - October 22",
        "facts" => "Libras are diplomatic, charming, and fair-minded. They seek balance and harmony."
    ),
    array(
        "name" => "Pisces",
        "image" => "ImagesSA2/Pisces.jpg",
        "description" => "February 19 - March 20",
        "facts" => "Pisces are compassionate, artistic, and intuitive. They have a deep emotional nature."
    ),
    array(
        "name" => "Sagittarius",
        "image" => "ImagesSA2/Sagittarius.jpg",
        "description" => "November 22 - December 21",
        "facts" => "Sagittarius is adventurous, optimistic, and independent. They love exploring new ideas and places."
    ),
    array(
        "name" => "Scorpio",
        "image" => "ImagesSA2/Scorpio.jpg",
        "description" => "October 23 - November 21",
        "facts" => "Scorpios are brave, resourceful, and passionate. They are intense and deeply emotional."
    ),
    array(
        "name" => "Taurus",
        "image" => "ImagesSA2/Taurus.jpg",
        "description" => "April 20 - May 20",
        "facts" => "Taurus is reliable, patient, and practical. They enjoy comfort, beauty, and stability."
    ),
    array(
        "name" => "Virgo",
        "image" => "ImagesSA2/Virgo.jpg",
        "description" => "August 23 - September 22",
        "facts" => "Virgos are analytical, kind, and hardworking. They have an eye for detail and love organization."
    )
);

// Sort alphabetically by name
usort($star_signs, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>

<table>
    <tr>
        <th colspan="4" class="title">Star Signs</th>
    </tr>

    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php
    foreach ($star_signs as $sign) {
        echo "<tr>";
        echo "<td><img src='" . $sign["image"] . "' alt='" . $sign["name"] . "'></td>";
        echo "<td class='sign-name'>" . $sign["name"] . "</td>";
        echo "<td class='description'>" . $sign["description"] . "</td>";
        echo "<td class='facts'>" . $sign["facts"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>