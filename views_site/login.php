<?php
include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views_site' . DIRECTORY_SEPARATOR . 'top_login.php');
@$login = $_SESSION['login2'];

?>
    



    <div class="center">
    <img src="img/logo_site.png"  height=" 60" ><br>
        <h1>Logowanie</h1>

        <?php
        if(@$_SESSION['reg_successful2']==1)
        {
            echo "<h3 style='text-align: center'>Rejestracja przebiegła pomyślnie. Możesz się zalogować</h3>";
            $_SESSION['reg_successful2']=0;
        }


        ?>


    <form method="post" action="site.php?action=login">
        
        <div class="txt_field">           
            <input type="text" name="username"  required <?php if(!empty($login)) echo "value='$login'"?> />
                <span></span>
            <label>Nazwa użytkownika</label>
        
        </div>

            

        
        <div class="txt_field">
            
            <input type="password" name="password" value="" required/>
                <span></span>
            <label>Hasło</label>
            
        </div>
        





        <span id="errr">
            <?php

            if (array_key_exists('all', $errors)): ?>
                <label class="czerwony"><?php echo $errors['all'] ?></label><?php endif; ?>
        </span>
<br>
        


      <br>
      
            <input type="submit" value="Zaloguj">
            <div class="signup_link">
                Nie masz konta?

                <a href="site.php?action=register">Zarejestruj</a>

        </div>
        
    </form>
</div>
<?php include(_ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'bottom.php'); ?>
<?php
$_SESSION['login2']="";
?>
