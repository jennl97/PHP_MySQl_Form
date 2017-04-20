<!DOCTYPE html>
<html>
<head>
   <title>PHP/MySQl Form from hell</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<header>
    <h1>Jenn's Inventory Pick List</h1>
    </header>
<body>
    <?php require "./iplphp.php"; ?>
    <div><form action="./iplphp.php" method="post">
        <fieldset>
            <input type="submit" value="Test Db Connection"/>
        </fieldset>
    </form></div>
    <div class="container">
        <h2>Please enter the following:</h2>
    </div>
    
    <form action="./iplsubmit.php" method="post">
    <fieldset>
        <label for="order_number">ORDER NUMBER:</label>
        <input type="text" name="order_number" size="20" /><br>
        
        <label for="sku">SKU:</label>
        <input type="text" name="sku" size="20"><br>
        
        <label for="pick_qty">PICK QTY:</label>
        <input type="number" name="pick_qty" size="20"><br>
        
        <label for="qty_avaliable">QTY AVALIABLE:</label>
        <input type="number" name="qty_avaliable" size="20"><br>
        
        <label for="item_description">ITEM DESCRIPTION:</label>
        <input type="text" name="item_description" size="20"><br>
        
        <label for="unit">UNIT:</label>
        <input type="text" name="unit" size="20"><br>
        
        <label for="bin_number">BIN NUMBER</label>
        <input type="text" name="bin_number" size="20"><br>
        
        <label for="location">LOCATION:</label>
        <input type="text" name="location" size="20"><br>
        
   <div>
        <input type="submit" value="Submit">
        <input type="submit" value="Clear">
       </div>
        </fieldset>
        </form>
    
    </body>

<footer></footer>


</html>