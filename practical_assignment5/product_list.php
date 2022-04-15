<!DOCTYPE html>
<html>
    <head>
        <title>
            Product list
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="bg-primary text-white p-3">
                Product list
            </h1>
            <form action="product_add.php">
            <br>
            <div>
            <button type="submit" class="btn btn-primary" onclick="product_add.php">
                Add product
            </button>
            </div>
            <br>
            </form>
            



            <?php

            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $products = array();



            session_start();

            if(isset($_SESSION["products"])){
                $products = $_SESSION["products"];
            };


            if(isset($_POST["name"])){
                array_push($products,array(
                    "productName" => $_POST["name"],
                    "productDescription" => $_POST["description"],
                    "productPrice" => $_POST["price"],
                    
                    
                ));
            };

            if(isset($_POST["key"])){
                array_splice($products, intval($_POST["key"]), 1);
            };



            $_SESSION["products"] = $products;

            //unset($_SESSION["products"])

            $_SESSION["name"] = $name;
            $_SESSION["price"] = $price;
            $_SESSION["description"] = $description;



            ?>

            
            <table class="table table-dark">

                    <thead>

                        <tr>

                            <th>

                                Product name

                            </th>

                            <th>

                                Product price

                            </th>

                            <th>

                                Product description

                            </th>

                        </tr>

                    </thead>

                    <tbody >

                        <?php

                       foreach ($products as $product):                       

                    ?>
                    <td>
                        <?php echo $product["productName"]; ?>
                    </td>
                    <td>
                        <?php echo $product["productPrice"]; ?>
                    </td>
                    <td>
                        <?php echo $product["productDescription"]; ?>
                    </td>
                    <td>
                        <form action="product_list.php" method="post">
                            <input type="hidden" name="key" value="<?= $key?>">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                    <tr>
                        <?php
                            endforeach;
                        ?>
                    </tr>


            </table>
            <!--
                Add the PHP code as well as the table
                that iterates all products in $_SESSION["products"]
                Every time a new product gets added via product_add.php, it should
                be display on this table.
                
                You should also implement the PHP logic to delete the selected product
                from $_SESSION["products"]. You could use something like:
                
                foreach ($products as $key => $product)
                
                in order to retrieve the key of the element that needs to be deleted.
                The "Delete" button should be inside of a POST form that sends the key
                of the element to be deleted.
                
            -->

            


        </div>
    </body>
</html>
