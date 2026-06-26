<?php
global $host, $user, $pwd, $sql_db;
$descriptionContent = "Raven aboutpage for job advertising";
$keyword= "Raven, aboutpage";
$author="104205032";
$bodyClassName = "aboutmain";
include 'header.inc';
include 'menu.inc';
?>
<main >
    <div class="aboutcontainer">
        <h1> Meet the team </h1>
        <a class="button" href="mailto:105345670@student.swin.edu.au,104205032@student.swin.edu.au,104577838@student.swin.edu.au" id="groupcontact" title="Click here to email to all members.">Contact Ravens.</a>
        <div class="intromember">
            <div class="intropic1"><img id="selfies1" src="./images/Siwan_Yu_Selfie.jpeg" title="Picture of Siwan Yu" alt="Picture of Siwan Yu"  ></div>
            <h3>Siwan Yu</h3>104577838
            <a href="mailto:104577838@student.swin.edu.au"><img id="mailabout1" src="./styles/images/icon_round.jpeg"  alt="Mail"></a>
            <p>Major in Software Development</p>


            <p>I was born in Beijing, China. That city alone has almost the same population with Australia.
                Only the rich can have a decent live in Beijing.
                I like watching combat sport. Like MMA, SUMO, etc.
                I like the honesty of combat sport. Among all combat sport I think SUMO is the most entertaining and thrilling one.
                No weight class, match typically ends within one minute, 15 fight days every two months and rich culture.</p>
        </div>

        <div class="intromember">
            <div class="intropic"><img id="selfies2" src="./images/Sokunsana_Ly_Selfie.jpg" title="Picture of Sokunsana Ly" alt="Picture of Sokunsana Ly"  ></div>
            <h3>Sokunsana Ly</h3>104205032
            <a href="mailto:104205032@student.swin.edu.au"><img id="mailabout2" src="./styles/images/icon_round.jpeg" alt="Mail"></a>
            <p>Major in Software Development</p>

            <p>I was born in Phnom Penh, Cambodia. My country is known for the beautiful temples and its well known dish, Prahok.
                Cambodia is a pretty small countries compares to others in SEA. I moved to Australia since last year, studying foundation.
                I like to listen to music and play mobile games. I also enjoy reading books and watching shows and movies.
            </p>
        </div>

        <div class="intromember">
            <div class="intropic"><img id="selfies3" src="./images/Lorenzo_Selfie.jpeg" title="Picture of Lorenzo Encena" alt="Picture of Lorenzo Encena"  ></div>
            <h3>Lorenzo Encena</h3>105345670
            <a href="mailto:105345670@student.swin.edu.au"><img id="mailabout3" src="./styles/images/icon_round.jpeg" alt="Mail"></a>
            <p>Major in Software Development</p>

            <p>I was born in Ilo Ilo City, Philippines but I moved to Australia at the age of 3.
                My hometown of Ilo Ilo City is a poor city but has had many improvements over the years I have been gone.
                I like playing many types of video games such as: Rainbow Six Siege, Minecraft, Arstoneer, Satisfactory, and more.
                I find games to be an especially fun way to practice hand-eye coordination and thinking logically.</p>
        </div>
        <div>
            <h2>COS10026 Timetable</h2>
            <table>
                <tr>
                    <th colspan="2"> MONDAY </th>
                </tr>

                <tr>
                    <th>Time</th>
                    <th>Class</th>
                </tr>

                <tr>
                    <td>11:30 a.m.</td>
                    <td></td>

                </tr>
                <tr>
                    <td>12:30 p.m.</td>
                    <td rowspan="2">LIVE ONLINE</td>
                </tr>

                <tr>
                    <td>1:30 p.m.</td>
                </tr>

                <tr>
                    <td>2:30 p.m.</td>
                    <td></td>
                </tr>

                <tr>
                    <td>3:30 p.m.</td>
                    <td>CLASS 1</td>
                </tr>

                <tr>
                    <td>4:30 p.m.</td>
                    <td rowspan="3">WORKSHOP 1</td>
                </tr>

                <tr>
                    <td>5:30 p.m.</td>
                </tr>

                <tr>
                    <td>6:30 p.m.</td>
                </tr>
            </table>
        </div>
    </div>


</main>

<?php include 'footer.inc';?>
