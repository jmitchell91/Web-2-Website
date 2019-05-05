<?php
include ("functions.php");
require_once('dbConnection.php');
include('Session.php');

?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Link Upload Page
        </TITLE>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
         <?php require_once('stylesheetImport.php'); ?>
    </HEAD>
    <BODY>
	  <div class="content">
		  <H1 class="admin">
            ADMIN Link Upload Page
			<FORM ID="adminLogoutForm" METHOD="post" ACTION="adminHomePage.php">
				<INPUT TYPE="submit" CLASS="button" NAME="logout-btn" VALUE="Logout" style="float:right; background-color:red; color: white"/>
			</FORM>

			</H1>
			<br/>
			<br/>
			<input type="button" class="button" name="AdminHomeBtn" value="Return to Home" onclick="location.href = 'adminHomePage.php'" />
			<input type="button" class="button" name="DocUploadBtn" value="Upload Document" onclick="location.href = 'adminDocUpload.php'" />
			<input type="button" class="button" name="DocUpdateBtn" value="Update Document" onclick="location.href = 'adminDocUpdate.php'" />
		<div id="adminForms">

            <form id = "fileUploaderForm" action=" " method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            Input Link:
                        </td>
                        <td>
                            <input id="uploadPDF" type="text" required="required" name="upload"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Select Page:
                        </td>
                        <td>
                            <?php echo pagesDropdown()?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            File Name:
                        </td>
                        <td>

                            <input type="text" name="fileName" required="required">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Short Description:
                        </td>
                        <td>

                            <input type="text" name="shortDescription" required="required">

                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <input type="submit" class="button " name="uploadButton" value="Upload Link" >
                        </td>
                    </tr>
                </table>
            </form>
		</div>
	  </div>
    </BODY>
</HTML>
<?PHP

    if (isset($_POST['uploadButton'])) {
        $file_name = e($_POST["fileName"]);
        $file_desc = e($_POST["shortDescription"]);
        $file_pageToGo = e($_POST['Pages']);
		$link_path = e($_POST["upload"]);
        // check for uploaded file
        if (isset($_POST['upload'])) {

            // uploding file
			// connect to database
			global $connection;
			// query

			$procedureQuery = "CALL  Web2DB.AddDocument('$file_name',  '$file_desc' , '$link_path')";
			$procedureQuery2 = "CALL Web2DB.UpdateFiles_to_Path('$file_name', '$file_pageToGo')";
			// run query
			$runProcedureQuery = mysqli_query($connection, $procedureQuery);
			$runProcedureQuery2 = mysqli_query($connection, $procedureQuery2);
			if (mysqli_affected_rows($connection) === 1) {
				echo "<script type='text/javascript'>alert('Sucess!') </script>";
			} else
				echo "<script type='text/javascript'>alert('Error!')</script>";
        }
    } else
        echo "<script type='text/javascript'>alert('Please paste a link!')</script>";

?>