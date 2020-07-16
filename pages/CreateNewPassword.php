<?php
    require "Header.php"
?>

    <main>
        <div class="main-wrappe">
            <section class="default-section">
                <?php
                    $selector = $_GET["selector"];
                    $validator = $_GET["validator"];
                    
                    if (empty($selector) || empty($validator)) {
                        echo "Could not validate your request!";
                    }
                    else {
                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                            ?>

                            <form action="../php/ResetPassword.php" method="post">
                                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                                <input type="password" name="pwd" placeholder="Enter a new password">
                                <input type="password" name="pwd_repeat" placeholder="Confirm new password">
                                <button type="submit" name="reset_password_submit">Reset password</button>
                            </form>

                            <?php
                        }
                    }
                ?>
            </section>        
        </div>r
    </main>

<?php
    require "Footer.php"
?>