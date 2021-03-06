<?php

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    $title = $email = $ingredients = '';
    $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

    if(isset($_POST['submit'])){
       
        // check email
        if(empty($_POST['email'])){
            // echo = 'An email is required <br />';
            $errors['email'] = 'An email is required <br />';
        }else{
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //negation operator --> if email is invalid:
                //echo 'email must be a valid email address';
                $errors['email'] = 'email must be a valid email address';
            }
        }

        // check title
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required <br />';
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                //echo 'Title must be letters and spaces only';
                $errors['title'] = 'Title must be letters and spaces only';
            }
        }

        // check email
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'At least one ingredient is required <br />';
        }else{
             $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                //echo 'Ingredients must be a comma separeted list';
                $errors['ingredients'] = 'Ingredients must be a comma separeted list';
            }
        }
        if(array_filter($errors)){
            //echo 'errors in the form';
        }else{
            //echo 'form is valid';
            header('Location: index.php');
        }
        
    } // end of post check

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white action="add.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'] ?></div>
            <label>Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>
            <label>Ingredients (comma separeted):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
            
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>