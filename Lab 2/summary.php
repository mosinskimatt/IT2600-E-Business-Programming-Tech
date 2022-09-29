<!DOCTYPE html>
<?php $name = $_GET['name'];
        $major = $_GET['major'];
        $fav = $_GET['fav_language'];
        $de1 = $_GET['vscode'];
        $de2 = $_GET['brackets'];
        $de3 = $_GET['othername'];?>
        

<html>
    <body>
    Hello <?php echo $name ?>.<br>
    Your major is <?php echo htmlspecialchars($major);?>.<br>
    Your favorite web language is <?php echo htmlspecialchars($fav);?>.<br>
    Your favorite IDE is 
    <?php echo htmlspecialchars($de1);?>
    <?php echo htmlspecialchars($de2);?>
    <?php if(isset($_GET['other'])){echo htmlspecialchars($de3);}?>

    
    
</body>
</html>

 
 

