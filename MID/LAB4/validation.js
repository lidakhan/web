// Seller Name
function SellerNameValidaton(){
    const sellerName = document.getElementById("S_name").value
    if(sellerName == ""){
        document.getElementById("one").innerHTML = "Name is required !"
        //alert("Name is required ")
        return false
    }else if(sellerName.length <= 3){
        document.getElementById("one").innerHTML = "Name must be more than 3 charecters!"
        return false
    }else{
        return true
    }
}

// Seller Email
function EmailValidaton(){
    const email = document.getElementById("email").value
    if(email == ""){
        document.getElementById("two").innerHTML = "Email is required!"
        return false
    }else if(!email.includes("@") || !email.includes(".com")){             // false || false = false 
        document.getElementById("two").innerHTML = "Enter Valid Email !"
        return false
    }else{
        return true
    }
}

// Phone Number
function PhoneValidaton(){
    const PhoneNumber = document.getElementById("PH_num").value
    let patt = /^01\d{9}$/
    if(PhoneNumber == ""){
        document.getElementById("three").innerHTML = "Phone Number is required!"
        return false
    }else if(!patt.test(PhoneNumber) ){      // pattern milse -> true -> ! true = false         
        document.getElementById("three").innerHTML = "Enter 11 digits Phone Number !" // false -> do not enter this line
        return false
    }else{
        return true
    }
}


// Password
function PasswordValidaton(){
    const Password = document.getElementById("Pass").value
    const patt = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z\d]).{7,}$/;  // regular expression (Letter , Digits, Special charecter and atleast 7 )

    if(Password == ""){
        document.getElementById("four").innerHTML = "Password is required!"
        return false
    }else if(Password.length <= 6){
         document.getElementById("four").innerHTML = "Password should be more than 6 charecters!"
         return false
    }else if(!patt.test(Password)){            
        document.getElementById("four").innerHTML = "Password should digits,letter and special charecters!"
       return false
    }else{
        return true
    }
}

// Confirm Password
function Conf_PasswordValidaton(){
    const conf_password = document.getElementById("Conf_pass").value
    const Password = document.getElementById("Pass").value

    if(conf_password == "" ){
        document.getElementById("five").innerHTML = "Confirm Password is required!"
        return false
    }else if(conf_password !== Password){
        document.getElementById("five").innerHTML = "Confirm Password is not match!"
        return false
    }else{
        return true
    }
}

// Bus name
function Bus_validation() {
    const bus_name = document.getElementById("Bus_name").value;
    const patt = /^[A-Za-z]{3,}$/
    if (bus_name === "") {
        document.getElementById("nine").innerHTML = "Bus name is required!";
        return false;
    }else if(!patt.test(bus_name)){
        document.getElementById("nine").innerHTML = "Bus name should only letter and  more than 3 char!";
        return false;
    }else{
        return true;
    }
}

// License
function License_validation() {
    const License_name = document.getElementById("Lic_num").value;
    const patt = /^\d{5,}$/    // only digits and at least 5 
    if (License_name === "") {
        document.getElementById("ten").innerHTML = "License is required!";
        return false;
    }else if(!patt.test(License_name)){
        document.getElementById("ten").innerHTML = "License should be digits and at least 5 digits!";
        return false;
    }else{
        return true;
    }
}

// Services 
function service_validation() {
    const service_name = document.getElementById("Serv_Cat").value;
    if (service_name === "") {
        document.getElementById("eight").innerHTML = "Services is not selected";
        return false;
    }else{
        return true;
    }
}

// Terms and Condition
function terms_validation() {
        const termsCheckbox = document.getElementById("Terms");

        if (!termsCheckbox.checked) {
            document.getElementById("thirteen").innerText = "You must agree to the terms and conditions.";
            return false
        } else {
            return true
        }   
}


// radio button (type of buses)
function busTypeValidation() {
    let Bool = false;
    const busTypes = document.getElementsByName("bus_type");

    for (let i = 0; i < busTypes.length; i++) {
        if (busTypes[i].checked) {
            Bool = true;
            break;
        }
    }
    if (!Bool) {
        document.getElementById("twelve").innerText = "Please select a type of bus.";
        return false;
    } else {
        return true;
    }
}



// Validation Function
function validate() {
   return  (SellerNameValidaton() && 
            EmailValidaton() && 
            PhoneValidaton() && 
            PasswordValidaton() && 
            Conf_PasswordValidaton() &&
            service_validation() &&
            Bus_validation() &&
            License_validation() &&
            busTypeValidation() &&
            terms_validation()
            
        )
           
}

