<?php

//set up the PDO connection

/**
 * @return PDO
 */
function setUpThePDOConnection(): PDO
{
    $dns = 'mysql:host=localhost;dbname=quizdb';
    $username = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    //create new instance of PDO
    return new PDO($dns, $username, $password, $options);
}

//Function to retrieve all questions with their answers
function getAllQuestionsWithAnswers(PDO $pdo): array
{
    $statement = $pdo->query('SELECT * FROM questions');
    $questions = $statement->fetchAll();

    foreach ($questions as &$question) {//passed by reference rather than by value
        $questionId = $question['id'];
        $answers = getAnswersForQuestion($pdo, $questionId);
        $question['answers'] = $answers;
    }

    return $questions;
}

//Function to retrieve all answers for a given question ID
function getAnswersForQuestion(PDO $pdo, int $questionId): array
{
    $statement = $pdo->prepare('SELECT * FROM answers WHERE question_id = :questionId');
    $statement->execute(['questionId' => $questionId]);
    return $statement->fetchAll();
}

//use the connection and query results
$pdo = setUpThePDOConnection();
$questions = getAllQuestionsWithAnswers($pdo);
$questionId = 1;

//Display the questions and answers
foreach ($questions as $question) {
    echo '<div class="question">';
    echo '<h3>' . $question['question'] . '</h3>';

    echo '<ul>';
    foreach ($question['answers'] as $answer) {
        echo '<li>' . $answer['answers_text'] . '</li>';
    }
    echo '</ul>';

    echo '</div>';
    $questionId++;
}
