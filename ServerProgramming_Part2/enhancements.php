<?php
global $host, $user, $pwd, $sql_db;
$descriptionContent = "Raven assign1 enhancement";
$keyword= "Raven, enhancement";
$author="104577838";
$bodyClassName = "enhancementBody";
include 'header.inc';
include 'menu.inc';
?>

<main>
    <div class="enhancement">
        <h1>Enhancement</h1>
        <ol>
            <li class="enhanEmail">
                <h2>Animation for email links and company info section</h2>
                <ul>
                    <li>
                        <h3>Animation is not covered in tutorials and not required in the basic requirements of this assignment. The email_link animation is designed to make an element simulate a falling and bouncing motion before settling into its final position. Code explain: 0%, 20%, 50%, 80%, 100% { transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000); }
                            These percentages indicate specific timing in the animation. Using a cubic-bezier timing function to control the animation's pace. Fast start, slow middle, and then fast end.</h3>
                    </li>
                    <li>
                        <div>
                            <h3 class="enhanCode">code for animation of email link</h3>
                            <div class="enhanCodeImg">
                                <img id="emailLinkEnhanCSS" src="./images/css_animation_email.png" alt="css for animation of email link">
                                <img id="emailLinkEnhanHTML" src="./images/html_for_email_link.png" alt="html for animation of email link">
                            </div>
                        </div>

                    </li>
                    <li>
                        <h3>Reference</h3>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/easing-function">Cubic-Bezier Timing Function</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@keyframes">KeyFrames</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Animations/Using_CSS_animations">CSS animation</a>
                    </li>
                    <li class="seperation">
                        <a href="./index.html"><h3>Links to page contains this enhancement</h3></a>
                    </li>
                    <li>
                        <h3>Animation is not covered in tutorials and not required in the basic requirements of this assignment. This animation hides content by default using max-height, opacity, visibility, and overflow properties. When the .companyInfo element is hovered over, the content inside #info h2 and #infoList ol is revealed by adjusting their properties.</h3>
                    </li>
                    <li>
                        <div class="enhanCode">
                            <h3>code for animation of company info</h3>
                            <div class="enhanCodeImg">
                                <img id="infoEnhanCSS" src="./images/css_animation_company_info.png" alt="css for animation of company info">
                                <img id="infoLinkEnhanHTML" src="./images/html_for_companyinfo.png" alt="html for animation of email link">
                            </div>
                        </div>

                    </li>
                    <li>
                        <h3>Reference</h3>
                        <a href="https://stackoverflow.com/questions/16028878/animating-max-height-with-css-transitions">Animating max-height with CSS transitions</a>
                    </li>
                    <li class="seperation">
                        <a href="./index.html"><h3>Links to page contains this enhancement</h3></a>
                    </li>
                </ul>
            </li>

            <li class="enhanResponsive">
                <h2>Responsive Design</h2>
                <ul>
                    <li>
                        <h3>Responsive Design with additional CSS that specifically for smaller screen displays</h3>
                    </li>
                    <li>
                        <div class="enhanCode">
                            <h3>code for Responsive Design</h3>
                            <div class="enhanCodeImg">
                                <img id="responEnhanCSS" src="./images/css_respon.png" alt="css for Responsive Design">
                                <img id="responEnhanHTML" src="./images/html_respon.png" alt="html for Responsive Design">
                            </div>
                        </div>

                    </li>
                    <li>
                        <h3>Reference</h3>
                        <a href="https://dev.to/shubhamtiwari909/responsive-navbar-without-javascript-3p7o">Responsive Navbar without Javascript
                        </a>
                    </li>
                    <li>
                        <a href="./index.html"><h3>Links to page contains this enhancement</h3></a>
                    </li>
                </ul>
            </li>

        </ol>
    </div>
</main>

<?php include 'footer.inc';?>