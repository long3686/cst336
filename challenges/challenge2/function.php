

<?php

function displayCards1($player1Suit, $player1Card){
    
    switch($player1Suit){
        case 0: $player1Suit = "clubs";
            break;
        case 1: $player1Suit = "diamonds";
            break;
        case 2: $player1Suit = "hearts";
            break;
        case 3: $player1Suit = "spades";
            break;
    }
    
    
    switch($player1Card){
        case 0: $player1Card = "ten";
            break;
        case 1: $player1Card = "jack";
            break;
        case 2: $player1Card = "queen";
            break;
        case 3: $player1Card = "king";
            break;
        case 4: $player1Card = "ace";
            break;
    }
    
    
     echo "<img src = 'cards/$player1Suit/$player1Card.png' alt = '$player1Card' title = '$player1Card' width = '70'/>";
}

function displayCards2($player2Suit, $player2Card)
{
      switch($player2Suit){
        case 0: $player2Suit = "clubs";
            break;
        case 1: $player2Suit = "diamonds";
            break;
        case 2: $player2Suit = "hearts";
            break;
        case 3: $player2Suit = "spades";
            break;
    }
    
    switch($player2Card){
        case 0: $player2Card = "ten";
            break;
        case 1: $player2Card = "jack";
            break;
        case 2: $player2Card = "queen";
            break;
        case 3: $player2Card = "king";
            break;
        case 4: $player2Card = "ace";
            break;
    }
    echo "<img src = 'cards/$player2Suit/$player2Card.png' alt = '$player2Card' title = '$player2Card' width = '70'/>";
}
function play(){
    
        ${"player1Suit"} = rand(0,3);
        ${"player1Card"} = rand(0,4);
        ${"player2Suit"} = rand(0,3);
        ${"player2Card"} = rand(0,4);
            
        displayCards1($player1Suit,$player1Card);
        displayCards2($player2Suit,$player2Card);
        
        echo "<br><br>";
        
        checkWin($player1Card, $player2Card);
            
}

function checkWin($player1Card,$player2Card)
{
    if ($player1Card < $player2Card)
        echo "Computer Wins";
    else if ($player2Card < $player1Card)
        echo "Human Wins";
    else
        echo "It's a Tie!";
}

?>