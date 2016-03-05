<style type="text/css">
<!--
.style1 {color: #FFFF00}
-->
</style>
<div align="center">
  <h1 class="style1">APPOINTMENT</h1>
</div>
<form id="form1" name="form1" method="post" action="last.php">
  <label>SELECT DOCTOR
  <select name="doctor" id="select">
    <option value="1">Dr TP Yadav</option>
    <option value="2">Dr Ajay Yadav</option>
    <option value="3">Dr BL Sharma</option>
    <option value="4">Dr. Neha</option>
  </select>
  </label>
  <p>
    <label>SELECT DAY
    <select name="day" id="select2">
      <option value="1">monday</option>
      <option value="2">tuesday</option>
      <option value="3">wednesday</option>
      <option value="4">thursday</option>
      <option value="5">friday</option>
    </select>
    </label>
  </p>
  <p>
    <label>SELECT TIME
    <select name="time" id="select3">
      <option value="1">8-9 AM</option>
      <option value="2">9-10 AM</option>
      <option value="3">6-7 PM</option>
      <option value="4">7-8 PM</option>
        </select>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="get it" />
    </label>
  </p>
</form>
<form id="form2" name="form2" method="post" action="main.html">
  <label>
  <input type="submit" name="button2" id="button2" value="home" />
  </label>
</form>
<p>&nbsp;</p>
