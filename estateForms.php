<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            Estate Forms
        </TITLE>
         <?php require_once('stylesheetImport.php'); 
			   require_once('functions.php');
		?>
    </HEAD>
    <BODY>
      <?php require_once('header.php');?>
        <div class="content">
            <?php require_once('sidebar.php'); ?>
            <div id="pageContent">
                <p class="bulk">
				** PLEASE READ BEFORE FILLING OUT ON-LINE FORMS **
				</br>
				</br>
				Firefox is the recommended browser to be able to save a filled out copy of your filing for your records.
				</br>
				</br>
				Adobe Reader is required to be able to save a filled out copy of your filing for your records. A free download is available at www.adobe.com.
				</br>
				</br>
				All forms must be printed out and endorsed with original signature(s).
				</p>
				<?php
					displayFiles('Estate Forms');
				?>
            </div>
        </div>
        <?php require_once('footer.php'); ?>
    </BODY>
</HTML>
