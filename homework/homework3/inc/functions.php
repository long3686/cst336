<?php
    
    function makeCharacterName($firstName,$lastName)
    {
        $firstpart = substr($firstName,0,3);
        $secondpart = substr($lastName,0,4);
        $secondpart = strtolower($secondpart);
        echo $firstpart;
        echo $secondpart;
    }
    function chooseCharacterClass($itemChoice,$statChoice)
    {
        if($itemChoice == "sword")
        {
            if($statChoice == "strength")
                echo "Barbarian";
            elseif($statChoice == "speed")
                echo "Swordmaster";
            elseif($statChoice == "intellect")
                echo "Spell Sword";
        }
        elseif($itemChoice == "wand")
        {
            if($statChoice == "strength")
                echo "Warrior Mage";
            elseif($statChoice == "speed")
                echo "Spellslinger";
            elseif($statChoice == "intellect")
                echo "Wizard";
        }
        elseif($itemChoice == "dagger")
        {
            if($statChoice == "strength")
                echo "Rogue";
            elseif($statChoice == "speed")
                echo "Assassin";
            elseif($statChoice == "intellect")
                echo "Spy";
        }
        elseif($itemChoice == "shield")
        {
            if($statChoice == "strength")
                echo "Paladin";
            elseif($statChoice == "speed")
                echo "Guardian";
            elseif($statChoice == "intellect")
                echo "Cleric";
        }
    }
    function getAlignment($charGB,$charLC)
    {
        if($charGB == "good")
        {
            if($charLC == "lawful")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "chaotic")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "neutral")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            
        }
        elseif($charGB == "evil")
        {
            if($charLC == "lawful")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "chaotic")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "neutral")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
        }
        elseif($charGB == "neutral")
        {
            if($charLC == "lawful")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "chaotic")
            {
                echo $charLC;
                echo " ";
                echo $charGB;
            }
            elseif($charLC == "neutral")
            {
                echo "True Neutral";
            }
        }
    }
?>