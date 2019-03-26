<?php
    include ( 'header.php');
    include ( 'functions.php');
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Register Page
        </TITLE>
    </HEAD>
    <link rel="stylesheet" href="adminLogin.css">
    <script>

    </script>
    <BODY>
        <H1>
            ADMIN Register Page
        </H1>
        <P>
        <FORM ID="adminRegisterForm" METHOD="post" ACTION="adminLoginPage.php">
            <TABLE ID="loginTab">
                <TR>
                    <TD>
                        Username:
                    </TD>
                    <TD>
                        <INPUT TYPE="text" NAME="username" PLACEHOLDER="User Name!">
                    </TD>
                </TR>
                <TR>
                    <TD>
                        Password:
                    </TD>
                    <TD>
                        <INPUT TYPE="text" NAME="password" PLACEHOLDER="Password!">
                    </TD>
                </TR>
                <TR>
                    <TD>
                        First Name:
                    </TD>
                    <TD>
                        <INPUT TYPE="text" NAME="firstName" PLACEHOLDER="First Name!">
                    </TD>
                </TR>
                <TR>
                    <TD>
                        Last Name:
                    </TD>
                    <TD>
                        <INPUT TYPE="text" NAME="lastName" PLACEHOLDER="Last Name">
                    </TD>
                </TR>
                <TR>

                </TR>
                <TR>
                    <TD>
                        <INPUT TYPE="submit" ClASS="button" NAME="register-btn" VALUE="Register">
                    </TD>
                </TR>
            </TABLE>
        </FORM>
        </P>
    </BODY>
</HTML>