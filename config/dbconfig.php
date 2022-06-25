<?php
    $servername='localhost';
    $usernam='root';
    $password='';
    $dbname = "a2zlibrary";
    
//OOP  RETURNS INSTANCE OF TRUE
//$un
// pass
// server
// pwd
// dbname


//PDO
// try {
//   $conn = new PDO("mysql:host=$server ;dbname=dbname", un, pwd);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
//   }
// catch(PDOException $e)
// {
//   echo "Connection failed: " . $e->getMessage();
// }

// Create connection
// $conn = new mysqli($servername, $username, $password);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// $db = mew mysqli(server, user, pass, db)
// if(db->connect_error){ die("connection failed" . db->connect_error)}

// sql="insert (bla,bla,bla) values (?,?,?)";

// $stmt = db->prepare(sql);
// stmt->bind_param("sss",$bla,$bla2,$bla3);

// assign
// $bla = "John";
// $bla2 = "Doe";
// $bla3 = "john@example.com";
// stmt->execute();
// stmt->close();

// last_id = db->insert_id;

// sql2= "select bla bla bla";
// result = db->query(sql2);
// result->num_rows;
// row = result->fetch_assoc();
// row["cloumn_name"];
// if(db->query(sql)){echo "success"} else{echo "error"};

// db->close();


//PROCEDURAL RETURNS TRUE
    $db = mysqli_connect($servername,$usernam,$password,$dbname);
    if(!$db){
        die('Could not Connect MySql Server:' . mysqli_connect_error() );
      }

// sql="insert (bla,bla,bla) values (?,?,?)"
// if( mysqli_query(db,sql) ){ echo "db created" } else{ echo "failed" }
// if( mysqli_multi_query(db,sql))

// sql2= "select bla bla bla";
// result = mysqli(db,sql2)
// mysqli_num_rows(result);
// row = mysqli_fetch_assoc(result);
// row["cloumn_name"];
// last_id = mysqli_insert_id(db)
// mysqli_close(db);