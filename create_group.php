




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kreator grup</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Kreator grup</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html">Home</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/people.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Stworzone grupy</h1>
                <br />
               
       
                <?php

require("connect.php");

if(isset($_POST['exampleFormControlSelect1'])) {

    $studentsSql = "SELECT * FROM studenci";
    $allStudents = $conn->query($studentsSql);

    $studentArray = [];
    $groups = [];

    // echo $row['imie_nazwisko'];

    // echo 'TEST';

    while($row = $allStudents->fetch_assoc()) {

        array_push($studentArray, $row);

    }


    $groupsNum = (int) $_POST['exampleFormControlSelect1'];
    

    // Create arrays
    $groupsNumArrCreate = $groupsNum - 1;
    while($groupsNumArrCreate >= 0) {
        $groups[$groupsNumArrCreate] = [];
        $groupsNumArrCreate--;
    }

    $currentGroupIdx = 0;

    while(count($studentArray) > 0) {

        $randIdx = array_rand($studentArray);

        //echo $currentGroupIdx;

        array_push($groups[$currentGroupIdx], $studentArray[$randIdx]);

        array_splice($studentArray, $randIdx, 1);

        if($currentGroupIdx < $groupsNum - 1) {
            $currentGroupIdx++;
        } else {
            $currentGroupIdx = 0;
        }

    }

    foreach($groups as $group) {
        echo '<p>Grupa: </p>';
        json_encode($group);
        echo "
        <table class=table table-dark>
   <tr>
      <td>{$group[0]['imie_nazwisko']}</td> <td>{$group[1]['imie_nazwisko']}</td> <td>{$group[2]['imie_nazwisko']}</td><td>{$group[3]['imie_nazwisko']}</td><td>{$group[4]['imie_nazwisko']}<td>{$group[5]['imie_nazwisko']}</td><td>{$group[6]['imie_nazwisko']}</td><td><td>{$group[7]['imie_nazwisko']}</td><td>{$group[8]['imie_nazwisko']}</td><td>{$group[9]['imie_nazwisko']}</td>
   </tr>
        </table>";
            
        
        echo '<br />';
        echo '<br />';
    }

}

?>
                
            </div>
        </header>
     
        
        
        
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Kreator grup - Mikołaj Kortus/Błażej Rzodkiewicz</small></div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
