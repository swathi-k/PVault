function myFunction() {
    var password = prompt("Please enter your password", "");
    
    if(password != "hello")
    {
    	document.getElementById("content").innerHTML =
    	    "Invalid Password";
    }
}