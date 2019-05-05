<?PHP
    include ("functions.php");
	require_once('dbConnection.php');
	include('Session.php');
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Home Page
        </TITLE>
         <?php require_once('stylesheetImport.php'); ?>
    </HEAD>
    <BODY>
	  <div class="content">
		  <H1 class="admin">
            ADMIN Home Page
		
			<FORM ID="adminLogoutForm" METHOD="post" ACTION="adminHomePage.php">
				<INPUT TYPE="submit" CLASS="button" NAME="logout-btn" VALUE="Logout" style="float:right; background-color:red; color: white"/>
			</FORM>
			</H1>
			<br/>
			<br/>
			
		<div id="adminForms">
			<input type="button" class="button" name="FAQPage" value="New FAQ" style="align:center" onclick="location.href = 'adminFAQPage.php'" />
			<input type="button" class="button" name="DocPage" value="Upload Document" style="align:center" onclick="location.href = 'adminDocUpload.php'" />
			<input type="button" class="button" name="LinkUploadBtn" value="Upload Link" onclick="location.href = 'adminLinkUpload.php'" />
			<input type="button" class="button" name="DocUpdateBtn" value="Update Document" onclick="location.href = 'adminDocUpdate.php'" />
		</div>
	  </div>
    </BODY>
</HTML>
