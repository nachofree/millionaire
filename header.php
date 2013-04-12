<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/main.css" />
        <SCRIPT LANGUAGE="JavaScript" SRC="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/jquery-ui-1.8.14.custom.min.js"></script>
        <SCRIPT LANGUAGE="JavaScript" SRC="./js/my.js"></script>
        <script language="javascript">
            //gonna send the correct answer to js to evaluate when clicked.
            var correct_answer = "<? echo 'question_' . $correct; ?>";
            var turn_count = "<? echo $_SESSION['question_number']; ?>"
        </script>
        <title></title>
    </head>
          