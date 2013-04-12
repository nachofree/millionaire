<?php
include_once('./new_question.php');
include_once('./header.php');

?>


    <body>
        <div id="image">
        </div>
        <div class="lifelines">
            <p id="phone">P</p>
            <p id="fifty">50:50</p>
            <p id="audience">A</p>
        </div>
        <div id="level">
            <ul>
                <li class="got_level">15<span>1 Million</span></li>
                <li>14<span>500,000</span></li>
                <li>13<span>250,000</span></li>
                <li>12<span>125,000</span></li>
                <li>11<span>64,000</span></li>
                <li class="got_level">10<span>32,000</span></li>
                <li>9<span>16,000</span></li>
                <li>8<span>8,000</span></li>
                <li>7<span>4,000</span></li>
                <li>6<span>2,000</span></li>
                <li class="got_level">5<span>1,000</span></li>
                <li>4<span>500</span></li>
                <li>3<span>300</span></li>
                <li>2<span>200</span></li>
                <li>1<span>100</span></li>
            </ul>
        </div>
        <div id="question">
            <h3><? echo $q->getQuestion(); ?></h3>
            <p id="question_1"><strong>A:</strong><? echo $a ?></p>
            <p id="question_2"><strong>B:</strong><? echo $b ?></p>
            <p id="question_3"><strong>C:</strong><? echo $c ?></p>
            <p id="question_4"><strong>D:</strong><? echo $d ?></p>
        </div>
        <div id="got_correct" class="results">
            <p>You got the answer right!</p>
            <p id="continue">Continue to next question!</p>
        </div>
        <div id="got_incorrect" class="results">
            <p>You got the answer wrong!</p>
            <p id="play_again">Play again?</p>
        </div>
    </body>

<?php
include_once('./footer.php');
?>
