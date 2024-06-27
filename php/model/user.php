<?php

include_once "../includes/json.php";
include_once "../includes/utils.php";

class User {
  private $id;
  private $firstName;
  private $lastName;
  private $email;
  private $birthday;
  private $gender;
  private $contact;
  private $country;
  private $biography;

  public function __construct($email) {
    $users = getData("users");

    foreach ($users as $user) {
      if ($user["email"] === $email) {
        $this->firstName = $user["firstName"];
        $this->lastName = $user["lastName"];
        $this->email = $user["email"];
        $this->birthday = $user["birthday"];
        $this->gender = $user["gender"];
        $this->contact = $user["contact"];
        $this->country = $user["country"];
        $this->biography = $user["biography"];
        break;
      }
    }
  }

  // Getter methods
  public function getId() {
    return $this->id;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function getFullName() {
    return $this->firstName . " " . $this->lastName;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getBirthday() {
    $date = DateTime::createFromFormat('Y-m-d', $this->birthday);
    return $date->format('F j, Y');
  }

  public function getHTMLFormatBirthday() {
    return $this->birthday;
  }

  public function getGender() {
    return decodeGender($this->gender);
  }

  public function getEncodedGender() {
    return $this->gender;
  }

  public function getContact() {
    return $this->contact;
  }

  public function getCountry() {
    return $this->country;
  }

  public function getBiography() {
    return $this->biography;
  }

  public function updateInfo($firstName, $lastName, $birthday, $gender, $contact, $country, $biography) {
    $users = getData("users");

    // The "&" modifies the original array element
    foreach ($users as &$user) {
      if ($user["email"] == $this->email) {
        $user['firstName'] = $firstName;
        $user['lastName'] = $lastName;
        $user['birthday'] = $birthday;
        $user['gender'] = $gender;
        $user['contact'] = $contact;
        $user['country'] = $country;
        $user['biography'] = $biography;
      }
    }

    updateData("users", $users);
  }
  

  public function updatePassword($newPasswordPlainText) {
    $users = getData("users");
    
    // The "&" modifies the original array element
    foreach ($users as &$user) {
      if ($user["email"] == $this->email) {
        $user["password"] = password_hash($newPasswordPlainText, PASSWORD_BCRYPT);
      }
    }

    updateData("users", $users);
  }
}

?>
