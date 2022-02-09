<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values expectation
$name = $doc_type = $doc_level = $uploader_name= $doc_owner= $expectation ="";
$name_err = $doc_type_err = $doc_level_err = $uploader_name_err = $doc_owner_err=$expectation_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter the subject name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid product name.";
    } else{
        $name = $input_name;
    }
     // Validate address(doc_level)
    $input_doc_level = trim($_POST["doc_level"]);
    if(empty($input_doc_level)){
        $doc_level_err = "level of your docment. beginner,intermediate, advance";     
    } else{
        $doc_level = $input_doc_level;
    }
    
    //(uploader_name)
    $input_uploader_name = trim($_POST["uploader_name"]);
    if(empty($input_uploader_name)){
        $uploader_name_err = "Please enter your name.";     
    } else{
        $uploader_name = $input_uploader_name;
    }


    //(document onwer name)
    $input_doc_owner = trim($_POST["doc_owner"]);
    if(empty($input_doc_owner)){
        $doc_owner_err = "Please enter the document owner.";     
    } else{
        $doc_owner = $input_doc_owner;
    }


    
    // Validate (doc_type)
    $input_doc_type = trim($_POST["doc_type"]);
    if(empty($input_doc_type)){
        $doc_type_err = "documnt type vedio, pdf, word documnt";
    } else{
        $doc_type = $input_doc_type;
    }

     // Validate expectation
    $input_expectation = trim($_POST["expectation"]);
    if(empty($input_expectation)){
        $expectation_err = "what can students expect";
    } else{
        $expectation = $input_expectation;
    }
    
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($doc_level_err) && empty($uploader_name_err)&&empty($doc_owner_err) && empty($doc_type_err)&& empty($expectation_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO upload (product_name, doc_level,uploader_name, doc_owner, doc_type,expectation) VALUES (?, ?, ?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_doc_level,$param_uploader_name, $param_doc_owner, $param_doc_type,$param_expectation);
            
            // Set parameters
            $param_name = $name;
            $param_doc_level = $doc_level;
            $param_uploader_name = $uploader_name;
            $param_doc_owner = $doc_owner;
            $param_doc_type = $doc_type;
            $param_expectation = $expectation;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($doc_level_err)) ? 'has-error' : ''; ?>">
                            <label>document level</label>
                            <textarea name="doc_level" class="form-control"><?php echo $doc_level; ?></textarea>
                            <span class="help-block"><?php echo $doc_level_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($doc_level_err)) ? 'has-error' : ''; ?>">
                            <label>youre name</label>
                            <textarea name="uploader_name" class="form-control"><?php echo $uploader_name; ?></textarea>
                            <span class="help-block"><?php echo $uploader_name_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($doc_owner_err)) ? 'has-error' : ''; ?>">
                            <label>document owner</label>
                            <textarea name="doc_owner" class="form-control"><?php echo $doc_owner; ?></textarea>
                            <span class="help-block"><?php echo $doc_owner_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>document type</label>
                            <input type="text" name="doc_type" class="form-control" value="<?php echo $doc_type; ?>">
                            <span class="help-block"><?php echo $doc_type_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>what can students expect from the document?</label>
                            <input type="text" name="expectation" class="form-control" value="<?php echo $expectation; ?>">
                            <span class="help-block"><?php echo $expectation_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>