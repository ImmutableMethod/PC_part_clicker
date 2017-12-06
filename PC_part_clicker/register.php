<?php
class Registration{

      var $userName;
      var $password;
      var $dbname;
      var $tablename;
      var $connection;
      var $error_message;

function usersite()
    {
        $this->sitename = 'registration_form_page.php';
    }

function InitDB($host,$uname,$pwd,$database,$tablename)
    {
        $this->db_host  = $servername;
        $this->username = $username;
        $this->pwd  = $password;
        $this->database  = $dbname;
        $this->tablename = $tablename;

    }
    function CollectRegistrationSubmission(&$formvars)
{
    $formvars['userName'] = $this->Sanitize($_POST['userName']);
    $formvars['firstName'] = $this->Sanitize($_POST['firstName']);
    $formvars['lastName'] = $this->Sanitize($_POST['lastName']);
    $formvars['email'] = $this->Sanitize($_POST['email']);
    $formvars['password'] = $this->Sanitize($_POST['password']);
}
function RegisterUser()
{
    if(!isset($_POST['submitted']))
    {
       return false;
    }

    $formvars = array();

    if(!$this->ValidateRegistrationSubmission())
    {
        return false;
    }



    $this->CollectRegistrationSubmission($formvars);

    if(!$this->SaveToDatabase($formvars))
    {
        return false;
    }

    if(!$this->SendUserConfirmationEmail($formvars))
    {
        return false;
    }

    $this->SendAdminIntimationEmail($formvars);

    return true;
}


function SaveToDatabase(&$formvars)
   {
       if(!$this->DBLogin())
       {
           $this->HandleError("Database login failed!");
           return false;
       }
       if(!$this->Ensuretable())
       {
           return false;
       }
       if(!$this->IsFieldUnique($formvars,'email'))
       {
           $this->HandleError("This email is already registered");
           return false;
       }
       if(!$this->IsFieldUnique($formvars,'userName'))
       {
           $this->HandleError("This UserName is already used. Please try another username");
           return false;
       }
       if(!$this->InsertIntoDB($formvars))
       {
           $this->HandleError("Inserting to Database failed!");
           return false;
       }
       return true;


}

function InsertIntoDB(&$formvars)
{
    $insert_query = 'insert into '.$this->$tablename'(
            userName,
            firstName,
            lastName,
            email,
            password
          )
            values
          (
            "' . $this->SanitizeForSQL($formvars['userName']) . '",
            "' . $this->SanitizeForSQL($formvars['firstName']) . '",
            "' . $this->SanitizeForSQL($formvars['lastName']) . '",
            "' . $this->SanitizeForSQL($formvars['email']) . '",
            "' . md5($formvars['password']) . '",
          )';
    if(!mysql_query( $insert_query ,$conn->connection))
    {
        $cthis->HandleDBError("Error inserting data to the table\nquery:$insert_query");
        return false;
    }
    return true;
}
}
?>
