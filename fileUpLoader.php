<?php
/**
 * Created by PhpStorm.
 * User: Skhan
 * Date: 4/29/2019
 * Time: 8:13 PM
 */


include_once ( 'functions.php');


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
                            VALUES ('$file_name', '  $file_desc  ', '$target_dir . $file_path')";

            // run query
            $runQuery = mysqli_query($connection, $insertQuery);

            if (mysqli_affected_rows($connection) === 1) {
                echo "<script type='text/javascript'>alert('Sucess!') </script>";
            } else {
                echo "<script type='text/javascript'>alert('Please select file!')</script>";
            }
        }
    }
}


?>

<!DOCTYPE HTML>
<HTML>
<Head>
    <title>JavaScript PDF Viewer Demo</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        function PreviewImage() {
            pdffile=document.getElementById("uploadPDF").files[0];
            pdffile_url=URL.createObjectURL(pdffile);
            $('#viewer').attr('src',pdffile_url);
        }
    </script>
</Head>
<BODY>
<form action=" " method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Select File:
            </td>
            <td>
                <input id="uploadPDF" type='file' class="button" name="upload" onchange="PreviewImage();">
            </td>
            <td>
                <div style="clear:both">
                    <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="600"></iframe>
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
                <input type="text" name="fileName">
            </td>
        </tr>
        <tr>
            <td>
                Short Description:
            </td>
            <td>
                <input type="text" name="shortDescription" >
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <input type="submit" class="button " value="Upload File">
            </td>
        </tr>
    </table>
</form>
</BODY>
</HTML>
