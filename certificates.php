<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body class="bg-body">
    <?php include "src/components/navbar.html" ?>

    <main class="mx-28 flex justify-between items-center flex-wrap">
        <?php 
            $data = array(
                array("title" => "Deep Learning Fundamental", "subtitle" => "Deep Learning Research Center UGM"),
                array("title" => "ML Competitive", "subtitle" => "RISTEK Universitas Indonesia"),
                array("title" => "ML For Beginner", "subtitle" => "Dicoding Indonesia"),
                array("title" => "JS Basic", "subtitle" => "Dicoding Indonesia"),
                array("title" => "Front-End for Beginner", "subtitle" => "Dicoding Indonesia"),
                array("title" => "ReactJS", "subtitle" => "Dicoding Indonesia"),
            );

            

            $idx = 1;
            foreach ($data as $row) {
                echo "<div class='w-4/12 flex flex-col' >";
                    // img
                    echo "<img height=150 width=280  src='" . "src/assets/certificates/" . $idx . ".png'" . "alt='" . $row["title"] . "'" . "/>";
                    echo "<div class='-space-y-1 mb-3'>";
                        // title
                        echo "<h3 class='text-slate-100 text-xl font-semibold poppins-semibold'>" . $row["title"] .  "</h3>";
                        // subitlte
                        echo "<h6 class='text-slate-300 text-xs'>" . $row["subtitle"] . "</h6>";
                    echo "</div>";
                echo "</div>";
                
                $idx++;
            }
        ?>
    </main>
</body>
</html>