<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

    <body>
        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
        Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo. -->

        <?php 

        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maxime, pariatur tempora aspernatur minima quam impedit nulla alias maiores amet autem error doloribus minus, quos veritatis suscipit omnis veniam animi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet voluptate quia provident est excepturi earum explicabo dicta aliquam iure, praesentium laboriosam eum distinctio aliquid vero. Perferendis rerum debitis quam architecto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quas ipsam, reprehenderit nihil numquam nam laborum alias modi earum maiores at beatae dicta enim perspiciatis. Molestiae sunt necessitatibus voluptatibus eius?";

        $explodingParagraph = explode(".", $paragraph);

        echo "<h1>" . $paragraph . "</h1>";

        foreach ($explodingParagraph as $newParagraph) {
            echo "<br>" . $newParagraph . "<br>";
        }

        ?>

    </body>
    
</html>