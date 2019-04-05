<?PHP
    include ("functions.php");
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Login Page
        </TITLE>
        <?php require_once('stylesheetImport.php'); ?>
	</HEAD>
    <BODY>
		  <div class="content">
			<div id="pageContent">
				<H1>
					ADMIN Login
				</H1>
				<FORM ID="adminLoginForm" METHOD="post" ACTION="adminLoginCheck.php">
					<TABLE ID="loginTab">
						<TR>
							<TD>
								Username:
							</TD>
							<TD>
								<INPUT TYPE="text" NAME="username" PLACEHOLDER="User Name!" required>
							</TD>
						</TR>
						<TR>
							<TD>
								Password:
							</TD>
							<TD>
								<INPUT TYPE="password" NAME="password" PLACEHOLDER="Password!" required>
							</TD>
						</TR>
						<TR>

						</TR>
						<TR>
							<TD>
								<INPUT TYPE="submit" ClASS="button" NAME="login-btn" VALUE="Login">
							</TD>
						</TR>
					</TABLE>
				</FORM>
			</div>
		</div>
    </BODY>
</HTML>
