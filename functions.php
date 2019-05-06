<?PHP
error_reporting(E_ALL);
/*
  * login: string, string -> session
  * given a valid string $username and string $password
  * will login you in to admin homepage
  */
require ('dbConnection.php');

// variable declaration
$username = "";
$email = "";
$errors = array();

// escape string
function e($val)
{
    global $connection;
    return mysqli_real_escape_string($connection, trim($val));
}

/*
 *  displayFiles: string -> string
 *  given a string for the page name, return html based on a query for that page name and retun files that are assigned to that page
 */
function displayFiles($pageName)
{
	global $connection;
	$query = "SELECT * FROM Web2DB.Documents d
				Inner Join Web2DB.Files_to_Path f
				On d.Document_ID = f.Document_ID
				Inner Join Web2DB.Pages p
				On f.Page_ID = p.Page_ID
				Where Page_Name = '$pageName';";
	$result = mysqli_query($connection,$query);
	while($tableRow = mysqli_fetch_assoc($result))
	{
		$reference = $tableRow["Reference"];
		$name= $tableRow["Name"];
		
		echo "<h3>File: <a href='". htmlspecialchars($reference) . "' target='_blank'>$name</a><br/>";
	}
}

function display_error()
{
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}
/* LOGIN USER
function login()
{
    global $connection, $username, $errors, $userID;

// grab form values from login form
    $username = e($_POST['username']);
    $password = e($_POST['password']);

// make sure form is filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

// attempt login if no errors on form
    if (count($errors) == 0) {
        //$password = md5($password);

        $query = "SELECT * FROM Web2DB.Users WHERE Username='$username' AND Password='$password' LIMIT 1";
        $results = mysqli_query($connection, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            $logged_in_user = mysqli_fetch_assoc($results);
                session_start();
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['email'] = $logged_in_user['email'];
                $_SESSION['userName'] = $logged_in_user['username'];
                $_SESSION['success'] = "You are now logged in";
                header('location: adminHomePage.php');
        } else {
            display_error ( array_push($errors, "Wrong username/password combination"))
            ;
        }
    }
    else
        display_error ( $errors);
}
/*
 *  when login button is clicked
 *
if (isset($_POST['login-btn'])) {
    login();
}

/*
 *  test: string[], optional string-or-false -> string
 *  given a optional non-empty string (firstItemIsAHeader) and a string array will
 *  return firstItemIsAHeader as th and each element of array as td of a HTML table rows
 *  given false or no second input as second argument wont return the th tag
 */

function asRow($tds, $firstItemIsAHeader = false){
    $tdsSoFar = "";
    foreach($tds AS $td){
        $tdsSoFar .= "    <td>\n        $td\n    </td>\n";
    }
    if ($firstItemIsAHeader === false) {
        return "<tr>\n$tdsSoFar</tr>\n";
    } else {
        return "<tr>\n    <th>\n        $firstItemIsAHeader\n    </th>\n</tr>\n<tr>\n$tdsSoFar</tr>\n";
    }
}


/*
 *  makeTable string, string[string[]] -> table
 *  given an non-empty string $tableName and a non-empty string array $rowsArray of non-empty string arrays
 *  will return string for HTML table with table id = $tableName and each array inside the $rowsArray as a row
 *  in the table
 */
function makeTable($tableName, $rowsArray){
    $tableHTML = "";
    foreach($rowsArray AS $row){
        $tableHTML .= asRow($row, false);
    }
    return "<table id='$tableName'>\n$tableHTML\n</table>\n";
}

/* pagesDropdown : no parameters
 * Returns a string for HTML dropdown of all the pages in the database for file uploading page
*/
function pagesDropdown(){
	global $connection;
    $selectPages = 'SELECT Page_Name from Web2DB.Pages';
    $allRows = mysqli_query($connection, $selectPages);
    $dropdownString = "<select name='Pages'>\n"; //string containing html string result
    $dropdownString = $dropdownString . "    <option value=''>Select one</option>\n";
    while ($oneRow = mysqli_fetch_assoc($allRows)){
        $dropdownString = $dropdownString . "    <option value='" . $oneRow['Page_Name'] . "'>" .
            $oneRow['Page_Name'] . "</option>\n";
    }
    $dropdownString = $dropdownString . "</select>";
    return $dropdownString;
}

/*
 *  when logout button is clicked
 */
if (isset($_POST['logout-btn'])) {
    logout();
}

//Logout user
function logout()
{
    session_start();
    session_destroy();
    header('location: adminLoginPage.php');
}


/*
 *  when submit button is clicked
 */
if (isset($_POST['FAQ-submit']))
{
    if (isset($_POST['question-text']) && isset($_POST['answer-text']))
    {
        $question = $connection->real_escape_string($_POST['question-text']);
        $answer = $connection->real_escape_string($_POST['answer-text']);
        $sql = "INSERT INTO Web2DB.FAQ (Question,Answer) VALUES ('$question', '$answer')";

        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}

?>
