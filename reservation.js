function send_reginfo(name_value,email_value,number_value,seats_value,date_value,time_value,curr_date){
    var rdata = new FormData();
    rdata.append("name",name_value);
    rdata.append("email",email_value);
    rdata.append("number_id",(number_value));
    rdata.append("seats",seats_value);
    rdata.append("date",date_value);
    rdata.append("time",time_value);
    rdata.append('current_date',curr_date);
    const sendinfo = new XMLHttpRequest();
	sendinfo.open("POST","../database/reservation_db.php");
	sendinfo.send(rdata);
    alert("data sent");
    window.location.href = "../php/home.php";
}


function validate(){
    var name_id = document.getElementById("name_id").value;
    var email_id = document.getElementById("email_id").value;
    var number_id = document.getElementById("number_id").value;
    var seats_id = document.getElementById("seats_id").value;
    var date_id = document.getElementById("date_id").value;
    var time_id = document.getElementById("time_id").value;
    var error_para = document.getElementById("error_msg_id");
    var error = document.getElementById("error_msg_id").value;
    const date_value = new Date();
    const selected_date = new Date(date_id);
    var curr_date = date_value.getFullYear()+'-'+date_value.getDate()+'-'+date_value.getMonth();
    
    var name_regex = /^[A-Za-z\s]+$/;
    var email_regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ ;
    var number_regex = /^9\d{9}$/;


    if(name_id!=""){
        if(name_regex.test(name_id)){
            if(email_id!=""){
                if(email_regex.test(email_id)){
                    if(number_id!=""){
                        if(number_regex.test(number_id)){
                                if(seats_id!="" && seats_id>0){
                                    if(date_id!=""){
                                        if(selected_date >= date_value.setHours(0,0,0,0))
                                            {
                                                if(time_id!=""){
                                                    send_reginfo(name_id,email_id,number_id,seats_id,date_id,time_id,curr_date);
                                                }
                                                else{
                                                    alert("Select Time");
                                                }
                                            }
                                            else{
                                                alert("Select Valid Date");
                                            }
                                        
                                    }
                                    else{
                                        alert("Select Date");
                                    }
                                }
                                else{
                                    alert("Select Valid Seats");
                                }
                                
                            
                            
                        }
                        else{
                            alert("Select Valid number");
                        }
                        
                    }
                    else{
                        alert("Enter number");
                    }
                }
                else{
                    alert("Select Valid Email");
                }
            }
            else{
                alert("Enter email id");
            }
        }
        else{
            alert("Select Valid Name");
        }
        
    }
    else{
        alert("Enter name");
    }

}