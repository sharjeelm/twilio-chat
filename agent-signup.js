


	function show(){

		var password = document.getElementById("password");
		var confirmpassword = document.getElementById("confirmpassword");

		if(password.type === "password"){
			password.type = "text";
		}else{
			password.type = "password";
		}

		if(confirmpassword.type === "password"){
			confirmpassword.type = "text";
		}else{
			confirmpassword.type = "password";
		}


    }
    

   // var form = document.getElementById("form-signup");

    

    //form.addEventListener('submit', signup);


    function signup()
    {
       

        console.log("form submitted");
        validation();

        if(document.getElementById("erro").innerHTML === "")
        {

            
			console.log("form ok");

			var firstname = document.getElementById("firstname").value;
			var lastname = document.getElementById("lastname").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;

			document.getElementById("password").value = "";

			var hash = calcMD5(password)
			     
			$.ajax({
				url: 'main-vedio-agent.php',
				type: 'post',
				data: { 'createnewagent': "1",
				'firstname': firstname,
				'lastname': lastname,
				'username': username,
				'password': hash},
				success: function(response) { 

				

					var res = response.split(":");
				
					var respon = res[0];

					if(respon == "Agent already exists with this username")
					{

						
						alert("This username already exists try another");
						
					}
					else{
						
						const url = 'agent-gif-upload.php';
						const form = document.querySelector('form');
						const files = document.querySelector('[type=file]').files
						const formData = new FormData()

						
						var filename = username + "-preview.gif";

						for (let i = 0; i < files.length; i++) {
							let file = files[i]

							formData.append('files[]', file,filename)
						}

							fetch(url, {
								method: 'POST',
								body: formData,
							}).then(response => {

								console.log(response)
								debugger;

								alert("User created successfully. Go back to home");
								window.location= "vediotokenget.php";
							})







					}
				}



				});
        }
    }


var password = document.getElementById("password");

password.onfocus = function() {
		document.getElementById("password-message").style.display = "block";
	}

password.onblur = function() {
		document.getElementById("password-message").style.display = "none";
	}

password.onkeyup = function(){

	var uppercases = /[a-z]/g;
	if (password.value.match(uppercases)){
		uppercase.classList.remove("invalid");
		uppercase.classList.add("valid");
	}else{
		uppercase.classList.remove("valid");
		uppercase.classList.add("invalid");
	}

	var lowercases = /[A-Z]/g;
	if (password.value.match(lowercases)){
		lowercase.classList.remove("invalid");
		lowercase.classList.add("valid");
	}else{
		lowercase.classList.remove("valid");
		lowercase.classList.add("invalid");
	}


	var numbers = /[0-9]/g;
	if (password.value.match(numbers)){
		digit.classList.remove("invalid");
		digit.classList.add("valid");
	}else{
		digit.classList.remove("valid");
		digit.classList.add("invalid");
	}

	if((password.value.length >= 8) && (password.value.length <= 20)) {
			lengths.classList.remove("invalid");
			lengths.classList.add("valid");
		}else{
			lengths.classList.remove("valid");
			lengths.classList.add("invalid");
		}
}



	function validation(){
		

		var firstname = document.getElementById("firstname").value;
		var lastname = document.getElementById("lastname").value;
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var confirmpassword = document.getElementById("confirmpassword").value;
		
		
        document.getElementById("erro").innerHTML ="";

		


		if(firstname === "" || lastname === ""){
			document.getElementById("erro").innerHTML = "**Please fill in both first and last name**";
			return false;
		}

		if(!isNaN(firstname) || !isNaN(firstname)){
			document.getElementById("erro").innerHTML = "**Name cannot be only numbers or digits**";
			return false;
		}

		if(firstname.length<3 || lastname.length<3 || firstname.length>15 || lastname.length>15 ){
			document.getElementById("erro").innerHTML = "**name must be between 3-15 characters**";
			return false;
		}


		if(username === ""){
			document.getElementById("erro").innerHTML = "**Please fill in username**";
			return false;
		}

		if(username.length<5 || username.length>30){
			document.getElementById("erro").innerHTML = "**Username must be 5 digits long**";
			return false;
		}

        if(password.length<5 || password.length>30){
			document.getElementById("erro").innerHTML = "**password must be 5 digits long**";
			return false;
		}

    
        

		if(password === "" || confirmpassword === ""){
			document.getElementById("erro").innerHTML = "**Please fill in both password**";
			return false;
		}

		if(password != confirmpassword){
			document.getElementById("erro").innerHTML = "**Both password have to much**";
			return false;
		}

	

		

}


var confirmpassword = document.getElementById("confirmpassword");

confirmpassword.onfocus = function() {
		document.getElementById("password-message").style.display = "block";
	}

confirmpassword.onblur = function() {
		document.getElementById("password-message").style.display = "none";
	}

confirmpassword.onkeyup = function(){

	var uppercases = /[a-z]/g;
	if (confirmpassword.value.match(uppercases)){
		uppercase.classList.remove("invalid");
		uppercase.classList.add("valid");
	}else{
		uppercase.classList.remove("valid");
		uppercase.classList.add("invalid");
	}

	var lowercases = /[A-Z]/g;
	if (confirmpassword.value.match(lowercases)){
		lowercase.classList.remove("invalid");
		lowercase.classList.add("valid");
	}else{
		lowercase.classList.remove("valid");
		lowercase.classList.add("invalid");
	}


	var numbers = /[0-9]/g;
	if (confirmpassword.value.match(numbers)){
		digit.classList.remove("invalid");
		digit.classList.add("valid");
	}else{
		digit.classList.remove("valid");
		digit.classList.add("invalid");
	}

	if((confirmpassword.value.length >= 8) && (confirmpassword.value.length <= 20)) {
			lengths.classList.remove("invalid");
			lengths.classList.add("valid");
		}else{
			lengths.classList.remove("valid");
			lengths.classList.add("invalid");
		}
}



	