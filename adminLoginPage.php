<?PHP
    include ("functions.php");
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Login Page
        </TITLE>
    </HEAD>
    <link rel="stylesheet" href="adminLogin.css">
    <script>

    </script>
    <BODY>
        <H1>
            ADMIN Login
        </H1>
        <FORM ID="adminLoginForm" METHOD="post" ACTION="adminLoginPage.php">
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

                </TR>
                <TR>
                    <TD>
                        <INPUT TYPE="submit" ClASS="button" NAME="login-btn" VALUE="Login">
                    </TD>
                    <TD>
                        <a href="adminRegister.php"> New User!</a>
                    </TD>
                </TR>
            </TABLE>
        </FORM>
    </BODY>
</HTML>