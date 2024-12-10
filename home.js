function book(){
    window.location.href="http://localhost/Restaurant/Restaurant/php/reservation_page.php";
}

function login(){
    window.location.href="http://localhost/Restaurant/Restaurant/php/login_page.php";
}

function menu_redirect(){
    window.location.href="http://localhost/Restaurant/Restaurant/php/menu.php";
    
}

function about_redirect(){
    window.location.href="http://localhost/Restaurant/Restaurant/php/about.php";

}


function send()
{
    var email = document.getElementById("email-id").value;
    var message = document.getElementById("message-id").value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var form_data = new FormData();
    form_data.append("email",email);
    form_data.append("message",message);

    const senddata = new XMLHttpRequest();
    senddata.open("POST","../database/contact_page_db.php");

    if(regex.test(email))
    {
        senddata.send(form_data);
        alert("Sent");
    }
    else
    {
        alert("Invalid email");
    }

}

    function about_us_redirect(){
        window.location.href="";
}

function logout()
{
    var fdata = new FormData();
      fdata.append("logout","true");
      const sendinfo = new XMLHttpRequest();
      sendinfo.open("POST","../database/home_db.php");
      sendinfo.send(fdata);

      sendinfo.onreadystatechange = function()
      {
          if(this.status==200)
          {
              if(sendinfo.responseText=='0')
              {
                  window.location.href="http://localhost/Restaurant/Restaurant/php/login_page.php";
              }
            

          }
          else
          {
              document.write("readystate or status is inappropriate");
          }

      }

}