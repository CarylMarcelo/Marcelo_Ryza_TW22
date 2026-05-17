<?php
    $title = "Services Page";
    $header = "THIS PAGE SHOWS OUR SERVICES";
    
    include('include/header.php');
    include('include/navigation.php');
?>

<main class="main-content">
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, tempora commodi veniam veritatis quasi placeat, numquam doloremque similique repellat nisi dolore incidunt animi cum! Deserunt ab minus id sequi repudiandae?</p>

        <p>
            <?php
            $string = "The, quick, brown fox jumped over the lazy dogs.";
            $array = explode(',', $string);
            print_r($array);
            ?>
        </p>
    </div>
</main>

<?php include('include/footer.php'); ?>