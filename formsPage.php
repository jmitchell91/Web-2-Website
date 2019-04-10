<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            Forms Main Page
        </TITLE>
        <?php require_once('stylesheetImport.php'); ?>
    </HEAD>
    <BODY>
      <?php require_once('header.php');?>
		<div class="content">
			<?php require_once('sidebar.php'); ?>
			<div id="pageContent">
				<ul>
					<li><a href="estateForms.php">Estate Forms</a></li>
					<li><a href="trustForms.php">Trust Forms</a></li>
					<li><a href="conservatorshipForms.php">Conservatorship Forms</a></li>
					<li><a href="guardianshipForms.php">Guardianship Forms</a></li>
					<li><a href="foreclosureForms.php">Foreclosure Forms</a></li>
					<li><a href="miscellaneousForms.php">Miscellaneous Forms</a></li>
				</ul>
			</div>
		</div>
		<?php require_once('footer.php'); ?>
    </BODY>
</HTML>
