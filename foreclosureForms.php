<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            Foreclosure Forms
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
                Foreclosure Forms Go Here
				<br/>
				<?php
					displayFiles('Foreclosure Forms');
				?>
            </div>
        </div>
        <?php require_once('footer.php'); ?>
    </BODY>
</HTML>
