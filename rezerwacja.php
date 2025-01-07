<?php

    $conn = mysqli_connect('localhost', 'root', '', 'restauracja_4ti_gr1');

    if($conn->connect_error){
        die("Connection failed: " 
            . $conn->connect_error);
    }
    
    if(!empty($_POST['data']) && !empty($_POST['ilosc_osob']) && !empty($_POST['nr_telefonu'])){

    $data = $_POST['data'];

    $ilosc_osob = $_POST['ilosc_osob'];

    $nr_telefonu = $_POST['nr_telefonu'];


    $sql = "INSERT INTO rezerwacje (id, nr_stolika, data_rez, liczba_osob, telefon) VALUES (null, null, $data, $ilosc_osob, $nr_telefonu)";


    if($conn->query($sql) === TRUE){
        echo "Dodano rezerwację do bazy";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
    $conn->close();

?>