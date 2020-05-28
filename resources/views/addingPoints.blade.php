<!DOCTYPE html>
<html lang="fr">
<?php 
    use Illuminate\Support\Facades\DB;
     ?>

<head>
    <meta charset="UTF-8">
    <title>Coding house</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    @include('cssSwitcher')
    <link rel="stylesheet" href="css/app.scss"/>
    <link rel="stylesheet" href="css/pages/historique.scss"/>

    <!-- <link rel="stylesheet" href="../sass/app.css"/>
    <link rel="stylesheet" href="../sass/pages/home.css"/>-->

</head>

<body>

@include('header')
<section id="addPoints">
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
</section>

<section>

<?php
$studentList = DB::table('users')
->get();

$challengeList = DB::table('type_points')
->where('type_points.type', 'PO')
->orWhere('type_points.type', 'events')
->get();

echo '<form name="addPointsForm" method="post">'. csrf_field() .
    '<section class="addPoints">
    <label class="student">Eleve
    <select required="required" name="studentId" size="5">';

    foreach ($studentList as $student){

      echo '<option value="'.$student->id.'">'.$student->first_name.'</option>';

      };

   echo '</select>
    </label> </br>
    <label class="challenge">Défi
    <select required="required" name="challengeId" size="5">';
    foreach ($challengeList as $challenge){
          echo '<option value="'.$challenge->id.'">'.$challenge->name.'</option>';  
    }
   echo '</select>
    </label> </br>
    <label class="points">Nombre de points
    <input required="required" name="nbrPoints" type="number"/>
    </label>
    </br>
    <input type="submit" name="envoi">

    </section>

</form>';

if(isset($_POST['envoi'])){

      $nbr_points = $_POST['nbrPoints'];
      $student_id = $_POST['studentId'];
      $challenge_id = $_POST['challengeId'];

            DB::table('mvt_points')->insert(
                  array(
                        'label' => "$nbr_points",
                        'users_id' => "$student_id",
                        'type_point_id' => "$challenge_id"
                  )
                  );
      };

?>
</section>

@include('footer')

</body>

</html>