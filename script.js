function updateCities() {
    var stateSelect = document.getElementById("state");
    var citySelect = document.getElementById("city");
    var selectedState = stateSelect.options[stateSelect.selectedIndex].value;

    // Clear existing options
    citySelect.innerHTML = "<option value=''>Select City</option>";

    // Populate cities based on selected state
    switch (selectedState) {
        case "Andhra Pradesh":
            citySelect.innerHTML += "<option value='Visakhapatnam'>Visakhapatnam</option><option value='Vijayawada'>Vijayawada</option><option value='Guntur'>Guntur</option><option value='Nellore'>Nellore</option><option value='Kurnool'>Kurnool</option><option value='Rajahmundry'>Rajahmundry</option><option value='Tirupati'>Tirupati</option><option value='Kakinada'>Kakinada</option><option value='Anantapur'>Anantapur</option><option value='Kadapa'>Kadapa</option><option value='Eluru'>Eluru</option><option value='Vizianagaram'>Vizianagaram</option><option value='Ongole'>Ongole</option><option value='Tenali'>Tenali</option><option value='Proddatur'>Proddatur</option><option value='Anakapalle'>Anakapalle</option><option value='Machilipatnam'>Machilipatnam</option><option value='Chittoor'>Chittoor</option><option value='Madanapalle'>Madanapalle</option><option value='Srikakulam'>Srikakulam</option>";

            break;
        case "Gujarat":
            citySelect.innerHTML += "<option value='Ahmedabad'>Ahmedabad</option><option value='Surat'>Surat</option><option value='Vadodara'>Vadodara</option><option value='Rajkot'>Rajkot</option><option value='Bhavnagar'>Bhavnagar</option><option value='Jamnagar'>Jamnagar</option><option value='Junagadh'>Junagadh</option><option value='Gandhinagar'>Gandhinagar</option><option value='Anand'>Anand</option><option value='Nadiad'>Nadiad</option><option value='Morbi'>Morbi</option><option value='Surendranagar'>Surendranagar</option><option value='Bharuch'>Bharuch</option><option value='Navsari'>Navsari</option><option value='Valsad'>Valsad</option><option value='Vapi'>Vapi</option><option value='Mehsana'>Mehsana</option><option value='Patan'>Patan</option><option value='Gandhidham'>Gandhidham</option><option value='Porbandar'>Porbandar</option>";

            break;
        case "Maharashtra":
            citySelect.innerHTML += "<option value='Mumbai'>Mumbai</option><option value='Pune'>Pune</option><option value='Nagpur'>Nagpur</option><option value='Thane'>Thane</option><option value='Nashik'>Nashik</option><option value='Aurangabad'>Aurangabad</option><option value='Solapur'>Solapur</option><option value='Amravati'>Amravati</option><option value='Kolhapur'>Kolhapur</option><option value='Navi Mumbai'>Navi Mumbai</option><option value='Akola'>Akola</option><option value='Jalgaon'>Jalgaon</option><option value='Vasai-Virar'>Vasai-Virar</option><option value='Jalna'>Jalna</option><option value='Satara'>Satara</option><option value='Dhule'>Dhule</option><option value='Latur'>Latur</option><option value='Chandrapur'>Chandrapur</option><option value='Parbhani'>Parbhani</option><option value='Ichalkaranji'>Ichalkaranji</option>";

    
            break;    
        // Add cases for other states as needed
        default:
            citySelect.innerHTML += "<option value=''>Select City</option>";
    }
}
