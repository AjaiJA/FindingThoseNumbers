<?php
    include "./head.php";
?>
    <div class="container">
        <header>
            <a href="./index.php" class="fa fa-arrow-circle-left">Previous</a>
        </header>
        <section>
            <div class="form-get">
                <?php
                    $previousValue="";
                    if(isset($_GET['answer'])){
                        $color=$_GET['result'];
                        echo "<h3 class=".$color.">".$_GET['answer']."</h3>";
                        if($_GET['previous'] != ""){
                            $previousValue=$_GET['previous'];
                        }
                    }
                ?>
                <form action="#" onsubmit="formSubmitNumber(event)" method="POST">
                    <input type="text" oninput="userType(this)" placeholder="Enter the Number" class="number-value" name="number-input" value="<?php echo $previousValue; ?>">
                    <div class="button-display">
                        <button type="submit" name="automorphic">Automorphic Number</button>
                        <button type="submit" name="neon">Neon Number</button>
                        <button type="submit" name="magic">Magic Number</button>
                        <button type="submit" name="palindrome">Palindrome Number</button>
                        <button type="submit" name="armstrong">Armstrong Number</button>
                        <button type="submit" name="hardy-ramanujan">Hardy-Ramanujan Number</button>
                        <button type="submit" name="dudeney">Dudeney Number</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php
    include "./footer.php";
?>
<?php
    if(isset($_POST['automorphic']))
    {
        $numInp=$_POST['number-input'];
        $value=isAutomorphicNumber($numInp);
        $answer=$value ? "Given Number is a Automorphic Number." : "Given Number is Not an Automorphic Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['neon']))
    {
        $numInp=$_POST['number-input'];
        $value=isNeonNumber($numInp);
        $answer=$value ? "Given Number is a Neon Number." : "Given Number is Not an Neon Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['magic']))
    {
        $numInp=$_POST['number-input'];
        $value=isMagicNumber($numInp);
        $answer=$value ? "Given Number is a Magic Number." : "Given Number is Not an Magic Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['palindrome']))
    {
        $numInp=$_POST['number-input'];
        $value=isPalindromeNumber($numInp);
        $answer=$value ? "Given Number is a Palindrome Number." : "Given Number is Not an Palindrome Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['armstrong']))
    {
        $numInp=$_POST['number-input'];
        $value=isArmstrongNumber($numInp);
        $answer=$value ? "Given Number is a Armstrong Number." : "Given Number is Not an Armstrong Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['hardy-ramanujan']))
    {
        $numInp=$_POST['number-input'];
        $value=isHardyRamNumber($numInp);
        $answer=$value ? "Given Number is a Hardy-Ramanujan Number." : "Given Number is Not an Hardy-Ramanujan Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    if(isset($_POST['dudeney']))
    {
        $numInp=$_POST['number-input'];
        $value=isDudeneyNumber($numInp);
        $answer=$value ? "Given Number is a Dudeney Number." : "Given Number is Not an Dudeney Number.";
        $color=$value ? "correct" : "wrong";
        header("Location:./buttons.php?answer=".$answer."&previous=".$numInp."&result=".$color);
    }
    function isAutomorphicNumber($number){
        $square=$number * $number;
        $num_array=array_map('intval',str_split($number));
        $square_array=array_map('intval',str_split($square));
        $numLen=count($num_array);
        $squareLen=count($square_array);
        $cut=array_slice($square_array,$squareLen-$numLen,$numLen);
        $convert=implode("",$cut);
        if((int)$convert==$number){
            return true;
        }
        else{
            return false;
        }
    }
    function isNeonNumber($number){
        $square=$number*$number;
        $square_array=array_map('intval',str_split($square));
        $add=0;
        for($i=0;$i<count($square_array);$i++){
            $add+=$square_array[$i];
        }
        if($add==$number){
            return true;
        }
        else{
            return false;
        }
    }
    function isMagicNumber($number){
        $sum = 0; 
        while($number>0 || $sum>9) 
        { 
            if($number==0) 
            { 
                $number=$sum; 
                $sum=0; 
            } 
            $sum+=$number%10; 
            $number/= 10; 
        } 
        if($sum==1){
            return true;
        }
        else{
            return false;
        }
    }
    function isPalindromeNumber($number){
        $reverse=strrev($number);
        if($reverse==$number){
            return true;
        }
        else{
            return false;
        }
    }
    function isArmstrongNumber($number){
        $number_array=array_map('intval',str_split($number));
        $add=0;
        $multiply;
        for($i=0;$i<count($number_array);$i++){
            $add+=$number_array[$i] * $number_array[$i] * $number_array[$i];
        }
        if($add==$number){
            return true;
        }
        else{
            return false;
        }
    }
    function isDudeneyNumber($number){
        $number_array=array_map('intval',str_split($number));
        $add=0;
        for($i=0;$i<count($number_array);$i++){
            $add+=$number_array[$i];
        }
        $cube=$add*$add*$add;
        if($cube==$number){
            return true;
        }
        else{
            return false;
        }
    }
    function isHardyRamNumber($number){
        $i=1; 
        $count=0;
        while($i<=$number) 
        {
            $total=0;
            for ($j=1;$j<=pow($i, 1.0/3);$j++){
                for($k=$j+1;$k<=pow($i,1.0/3);$k++){  
                    if($j*$j*$j+$k*$k*$k==$i){
                        $total++;
                    }
                } 
            }    
            if($total==2) 
            {
                if($i==$number){
                    return true;
                    $count++;
                }
            }
            $i++;
        }
        if($count==0){
            return false;
        }
    }
?>
