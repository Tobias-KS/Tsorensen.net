<?php $firstIntro = "Hello please enter your name"; ?>
<?php $Name = " "; ?>
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
<button type="Return " onclick="window.location='{{ route("welcome") }}'" style = "background-color:#FFF447; color:#1A1A1A; padding: 20px 30px;">Home</button>
    <body style ="background-color:#696969"> 
        <center>

            <h1 style="color:#3EB595;font-family:Serif;"> {{ $UseThisIntro }}</h1>
            <label style="color:#3EB595";> Your name here </label>
            <input type = "text" id="name" name = name> 
            <button style = "background-color:#FFF447;color:#1A1A1A;"> submit </button>
        </center>
    </body>

</html>