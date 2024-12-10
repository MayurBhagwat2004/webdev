// function sendnull(){
//     var senddata = new XMLHttpRequest();
//     senddata.open("POST","../database/reservation_table_db.php");
//     senddata.send(null); 
// }

function next_page(num_id){
    var current_page = Number(num_id);
    var items_per_page = 5;
    var items_to_skip = ((current_page-1)*items_per_page);
    var items_to_display = items_to_skip+5;

    var senddata = new XMLHttpRequest();
    var formdata = new FormData();
    formdata.append("items_to_skip",items_to_skip);
    formdata.append("items_to_display",items_to_display);
    senddata.open("POST","../database/reservation_table_db.php");
    senddata.send(formdata);
    
    senddata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var iframe = document.createElement("iframe");
            var html = this.responseText;
            document.body.appendChild(iframe);
            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(html);
            iframe.contentWindow.document.close();
            var iframe_old = document.getElementById("iframe-id");
            iframe_old.remove();
            iframe.setAttribute("id","iframe-id");
            iframe.setAttribute("frameborder","0");

           
        }
    }
}


function delete_record(record)
{   var record_id = Number(record);
    var table = document.getElementById("reservation-table");
    var row = table.getElementsByTagName("tr");
    var data = row[record_id].getElementsByTagName("td");
    
    var name = data[0].innerText;
    var formdata = new FormData();
    var senddata = new XMLHttpRequest();
    senddata.open("POST","../database/reservation_table_db.php");
    formdata.append("name",name);
    senddata.send(formdata);

}