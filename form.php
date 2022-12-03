<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/formStyle.css">
    </head>

   

    <body>

        <div class="container">
            <h2 class="title" >Simple Form</h2>
            <form action="Data_Table.php" method="Post">
                <div class="name">
                <div>
                    <label for="firstname">First Name :</label><br/>
                    <input class="input" type="text" name="firstname" value="">
                </div>
                <div>
                    <label for="lastname">Last Name :</label><br>
                    <input class="input" type="text" name="lastname" value="">
                </div>
                </div>
                <div>
                    <label for="age">Age :</label><br>
                    <input class="input" type="number" name="age" >
                </div>
               
                <div>
                    <label for="school">School : </label><br>
                    <input class="input" type="text" name="school" value="">
                </div>

                <div class="radio">
                    <input class="" type="radio" name="gender" value="male">
                    <label for="gender">Male</label>
                </div>
                <div class="radio">
                    <input class="" type="radio" name="gender" value="female">
                    <label for="gender">Female</label>
                </div>

                <div>
                    <input class="button" type="submit">
                </div>

            </form>
        </div>
    
    </body>
</html>