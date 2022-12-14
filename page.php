<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
    
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        label {
            width: 160px;
            text-align: left;
            padding-right: 10px;
        }
        
        input,
        label {
            float: left;
        }
        
        button {
            text-align: left;
        }
    </style>


    <div  id="google_translate_element" style="float:left; margin-left: 15%; width: 50%;">

        <div class="section-header">
            <div class="container">
              <h1>Registration Forms</h1>
              <p> </p>
            </div>
          </div>


        <form action="config.php" method="POST" enctype="multipart/form-data">

            <!-- <div class="section-header">
                <div class="container">
                  <h1>Registration Forms</h1>
                  <p> </p>
                </div>
              </div> -->

            <!-- <h1>Registration Form</h1> -->

            <label for="name">Name: </label>
            <input type="text" name="name" required><br><br>

            <label for="aadhar">Aadhar Number: </label>
            <input type="number" name="aadhar_number" required><br><br>

            <label for="number">Mobile: </label>
            <input type="number" name="mobile_number" required><br><br>

            <label for="number">Alternate Mobile: </label>
            <input type="number" name="alternate_mobile"><br><br>

            <label for="address">Address: </label>
            <input type="explain" name="address" required><br><br>

            <label for="code">Postal Code: </label>
            <input type="text" name="postal_code" required><br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" required><br><br>

            <label for="contact">Emergency Contact Number: </label>
            <input type="number" name="enumber" required><br><br>

            <label for="myfile">Photo: </label>
            <input type="file" name="photo" required><br><br>

            <label for="occupation">Occupation: </label>
            <input type="text" name="occupation" required><br><br>

            <label for="experience">Experience: </label>
            <input type="text" name="exp"><br><br>

            <label for="date">Date of Birth: </label>
            <input type="date" name="dob" id="dob" required><br><br>

            <label for="age">Age: </label>
            <input type="number" name="age" id="dob" required><br><br>

            <label for="award">Awards: </label><br><br>
            <input type="radio" name="local" id="local" value="local"> Local <br>
            <input type="radio" name="local" id="district" value="district"> District <br>
            <input type="radio" name="local" id="state" value="state"> State <br>
            <input type="radio" name="local" id="nation" value="national"> National <br>
            <input type="radio" name="local" id="internation" value="internation"> International <br>

        
    </div>

    <div style="width:50%; margin:auto; padding-right: 10%; margin-left: 30%;">
        <div>
            
                <h2>Account Details</h2>

                <label for="aadhar">Aadhar Number: </label>
                <input type="number" name="aadhar_number" required><br><br>

                <label for="pan">Pan Number: </label>
                <input type="number" name="pan_number" required><br><br>

                <label for="bank">Name of Bank: </label>
                <input type="text" name="bank_name" required><br><br>

                <label for="account">Account Number: </label>
                <input type="text" name="account_number" required><br><br>

                <label for="holder">Account Holder Name: </label>
                <input type="text" name="account_holder_name" required><br><br>

                <label for="branch">Branch Name: </label>
                <input type="text" name="branch" required><br><br>

                <label for="IFSC">IFSC Number: </label>
                <input type="text" name="ifsc" required><br><br>

                <label for="MICR">MICR Number: </label>
                <input type="text" name="micr"><br><br>

                <input type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>


    

</body>

</html>