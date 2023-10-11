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

    <?php include 'navbar.php' ?>

    <div class="sticky-block">

        <p>Onderdelen</p>
        <ul>
            <li><a href="#devops-section">Wat is DevOps?</a></li>
            <li><a href="#ci-cd-section">CI/CD</a></li>
            <li><a href="#benefits-section">Voordelen van DevOps</a></li>
            <li><a href="#tools-section">DevOps Tools</a></li>
        </ul>
    </div>
    <!-- -----------------------------------What is DevOps?----------------------------------- -->
    <div class="DevOps-content" id="devops-section">

        <div class="devops-text">
            <h1>Wat is DevOps?</h1>

            <p>
                DevOps is een manier van werken in waarbij het gaat om <strong>samenwerking en communicatie</strong>
                tussen de
                software development en IT-operations teams. Met DevOps worden er veel <strong>minder fouten</strong>
                gemaakt en
                als deze worden gemaakt worden ze <strong>sneller opgelost.</strong>
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
                CI/CD staat voor Continue Integration en Continue Delivery of Deployment. Het wordt gebruikt in
                softwareontwikkeling om het bouwen, testen en toepassen van software te automatiseren.
            </p>

            <h2>Continue Integration</h2>
            <p>
                Continue Integration betekent dat ontwikkelaars vaak meerdere keren per dag hun wijzigingen delen in
                een code-opslag. Hierin wordt het dan automatisch getest waardoor problemen snel kunnen worden
                opgelost.
            </p>

            <h2>Continue Delivery</h2>
            <p>
                Continue Delivery zorgt ervoor dat de goed gekeurde code automatisch naar een plek wordt gestuurd
                waar de software wordt getest.
            </p>

            <h2>Continue Deployment</h2>
            <p>
                Continue Deployment is de laatste stap, hierbij wordt de goedgekeurde software automatisch naar de
                mensen gestuurd.
            </p>

            <p>
                Door het automatiseren van testen worden fouten sneller gevonden en gaat het leveren van software
                sneller, ook is de kwaliteit hierdoor beter. Ook zorgt CI/CD ervoor dat er minder handmatig gebouwd en
                getest hoeft te worden wat op lange termijn geld bespaart.
            </p>

            <h2>Belangrijke Componenten en Concepten van CI/CD</h2>
            <ul>
                <li>Versiebeheer: Hierin wordt bijgehouden wie, wanneer en waarom iets is gewijzigd, dit wordt vaak
                    gedaan in Git.</li>
                <li>Geautomatiseerde Builds: Dit betekent dat ontwikkelaars niet handmatig software hoeven te bouwen,
                    dit wordt automatisch gedaan als de code wordt gewijzigd.</li>
                <li>Geautomatiseerde Tests: Hierbij wordt getest of er foutjes zitten in de software. Dit kunnen kleine
                    tests zijn voor kleine stukjes code, dit worden unit tests genoemd. Of het kunnen tests zijn om te
                    zien of alles goed met elkaar werkt, dit zijn integratietests.</li>
                <li>Implementatiepijplijnen: Een geautomatiseerd proces waarbij de code wordt getest of er echt geen
                    foutjes meer in zitten.</li>
                <li>Infrastructuur als Code: Hierbij wordt de infrastructuur van de software, dat zijn bijvoorbeeld
                    servers en databases, beschreven in code. Zo kunnen er snel nieuwe versies van de software worden
                    gemaakt.</li>
                <li>Monitoring en Feedback: Je voortdurend kijkt naar hoe goed het gaat met de software. Je luistert
                    naar de feedback om zo de software nog beter te maken.</li>
            </ul>
        </div>
        <div class="cicdfoto">
            <img class="ci-cd-image" src="cicd.WEBP" alt="CI/CD">
        </div>

    </div>


    <div class="divid"></div>
    <!-- -----------------------------------Benefits of DevOps----------------------------------- -->
    <div class="benefits-div" id="benefits-section">

        <div class="benefits-text">
            <h1>Voordelen van DevOps</h1>

            <?php
            $devopsBenefits = [
                "Faster software delivery",
                "Increased reliability and stability",
                "Improved collaboration between teams",
                "Automation of repetitive tasks",
                "Reduced time-to-market",
                "Enhanced scalability and flexibility",
                "Better resource utilization",
                "Continuous monitoring and feedback"
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
                Er zijn verschillende tools in de DevOps pipeline. Een paar populaire DevOps tools zijn:
                Jenkins, Docker, Kubernetes, Git, Ansible, en meer. Deze tools helpen het automatiseren
                van opdrachten, beheren infrastructuur, en zorgen ervoor dat de DevOps processes goed verlopen.
            </p>
        </div>
    </div>

    <div class="divid"></div>

    <script src="script.js"></script>
</body>

</html>