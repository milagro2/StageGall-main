<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps</title>
    <link rel="stylesheet" href="stest.css">
</head>

<body>
    <header class="devops-header" id="page-top">
        <h1>DevOps - CI/CD</h1>
    </header>
    <?php include 'navbar.php'; ?>
    <div class="sticky-block">
        <p>Onderdelen</p>
        <ul>
            <li><a href="#devops-section">Wat is DevOps?</a></li>
            <li><a href="#ci-cd-section">CI/CD</a></li>
            <li><a href="#benefits-section">Voordelen van DevOps</a></li>
            <li><a href="#tools-section">DevOps Tools</a></li>
        </ul>
    </div>
    <!-- -----------------------------------Wat is DevOps?----------------------------------- -->
    <div class="DevOps-content" id="devops-section">
        <div class="devops-text">
            <h1>Wat is DevOps?</h1>
            <p>
                DevOps is een manier van werken waarbij de focus ligt op <strong>samenwerking en communicatie</strong>
                tussen de software development en IT-operations teams. Het minimaliseert fouten en versnelt de oplossing
                ervan.
            </p>
        </div>
        <div class="devops-img">
            <img class="devops-image" src="Devops.png" alt="DevOps">
        </div>
    </div>
    <div class="divid"></div>
    <!-- --------------------------------------CI/CD-------------------------------------- -->
    <div class="cicddiv" id="ci-cd-section">
        <div class="cctext">
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
            <img class="ci-cd-image" src="cicd.WEBP" alt="CI/CD">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------Voordelen van DevOps----------------------------------- -->
    <div class="benefits-div" id="benefits-section">
        <div class="benefits-text">
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
            <img class="benefits-image" src="benefits.png" alt="DevOps Benefits">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------DevOps Tools----------------------------------- -->
    <div class="tools-div" id="tools-section">
        <div class="tools-img">
            <img class="tools-image" src="tools.png" alt="DevOps Tools">
        </div>
        <div class="tools-text">
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