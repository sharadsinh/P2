<?php
    //Read from file and ignore new lines
    $list = file('wordlist.txt', FILE_IGNORE_NEW_LINES);
    
    //Count number of words in the list
    $arrlength = count($list);
    
    //Get user information from submitted form
    $wordLength = $_GET["number_of_words"];
    $addNumber = $_GET["add_number"];
    $addSymbol = $_GET["add_symbol"];
    if ($wordLength==0 && $addNumber!="on" && $addSymbol!="on") {
        $wordLength=4;
    }
    $password;
    
    //Execute For loop for "number_of_words" times
    for ($i=0; $i < $wordLength; $i++) {
        
        //Generate number between 0 and length of word list array
        //get the word string stored at index number that is generated randomly
        $wordFromList = $list[rand(0, $arrlength-1)];
        
        //Add to existing password string
        $password = $password . "-" . $wordFromList;
    }
    
    //if add_number checked
    if($addNumber=="on") {
        //Generate random number between 0 to 9 and add that to password string
       $password = $password . rand(0,9); 
    } 
    
    //if add_symbol checked
    if($addSymbol=="on") {
        //set of symbol characters defined in symbols string
         $symbols="!@$%#^&";
         
        //get the length of symbols string
        $symbolLength=strlen($symbols);
        $index = rand(0, $symbolLength-1);
        
        //find character at given index of the string
        $character = $symbols[$index];
        
        //And add character to password
        $password = $password . $character;
    }
    
    //Remove leading "-" sign
    $trimmedPassword = ltrim($password, "-");
    
?>