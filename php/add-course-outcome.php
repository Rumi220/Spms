<?php
    include 'include/conn.php';

    $coid   = $_POST['coId'];
    $studentId    = $_POST['studentid'];
    $year   = $_POST['year']; 
    $sem   = $_POST['semester'];
    $course   = $_POST['course'];
    $section   = $_POST['section'];
    $grade   = $_POST['grade'];

    $query = "INSERT INTO course_outcome (coId, Student_id, year, Semester, course, section, Grade) 
                    VALUES ('$coid', '$studentId', '$year ', '$sem', '$course', '$section', '$grade')";

   if($conn->query($query) == FALSE){
        header("Location: ../faculty/course-outcome.php?response=500");
    }

    // for($i=1; $i<=14; $i++){
    //     $ploIndx = $_POST['plo'.$i];
    //     if(isset($_POST['plo'.$i."-co"])){
    //         $ploId = "SELECT serial FROM plo WHERE programId = '$programId' AND indx = $ploIndx";
    //         $ploId = $conn->query($ploId)->fetch_row()[0];
    //         $query = "INSERT INTO co (courseId, ploId) VALUES ('$id', $ploId)";
    //         $conn->query($query);
    //         $mappings = $_POST['plo'.$i."-co"];
    //         foreach($mappings as $map){
    //             $query = "UPDATE co SET co".$map."=1 WHERE ploId = '$ploId'";
    //             $conn->query($query);
    //         }
    //     }
    // }

    header("Location: ../faculty/course-outcome.php?response=200");
        