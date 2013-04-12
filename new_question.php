<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('./classes/question.php');
session_start();
$q = new question();


//check to see if they are playing again, if so destroy session
if (isset($_GET['session'])) {
    if ($_GET['session'] == 'destroy') {
        session_unset();
        $q->resetAllQuestions();
    }
}


if (!isset($_SESSION['question_number'])) {
    $_SESSION['question_number'] = 1;
} else {
    $_SESSION['question_number'] += 1;
}

$q->getQuestionFromDb();
$answers = $q->getFourAnswers();
//print_r($answers);
$a = $answers[0];
$b = $answers[1];
$c = $answers[2];
$d = $answers[3];
$correct = $q->getCorrectAnswer();
?>
