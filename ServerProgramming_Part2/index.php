<?php
global $host, $user, $pwd, $sql_db;
$descriptionContent = "Raven homepage for job advertising";
$keyword= "Raven, homepage";
$author="104577838";
$bodyClassName = "homepageBody";
include 'header.inc';
include 'menu.inc';
?>
<main class="homepageMain">
    <section class="infoContainer">
        <div class="companyInfo" tabindex="0">
            <div class="infoWrapper" id="info1">
                <h1>Who are we?</h1>
                <h2>We are Raven, an innovative Australian tech company founded in 2024</h2>
            </div>

        </div>
        <div class="companyInfo" tabindex="0">
            <div class="infoWrapper" id="info2">
                <h1>What do we do?</h1>
                <h2>We build practical and secure websites for small businesses at an affordable price. Our company is dedicated to empowering small businesses by providing high-quality website solutions. We are proud to be a socially responsible company, actively involved in community initiatives and sustainability efforts. Over the years, we have helped numerous small businesses establish a strong online presence and achieve their business goals through our tailored websites.</h2>
            </div>

        </div>
        <div class="companyInfo" tabindex="0">
            <div class="infoWrapper" id="infoList">
                <h1>Why us?</h1>
                <ol>
                    <li><h2>We offer various opportunities for professional growth and development, including training programs and career advancement paths.</h2></li>
                    <li><h2>We foster a collaborative and innovative work environment where every team member is valued and encouraged to contribute their ideas.</h2></li>
                    <li><h2>We offer competitive salary packages, flexible working hours, and a supportive work-life balance to all our employees.</h2></li>
                    <li><h2>We are proud to be known as a socially proactive and environmentally friendly company.</h2></li>
                </ol>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.inc';?>







