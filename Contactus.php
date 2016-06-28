<?php

class Contactus
{
       
    public function displayContacts()
    {
         //connect to database :
        include( 'bootstrap.php' );
        $db = Database::getDB();
        //once connected execute below query.

        $sql = "SELECT * FROM contactus ORDER BY first_name ASC";
        $statement1 = $db->prepare($sql);
        $statement1->execute();
        $selectResults= $statement1->fetchAll();
        $statement1->closeCursor();
        return $selectResults;
    }

    // USer Interface -USer submit the form and handle it by Email

    public function contactProcess()
    {
        //connect to database :
        include( 'bootstrap.php' );
        $db = Database::getDB();
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $Email = htmlspecialchars($_POST['Email']);
        $Message = htmlspecialchars($_POST['Message']);

    // Now inserting form values to the database table

        $query ="INSERT INTO contactus(first_name,last_name,Email,Message) VALUES ('$first_name','$last_name','$Email','$Message')";
        $contactQuery= $db->prepare($query);
        $contactQuery->execute();
        $contactQuery->closeCursor();

    }

    /**
     * =============== Validate Form ============
     */
    /**
     * Validate Firstname
     */
   public function validName($Fname)
    {
        $error ="";
        if(empty($Fname))
        {
            $error.="<p style ='color:red;'>Please enter Name !</p>";
        }
        else{
            // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z]*$/",$Fname))
            {
                $error.="<p style = 'color:red'>Only letters and white spaces allowed for firstname</p>";
            }
        }
        return $error;
    }


    /**
     * Validate Lastname
     */

   public function validSubject($Lname)
    {
        $error ="";
        if(empty($Lname))
        {
            $error.="<p style ='color:red;'>Please enter Subject info !</p>";
        }
        else
        {
            // check if name only contains letters and whitespace

            if(!preg_match("/^[a-zA-Z]*$/",$Lname))
            {
                $error.="<p style = 'color:red'>Only letters and white spaces allowed for Subject</p>";
            }
        }
        return $error;
    }

    /**
     * Validate Email
     */
    public function validEmail($email)
    {
        $error ="";
        if(empty($email))
        {
            $error .= "<p style='color:red;'>Please enter email !</p>";
        }
        else
        {
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $error .= "Invalid email ! <br />";
            }

        }
        return $error;
    }

    /**
     * Validate Message Box
     */
    public function validMessagebox($message)
    {
        $error = "";
        if (empty($message)) {
            $error .= "<p style ='color:red;'>Please enter Comment.!!</p>";
        }
        return $error;
    }
}