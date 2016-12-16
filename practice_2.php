Describe and give an example of the Post Redirect Get Pattern.

POST-REDIRECT-GET is a pattern that says a POST action should always REDIRECT to a GET action.

Example:

<?php 
    if ($_POST) {
        // Execute code (such as database updates) here.

        //Redirect to this page.
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
?>