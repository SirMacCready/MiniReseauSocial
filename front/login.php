<?php include 'header.php' ?>
<link rel="stylesheet" href="styles/login_signup.css">


<div class="login_signup_supercontainer">
    <div class="login_signup_container">
        <h1>Connexion</h1>

        <form class="login_signup">
            <div class="row">
                <input name="name" type="text" class="inputText" placeholder="Pseudo ou Email" required>
            </div>
            <div class="row">
                <input name="password" type="password" class="inputText" placeholder="Mot de passe" required>
            </div>

            <input type="submit" class="Submitbutton" value="Connexion">

        </form>


    </div>
</div>
<?php include 'footer.php' ?>