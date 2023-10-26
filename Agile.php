<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile</title>
    <link rel="stylesheet" href="stest.css">
</head>

<body>
    <header id="page-top">
        <h1>Agile - Scrum</h1>
    </header>

    <?php include 'navbar.php' ?>
    

    <!-- -----------------------------------Agile----------------------------------- -->

    
    <div class="agdiv" id="agile-section">

        <div class="ag-text"id="texT">
            <h1>Agile</h1>

            <p>
                Agile is een <strong>flexibele </strong>manier van werken waarbij het grootste belang <strong>klanten
                    tevreden </strong>houden is. Er kunnen <strong>snel </strong>en <strong>efficiënt
                </strong>veranderingen worden
                gemaakt.
            </p>
        </div>
        <div class="agim">
            <img class="agilefot" src="agile2.webp" alt="agile"id="texT">

        </div>
    </div>

    <div class="divid" id="manifest-section"></div>
    <!-- -------------------------------------Agile manifesto------------------------------------- -->
    <div class="manifdiv">

        
        <div class="agma-text"id="texT">
            
            <h1>Agile-Manifesto</h1>
            
            <p>
                In 2001 heeft een groepje softwareontwikkelaars de Agile Manifesto geschreven. Hierin staan de waarden
                en principes in van Agile werken. <br> De waarden zijn in de afbeelding links te zien.
            </p>
            
        </div>
        <div class="agmaim">
            <img class="manifot" src="agileman4.png" alt="agileman">

        </div>
    </div>

    <div class="divid"></div>
    <!-- ------------------------------------agile principes------------------------------------ -->
    <div class="agprdiv" id="agpr-section">


        <div class="agpr-text"id="texT">
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
                    <?php foreach ($agilePrinciples as $principle): ?>
                        <li>
                            <?= $principle; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>

            </section>



        </div>
        <div class="agprfots">
            <img class="agprfot" src="agileprins.webp" alt="agilepri"id="texT">
        </div>
    </div>

    <div class="divid"></div>
    <!-- ---------------------------------------Lean & mu's--------------------------------------- -->
    <div class="lemudiv" id="lemu-section">

        <div class="lemum">
            <img class="lemufot" src="3mus.png" alt="drie Mu's">

        </div>

        <div class="lemu-text"id="texT">

            <h1>Lean en de drie Mu's</h1>
            <p>
                Zorgen dat de maximale waarde wordt geleverd zonder extra onnodig werk te doen wordt
                <strong>lean</strong> genoemd. Deze manier van werken is bedacht om de
                <strong>drie Mu's</strong> te voorkomen. <br>Dit zijn:
            </p>
            <?php
            $driemus = [
                "<strong>Muda</strong> staat voor <strong>verspilling</strong>, het zijn activiteiten of processen 
                die geen waarde toevoegen aan het product of de klant. ",

                "<strong>Mura</strong> staat voor <strong>ongelijkheid</strong>, dus als er bijvoorbeeld het ene
                moment veel meer werk is dan op het andere moment.",

                "<strong>Muri</strong> staat voor <strong>overbelasting</strong>, dus wanneer er meer werk wordt
                verwacht dan mogelijk is wat voor stress kan zorgen."
            ];
            ?>

            <section class="driemus">

                <ol>
                    <?php foreach ($driemus as $mu): ?>
                        <li>
                            <?= $mu; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>

            </section>

        </div>
    </div>

    <div class="divid"></div>
    <!-- ------------------------------------Lean & mu's end------------------------------------ -->


    <!-- ---------------------------------------Scrum--------------------------------------- -->

    <div class="scrumdiv" id="scrum-section">

        <div class="sc-text"id="texT">
            <h1>Scrum</h1>

            <p>
                Scrum is een <strong>Agile-framework</strong> het gaat erom dat er veranderingen gemaakt kunnen
                worden op basis van de feedback van de klanten. Dit is mogelijk doordat er bij scrum regelmatige
                werkende stukjes software worden geleverd. <br> Deze stukjes software zijn in de sprint voltooid en
                worden het <strong>increment</strong> genoemd. Het moet hiervoor ook voldoen aan de <strong>
                    definition van done</strong>, dat is waaraan het product moet voldoen om te worden gezien als
                klaar (done).
            </p>
        </div>
        <div class="scrumfoto">
            <img class="scrumfot" src="scrum.png" alt="scrum">
        </div>

    </div>

    <div class="divid"></div>
    <!-- --------------------------------------Scrum end-------------------------------------- -->
    <script src="script.js"></script>
</body=>

</html>



<!-- gall organisate
afspraak maken hugo - wat is jouw rol - wat doe jij oan precies - kan jij mij alles vertellen over de IT aplicaties van gall&gall
afspraak maken anneke - wat is jouw rol - wat doe jij dan precies
afspraak maken erwin - wat is jouw rol - wat doe jij dan precies
afspraak maken maurice - wat is jouw rol - wat doe jij dan precies 
afspraak maken dajana - wat is jouw rol - wat doe jij dan precies
afspraak maken wouter bas - wat is jouw rol - wat doe jij dan precies 
afspraak maken roopesh - wat is jouw rol - wat doe jij dan precies -->
<!-- elk gesprek gespreksverslag
afspraak maken maurice & vladimir kurganov - wat is jouw rol - wat doe jij dan precies - kan je me helpen opzetten pipeline -->
<!-- deze week hugo & maurice + vladimir -->
