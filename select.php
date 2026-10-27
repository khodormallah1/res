<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <img src="https://raw.githubusercontent.com/MichaelZhou334/Hotel-Landing-Page/main/images/logo.jpeg" alt="logo image"></a>




    </header>
    <br>

    <h3>products list</h3>

    <table border="1" class="table table-striped">

        <tr>

            <th>categore</th>
            <th>price</th>


        </tr>


        <?php

        require 'config.php';
        $i = 0;
        $qry = "select *from products";
        $run = $con->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {
                $ID = $row['ID'];


        ?>
                <tr>
                   
                    <td><?php echo $row['categore'] ?></td>

                    <td><?php echo $row['price'] ?></td>


                    <td><a href="edit.php?ID=<?php echo $ID;   ?>"><img src="1827933.png" alt="" class="icon">up</a> |
                        <a href="delete.php?ID=<?php echo $ID;   ?>" onclick="return confirm('are you sure?')"><img src="delete.png" alt="" class="icon">del</a>


                </tr>

        <?php

            }
        }


        ?>
        <?php

        ?>

    </table>
    <hr>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>



</body>

</html>