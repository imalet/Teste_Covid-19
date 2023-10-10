<?php
include('functions.php');

session_start();

if (!isset($_SESSION['histo'])) {
    $_SESSION['histo'] = array();
}


if (isset($_POST['sub'])) {

    @$nom = $_POST['nom'];
    @$prenom = $_POST['prenom'];
    @$age = $_POST['age'];
    @$poids = $_POST['poids'];
    @$fievre = $_POST['fievre'];
    @$toux = $_POST['toux'];
    @$respiration = $_POST['difficulte_respiratoire'];
    @$fatigue = $_POST['fatigue'];
    @$douleur_musculaire = $_POST['douleur_musculaire'];
    @$perte_gout = $_POST['perte_gout'];
    @$diarrhee = $_POST['diarrhee'];
}


if (!empty($age) && !empty($fievre) && $poids > 0 && $poids <= 110 && !empty($toux) && !empty($respiration) && !empty($fatigue) && !empty($douleur_musculaire) && !empty($perte_gout) && !empty($diarrhee) && preg_match('/^[A-Za-z\s]+$/', $nom) && preg_match('/^[A-Za-z\s]+$/', $prenom)) {

    
        if ($age === "moins de 18") {

            if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 18 A";
                moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 18 B";
    
                moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Non' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Oui' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 18 C";
    
                moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } else {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'negatif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
                moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            }
        }
        // // //..........
    
        if ($age === "entre 18 et 35") {
    
            if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 18-35 A";
    
                dixuit_trenteCinq($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 18-35 B ";
                dixuit_trenteCinq($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } else {
                echo "Tu n'as rien ---- 18-35 </br>";
            }
        }
        // // //..........
        if ($age === "entre 36 et 60") {
    
    
            if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 36-60 A";
                trenteSix_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'positif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- 36-60 B";
                trenteSix_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } else {
                echo "Tu n'as rien ---- 36-60";
            }
        }
        // // //..........
        if ($age === "plus de 60") {
    
            if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'negatif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- plus 60 A";
                plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'negatif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- plus 60 B";
                plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } elseif ($fievre == 'Non' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {
    
                $enregistrement = array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'age' => $age,
                    'poids' => $poids,
                    'fievre' => $fievre,
                    'toux' => $toux,
                    'respiration' => $respiration,
                    'fatigue' => $fatigue,
                    'douleur_musculaire' => $douleur_musculaire,
                    'perte_gout' => $perte_gout,
                    'diarrhee' => $diarrhee,
                    'etat' => 'negatif',
                    'date_teste' => date('Y-m-d'),
                );
    
                if (!in_array($enregistrement, $_SESSION['histo'])) {
                    $_SESSION['histo'][] = $enregistrement;
                }
    
                echo "Tu as le COVID mon frere ---- plus 60 A";
                plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
            } else {
                echo "Tu n'as rien ---- plus 60";
            }
        }
    
    
} else {
    echo "Mon frere, il faut etre coherent dans tes donnees";
}



// if (!empty($age) && !empty($fievre) && !empty($toux) && !empty($respiration) && !empty($fatigue) && !empty($douleur_musculaire) && !empty($perte_gout) && !empty($diarrhee)  ) {

//     if ($age === "moins de 18") {

//         if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 18 A";
//             moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 18 B";

//             moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Non' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Oui' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 18 C";

//             moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } else {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'negatif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }
//             moins_dixhuit($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         }
//     }
//     // // //..........

//     if ($age === "entre 18 et 35") {

//         if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 18-35 A";

//             dixuit_trenteCinq($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 18-35 B ";
//             dixuit_trenteCinq($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } else {
//             echo "Tu n'as rien ---- 18-35 </br>";
//         }
//     }
//     // // //..........
//     if ($age === "entre 36 et 60") {


//         if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 36-60 A";
//             trenteSix_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'positif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- 36-60 B";
//             trenteSix_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } else {
//             echo "Tu n'as rien ---- 36-60";
//         }
//     }
//     // // //..........
//     if ($age === "plus de 60") {

//         if ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Oui' && $fatigue == 'Oui' && $douleur_musculaire == 'Oui' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'negatif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- plus 60 A";
//             plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Oui' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Non') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'negatif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- plus 60 B";
//             plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } elseif ($fievre == 'Non' && $toux == 'Oui' && $respiration == 'Non' && $fatigue == 'Non' && $douleur_musculaire == 'Non' && $perte_gout == 'Oui' && $diarrhee == 'Oui') {

//             $enregistrement = array(
//                 'nom' => $nom,
//                 'prenom' => $prenom,
//                 'age' => $age,
//                 'poids' => $poids,
//                 'fievre' => $fievre,
//                 'toux' => $toux,
//                 'respiration' => $respiration,
//                 'fatigue' => $fatigue,
//                 'douleur_musculaire' => $douleur_musculaire,
//                 'perte_gout' => $perte_gout,
//                 'diarrhee' => $diarrhee,
//                 'etat' => 'negatif',
//                 'date_teste' => date('Y-m-d'),
//             );

//             if (!in_array($enregistrement, $_SESSION['histo'])) {
//                 $_SESSION['histo'][] = $enregistrement;
//             }

//             echo "Tu as le COVID mon frere ---- plus 60 A";
//             plus_soixante($nom, $prenom, $age, $poids, $fievre, $toux, $respiration, $fatigue, $douleur_musculaire, $perte_gout, $diarrhee);
//         } else {
//             echo "Tu n'as rien ---- plus 60";
//         }
//     }

// } else {
//     echo "Desole il faut rentrer des donnees coherentes";
// }




// .....................................................


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Poids</th>
                    <th scope="col">Toux</th>
                    <th scope="col">Fatigue</th>
                    <th scope="col">Perte_Gout</th>
                    <th scope="col">Diarrhee</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION['all'] as $index => $child) { ?>
                    <tr>
                        <td> <?= $child['nom']  ?> </td>
                        <td> <?= $child['prenom']  ?> </td>
                        <td> <?= $child['age']  ?> </td>
                        <td> <?= $child['poids']  ?> </td>
                        <td> <?= $child['toux']  ?> </td>
                        <td> <?= $child['douleur_musculaire']  ?> </td>
                        <td> <?= $child['perte_gout']  ?> </td>
                        <td> <?= $child['diarrhee']  ?> </td>
                        <td> <?= $child['etat']  ?> </td>
                        <td> <?= $child['date_teste']  ?> </td>
                    </tr>

                <?php  }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html> -->