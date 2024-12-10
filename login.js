    function send_data(email,password)
    {
      var fdata = new FormData();
      fdata.append("email",email);
      fdata.append("password",password);
      const sendinfo = new XMLHttpRequest();
      sendinfo.open("POST","../database/login_db.php");
      sendinfo.send(fdata);

      sendinfo.onreadystatechange = function()
      {
          if(this.status==200)
          {
              if(sendinfo.responseText=='1')
              {
                  window.location.href="http://localhost/Restaurant/Restaurant/php/home.php";
              }
              else if(sendinfo.responseText=="0")
              {
                alert("Account doesnt exists");
              }

          }
          else
          {
              document.write("readystate or status is inappropriate");
          }

      }

  }

    function verify()
    {
      var email = document.getElementById("email").value;
      var pass = document.getElementById("pass").value;
      var email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if(email!=""){
                if(email_regex.test(email)){
                    if(pass!=""){
                        if(pass.length>5){
                            send_data(email,pass);
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