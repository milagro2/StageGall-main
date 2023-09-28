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
    <nav class="sub-navbar">
        <ul>
            <li><a href="#devops-section">What is DevOps?</a></li>
            <li><a href="#ci-cd-section">Continuous Integration & Continuous Deployment</a></li>
            <li><a href="#benefits-section">Benefits of DevOps</a></li>
            <li><a href="#tools-section">DevOps Tools</a></li>
        </ul>
    </nav>

    <!-- -----------------------------------What is DevOps?----------------------------------- -->
    <div class="DevOps-content" id="devops-section">

        <div class="devops-text">
            <h1>What is DevOps?</h1>

            <p>
                DevOps is a set of practices that combines software development (Dev) and IT operations (Ops).
                It aims to shorten the systems development life cycle and provide continuous delivery with high software
                quality. DevOps focuses on automation, collaboration, and communication between development and
                IT operations teams.
            </p>
        </div>
        <div class="devops-img">
            <img class="devops-image" src="Devops.png" alt="DevOps">
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------CI/CD----------------------------------- -->
    <div class="ci-cd-div" id="ci-cd-section">

        <div class="ci-cd-img">
            <img class="ci-cd-image" src="cicd.WEBP" alt="CI/CD">
        </div>

        <div class="ci-cd-text">
            <h1>Continuous Integration & Continuous Deployment (CI/CD)</h1>

            <p>
                Continuous Integration (CI) and Continuous Deployment (CD) are integral parts of DevOps. CI involves
                the
                frequent integration of code changes into a shared repository, followed by automated testing.
                CD extends CI by automatically deploying code changes to production or staging environments after
                successful testing. These practices ensure a faster and more reliable software delivery process.
            </p>
        </div>
    </div>
    <div class="divid"></div>
    <!-- -----------------------------------Benefits of DevOps----------------------------------- -->
    <div class="benefits-div" id="benefits-section">

        <div class="benefits-text">
            <h1>Benefits of DevOps</h1>

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
                    <?php foreach ($devopsBenefits as $benefit) : ?>
                        <li><?= $benefit; ?></li>
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
                There are various DevOps tools available to facilitate different stages of the DevOps pipeline.
                Some popular DevOps tools include Jenkins, Docker, Kubernetes, Git, Ansible, and more. These tools
                help automate tasks, manage infrastructure, and ensure smooth DevOps processes.
            </p>
        </div>
    </div>

    <div class="divid"></div>

    <script src="script.js"></script>
</body>

</html>
