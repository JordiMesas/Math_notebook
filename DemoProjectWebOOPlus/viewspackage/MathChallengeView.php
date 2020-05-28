<!DOCTYPE html>

<html lang="es">
    <head>
        <title>Aprenentatge per Projectes</title>
        <meta charset="UTF-8">
        <meta name="title" content="Portal del Modul 3">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>       
        <header  class="title">
            <h1> P H P. Aprenentatge per Projectes </h1>
            <section id="menu">
                <nav  class="darkstyle">
                    <div>
                        <a href="MainView.php" class="optmenu"> HOME</a>                       
                    </div>
                </nav>
            </section>
        </header>

        <aside id="leftside">
            <div class="darkstyle">
            </div>
        </aside>
        <aside id="rightside">
            <div class="darkstyle">
            </div>
        </aside>

        <section id="central">
            <a name="principal"></a>
            <br><b>MATH CHALLENGE: Suma, Resta, Multiplica i Divideix (sense decimals, nomes cocient)</b><br><br>
            <article>
                <?php
                include_once '../controllerspackage/MathChallengeController.php';

                $activityManager = MathChallengeController::getController();
                $response = false;

                if (filter_input(INPUT_POST, 'result') != null) {
                    $result = (int) filter_input(INPUT_POST, 'result');
                    $trueResult = (int) $_SESSION['currentChallengeResult'];
                    if ($result == $trueResult) {
                        $activityManager->updateWithSuccess();
                        $response = true;
                        print "<br><b>Correcte!</b><br>";
                    } else {
                        $activityManager->updateWithError();
                    }
                    if ($response == false) {
                        print "<br><b>Resultat incorrecte.</b> Tornem a començar al nivell actual<br><br>";
                    }
                }
                if ($activityManager->finished() == 1) {
                    $points = $activityManager->closeChallenge();
                    print "<b>CONGRATS! CHALLENGE COMPLETED!</b><br><br>Has aconsseguit $points punts dels 1.000 possibles";
                    print "<br><b>" . "GAME FINISHED" . "</b><br>";
                } else {
                    print "<br>Nivell = " . $activityManager->gamelevel() .
                            "<br>Encerts Seguits = " . $activityManager->numoperssuccess() .
                            " (necesites = " . (3 - $activityManager->numoperssuccess()) . ")";
                    print "<br> Intent = " . $activityManager->attempts() . "<br><br>";
                    $activityManager->newChallenge();
                    print "<b>Aconsegueix 3 encerts seguits a cada operació per passar a la seguent.<br></b>";
                    print "<br><b>" . $activityManager->currentChallenge() . "</b><br>";
                    $_SESSION['currentChallengeResult'] = $activityManager->currentResult();
                }
                ?>

                <div id="formulario">             
                    <form action = "" method="POST">
                        <input type="number" name="result" placeholder="Escriu el resultat"/>
                        <input type="submit" value="CHECK" id="check" name="enviar"/>
                    </form>
                </div>
            </article>	
        </section>

        <footer>
            <div class="darkstyle">
                <a><b> Autor: Jose Meseguer</b> </a>  
            </div>		
        </footer>
    </body>
</html>





