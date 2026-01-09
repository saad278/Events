<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  min-height: 100vh;
  background: linear-gradient(135deg, #001a4d, #4b006e, #9b0f6f);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.login-container {
  width: 320px;
}

h1 {
  text-align: center;
  font-size: 42px;
  margin-bottom: 10px;
}

.subtitle {
  text-align: center;
  opacity: 0.8;
  margin-bottom: 40px;
}

.form-group {
  margin-bottom: 30px;
}

label {
  display: block;
  font-size: 12px;
  letter-spacing: 1px;
  margin-bottom: 8px;
  text-transform: uppercase;
}

select {
  width: 100%;
  padding: 14px;
  border-radius: 30px;
  border: 2px solid rgba(255,255,255,0.7);
  background: transparent;
  color: white;
  outline: none;
  appearance: none;
  font-size: 14px;
}

select option {
  color: black;
}

.radio-group {
  margin-bottom: 50px;
}

.radio {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
}

.radio input {
  display: none;
}

.radio span {
  width: 20px;
  height: 20px;
  border: 2px solid white;
  border-radius: 50%;
  margin-right: 12px;
  position: relative;
}

.radio input:checked + span::after {
  content: "";
  width: 10px;
  height: 10px;
  background: white;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.login-btn {
  width: 100%;
  padding: 15px;
  border-radius: 30px;
  border: 2px solid white;
  background: transparent;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.login-btn:hover {
  background: white;
  color: #4b006e;
}
</style>
<body>
<?php
include "database.php";
 ?>
 <?php 
include "security.php";
?>
  <div class="login-container">
    <h1>security</h1>
    
<br>
<form action="security_view.php?id=<?php echo $id; ?>" method="post">
    <div class="radio-group">
      <label>method</label>
      <br>
      <label class="radio">
        <input type="radio" name="e_security_method" value="cameras">
        <span></span>
        cameras
      </label>

      <label class="radio">
        <input type="radio" name="e_security_method" value="security guards">
        <span></span>
        security gurads
      </label>
<label class="radio">
        <input type="radio" name="e_security_method" value="drones">
        <span></span>
        drones
      </label>
<label class="radio">
        <input type="radio" name="e_security_method" value="dogs">
        <span></span>
        dogs
      </label>
      <br>
       <label class="radio">
        <input type="radio" name="e_security_method" value="police">
        <span></span>
        police
      </label>
      <br>
<label class="radio">
        <input type="radio" name="e_security_method" value="alert devices">
        <span></span>
        alert devices
      </label>
      <br>
<label>level</label>
      <br>
      <label class="radio">
        <input type="radio" name="e_security_level" value="basic">
        <span></span>
        basic
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="e_security_level" value="intermediate">
        <span></span>
        intermediate
      </label>
      <br>
      <label class="radio">
        <input type="radio" name="e_security_level" value="advanced">
        <span></span>
        advanced
      </label>
      <br>
 <div class="field">
        <label>team</label>
        <select name="e_security_team">
          <option value="general security">general security</option>
          <option value="rocks">rocks</option>
          <option value="black suits">black suits</option>
        </select>
      </div>
      <br>
    <button class="login-btn" name="add">submit</button>
</form>
  </div>

</body>
</html>
