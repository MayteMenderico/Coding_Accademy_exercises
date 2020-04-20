<?php






















/*Create a registration form that saves a new user in a database.
You will create a page inscription.php that displays a registration form with the following input fields:
- A field of type “text” with attribute “name” with value “name”
- A field of type “text” with attribute “email” with value “email”
- A field of type “password” with attribute “password” with value “password”
- A field of type “password” with attribute “password_confirmation” with value “password_confirmation”
The name must contain between 3 and 10 characters. It must be saved in the database in the field“name”.
In case of error, you will need to display “Invalid name” on top of the form.
The email must be valid. It must be saved in the database in the field “email”. To check that the email is
valid, learn about Regular Expressions. In case of error, you will display “Invalid email” on top of the form.
The password must match its confirmation, must contain 3 to 10 characters, and must be hashed with
the PHP function password_hash.
This hash must be saved in the database in the field “password”. In case of error, you will display on top
of the form “Invalid password or password confirmation”.
The creation date of the new user must be saved in the database in the field “created_*/

if(isset($_POST)){
    $succeed = false;

    if(isset($_POST['name'])){
        if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10){
            echo "Invalid name<br />";
            $succeed = false;
        } else {
            $succeed = true;
        }
    }
    
    if(isset($_POST['email'])){
        if(!preg_match('/[a-z0-9._]+@[a-z0-9_]+\.[a-z]+[.a-z]*/', $_POST['email'])){
            echo "Invalid email<br />";
            $succeed = false;
        } else {
            $succeed = true;
        }
    }
    
    if(isset($_POST['password'])){
        if(strlen($_POST['password']) < 3 || strlen($_POST['password']) > 10){
            echo "Invalid password<br />";
            $succeed = false;
        } else {
            $succeed = true;
        }
    }
    
    if(isset($_POST['password_confirmation'])){
        if(strlen($_POST['password_confirmation']) < 3 && strlen($_POST['password_confirmation']) > 10 || $_POST['password'] != $_POST['password_confirmation']){
            echo "Invalid password confirmation<br />";
            $succeed = false;
        } else {
            $succeed = true;
        }
    }
    

    if($succeed){
        echo "User created.";
    }
}

?>
<form action="" method="post">
    <input type="text" name="name" placeholder="text" minlength="3" maxlength="10" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="password" name="password_confirmation" placeholder="password_confirmation" required>
    <input type="hidden" name="created_at" value="<?=time()?>">
    <button type="submit">Submit</button>
</form>