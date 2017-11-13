
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

function displayBoard(board)
{
    return "<img src = 'img/" + board + ".png' alt ='" + board +"'/>";
    
}
function displayLink(index,value)
{
    var i = 0;
    var check = false;
    var link = "";
    while (i <8 && check == false)
    {
            switch (i)
        {
            case 0: link = "https://www.chess.com/openings/E00_Catalan_Opening";
            if(i == index)
                check = true;
            break;
            case 1: link = "https://www.chess.com/openings/C00_French_Defense";
            if(i == index)
                check = true;
            break;
            case 2: link = "https://www.chess.com/openings/C30_Kings_Gambit";
            if(i ==index)
                check = true;
            break;
            case 3: link = "https://www.chess.com/openings/D06_Queens_Gambit";
            if(i == index)
                check = true;
            break;
            case 4: link = "https://www.chess.com/openings/C44_Scotch_Game";
            if(i == index)
                check = true;
            break;
            case 5: link = "https://www.chess.com/openings/B20_Sicilian_Defense";
            if(i == index)
                check = true;
            break;
            case 6: link = "https://www.chess.com/openings/D10_Slav_Defense";
            if(i == index)
                check = true;
            break;
            case 7:link = "https://www.chess.com/openings/C60_Ruy_Lopez_Opening";
            if(i == index)
                check = true;
            break;
        }
        i++;
    }
    return "<a href = '" + link + "' target = '_blank'>" + value + " </a>";
}
var board = ["Sicilian_Defense","Catlan_Opening","French_Defense","Kings_Gambit","Queens_Gambit","Scotch_Game","Slav_Defense","Spanish_Opening"];
board = shuffle(board);
document.getElementById("board").innerHTML = displayBoard(board[0]);
var value = board[0];
board.sort();
var index = board.indexOf(value);
document.getElementById("link").innerHTML = displayLink(index,value);