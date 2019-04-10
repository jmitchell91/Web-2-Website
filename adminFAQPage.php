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
			<input type="button" class="button" name="AdminHomeBtn" value="Return to Home" onclick="location.href = 'adminHomePage.php'" />
		<div id="adminForms">
			<FORM ID="adminFAQForm" method="post" ACTION="adminHomePage.php">
				<h4>
				Question: <INPUT TYPE="text" NAME="question-text" style="float: right" required/>
				<br/>
				Answer: <INPUT TYPE="text" NAME="answer-text" style="float: right" required/>
				</h4>
				<br>
				<INPUT TYPE="submit" CLASS="button" NAME="FAQ-submit" Value="Submit"/>
			</FORM>
			<br/>
			<br/>
			<h3>Current FAQs:</h3>
			</br>
			<?php
				$query = "SELECT * FROM Web2DB.FAQ;";
				$result = mysqli_query($connection,$query);
				while($tableRow = mysqli_fetch_assoc($result))
				{
					$question = $tableRow["Question"];
					$answer= $tableRow["Answer"];
					
					echo "<u>Question:</u> $question <u>Answer:</u> $answer <br/>";
				}
			?>
		</div>
	  </div>
    </BODY>
</HTML>
