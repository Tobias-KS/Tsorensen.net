<?php $firstIntro = "Hello please enter your name"; ?>
<?php $Name = " "?>
<?php $SecondIntro = "Hello $Name its nice to meet you!"; ?>
<?php $UseThisIntro = "Hello please enter your name"; ?>
<?php if ($Name == " ") {
    $UseThisIntro == $firstIntro;
} 
else {
    $UseThisIntro == $SecondIntro;
} ?>
<!DOCTYPE html>
<html>
<button type="Return " onclick="window.location='{{ route("welcome") }}'" style = "background-color:brown; color:black; padding: 20px 30px;">Home</button>
    <body style ="background-color:#7ea3a3"> 
        <center>

            <h1 style="color:blue;font-family:Serif;"> {{ $UseThisIntro }}</h1>
            <label> Your name here </label>
            <input type = "text" id="name" name = name> 
        </center>
    </body>

</html>