<?PHP
    include ("functions.php");
	require_once('dbConnection.php');
	include('Session.php');
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Document Upload Page
        </TITLE>
         <?php require_once('stylesheetImport.php'); ?>
    </HEAD>
    <BODY>
	  <div class="content">
		  <H1 class="admin">
            ADMIN Document Upload Page
		
			<FORM ID="adminLogoutForm" METHOD="post" ACTION="adminHomePage.php">
				<INPUT TYPE="submit" CLASS="button" NAME="logout-btn" VALUE="Logout" style="float:right; background-color:red; color: white"/>
			</FORM>
			</H1>
			<br/>
			<br/>
			<input type="button" class="button" name="AdminHomeBtn" value="Return to Home" onclick="location.href = 'adminHomePage.php'" />
			<input type="button" class="button" name="DocUpdateBtn" value="Update Document" onclick="location.href = 'adminDocUpdate.php'" />
		<div id="adminForms">
			<?php
				echo pagesDropdown();
			?>
			<br/>
			Page with document uploader
		</div>
	  </div>
    </BODY>
</HTML>
