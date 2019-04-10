<?PHP
    include ("functions.php");
	require_once('dbConnection.php');
?>
<DOC! HTML>
<HTML>
    <HEAD>
        <TITLE>
            FAQ Page
        </TITLE>
            <?php require_once('stylesheetImport.php'); ?>
    </HEAD>
    <BODY>
      <?php require_once('header.php');?>
	  <div class="content">
		<?php require_once('sidebar.php'); ?>
		<br/>
  		<div id="pageContent">
		<h1>Here's some Frequently Asked Questions</h1>
  			<?php
				$query = "SELECT * FROM Web2DB.FAQ;";
				$result = mysqli_query($connection,$query);
				while($tableRow = mysqli_fetch_assoc($result))
				{
					$question = $tableRow["Question"];
					$answer= $tableRow["Answer"];
					
					echo "<h3><u>Question:</u> $question \n<br/><u>Answer:</u> $answer </h3>\n<br/>\n";
				}
			?>
  		</div>
	</div>
		<?php require_once('footer.php'); ?>
    </BODY>
</HTML>