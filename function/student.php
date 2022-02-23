<?php

/**
 * New Student
 * @param $nom
 * @param $prenom
 * @param $age
 * @param $base
 */
function newStudent($nom, $prenom, $age, $base){
    $sql = "INSERT INTO eleve (nom, prenom, age) 
            VALUES ('$nom', '$prenom', '$age')";
    $base->exec($sql);
    echo "New student add with succes !";
}

function updateStudent($prenom, $nom, $age, $idEleve, $base){
   $stm = $base->prepare("
   UPDATE eleve SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id
   ");

   $stm->bindParam(':nom', $nom);
   $stm->bindParam(':prenom', $prenom);
   $stm->bindParam(':age', $age);
   $stm->bindParam(':id', $idEleve);

   $stm->execute();

   echo "New student has been modified with succes !";
}

function deleteStudent($idEleve, $base){
    $student = "DELETE FROM eleve WHERE $idEleve";
    $base->exec($student);
    echo "The student has been successful deleted";
}