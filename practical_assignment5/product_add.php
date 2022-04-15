<!DOCTYPE html>
<html>
    <head>
        <title>
            Product add
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="bg-primary text-white p-3">
                Product add
            </h1>
            



            <!--
                Create the PHP code as well as the product registration form
                Every new product should be added to a $_SESSION["products"]
                variable as an associative array.
                
                You must also use $_POST to get the values of all fields in the form
                so these can be added to the array
            -->

            


            


            <form action="product_list.php" method="post">
            <div>
                <label for="txtProductName">Product name</label>
                <input id="txtProductName" name="name" class="form-control">
            </div>
            <div>
                <label for="txtProductPrice">Product price</label>
                <input id="txtProductPrice" name="price" type="number" class="form-control">
            </div>
            <div>
                <label for="txtProductDescription">Product description</label>
                <input id="txtProductDescription" name="description" class="form-control">
            </div>
            <div>            
                <button type="submit" class="btn btn-primary">Add product</button>
            </div>
        </form>

        
            



        </div>


    </body>
</html>
