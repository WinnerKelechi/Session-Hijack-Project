<div>

    <center>
        <hr>
        <h1 style="color:blue; font-size:40px; letter-spacing:150">WELCOME</h1>
        <hr>
        <h2>A MODEL OF SESSION HIJACK, DETECTION AND CONTROL IN CLOUD COMPUTING. A B.Sc. PROJECT BY <br><span style="color:pink">ISAIAH, MARY-CYNTHIA INIOBONG</span></h2>
        <hr>
    </center>


</div>

<form name="login-form" id="login-form" method="post" action="<?php echo " login.php"; ?>">
    <fieldset>
        <legend>Please login:</legend>
        <dl>
            <dt>
                <label title="Username">Username:
                    <input tabindex="1" accesskey="u" name="username" type="text" maxlength="50" id="username" />
                </label>
            </dt>
        </dl>
        <dl>
            <dt>
                <label title="Password">Password:
                    <input tabindex="2" accesskey="p" name="password" type="password" maxlength="15" id="password" />
                </label>
            </dt>
        </dl>
        <dl>
            <dt>
                <label title="Submit">
                    <input tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Login" />
                </label>
            </dt>
        </dl>
        <a href="register.php" style="color:blue">register here!</a>
    </fieldset>
</form>
