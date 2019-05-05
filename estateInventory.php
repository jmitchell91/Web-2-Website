<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            Estate Inventory
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
                Estate Inventory goes Here
				<br/>
				<?php
					displayFiles('Estate Inventory');
				?>
            </div>
        </div>
        <?php require_once('footer.php'); ?>
    </BODY>
</HTML>
