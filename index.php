
<?php
 
require 'connection.php';

if(isset($_POST["submit"])){
    $owner_name =$_POST["owner_name"];
    $medical_name =$_POST["medical_name"];
    $medical_location =$_POST["medical_location"];
    $google_maps_id =$_POST["google_maps_id"];
    $lat_long =$_POST["lat_long"];
    $state =$_POST["state"];
    $city =$_POST["city"];
    $local_area_address =$_POST["local_area_address"];
    
    $RABIVAX = isset($_POST["RABIVAX"]) ? $_POST["RABIVAX"] : "no"; 
    $RABIPUR = isset($_POST["RABIPUR"]) ? $_POST["RABIPUR"] : "no";
    $Abhayrab = isset($_POST["Abhayrab"]) ? $_POST["Abhayrab"] : "no";
    $AbhayrabPF = isset($_POST["AbhayrabPF"]) ? $_POST["AbhayrabPF"] : "no";
    $ChiroRab = isset($_POST["ChiroRab"]) ? $_POST["ChiroRab"] : "no";
    $Zuvirab = isset($_POST["Zuvirab"]) ? $_POST["Zuvirab"] : "no";
    $Surerab = isset($_POST["Surerab"]) ? $_POST["Surerab"] : "no";
    $BERAB = isset($_POST["BERAB"]) ? $_POST["BERAB"] : "no";












    
    $query = "INSERT INTO trialproject VALUES('','$owner_name','$medical_name','$medical_location','$google_maps_id','$lat_long','$state','$city','$local_area_address','$RABIVAX','$RABIPUR','$Abhayrab','$AbhayrabPF','$ChiroRab','$Zuvirab','$Surerab','$BERAB')";

    mysqli_query($conn, $query);
    
    header("Location: thankyou.php");
    exit(); 
   
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zero Rabies</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
<div class="container">
    <h1>Zero Rabies</h1>
    <form class="" action="" method="post" autocomplete="off">
        <!-- Owner Information -->
        <label for="owner_name">Owner Name</label>
        <input type="text" id="owner_name" name="owner_name">

        <!-- Medical Information -->
        <label for="medical_name">Medical Name</label>
        <input type="text" id="medical_name" name="medical_name">

        <label for="medical_location">Medical Location</label>
        <input type="text" id="medical_location" name="medical_location">

        <label for="google_maps_id">Google Maps ID</label>
        <input type="text" id="google_maps_id" name="google_maps_id">

        <label for="lat_long">Latitude Longitude</label>
        <input type="text" id="lat_long" name="lat_long">

        <!-- State and City Selection -->
        <label for="state">State</label>
        <select id="state" name="state" onchange="updateCities()">
            <option value="">Select State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>

        </select>

        <label for="city">City</label>
        <select id="city" name="city">
            <option value="">Select City</option>
        </select>

        <!-- Local Area Address -->
        <label for="local_area_address">Local Area Address</label>
        <input type="text" id="local_area_address" name="local_area_address">

        <!-- Medicines Information -->
        <h2>Medicines Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Manufacturer</th>
                    <!-- <th class="imgtd">Image</th> -->
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
                
            <tr>
    <td>1</td>
    <td>RABIVAX-S</td>
    <td>Serum Institute of India Pvt. Ltd.</td>
    <!-- <td class="imgtd"><img src="a1.jpg" alt="RABIVAX" style="height: 100px; width: 100px;"></td> -->
    <td>
        <input type="checkbox" id="RABIVAX_yes" name="RABIVAX" value="yes" >
        <label for="RABIVAX_yes">Yes</label>
        <input type="checkbox" id="RABIVAX_no" name="RABIVAX" value="no" > 
        <label for="RABIVAX_no">No</label> 
    </td>
</tr>

                <tr>                     <td>2</td>
                    <td>RABIPUR</td>
                    <td>Glaxo SmithKline Pharmaceuticals Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="RABIPUR" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="RABIPUR" name="RABIPUR" value="yes" >
                        <label for="RABIPUR_yes">Yes</label>
                        <input type="checkbox" id="RABIPUR" name="RABIPUR" value="no">
                        <label for="RABIPUR_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Abhayrab</td>
                    <td>Indian Immunologicals Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="Abhayrab" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="Abhayrab" name="Abhayrab" value="yes" >
                        <label for="Abhayrab_yes">Yes</label>
                        <input type="checkbox" id="Abhayrab" name="Abhayrab" value="no">
                        <label for="Abhayrab_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>AbhayrabPF</td>
                    <td >Indian Immunologicals Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="AbhayrabPF" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="bhayrabPF" name="AbhayrabPF" value="yes" >
                        <label for="AbhayrabPF_yes">Yes</label>
                        <input type="checkbox" id="bhayrabPF" name="AbhayrabPF" value="no">
                        <label for="AbhayrabPF_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ChiroRab</td>
                    <td >Chiron Behring Vaccines Pvt. Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="ChiroRab" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="ChiroRab" name="ChiroRab" value="yes" >
                        <label for="ChiroRab_yes">Yes</label>
                        <input type="checkbox" id="ChiroRab" name="ChiroRab" value="no">
                        <label for="ChiroRab_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Zuvirab</td>
                    <td >Zuventus Healthcare Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="Zuvirab" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="Zuvirab" name="Zuvirab" value="yes" >
                        <label for="Zuvirab_yes">Yes</label>
                        <input type="checkbox" id="Zuvirab" name="Zuvirab" value="no">
                        <label for="Zuvirab_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Surerab</td>
                    <td >Bio-Med Pvt. Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="Surerab" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="Surerab" name="Surerab" value="yes" >
                        <label for="Surerab_yes">Yes</label>
                        <input type="checkbox" id="Surerab" name="Surerab" value="no">
                        <label for="Surerab_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>BERAB</td>
                    <td >Biological E Ltd.</td>
                    <!-- <td class="imgtd"><img src="a1.jpg" alt="BERAB" style="height: 100px; width: 100px;"></td> -->
                    <td>
                        <input type="checkbox" id="BERAB_yes" name="BERAB" value="yes" >
                        <label for="BERAB_yes">Yes</label>
                        <input type="checkbox" id="BERAB_no" name="BERAB" value="no">
                        <label for="BERAB_no">No</label>
                    </td>
                </tr> 
            </tbody>
        </table> 

        
        <button type="submit" class="submit-button" name="submit" >Submit</button>

    </form>
</div>

</body>
</html>
