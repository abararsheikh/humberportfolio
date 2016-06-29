<?php
/*
Coded By:Abarar Sheikh
*/


class Contactus
{      
    

    /**
     * =============== Validate Form ============
     */
    /**
     * Validate Name
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
     * Validate Subject
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
                $error .= "<p style = 'color:red'>Invalid email ! </p><br />";
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