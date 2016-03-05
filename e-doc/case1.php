<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFF00
}
.style2 {color: #FF0000; }
.style3 {color: #0000FF}
-->
</style>
</head>

<body bgcolor="#999999">
<div align="center">
  <h1 class="style1">CASE FORM 1  </h1>
  <p class="style1">&nbsp;</p>
  <h2 class="style3">PATIENT INFORMATION</h2>
  <hr />&nbsp;
  <form id="form1" name="form1" method="post" action="under.php">
    <label>First name*
    <input type="text" name="fname" id="textfield" />
    </label>
    <label>Lastname*
    <input type="text" name="lname" id="textfield2" />
    </label>
    <p>&nbsp;</p>
    <p>
      <label>Age*
      <input type="text" name="age" id="textfield3" />
      </label>
      <label>Sex
      <select name="sex" id="select">
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
                                    </select>
      </label>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>
      <label>Date* 
      <select name="select3" id="select3">
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
        <option>--select date--</option>
      </select>
      Month*
      <select name="select4" id="select4">
        <option>jan</option>
        <option>feb</option>
        <option>march</option>
        <option>april</option>
        <option>may</option>
        <option>june</option>
        <option>july</option>
        <option>aug</option>
        <option>sept</option>
        <option>oct</option>
        <option>nov</option>
        <option>dec</option>
        <option>--select month--</option>
      </select>
      Year* 
      <select name="select5" id="select5">
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>--select year--</option>
      </select>
      <br />
      <br />
      <br />
      <br />
      Nationality
      <select name="nationality" id="select2">
        <option value="indian">INDIAN</option>
        <option value="foriegner">FORIEGNER</option>
                        </select>
      </label>
    </p>
    <p>&nbsp;</p>
    <p>
      <label></label>
      <label></label>
      <label></label>
    </p>
    <p>
      <label>Profession
      <input type="text" name="profession" id="textfield4" />
      </label>
      <label>Telephone No
      <input type="text" name="phone" id="textfield5" />
      </label>
    </p>
    <p>&nbsp;</p>
    <p>
      <label>Email       
      <input type="text" name="mail" id="textfield6" />
      </label>
    </p>
    <p>&nbsp;</p>
    <p>
      <label>SSN*
      <input type="text" name="ssn" id="textfield7" maxlength="5"/>
      </label>
    </p>
    <p>(Entry marked by * are compulsory to be filled )</p>
    <p>
      <label></label>
    </p>
    <p>
      <label></label>
    </p>
    <p>
      <label></label>
    </p>
    <p>
      <label>
      <input type="submit" name="button2" id="button2" value="Submit" />
      </label>
    </p>
    <p>&nbsp;</p>
  </form>
  <form id="form2" name="form2" method="post" action="case2.php">
    <label><input type="submit" name="button" id="button" value="next page" /></label>
  </form>
   <form id="back" name="back" method="post" action="homeopathy.php">
    <label>
     <input type="submit" name="back" id="back" value="back " /> 
    </label>
  </form>
 
  <p class="style2">&nbsp;</p>
</div>
</body>
</html>
