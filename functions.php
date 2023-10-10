<?php
// function test($min, $max)
// {
//     $counte = array();
//     $pourcentage = 0;
//     $negatif = array();
//     $positif = array();
//     $pourcentageNegatif = 0;
//     $pourcentagePositif = 0;

//     // foreach ($_SESSION['all'] as $index => $child) {
//     //     if (intval($child['age']) > 2 && intval($child['age']) <= 60 && $child['etat'] === 'positif') {

//     //         $counte[] = $_SESSION['all'][$index];
//     //         $pourcentage = count($counte) / count($_SESSION['all']) * 100;
//     //     }
//     // }
//     foreach ($_SESSION['all'] as $index => $child) {
//         if (intval($child['age']) >= $min && intval($child['age']) <= $max) {

//             $counte[] = $_SESSION['all'][$index];
//             $pourcentage = count($counte) / count($_SESSION['all']) * 100;
//         }
//     }
//     foreach ($counte as $index_ => $child) {
//         if ($child['etat'] === 'positif') {
//             $positif[] =  $counte[$index_];
//             $pourcentagePositif = count($positif) / count($counte) * 100;
//         } elseif ($child['etat'] === 'negatif') {
//             $negatif[] = $counte[$index_];
//             $pourcentageNegatif = count($negatif) / count($counte) * 100;
//         }
//     }
    
//     print_r($_SESSION['all']);
//     print_r("</br>");
//     print_r("</br>");
//     print_r($counte); // Afficher les patients cible
//     print_r("</br>");
//     print_r("</br>");
//     echo "Informations statistiques des Parients de cette tranche d'age qui ont fait le teste : ";
//     print_r("</br>");
//     print_r("</br>");
//     echo " Ils sont au nombre de:  " . count($counte); // Compter les patients cible
//     print_r("</br>");
//     print_r("</br>");
//     echo " Ils presentent " . $pourcentage . " % des patients vaccine"; // Le % des patients vaccine
//     print_r("</br>");
//     print_r("</br>");
//     echo "Parmi eux, il a " . count($positif) . " Positifs soit environ " . $pourcentagePositif . " % "; // les ces patient le % des cas
//     print_r("</br>");
//     print_r("</br>");
//     echo "Parmi eux, il a " . count($negatif) . " Negatif soit environ " . $pourcentageNegatif . " % "; // les ces patient le % des cas
//     print_r("</br>");
// }

function moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee)
{
    $counte = array();
    $pourcentage = 0;
    $negatif = array();
    $positif = array();
    $pourcentageNegatif = 0;
    $pourcentagePositif = 0;

    foreach ($_SESSION['histo'] as $index => $child) {
        if ($child['age'] === "moins de 18") {

            $counte[] = $_SESSION['histo'][$index];
            $pourcentage = count($counte) / count($_SESSION['histo']) * 100;
        }
    }

    foreach ($counte as $index_ => $child) {
        if ($child['etat'] === 'positif') {
            $positif[] =  $counte[$index_];
            $pourcentagePositif = count($positif) / count($counte) * 100;
        } elseif ($child['etat'] === 'negatif') {
            $negatif[] = $counte[$index_];
            $pourcentageNegatif = count($negatif) / count($counte) * 100;
        }
    }
    
    print_r("</br>");
    print_r("</br>");
    print_r("</br>");
    echo "Vos Informations : ". $nom . " </br> ". $fievre . " </br> " . $prenom . " </br> " . $age . " </br> " . $poids . " </br> " . $toux . " </br> " . $respiration . " </br> " . $fatigue . " </br> " . $douleur_musculaire . " </br> " . $perte_gout . " </br> " . $diarrhee;
    print_r("</br>");
    print_r("</br>");
    echo "Informations statistiques des Parients de cette tranche d'age qui ont fait le teste : ";
    print_r("</br>");
    print_r("</br>");
    echo " Ils sont au nombre de:  " . count($counte); // Compter les patients cible
    print_r("</br>");
    print_r("</br>");
    echo " Ils presentent " . $pourcentage . " % des patients vaccine"; // Le % des patients vaccine
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($positif) . " Positifs soit environ " . $pourcentagePositif . " % "; // les ces patient le % des cas
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($negatif) . " Negatif soit environ " . $pourcentageNegatif . " % "; // les ces patient le % des cas
    print_r("</br>");
}
// //...........
function dixuit_trenteCinq($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee)
{
    $counte = array();
    $pourcentage = 0;
    $negatif = array();
    $positif = array();
    $pourcentageNegatif = 0;
    $pourcentagePositif = 0;

    foreach ($_SESSION['histo'] as $index => $child) {
        if ($child['age'] === "entre 18 et 35") {

            $counte[] = $_SESSION['histo'][$index];
            $pourcentage = count($counte) / count($_SESSION['histo']) * 100;
        }
    }

    foreach ($counte as $index_ => $child) {
        if ($child['etat'] === 'positif') {
            $positif[] =  $counte[$index_];
            $pourcentagePositif = count($positif) / count($counte) * 100;
        } elseif ($child['etat'] === 'negatif') {
            $negatif[] = $counte[$index_];
            $pourcentageNegatif = count($negatif) / count($counte) * 100;
        }
    }
    
    // print_r($_SESSION['histo']);
    print_r("</br>");
    print_r("</br>");
    echo "Vos Informations : ". $nom . " </br> ". $fievre . " </br> " . $prenom . " </br> " . $age . " </br> " . $poids . " </br> " . $toux . " </br> " . $respiration . " </br> " . $fatigue . " </br> " . $douleur_musculaire . " </br> " . $perte_gout . " </br> " . $diarrhee;
    print_r("</br>");
    print_r("</br>");
    echo "Informations statistiques des Parients de cette tranche d'age qui ont fait le teste : ";
    print_r("</br>");
    print_r("</br>");
    echo " Ils sont au nombre de:  " . count($counte); // Compter les patients cible
    print_r("</br>");
    print_r("</br>");
    echo " Ils presentent " . $pourcentage . " % des patients vaccine"; // Le % des patients vaccine
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($positif) . " Positifs soit environ " . $pourcentagePositif . " % "; // les ces patient le % des cas
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($negatif) . " Negatif soit environ " . $pourcentageNegatif . " % "; // les ces patient le % des cas
    print_r("</br>");
}
// //............
function trenteSix_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee)
{
    $counte = array();
    $pourcentage = 0;
    $negatif = array();
    $positif = array();
    $pourcentageNegatif = 0;
    $pourcentagePositif = 0;

    foreach ($_SESSION['histo'] as $index => $child) {
        if ($child['age'] === "entre 36 et 60") {

            $counte[] = $_SESSION['histo'][$index];
            $pourcentage = count($counte) / count($_SESSION['histo']) * 100;
        }
    }

    foreach ($counte as $index_ => $child) {
        if ($child['etat'] === 'positif') {
            $positif[] =  $counte[$index_];
            $pourcentagePositif = count($positif) / count($counte) * 100;
        } elseif ($child['etat'] === 'negatif') {
            $negatif[] = $counte[$index_];
            $pourcentageNegatif = count($negatif) / count($counte) * 100;
        }
    }
    
    // print_r($_SESSION['histohisto']);
    print_r("</br>");
    print_r("</br>");
    echo "Vos Informations : ". $nom . " </br> ". $fievre . " </br> " . $prenom . " </br> " . $age . " </br> " . $poids . " </br> " . $toux . " </br> " . $respiration . " </br> " . $fatigue . " </br> " . $douleur_musculaire . " </br> " . $perte_gout . " </br> " . $diarrhee;
    print_r("</br>");
    print_r("</br>");
    echo "Informations statistiques des Parients de cette tranche d'age qui ont fait le teste : ";
    print_r("</br>");
    print_r("</br>");
    echo " Ils sont au nombre de:  " . count($counte); // Compter les patients cible
    print_r("</br>");
    print_r("</br>");
    echo " Ils presentent " . $pourcentage . " % des patients vaccine"; // Le % des patients vaccine
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($positif) . " Positifs soit environ " . $pourcentagePositif . " % "; // les ces patient le % des cas
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($negatif) . " Negatif soit environ " . $pourcentageNegatif . " % "; // les ces patient le % des cas
    print_r("</br>");
}
// //............
function plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee)
{
    $counte = array();
    $pourcentage = 0;
    $negatif = array();
    $positif = array();
    $pourcentageNegatif = 0;
    $pourcentagePositif = 0;

    foreach ($_SESSION['histo'] as $index => $child) {
        if ($child['age'] === "plus de 60") {

            $counte[] = $_SESSION['histo'][$index];
            $pourcentage = count($counte) / count($_SESSION['histo']) * 100;
        }
    }

    foreach ($counte as $index_ => $child) {
        if ($child['etat'] === 'positif') {
            $positif[] =  $counte[$index_];
            $pourcentagePositif = count($positif) / count($counte) * 100;
        } elseif ($child['etat'] === 'negatif') {
            $negatif[] = $counte[$index_];
            $pourcentageNegatif = count($negatif) / count($counte) * 100;
        }
    }
    
    print_r($_SESSION['histo']);
    print_r("</br>");
    print_r("</br>");
    echo "Vos Informations : ". $nom . " </br> ". $fievre . " </br> " . $prenom . " </br> " . $age . " </br> " . $poids . " </br> " . $toux . " </br> " . $respiration . " </br> " . $fatigue . " </br> " . $douleur_musculaire . " </br> " . $perte_gout . " </br> " . $diarrhee;
    print_r("</br>");
    print_r("</br>");
    echo "Informations statistiques des Parients de cette tranche d'age qui ont fait le teste : ";
    print_r("</br>");
    print_r("</br>");
    echo " Ils sont au nombre de:  " . count($counte); // Compter les patients cible
    print_r("</br>");
    print_r("</br>");
    echo " Ils presentent " . $pourcentage . " % des patients vaccine"; // Le % des patients vaccine
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($positif) . " Positifs soit environ " . $pourcentagePositif . " % "; // les ces patient le % des cas
    print_r("</br>");
    print_r("</br>");
    echo "Parmi eux, il a " . count($negatif) . " Negatif soit environ " . $pourcentageNegatif . " % "; // les ces patient le % des cas
    print_r("</br>");
}

// //............
