<?php
    include "./head.php";
?>
    <div class="container">
        <header>
            <a href="./index.php" class="fas fa-home">Home</a>
            <a href="./buttons.php" class="fa fa-question-circle"><i>Find</i></a>
        </header>
        <section>
            <div class="info info-one">
                <h2>Automorphic number : </h2>
                <div class="section-p">
                    <p>An automorphic number is a number which is present in the last digit(s) of its square. Example: 25 is an automorphic number 
                as its square is 625 and 25 is present as the last digits.  </p>
            </div>
            </div>
            <div class="info info-two">
                <h2>Neon number : </h2>
                <div class="section-p">
                    <p>A number is said to be a Neon Number if the sum of digits of the square of the number is equal to the number itself. 
                Example 9 is a Neon Number. 9*9=81 and 8+1=9.Hence it is a Neon Number. </p>
            </div>
            </div>
            <div class="info info-three">
                <h2>Magic number : </h2>
                <div class="section-p">
                    <p>A number is said to be a Magic number if the sum of its digits are calculated till a single digit is obtained by recursively 
                adding the sum of its digits. If the single digit comes to be 1 then the number is a magic number.
                    <h3>Example : </h3>
                    <kbd>
                        901<br>
                        9+0+1=10<br>
                        1+0=1<br>
                    </kbd>
                    </p>
                </div>
            </div>
            <div class="info info-four">
                <h2>Palindrome number : </h2>
                <div class="section-p">
                    <p>Reverse of a number is also same as the original number.
                    <h3>Examle : </h3>
                    <kbd>
                        100001,123454321..
                    </kbd>
                    </p>
                </div>
            </div>
            <div class="info info-five">
                <h2>Armstrong number : </h2>
                <div class="section-p">
                    <p>An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
                    <kbd>0, 1, 153, 371, 407, 471,</kbd>etc are Armstrong numbers.
                    </p>
                </div>
            </div>
            <div class="info info-six">
                <h2>Dudeney numbers : </h2>
                <div class="section-p">
                    <p>There are a few good answers already, but one special type of numbers that I find interesting are the Dudeney numbers.
                These are perfect cubes where the sum of the number’s digits is equal to the cube root of the number.<br>
                    <kbd>
                        512 = 8³ and 5 + 1 + 2 = 8<br>
                        4913 = 17³ and 4 + 9 + 1 + 3 = 17<br>
                        5832 = 18³ and 5 + 8 + 3 + 2 = 18<br>
                        17576 = 26³ and 1 + 7 + 5 + 7 + 6 = 26<br>
                        19683 = 27³ and 1 + 9 + 6 + 8 + 3 =27<br>
                    </kbd>
                There are only six Dudeney numbers
                    </p>
                </div>
            </div>
            <div class="info info-seven">
                <h2>Hardy-Ramanujan number : </h2>
                <div class="section-p">
                    <p>1729 is the natural number following 1728 and preceding 1730. 1729 is the Hardy–Ramanujan number after a famous anecdote of the British 
                    mathematician G. H. Hardy regarding a visit to the hospital to see the Indian mathematician Srinivasa Ramanujan. In Hardy's words:
                    “I remember once going to see him when he was ill at Putney. I had ridden in taxi cab number 1729 and remarked that the number seemed to me 
                    rather a dull one, and that I hoped it was not an unfavorable omen. "No," he replied, "it is a very interesting number; it is the smallest number 
                    expressible as the sum of two cubes in two different ways."
                    The two different ways are:<br>
                    <kbd>
                        10^3 + 9^3 = 1729<br>
                        12^3 + 1^3 = 1729<br>
                    </kbd>
                    </p>
                </div>
            </div>
        </section>
    </div>
<?php
    include "./footer.php";
?>