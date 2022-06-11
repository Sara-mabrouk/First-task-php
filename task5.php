<?php
// Build a Blog Module  with following data
// Title   =  [required , string]
// Content =  [required,length >50 ch]
// Image   =  [required, file]
// Then Store data into text file , display blog data ,  stored data can be deleted.


// function clean($data)
// {
//     $data = trim($data);
//     $data = strip_tags($data);
//     return $data;
// }

function Clean($input)
{  //clean user inputs

    $input = trim($input);
    $input = strip_tags($input);
    $input = stripslashes($input);

    return $input;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title  = Clean($_POST['title']);
    $content = Clean($_POST['content']);
    // $image = Clean($_POST['image']);

# Validate Title ..... 
    if (empty($title)) {
        $errors['Title'] = "<p class='Ralert'>Title Required</p>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $title)) {
        $errors['Title']  = "<p class='Ralert'>Only letters and white space allowed.</p>";
    } else {
        $_SESSION['Title'] = $title;
    }

# Validate Content .... 
    if (empty($content)) {
        $errors['Content']  = "<p class='Ralert'>Title Required</p>";
    } elseif (strlen($content) < 50) {
        $errors['Content']  = "<p class='Ralert'>Content Length Must Be >= 50 Chars</p>";
    } else {
        $_SESSION['Content'] = $content;
    }

# Validate image ....
    if (!empty($_FILES['image']['name'])) {

        $imgName    = $_FILES['image']['name'];
        $imgTemName = $_FILES['image']['tmp_name'];
        $imgType    = $_FILES['image']['type'];
        $imgSize    = $_FILES['image']['size'];

# Allowed Extensions 
        $allowedExtensions = ['jpg', 'png', 'jpeg'];
        $imgArray = explode('/', $imgType);

# Image Extension ...... 
        $imageExtension = end($imgArray);
        if (in_array($imageExtension, $allowedExtensions)) {
# IMage New Name ...... 
            $FinalName = time() . rand() . '.' . $imageExtension;
            $disPath = 'uploads/' . $FinalName;
            if (move_uploaded_file($imgTemName, $disPath)) {
            } else {
                $errors['Img']  = "<p class='Ralert'>Error try Again</p>";
            }
    }
    else {
            $errors['Img']  = "<p class='Ralert'>InValid Extension</p>";
    }

    } else {
        $errors['Img']  = "<p class='Ralert'>* Image Required</p>";
    }

    //check errors array
    if (count($errors) > 0) {
        foreach ($errors as $key => $value) {
            echo '> ' . $key . ' : ' . $value . '<br>';
        }
    } else {
        // save data to txt file
        $userData = ["title" => $title, "content" => $content, "imageName" => $imgName];
        $userData = implode(' | ', $userData);
        $userData = $userData . "\n";
        $file = fopen('text.txt', "a") or die('unable to open file');
        fwrite($file, $userData);
        echo 'Registered Successfully Data Saved, Welcome -'.$title;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="name"><b>Title : </b></label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="title" placeholder="Your Title..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email"><b>Content : </b></label>
                </div>
                <div class="col-75">
                    <textarea rows="5" cols="50" id="content" name="content" class="content" placeholder="Your Content Here.."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country"><b>Image : </b></label>
                </div>
                <div class="col-75">
                    <input type="file" id="image" name="image" class="image" placeholder="Your image..">
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>