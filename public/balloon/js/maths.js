/**
 * @fileOverview JavaScript Maths Function Library.
 * @author <a href="https://github.com/richardhenyash">Richard Ash</a>
 * @version 1.1.1
 */

/*jshint esversion: 6 */

/**
 * [Function to return random question and answer array, given game mode, options and number of questions]
 * @param  {[string]}    gameMode        [Game mode]
 * @param  {[string]}    optionArray     [Array of active option button text value strings]
 * @param  {[number]}    qno             [Number of questions]
 * @return {[array]}                     [Question and answer array - an array of 2 item arrays giving question and answer]
 */
function returnQuestionArray(gameMode, optionArray, qno) {
    console.log("Passssssss");
    let questionArray = [];
    // Check game mode and run correct question array function

    questionArray = returnLetterQuestionArray([], qno);

    console.log(questionArray);
    return (questionArray);
}


/**
 * [Function to return random multiplication question and answer array, given options and number of questions]
 * @param  {[string]}    optionArray     [Array of active option button text value strings]
 * @param  {[number]}    qno             [Number of questions]
 * @return {[array]}                     [Question and answer array - an array of 2 item arrays giving question and answer]
 */
function returnLetterQuestionArray(optionArray, qno) {
    // Initialise question array
    let mqArray = [];
    let i = 0;
    let ttq;
    let tk;
    // console.log({{$letterPhotos[0]->url}});
    // let url = "'" + {{$letterPhotos[0]->url}} +"'"
    // @foreach($letterPhotos as $letterPhoto)
    //     mqArray.push(["'" + "{{$letterPhoto->url}}" +"'", "'" +"{{$letterPhoto->letter}}"+"'"]) ;
    // @endforeach
    while (i < qno) {
        mqArray.push(['DSC_0209 - Copy (2).jpg', 'a']);
        i++;
    }

    return (mqArray);
}


/**
 * [Function to generate array of 5 wrong answers and the correct answer, given game mode and current question]
 * @param  {[string]}    gameMode        [Game mode]
 * @param  {[array]}     qCurrent        [Current question array, array of 2 items giving question and answer]
 * @return {[array]}                     [Array of 2 item arrays, 5 wrong answers and 1 correct answer]
 */
function answerArray(gameMode, qCurrent) {
    // Initialise answer array
    let answerArray = [];
    // Check game mode, run relevant wrong answer function to add wrong answers to answer array
    if (gameMode == "letter") {
        answerArray = wrongAnswersLetter(qCurrent);
    }
    // Add correct answer to answer array
    //answerArray.push(qCurrent[1]);
    // Shuffle answer array to randomise order
    answerArray = shuffleArray(answerArray);
    return (answerArray);
}


/**
 * [Function to generate array of 5 wrong letter answers, given current question]
 * @param  {[array]}     qCurrent        [Current question array, array of 2 items giving question and answer]
 * @return {[array]}                     [Array of 2 item arrays, 5 wrong answers and 1 correct answer]
 */
function wrongAnswersLetter(qCurrent) {
    let alphabet = "abcdefghijklmnopqrstuvwxyz";
    let cA = qCurrent[1];

    let wrongAnswerArray = [];
    wrongAnswerArray.push(cA);
    // Check if random integer is in wrong answer array, generate another random integer if it is
    let sz = 0;
    while (sz < 5) {
        let randomInt = getRandomIntInclusive(0, 25);
        while ((wrongAnswerArray.includes(alphabet[randomInt])) || (alphabet[randomInt] == cA)) {
            randomInt = getRandomIntInclusive(0, 25);
        }
        wrongAnswerArray.push(alphabet[randomInt]);
        sz = sz + 1;
    }
    return (wrongAnswerArray);
}

/**
 * [Function to generate a random integer between the two integers given.
 Function referenced from MDN Web Docs link below:
 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random]
 * @param  {[number]}    min             [Minimum integer]
 * @param  {[number]}    max             [Maximum integer]
 * @return {[number]}                    [Integer]
 */
function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    // The maximum is inclusive and the minimum is inclusive
    return Math.floor(Math.random() * (max - min + 1) + min);
}

/**
 * [Function to randomize an array in place using the Durstenfeld shuffle algorithm.
 Function referenced from stack overflow link below, many thanks to Laurens Holst:
 https://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array]
 * @param  {[array]}     arrayToShuffle  [Array to shuffle]
 * @return {[array]}                     [Shuffled array]
 */
function shuffleArray(arrayToShuffle) {
    let j;
    for (let i = arrayToShuffle.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        [arrayToShuffle[i], arrayToShuffle[j]] = [arrayToShuffle[j], arrayToShuffle[i]];
    }
    return (arrayToShuffle);
}
