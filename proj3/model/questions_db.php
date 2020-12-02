<?php

function create_question ($title, $boedy, $skills, $ownerid){
    global $db;
    $query = 'INSERT INTO questions (title, body, skills, ownerid)
	VALUES (:title, :body, :skills, :ownerid)';
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
}
function get_all_questions (){
    global $db;
    $query = 'SELECT * FROM questions';
    $statement = $db->prepare($query);
    $statement->execute();

    $questions = $statement->fetchAll();
    $statement->closeCursor();

    return $questions;

}
function get_user_questions ($ownerid){

    global $db;
    $query = 'SELECT * FROM questions WHERE ownerid = :ownerid';

    $statement = $db->prepare($query);
    $statement->bindValue(':ownerid', $ownerid);
    $statement->execute();

    $questions = $statement->fetchAll();
    $statement->closeCursor();

    return $questions;

}
function delete_question($questionId){
    global $db;
    $query = 'DELETE FROM questions WHERE id = :questionId';
    $statement = $db->prepare($query);
    $statement->bindValue(':questionId', $questionId);
    $statement->execute();
    $statement->closeCursor();
}

?>