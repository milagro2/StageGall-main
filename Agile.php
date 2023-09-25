<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile</title>
    <link rel="stylesheet" href="stest.css">
</head>

<body>
    <header class="agile-header">
        <h1>Agile - Scrum</h1>
    </header>

    <?php include 'navbar.php' ?>
    <nav class="sub-navbar">
        <ul>
            <li><a href="#agile-section">Agile</a></li>
            <li><a href="#manifest-section">Agile Manifesto</a></li>
            <li><a href="#agpr-section">Agile Principes</a></li>
        </ul>
    </nav>

    <!-- ----------------------------------Agile---------------------------------------- -->
    <div class="Agcontent" id="agile-section">

        <div class="agtext">
            <h1>Agile</h1>

            <p>
                Agile is een <strong>flexibele </strong>manier van werken waarbij het grootste belang <strong>klanten
                    tevreden </strong>houden is. Er kunnen <strong>snel </strong>en <strong>efficiënt </strong>veranderingen worden
                gemaakt. 
            </p>
        </div>
        <div class="agim">
        <img class="manifot" src="agile.png" alt="agile">

        </div>
    </div>

    <div class="divid" id="manifest-section"></div>
    <!-- -------------------------------Agile manifesto------------------------------------------------ -->
    <div class="manifdiv">

        <div class="agmaim">
        <img class="manifot" src="agileman4.png" alt="agileman">

        </div>

        <div class="agmatext">

            <h1>Agile-Manifesto</h1>

            <p>
                In 2001 heeft een groepje softwareontwikkelaars de Agile Manifesto geschreven. Hierin staan de waarden
                en principes in van Agile werken. <br> De waarden zijn in de afbeelding links te zien.
            </p>

        </div>
    </div>

    <div class="divid"></div>
    <!-- -------------------------------agile principes------------------------------------ -->
    <div class="agprdiv" id="agpr-section">


        <div class="agprtext">
            <h1>Agile Principes</h1>

            <?php
            $agilePrinciples = [
                "De hoogste prioriteit is het <strong>tevreden houden van de klanten</strong> door vroege en
                 regelmatige levering van waardevolle software.",

                "<strong>Reageren op de steeds veranderende eisen</strong> van de klanten",

                "Continue <strong>werkende software leveren</strong>, het liefst zo vaak en snel mogelijk.",

                "Het <strong>samenwerken</strong> tussen het <strong>development team en klanten</strong> is
                belangrijk",

                "Het team bestaat uit <strong>gemotiveerde individuen</strong> met een <strong>goede werkomgeving, 
                goede steun en vertrouwen.</strong>",

                "<strong>Face-to-face communicatie</strong> is de beste manier om informatie over te brengen.",

                "<strong>Werkende software</strong> is de beste manier om te zijn <strong>hoeveel progress</strong>
                er gemaakt word.",

                "Agile moedigt een <strong>constant en vol te houden tempo</strong> aan voor alle betrokkenen, zodat iedereen
                gezond en productief blijft gedurende het hele project",

                "Continue aandacht aan de techniek en een <strong>goed design</strong> versterkt agility",

                "<strong>Simplicity</strong>, het werk dat gedaan word zonder verspilling maximalizeren is essentieel",

                "De beste architecturen, vereisten en ontwerpen komen voort uit <strong>zelforganiserende</strong> 
                teams.",

                "Op regelmatige momenten bespreekt het team hoe het <strong>nog effectiever</strong> kan en verandert zo."

            ];
            ?>

            <section class="agile-principles">

                <ol>
                    <?php foreach ($agilePrinciples as $principle) : ?>
                        <li><?= $principle; ?></li>
                    <?php endforeach; ?>
                </ol>

            </section>



        </div>
        <div class="agprfots">
            <img class="agprfot" src="agileprins.webp" alt="agilepri">
        </div>
    </div>

    <div class="divid"></div>
    <!-- -------------------------------------------------------------------------------- -->


    <script src="script.js"></script>
</body>

</html>
