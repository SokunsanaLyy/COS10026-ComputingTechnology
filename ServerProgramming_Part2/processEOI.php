<?php
$descriptionContent = "Raven homepage for job advertising";
$keyword= "Raven, homepage";
$author="104577838";
$bodyClassName = "";
include 'header.inc';
include 'menu.inc';

session_start();

require_once 'settings.php';
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//function valid_postal_code($value, $country = 'ca') {
   // $country_regex = array(
      //'uk' => '/\\A\\b[A-Z]{1,2}[0-9][A-Z0-9]? [0-9][ABD-HJLNP-UW-Z]{2}\\b\\z/i',
      //'ca' => '/\\A\\b[ABCEGHJKLMNPRSTVXY][0-9][A-Z][ ]?[0-9][A-Z][0-9]\\b\\z/i',
      //'it' => '/^[0-9]{5}$/i',
      //'de' => '/^[0-9]{5}$/i',
      //'be' => '/^[1-9]{1}[0-9]{3}$/i',
      //'us' => '/\\A\\b[0-9]{5}(?:-[0-9]{4})?\\b\\z/i',
      //'default' => '/\\A\\b[0-9]{5}(?:-[0-9]{4})?\\b\\z/i' // Same as US.
    //);

function validatePost($state, $postcode){
    $validStates = array(
        "VIC" => '/([3 8]?[0-9][0-9][0-9])/', //3000-3999 8000-8999
        "NSW" => '/()/', 
        "QLD" =>'/([4 9]?[0-9][0-9][0-9])/', //4000-4999 9000-9999
        "NT" => '/(0[89]?[0-9][0-9])/', //800-899 900-999
        "WA" =>'/(6[0-8][0-9][0-7]|699[89]?)/', //6000-6787  6800-6999
        "SA" =>'/(5[0-8][0-9][0-9])/', //5000-5799 5800-5999
        "TAS" =>'/(7[0-8][0-9][0-9])/', //7000-7799 7800-7999
        "ACT" => '/(26[0 1]?[0-8]|29[0-2]0)/' //2600-2618 2900-2920
    );
}

function validateDate($date, $format = 'd/m/Y') {
    $d = DateTime::createFromFormat($format, $date);
    $now = new DateTime();
    $diff = $now->diff($d);
    return $d && $d->format($format) === $date && $diff->y >= 15 && $diff->y <= 80;
}
$validStates = array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT");



if($_SERVER["REQUEST_METHOD"]=="POST"){

$firstName = trim($_POST['givenname']);
$lastName = $conn->real_escape_string(trim($_POST['familyname']));
$dob = $_POST['date'];
$gender = $_POST['Gender'];
$streetAddress =$_POST['streetAddress']; //does this need to be a html special characters
$suburb =$conn->real_escape_string(trim($_POST['suburb']));
$state = $conn->real_escape_string(trim($_POST['State']));
$postcode = $conn->real_escape_string(trim($_POST['postcode']));
$email = $conn->real_escape_string(trim($_POST['email']));
$phoneNumber = preg_replace("/\s+/", "", $conn->real_escape_string(trim($_POST['phoneNumber'])));
$jobRef = htmlspecialchars(trim($_POST['JobReferenceNumber']));
$skill1= isset($_POST['skill1']);
$skill2= isset($_POST['skill2']);
$skill3= isset($_POST['skill3']);
$skill4= isset($_POST['skill4']);
$skill5= isset($_POST['skill5']);
$skill0= isset($_POST['skill0']);
$otherSkills = $conn->real_escape_string(trim($_POST['introduction']));
$otherSkillsCheckbox = isset($_POST['skill0']);


///////////////////////
$firstName = $lastName = $dob = $gender = $streetAddress = $suburb = $state = $postcode = $email = $phoneNumber = $jobRef = "";
$skills = [];

if (!empty($_POST["skill1"])) {
    array_push($skills, "skill 1");
}
if (!empty($_POST["skill2"])) {
    array_push($skills, "skill 2");
}
if (!empty($_POST["skill3"])) {
    array_push($skills, "skill 3");
}
if (!empty($_POST["skill4"])) {
    array_push($skills, "skill 4");
}
if (!empty($_POST["skill5"])) {
    array_push($skills, "skill ");
}
if (!empty($_POST["skill0"])) {
    array_push($skills, "skill 0");
}



///EDIT////
////error messages///

   
$errMessage="";
if($firstname==""){
    echo "<p>You must enter your first name</p>";
}elseif (!preg_match("/^[a-zA-Z]{1,20}$/", $firstName)){
    echo "<p>Only 20 characters allowed in your firstname.</p>";
}elseif($lastname==""){
    echo "<p>You must enter your last name</p>";
}elseif (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)){
    echo "<p>Only 20 characters allowed in your lastname.</p>";
}elseif($dob==""){
    echo "<p>You must enter your Date of Birth.</p>";
}elseif (!validateDate($dob)){
    echo "<p>Date of Birth is not in correct format.</p>";
}elseif ($gender==""){
    echo "<p>Select an option.</p>";
}elseif ($streetAddress==""){
    echo "<p>Enter a street address.</p>";
}elseif (!preg_match("/^[A-Za-z0-9\s]{1,40}$/", $streetAddress)){
    echo "<p>Only 40 characters allowed.</p>";
}elseif ($suburb==""){
    echo "<p>Enter a suburb.</p>";
}elseif (!preg_match("/^[A-Za-z0-9\s]{1,40}$/", $suburb)){
    echo "<p>Only 40 characters allowed.</p>";
}elseif ($state==""){
    echo "<p>Select a state.</p>";
}elseif (!in_array($state, $validStates)){
    echo "<p> Select a valid state.</p>";
}elseif ($postcode==""){
    echo "<p>Enter a postcode.</p>";
}elseif (!preg_match("/^\d{4}$/", $postcode)){
    echo "<p>Must be 4 digits.";  ///need to add postcode base on states
}elseif ($email==""){
    echo "<p>Enter an email.</p>";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<p>Enter email again.</p>";
}elseif ($phoneNumber==""){
    echo "<p>Enter a phone number.</p>";
}elseif (!preg_match("/^[A-Za-z0-9]{8,12}$/", $phoneNumber)){
    echo "<p>Number is not in the right format.</p>";
}elseif($jobRef==""){
    echo "<p>Enter a Job Reference Number.</p>";
}elseif (!preg_match("/^[A-Za-z0-9]{5}$/", $jobRef)) {
    echo "<p>Only 5 alphanumeric characters allowed.</p>";
}elseif($skills==""){
    echo "<p>Select skill(s).</p>"
}
else{
    $query = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, StreetAddress,Suburb,State,Postcode, EmailAddress,PhoneNumber,Skill1,Skill2,Skill3,Skill4,Skill5,Skill6,OtherSkills) VALUES ('$jobRef','$firstName', '$lastName', '$streetAddress', '$suburb', '$state', '$postcode', '$email','$phoneNumber', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill0', '$otherSkills')";
    $result = mysqli_query($conn, $query);
    echo "<p>Application form submitted successfully:)</p>";
}




}

$conn->close();

////////////////////////////////////////////////////




if (!preg_match("/^[A-Za-z0-9]{5}$/", $jobRef) ||
    !preg_match("/^[a-zA-Z]{1,20}$/", $firstName)||
    !preg_match("/^[a-zA-Z]{1,20}$/", $lastName) ||
    !validateDate($dob) ||
    empty($gender) ||
    !preg_match("/^[A-Za-z0-9\s]{1,40}$/", $streetAddress) ||
    !preg_match("/^[A-Za-z0-9\s]{1,40}$/", $suburb) ||
    !in_array($state, $validStates) ||
    !preg_match("/^[A-Za-z0-9]{8,12}$/", $phoneNumber)||
    !preg_match("/^\d{4}$/", $postcode) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)||
    ($otherSkillsCheckbox && empty($otherSkills))
) {
    echo "<p>Invalid input data. Please verify and try again.</p> " ;
}else{
    $query = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, StreetAddress,Suburb,State,Postcode, EmailAddress,PhoneNumber,Skill1,Skill2,Skill3,Skill4,Skill5,Skill6,OtherSkills) VALUES ('$jobRef','$firstName', '$lastName', '$streetAddress', '$suburb', '$state', '$postcode', '$email','$phoneNumber', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill0', '$otherSkills')";
    $result = mysqli_query($conn, $query);
    echo "<p>Application form submitted successfully:)</p>";
}
$conn->close();

//        $query = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, StreetAddress,Suburb,State,Postcode,EmailAddress,PhoneNumber,Skill1,Skill2,Skill3,Skill4,Skill5,Skill6,OtherSkills) VALUES ('$jobRef', '$firstName', '$lastName', '$streetAddress', '$suburb', '$state', '$postcode', '$email', '$phoneNumber', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill0', '$otherSkills')";

include 'footer.inc';
