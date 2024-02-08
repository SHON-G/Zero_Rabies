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
                    <th class="imgtd">Image</th>
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
                
            <tr>
    <td>1</td>
    <td>RABIVAX-S</td>
    <td>Serum Institute of India Pvt. Ltd.</td>
    <td class="imgtd"><img src="a1.jpg" alt="RABIVAX" style="height: 100px; width: 100px;"></td>
    <td>
        <input type="checkbox" id="RABIVAX_yes" name="RABIVAX" value="yes" >
        <label for="RABIVAX_yes">Yes</label>
        <input type="checkbox" id="RABIVAX_no" name="RABIVAX" value="no" > 
        <label for="RABIVAX_no">No</label> 
    </td>
</tr>

                <!-- <tr> -->
                    <!-- <td>2</td>
                    <td>RABIPUR</td>
                    <td>Glaxo SmithKline Pharmaceuticals Ltd.</td>
                    <td><img src="a1.jpg" alt="RABIPUR" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="RABIPUR_yes" name="med2" value="yes" checked>
                        <label for="med2_yes">Yes</label>
                        <input type="radio" id="RABIPUR_no" name="med2" value="no">
                        <label for="med2_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Abhayrab</td>
                    <td>Indian Immunologicals Ltd.</td>
                    <td><img src="a1.jpg" alt="Abhayrab" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="Abhayrab_yes" name="med3" value="yes" checked>
                        <label for="med3_yes">Yes</label>
                        <input type="radio" id="Abhayrab_no" name="med3" value="no">
                        <label for="med3_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Abhayrab-PF</td>
                    <td>Indian Immunologicals Ltd.</td>
                    <td><img src="a1.jpg" alt="Abhayrab-PF" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="bhayrab-PF_yes" name="med4" value="yes" checked>
                        <label for="med4_yes">Yes</label>
                        <input type="radio" id="bhayrab-PF_no" name="med4" value="no">
                        <label for="med4_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ChiroRab</td>
                    <td>Chiron Behring Vaccines Pvt. Ltd.</td>
                    <td><img src="a1.jpg" alt="ChiroRab" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="ChiroRab_yes" name="med5" value="yes" checked>
                        <label for="med5_yes">Yes</label>
                        <input type="radio" id="ChiroRab_no" name="med5" value="no">
                        <label for="med5_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Zuvirab</td>
                    <td>Zuventus Healthcare Ltd.</td>
                    <td><img src="a1.jpg" alt="Zuvirab" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="Zuvirab_yes" name="med6" value="yes" checked>
                        <label for="med6_yes">Yes</label>
                        <input type="radio" id="Zuvirab_no" name="med6" value="no">
                        <label for="med6_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Surerab</td>
                    <td>Bio-Med Pvt. Ltd.</td>
                    <td><img src="a1.jpg" alt="Surerab" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="Surerab_yes" name="med7" value="yes" checked>
                        <label for="med7_yes">Yes</label>
                        <input type="radio" id="Surerab_no" name="med7" value="no">
                        <label for="med7_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>BERAB</td>
                    <td>Biological E Ltd.</td>
                    <td><img src="a1.jpg" alt="BERAB" style="height: 100px; width: 100px;"></td>
                    <td>
                        <input type="radio" id="BERAB_yes" name="med8" value="yes" checked>
                        <label for="med8_yes">Yes</label>
                        <input type="radio" id="BERAB_no" name="med8" value="no">
                        <label for="med8_no">No</label>
                    </td>
                </tr> -->
                <!-- Add more rows for other medicines -->
            </tbody>
        </table>

        <!-- Submit Button -->
        <button type="submit" class="submit-button" name="submit">Submit</button>
    </form>
</div>

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
    // $RABIVAX =$_POST["RABIVAX"];
    // to take input as radio yes or no
    // $RABIVAX-S_yes =$_POST["RABIVAX-S"];
    // $RABIVAX-S_no =$_POST["RABIVAX-S"];
    $RABIVAX = isset($_POST["RABIVAX"]) ? $_POST["RABIVAX"] : "no"; // Default to "no" if not checked




    

    $query = "INSERT INTO trial VALUES('','$owner_name',' $medical_name','$medical_location','$google_maps_id','$lat_long','$state','$city','$local_area_address','$RABIVAX')";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert('Data Inserted Succesfull');</script>

    ";
}
?>
</body>
</html>
