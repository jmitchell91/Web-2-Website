<?PHP
    include ("functions.php");
	require_once('dbConnection.php');
	include('Session.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = e($_POST["fileName"]);
    $file_desc = e($_POST["shortDescription"]);
    // check for uploaded file
    if (isset($_FILES['upload'])) {
        // file name, type, size, temporary name
        $file_path = $_FILES['upload']['name'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        // target directory
        $target_dir = "Web Docs/";

        // uploding file
        if (move_uploaded_file($file_tmp_name, $target_dir . $file_path)) {
            // connect to database
            global $connection;
            // query

            $insertQuery = "INSERT into Web2DB.Documents ( Name, Description, Reference)
                            VALUES ('$file_name', '  $file_desc  ', '$target_dir $file_path')";

            // run query
            $runQuery = mysqli_query($connection, $insertQuery);

            if (mysqli_affected_rows($connection) === 1) {
                echo "<script type='text/javascript'>alert('Sucess!') </script>";
<<<<<<< HEAD
            }
            else
                echo "<script type='text/javascript'>alert('Error!')</script>";
        }
        }
}
else
    echo "<script type='text/javascript'>alert('Please select file!')</script>";
=======
            } else {
                echo "<script type='text/javascript'>alert('Please select file!')</script>";
            }
        }
    }
}
>>>>>>> 1f70fa4a3a628aa9bd5251972d9e4b1c774fe3ff
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            ADMIN Document Upload Page
        </TITLE>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("uploadPDF").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
            }
        </script>
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
            <form id = "fileUploaderForm" action=" " method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            Select File:
                        </td>
                        <td>
<<<<<<< HEAD
                            <input id="uploadPDF" type='file' class="button" required="required" name="upload" onchange="PreviewImage();">
=======
                            <input id="uploadPDF" type='file' class="button" name="upload" onchange="PreviewImage();">
>>>>>>> 1f70fa4a3a628aa9bd5251972d9e4b1c774fe3ff
                            <div style="clear:both">
                                <iframe id="viewer" frameborder="0" scrolling="no" width="600" height="600"></iframe>
                            </div>
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
<<<<<<< HEAD
                            <input type="text" name="fileName" required="required">
=======
                            <input type="text" name="fileName">
>>>>>>> 1f70fa4a3a628aa9bd5251972d9e4b1c774fe3ff
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Short Description:
                        </td>
                        <td>
<<<<<<< HEAD
                            <input type="text" name="shortDescription" required="required">
=======
                            <input type="text" name="shortDescription" >
>>>>>>> 1f70fa4a3a628aa9bd5251972d9e4b1c774fe3ff
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <input type="submit" class="button " value="Upload File">
                        </td>
                    </tr>
                </table>
            </form>
		</div>
	  </div>
    </BODY>
</HTML>
