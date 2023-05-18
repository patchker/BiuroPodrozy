<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'top_login.php');
@$login = $_SESSION['login1'];
@$haslo = $_SESSION['haslo1'];
@$email = $_SESSION['email1'];

?>
   


    <div class="center">
        <img src="img/logo_text.png" width="300px" style="margin-left:150px;"><br>
        <h1>Rejestracja</h1>
    <form method="post" action="index.php?action=userinsert">
        
        <div class="txt_field">           
            <input type="text" name="username" required <?php if(!empty($login)) echo "value='$login'"?> />
                <span></span>
            <label>Nazwa użytkownika</label>
        
        </div>


        <div class="txt_field">

            <input type="text" name="email" required <?php if(!empty($email)) echo "value='$email'"?> />
            <span></span>
            <label>Email</label>

        </div>

        
        <div class="txt_field">
            
            <input type="password" name="password" value="" required/>
                <span></span>
            <label>Hasło</label>
            
        </div>
        

<?php //if (array_key_exists('password', $errors)): ?>
<!--    <label class="czerwony"><?php //echo $errors['password'] ?></label><?php //endif; ?>-->



        <div class="txt_field">

            <input type="password" name="password2" value="" required/>
            <span></span>
            <label>Powtórz hasło</label>

        </div>



      <br>
            <input type="submit" value="Zarejestruj">
            <div class="signup_link">
                Masz już konto? <a href="index.php?action=login">Zaloguj</a>
        </div>
        
    </form>
</div>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>

<?php
$_SESSION['login1'] = "";
$_SESSION['haslo1'] = "";
$_SESSION['email1'] = "";

?>