<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;

    // true = darkmode
    if ($_SESSION['counter'] == 1) {
        $_SESSION['test'] = 'true';

    } else {
        $_SESSION['counter'] -= 2;
        $_SESSION['test'] = 'false';

    }

} else {
    $_SESSION['counter'] = 4;
    $_SESSION['test'] = 'false';
}
$ttes = $_SESSION["test"];
$my_Msg = "it is " . $_SESSION['counter'];

?>
<script>
    let isBlack = <?php echo $ttes ?>;
    const body = document.body;
    const sunMoon = document.getElementById("sun-moon");
    const TextDivs = document.querySelectorAll("div[id^='texT']");
    const BackColor = [];
    const TextColor = document.querySelectorAll(".todo-text, .notes-text, .done-text, .sticky-block, .sticky-block a");
    const HeadColor = document.querySelector("header");
    const Images = document.querySelectorAll("img[id^='texT']");


    const originalColors = {
        body: body.style.backgroundColor,
        backColor: [],
        textColor: [],
        headerBackground: HeadColor.style.background,
        headColor: {
            color: HeadColor.style.color
        },
        imagesBackground: []
    };

    TextDivs.forEach((div) => {
        originalColors.backColor.push(div.style.backgroundColor);
        BackColor.push(div);
    });

    TextColor.forEach((text) => {
        originalColors.textColor.push(text.style.color);
    });

    Images.forEach((img) => {
        originalColors.imagesBackground.push(img.style.backgroundColor);
    });

    function toggleBackground() {
        if (isBlack) {
            body.style.backgroundColor = originalColors.body;
            body.style.color = originalColors.body;
            sunMoon.src = "sun.png";
            isBlack = false;
            BackColor.forEach((div, index) => {
                div.style.backgroundColor = originalColors.backColor[index];
            });
            TextColor.forEach((text, index) => {
                text.style.color = originalColors.textColor[index];
            });
            Images.forEach((img, index) => {
                img.style.backgroundColor = originalColors.imagesBackground[index];
            });
            HeadColor.style.background = "linear-gradient(to right, #881700, #ff6000, #881700)";
            HeadColor.style.color = originalColors.headColor.color;
        } else {
            body.style.backgroundColor = "#191919";
            body.style.color = "#ffffffba";
            sunMoon.src = "moon1.png";
            isBlack = true;
            BackColor.forEach((div) => {
                div.style.backgroundColor = "black";
            });
            TextColor.forEach((text) => {
                text.style.color = "#ffffffba";
            });
            Images.forEach((img) => {
                img.style.backgroundColor = "black";
            });
            HeadColor.style.background = "black";
            HeadColor.style.color = "#ff4900db";
        }
    }</script>
<!-- if counter +1 isBlack = true or false -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps</title>
    <link rel="stylesheet" href="stest.css">
</head>

<body>
    <header id="page-top">
        <h1>DevOps - CI/CD</h1>
    </header>
    <?php include 'navbar.php'; ?>
    <div class="sticky-block" id="texT">
        <p>Onderdelen</p>
        <ul>
            <li><a href="#devops-section">Wat is DevOps?</a></li>
            <li><a href="#ci-cd-section">CI/CD</a></li>
            <li><a href="#benefits-section">Voordelen van DevOps</a></li>
            <li><a href="#tools-section">DevOps Tools</a></li>
            <li>
                <?php echo $my_Msg . " " . $ttes ?>

            </li>
        </ul>
    </div>
    <!-- -----------------------------------Wat is DevOps?----------------------------------- -->
    <div class="DevOpsdiv" id="devops-section">
        <div class="devops-text" id="texT">
            <h1>Wat is DevOps?</h1>
            <p>
                <?php
                $_SESSION["name"] = "Hello World";
                echo "just a test.<br/>";
                ?>
                DevOps is een manier van werken waarbij de focus ligt op <strong>samenwerking en communicatie</strong>
                tussen de software development en IT-operations teams. Het minimaliseert fouten en versnelt de oplossing
                ervan.
            </p>
            <p> Eerst werkten developer en operators los van elkaar, devs werkten aan nieuwe dingen en de operators
                gaven feedback over bugs en dingen waaraan gewerkt moest worden. Hierdoor moesten de devs lang wachten
                voordat ze met deze kregen. Soms werkten de devs al aan volgende projecten terwijl de operators nog
                feedback aan het geven waren op het vorige project. Hierdoor duurde het heel lang voordat er het product
                klaar was.

                Bij DevOps werken deze teams samen en verdelen ze het werk waardoor de problemen sneller kunnen worden
                gevonden en opgelost en er efficiënter gewerkt kan worden. Door het automatiseren van processen als
                testen en bouwen hoeven de teams minder handmatig werk te doen. Hierdoor kan er sneller en makkelijker
                software worden ontwikkeld en problemen worden opgelost. Een mens kan vermoeid raken, afgeleid worden of
                vergissingen maken maar bij automatisering kan dit niet en is dus meer betrouwbaar. Het is ook meer
                consistent omdat het geprogrammeerd is steeds hetzelfde te doen, daarnaast bespaar je kosten doordat het
                minder tijd en mensen werk kost. DevOps is flexibel en heeft een grote schaalbaarheid wat betekent dat
                er makkelijker aan meerdere projecten kan worden gewerkt als er opeens meer vraag naar iets is. Door het
                voortdurend in de gaten houden van de systemen kunnen de problemen snel worden gevonden en opgelost
                voordat het te erg wordt. Doordat er zo continue stukjes werkende software kunnen worden geleverd is de
                klantentevredenheid ook hoger en dat is belangrijk bij DevOps. Door het snellere leveren van producten
                en updates heb je met DevOps concurrentievoordelen. </p>
        </div>
        <div class="devops-img">
            <img class="devops-image" src="Devops.png" alt="DevOps" id="texT">
        </div>
    </div>
    <div class="divid"></div>
    <!-- --------------------------------------CI/CD-------------------------------------- -->
    <div class="cicddiv" id="ci-cd-section">
        <div class="cc-text" id="texT">
            <h1>CI/CD</h1>
            <p>
                CI/CD automatiseert het bouwen, testen en implementeren van software. Het faciliteert frequente
                integratie, levering en implementatie van software-updates.
            </p>
            <h2>Continue Integration</h2>
            <p>
                Ontwikkelaars delen regelmatig code wijzigingen die automatisch worden getest en snel worden opgelost.
            </p>
            <h2>Continue Delivery</h2>
            <p>
                Goedgekeurde code wordt automatisch getest en naar een testomgeving gestuurd.
            </p>
            <h2>Continue Deployment</h2>
            <p>
                Goedgekeurde software wordt automatisch naar gebruikers gedistribueerd.
            </p>
            <p>
                CI/CD minimaliseert handmatige inspanningen, bespaart kosten en verbetert de softwarekwaliteit.
            </p>
            <h2>Belangrijke Componenten en Concepten van CI/CD</h2>
            <ul>
                <li><strong>Versiebeheer</strong>: Wijzigingen bijhouden met Git.</li>
                <li><strong>Geautomatiseerde Builds</strong>: Automatisch bouwen van code.</li>
                <li><strong>Geautomatiseerde Tests</strong>: Automatische tests voor foutdetectie.</li>
                <li><strong>Implementatiepijplijnen</strong>: Geautomatiseerd proces voor foutvrije code.</li>
                <li><strong>Infrastructuur als Code</strong>: Beschrijving van infrastructuur in code voor snelle
                    software-iteraties.</li>
                <li><strong>Monitoring en Feedback</strong>: Voortdurend verbeteren op basis van feedback.</li>
            </ul>
        </div>
        <div class="cicdfoto">
            <img class="cicdfot" src="cicd.WEBP" alt="CI/CD" id="texT">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------Voordelen van DevOps----------------------------------- -->
    <div class="benefitdiv" id="benefits-section">
        <div class="benefits-text" id="texT">
            <h1>Voordelen van DevOps</h1>
            <?php
            $devopsBenefits = [
                "<strong>Snellere software levering</strong>",
                "<strong>Betrouwbaardere software</strong>",
                "<strong>Verbeterde samenwerking tussen teams</strong>",
                "<strong>Automatisering van herhalende taken</strong>",
                "<strong>Verkorte uitbrengtijd</strong>",
                "<strong>Grotere schaalbaarheid en flexibiliteit</strong>",
                "<strong>Efficiënter gebruik van tools</strong>",
                "<strong>Continue monitoring en feedback</strong>"
            ];
            ?>
            <section class="devops-benefits">
                <ul>
                    <?php foreach ($devopsBenefits as $benefit): ?>
                        <li>
                            <?= $benefit; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
        <div class="benefits-img">
            <img class="benefits-image" src="benefits.png" alt="DevOps Benefits" id="texT">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------DevOps Tools----------------------------------- -->
    <div class="toolsdiv" id="tools-section">
        <div class="tools-img">
            <img class="tools-image" src="tools.png" alt="DevOps Tools" id="texT">
        </div>
        <div class="tools-text" id="texT">
            <h1>DevOps Tools</h1>
            <p>
                Er zijn verschillende tools in de DevOps pipeline. Een paar populaire DevOps tools zijn: Jenkins,
                Docker, Kubernetes, Git, Ansible, en meer. Deze tools helpen bij het automatiseren van opdrachten, het
                beheren van infrastructuur, en zorgen ervoor dat de DevOps processen soepel verlopen.
            </p>
        </div>
    </div>
    <div class="divid"></div>

    <script src="script.js"></script>

</body>

</html>