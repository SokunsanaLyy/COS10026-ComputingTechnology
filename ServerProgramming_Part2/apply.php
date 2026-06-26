<?php
global $host, $user, $pwd, $sql_db;
$descriptionContent = "Raven applypage for job advertising";
$keyword= "Raven, applypage";
$author="104205032";
$bodyClassName = "applicationbody";
include 'header.inc';
include 'menu.inc';
?>

<div class="applycontainer">
    <div class="sidepicture1">
        <div class="jobcode"><a href="./jobs.php"><h2>Graphic Designer</h2>
                <p>Job Code: JV001<br>
                    Salary: $75000 - $85000 Full Time</p>
            </a></div>
        <div class="jobcode"><a href="./jobs.php"><h2> Web Developer</h2>
                <p> Job Code: JV002<br>
                    Salary: $85000 - $100000 Full Time</p>
            </a></div>
    </div>

    <div class="mainapplication">
        <div class="headerapply"> <h1>Jobs Application</h1></div>
        <p id="instruction"> Make sure the information inserted below are correct before submitting.</p>
        <form action="processEOI.php" method="post" novalidate="novalidate">
            <fieldset>
                <legend id="pinfo"> Personal Information </legend>
                <p><label for="givenname">Given name:&nbsp;</label>
                    <input required type="text" name="givenname" maxlength="15" placeholder="E.g. John" pattern="[A-Za-z]+" id="givenname"></p>
                <p><label for="middlename">Middle name: &nbsp;</label>
                    <input  type="text" name="middlename" id="middlename" placeholder="Optional" pattern="[A-Za-z]+"></p>
                <p><label for="familyname">Family name:&nbsp;</label>
                    <input required type="text" name="familyname" id="familyname" placeholder="E.g. Doe" pattern="[A-Za-z]+"></p>

                <p>
                    <label for="date">Date of Birth:&nbsp;</label>
                    <input required type="text" placeholder="dd/mm/yyyy" pattern="\d{2}/\d{2}/\d{4}" id ="date" name="date">
                </p>
                Select Gender: <br>
                <p><label for="male">Male</label>
                    <input required type="radio" id="male" name="Gender" value="Male"> </p>

                <p><label for="female">Female</label>
                    <input required type="radio" id="female" name="Gender" value="Female"> </p>

                <p><label for="others">Others</label>
                    <input required type="radio" id="others" name="Gender" value="Others"></p>

                <p><label for="st.address">Street Address:&nbsp;</label> <input required type="text" placeholder="Enter your st.address here" name="streetAddress" id="st.address" maxlength="40"></p>
                <p><label for="sburb">Suburb:&nbsp;</label><input required type="text" name="suburb" placeholder="Enter your suburb here" maxlength="40" id="sburb"></p>
                <p><label for="State">State:&nbsp;</label> <select required  name="State" id="State">
                        <option value="">Select One</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select></p>
                <p><label for="postcode">Postcode:&nbsp;</label> <input required type="text" id="postcode" placeholder="xxxx" name="postcode"pattern="[0-9]{4}"> </p>
                <p><label for="phone">Number:&nbsp;</label>  <input required type="tel" id="phone" name="phoneNumber" placeholder="0123 456 789" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"></p>
                <p>Email: <input required type="text" name="email" placeholder="name@domain"></p>
            </fieldset>

            <fieldset>
                <legend id="jinfo">Job Selection:</legend>

                <p>Job Reference Number: <input required type="text" maxlength="5" name="JobReferenceNumber"></p>
                Employement type:
                <p><select required name="Employement type">
                        <option value="">Select one</option>
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                        <option value="casual">Casual</option>
                    </select></p>
            </fieldset>

            <fieldset>
                <legend id="rinfo">Resume and Skills</legend>

                <p>Please check the skills that best fit you!</p>

                <input type="checkbox" id="skill1" name="skill1" value="Communication">
                <label for="skill1"> Communication</label><br>
                <input type="checkbox" id="skill2" name="skill2" value="Teamwork">
                <label for="skill2">Teamwork</label><br>
                <input type="checkbox" id="skill3" name="skill3" value="Problem Solving">
                <label for="skill3">Problem Solving</label><br>
                <input type="checkbox" id="skill4" name="skill4" value="Planning and Organising">
                <label for="skill4">Planning and Organising</label><br>
                <input type="checkbox" id="skill5" name="skill5" value="Adaptability">
                <label for="skill5">Adaptability</label><br>

                <p>Insert your Resume below:</p>
                <p><label for="myfile">Select a file:</label></p>
                <p><input required type="file" id="myfile" name="myfile"></p>
                <input type="checkbox" id="skill0" name="skill0"  value="Others">
                <label for="skill0">Other skills</label><br>
                <p><label for="skills">Introduce yourself and explain briefly why you are suitable for the roles you have chosen.</label> </p>
                <textarea name="introduction" id="skills" placeholder="Tell us about yourself...."></textarea>
            </fieldset>

            <div class="buttons"> <p><button id="reset" type="reset" name="reset"> Reset Application</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="submit" type="submit" name="submit" >Submit Application</button></p></div>

        </form>
    </div>
</div>



<?php include 'footer.inc';?>