function send_data(first_name,last_name,email,password){
    var fdata = new FormData();
    fdata.append("first_name",first_name);
    fdata.append("last_name",last_name);
    fdata.append("email",email);
    fdata.append("password",password);
    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/register_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
    {
        if(this.status==200)
        {
            if(sendinfo.responseText=='1')
            {
                alert("Account already exists");
            }
            else{
                window.location.href="http://localhost/Restaurant/Restaurant/php/home.php";
            }

        }
        else
        {
            document.write("readystate or status is inappropriate");
        }

    }

}


function register(){

    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var first_name = document.getElementById("first-name").value;
    var last_name = document.getElementById("last-name").value;
    var email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    

    
                    if(email!=""){
                        if(email_regex.test(email)){
                            if(pass!=""){
                                if(pass.length>5){
                                    send_data(first_name,last_name,email,pass);
                                    
                                }
                                else{
                                    alert("Password must be greater than 5 characters!");
                                }
                            }
                            else{
                                alert("Enter password");
                            }    
                        }
                        else{
                            alert("Enter valid email");
                        }   
                    }
                    else{
                        alert("Enter email");
                    }
}


function redirect_to_login()
{
    window.location.href="http://localhost/Restaurant/Restaurant/php/login_page.php";
}

function redirect_to_about()
{
    window.location.href="http://localhost/Restaurant/Restaurant/php/about.php";
}