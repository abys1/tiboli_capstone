<?php
session_start();
$user_id = $_SESSION['user_id'];

require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $lesson = $_POST['lesson'];
    $maxScore = $_POST['max'];
    $dateStart = $_POST['date_start'];
    $allowLate = isset($_POST['allow']) ? 1 : 0;
    $grading = $_POST['grading'];
    $due = $_POST['due'];
    $gradingScore = $_POST['grading_score'];
    $attempts = $_POST['attempts'];
    $instructions = $_POST['instructions'];
    $questions = $_POST['question'];
    $choices = $_POST['choices'];

    $sql = "INSERT INTO tbl_quiz_options (added_by, title, lesson, max_score, date_start, allow_late, grading, due, grading_score, attempts, instructions) VALUES ('$user_id', '$title', '$lesson', '$maxScore', '$dateStart', $allowLate, '$grading', '$due', '$gradingScore', '$attempts', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        $quiz_options_id = mysqli_insert_id($conn);

        // Loop through the questions and choices
        for ($i = 0; $i < count($questions); $i++) {
            $question = $questions[$i];
            $choiceA = $choices[$i]['a'];
            $choiceB = $choices[$i]['b'];
            $choiceC = $choices[$i]['c'];
            $choiceD = $choices[$i]['d'];
            $correctAnswer = $choices[$i]['correct']; // The value of the selected correct answer (e.g., 'a', 'b', 'c', or 'd')

            // Insert the question and choices into tbl_quiz_multiple_choice
            $sql = "INSERT INTO tbl_quiz_multiple_choice (quiz_options_id, question, choiceA, choiceB, choiceC, choiceD, correct_answer) VALUES ($quiz_options_id, '$question', '$choiceA', '$choiceB', '$choiceC', '$choiceD', '$correctAnswer')";

            // Execute the query
            if ($conn->query($sql) !== TRUE) {
                // Error occurred
                echo "Error: " . mysqli_error($conn);
                exit();
            }
        }
        header("Location: Teacher_index.php?msg=Quiz - multiple choice added successfully");
        exit();
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>