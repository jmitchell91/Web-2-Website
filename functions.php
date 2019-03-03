<?PHP
/*
  * login: string, string -> session
  * given a valid string $username and string $password
  * will login you in to admin homepage
  */

// for Database connection
    $dbhost = 'localhost';
    $dbuser = 'proj1';
    $dbpass = '325p1TeamDB';
    $dbname = 'proj1';


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db->setFetchMode(DB_FETCHMODE_ASSOC);

$sql = 'SELECT * FROM admin_account';

$demoResult = $db->query($sql);

while ($demoRow = $demoResult->fetchRow()) {
    echo $demoRow['first'] . ' ' . $demoRow['last'] . '<br>';
}



// LOGIN USER
function login()
{
    global $db, $username, $errors, $userID;

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
        $password = md5($password);

        $query = "SELECT * FROM innodb.users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            $logged_in_user = mysqli_fetch_assoc($results);

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['email'] = $logged_in_user['email'];
                $_SESSION['userName'] = $logged_in_user['username'];
                $_SESSION['success'] = "You are now logged in";
                header('location: loggedIn.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
/*
 *  when login button is clicked
 */
if (isset($_POST['login-btn'])) {
    login();
}
function e($val)
{
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}
?>