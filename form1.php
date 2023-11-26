<!DOCTYPE html>
<html>
<head>
    <title>Web Form Requiring Validation</title>
	<style type="text/css">
		label { display: inline-block; width: 100px; }
	</style>
</head>
<body>
    <h1>Web Form Requiring Validation</h1>
   <!-- <form id="myForm" action="action_script1.php" method="post"> -->
   <form name="myForm" onsubmit="return validateForm()" method="post">      
   <section>
            <h2>Personal Information</h2>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" ><br><br>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" ><br><br>

            <label for="birthdate">Date of Birth:</label>
            <input type="date" id="birthdate" name="birthdate"><br><br>
        </section>

        <section>
            <h2>Contact Information</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="e.g., 1234567890"><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br><br>

            <label for="city">City:</label>
            <input type="text" id="city" name="city"><br><br>

			<label for="state">State:</label>
			<select id="state" name="state">
				<option value="">Select State</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select><br><br>

            <label for="zipcode">ZIP Code:</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="e.g., 12345"><br><br>
        </section>

        <section>
            <h2>Login Information</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
        </section>

        <section>
            <h2>Interests</h2>
            <label>Interests:</label><br>
            <input type="checkbox" id="interest1" name="interest" value="music"> Music
            <input type="checkbox" id="interest2" name="interest" value="sports"> Sports
            <input type="checkbox" id="interest3" name="interest" value="reading"> Reading<br><br>
        </section>

        <section>
            <h2>Additional Comments</h2>
            <label for="comments">Comments:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>
        </section>

        <input type="submit" value="Submit">
    </form>

	<script type="text/javascript"?>
		function validateForm() {
            var firstName = document.getElementById("firstName").value;
			var lastName = document.getElementById("lastName").value;

            // Check if first name has at least 8 characters
            if (firstName.length < 8) {
                alert("First Name must have at least 8 characters");
                return false;
            }
			if (lastName.length < 8) {
                alert("Last Name must have at least 8 characters");
                return false;
            }

            
        }
	</script>


</body>
</html>
