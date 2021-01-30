<?php 

function showQuestion($questions,$index)
{
    
    $opt=$index;
    if(isset($_REQUEST['submit'])){
        $value=$_REQUEST[$opt];
        // $_SESSION['ans'][$index]=$value;
        // print_r($_SESSION['ans']);
        if ($value) {
            echo $value;
        }
    }

    $str='<p>'.$questions[$index]['question'].'?</p>

    <form method="post" action="functions.php'.$index.'">';
    $options=$questions[$index]['options'];

    foreach ($options as $key=>$value) {

        $isChecked=(isset($opt) && $opt==$value)?'checked':'';
        $option='<input type="radio" id="'.$key.'" name="'.$opt.'" '.$isChecked.' value="'.$value.'" >';

        $label='<label for="questions options">'.$key.'</label> <br/>';
        
    
        

        $str.=$option.$label;
        
    }
    $submit='<input type="submit" name="submit" value="Submit">';
    
    $str.=$submit.'</form>';

    return $str;
}



?>



</select>