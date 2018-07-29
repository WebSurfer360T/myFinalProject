function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = " " + currentQuestionNumber + " de " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Resultado</h1>";
    gameOverHTML += "<br> <br> <br> <h2 id='score'> Acertaste em  " + quiz.score + "<h2 id='score'> perguntas! </h2> ";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Onde se situa o AVG?", ["Porto", "Lisboa","Sines", "Aveiro"], "Lisboa"),
    new Question("O que signfica AVG ?", ["Aquário Valente Gomes", "Aquário Vasco da Gama", "Aqua Valente Giro", "Aquário Veloso Gurinho"], "Aquário Vasco da Gama"),
    new Question("Em que ano foi inaugurado o AVG?", ["1898", "1904","1985", "1999"], "1898"),
    new Question("Quais os fatores que são tidos em conta para a manutenção de especies?", ["temperatura, luz e tipo de habitat", "cor do revestimento do animal e a sua idade", "Idade do animal", "Nome do animal"], "temperatura, luz e tipo de habitat"),
    new Question("Qual deles é um animal marinho", ["Lobo", "Águia", "Golfinho", "Corvo"], "Golfinho")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





