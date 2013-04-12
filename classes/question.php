<?php

/**
 * Description of question
 *
 * @author joe
 */
define(PASSWORD, '1mawes0m3');
define(USER, 'vt4000');
define(HOST, 'localhost');
define(DATABASE, 'vt4000');

include_once('./classes/database.php');

class question {

    //put your code here
    private $q;
    //private $answera, $answerb, $answerc, $answerd;
    private $correct_answer;

    public function __construct() {
        $this->db = new database(USER, PASSWORD, HOST, DATABASE);
    }

    private function getRandomAnswer(){
    	    //some random answer from table
	    $res = $this->db->query("Select answer from tbl_question ORDER BY RAND() LIMIT 1;");
	    $ary = mysqli_fetch_assoc($res) or die('cant fetch assoc getRandomAnswer');
	    return $ary['answer'];

	}


    public function getQuestionFromDb() {
        $res = $this->db->query("Select * from tbl_question where used = 0 LIMIT 1;");
        //if rowcount ==0 that means we have used them all up, so reset them again.
      //  echo $this->db->get_rows_affected();
      
        if ($this->db->get_rows_affected() <=0){
            $this->resetAllQuestions();
            $res = $this->db->query("Select * from tbl_question where used = 0 LIMIT 1;");
        }


        $ary = mysqli_fetch_assoc($res) or die('cant fetch assoc');

        try {
	    //print_r($ary);
            $this->q = $ary['question'];
	    
            $real = $ary['answer'];
	    $answera = $ary['answer'];
            $answerb = $this->getRandomAnswer();
            $answerc = $this->getRandomAnswer();
            $answerd = $this->getRandomAnswer();
            $this->answers = array($answera, $answerb, $answerc, $answerd);
            shuffle($this->answers);
            //which answer is the correct after shuffling?
            //add one so that it matches index.php page
            $this->correct_answer = array_search($real, $this->answers)+1;
            
        } catch (Exception $e) {
            echo "Cant fetch into array" . $e->getMessage();
        }

        //finally, set that question to used.
        $this->db->query("Update tbl_question SET used = 1 where id =" . $ary['id']) or die("cannot do update");
    }

    public function getQuestion() {
        return $this->q;
    }

    public function getFourAnswers() {
    	   
	   return $this->answers;

	//return 
    }

    public function getCorrectAnswer() {
        return $this->correct_answer;
    }

    public function resetAllQuestions() {
        try {
            $this->db->query("Update questions set used = 0");
        } catch (Exception $e) {
            echo "Cant reset questions" . $e->getMessage();
        }
    }

}

?>
