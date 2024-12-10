function getinfo(){
    var fdata = new FormData();
    fdata.append("dish_page_count","show");
    const getinfo = new XMLHttpRequest();
    getinfo.open("POST","../database/admin_page_db.php");
    getinfo.send(fdata);

    getinfo.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }

    getinfo.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }

}

function dishes(dish_div_id){
    var dish_id = document.getElementById(dish_div_id);
    var beverages_id = document.getElementById('beverages-div');
    var desserts_id = document.getElementById('desserts-div');
    var snacks_id = document.getElementById('snacks-div');

    dish_id.className = "active";
    beverages_id.className = "passive";
    desserts_id.className = "passive";
    snacks_id.className = "passive";

    var dishes_data = "true";
    var show_data = "true";

    var fdata = new FormData();
    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/dishes_page_db.php");
    sendinfo.send(null);

    var formdata = new FormData();
    formdata.append("dish_page_count","show");
    var senddata = new XMLHttpRequest();
    senddata.open("POST","../database/admin_page_db.php");
    senddata.send(formdata);

    sendinfo.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var iframe = document.createElement("iframe");
            var html = this.responseText;
            document.body.appendChild(iframe);
            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(html);
            iframe.contentWindow.close();
            var iframe_old = document.getElementById("iframe-id");
            iframe_old.remove();
            iframe.setAttribute("id","iframe-id");
            iframe.setAttribute("frameborder","0");
        }
    }

    senddata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }
}

function beverages(beverages_div_id){
    var beverages_id = document.getElementById(beverages_div_id);
    var dish_id = document.getElementById("dishes-div");
    var desserts_id = document.getElementById('desserts-div');
    var snacks_id = document.getElementById('snacks-div');

    beverages_id.className = "active";
    dish_id.className = "passive";
    desserts_id.className = "passive";
    snacks_id.className = "passive";

    var fdata = new FormData();
    fdata.append("beverages","true");
    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/beverages_page_db.php");
    sendinfo.send(fdata);

    var formdata = new FormData();
    formdata.append("bev_page_count","show");
    var senddata = new XMLHttpRequest();
    senddata.open("POST","../database/admin_page_db.php");
    senddata.send(formdata);



    sendinfo.onreadystatechange = function(){
        if(this.status==200 && this.readyState==4){
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

    senddata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }
}

function desserts(desserts_div_id){
    var desserts_id = document.getElementById(desserts_div_id);
    var dish_id = document.getElementById("dishes-div");
    var beverages_id = document.getElementById("beverages-div");
    var snacks_id = document.getElementById("snacks-div");

    desserts_id.className = "active";
    dish_id.className = "passive";
    beverages_id.className = "passive";
    snacks_id.className = "passive";

    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/desserts_page_db.php");
    sendinfo.send(null);


    var formdata = new FormData();
    formdata.append("des_page_count","show");
    var senddata = new XMLHttpRequest();
    senddata.open("POST","../database/admin_page_db.php");
    senddata.send(formdata);

    sendinfo.onreadystatechange = function(){
        if(this.status==200 && this.readyState==4){
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

    senddata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }

}

function snacks(snacks_div_id){

    var snacks_id = document.getElementById(snacks_div_id);
    var dish_id = document.getElementById("dishes-div");
    var beverages_id = document.getElementById('beverages-div');
    var desserts_id = document.getElementById('desserts-div');

    snacks_id.className = "active";
    dish_id.className = "passive";
    beverages_id.className = "passive";
    desserts_id.className = "passive";

    var fdata = new FormData();
    fdata.append("snacks","true");
    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/snacks_page_db.php");
    sendinfo.send(fdata);

    var formdata = new FormData();
    formdata.append("snack_page_count","show");
    var senddata = new XMLHttpRequest();
    senddata.open("POST","../database/admin_page_db.php");
    senddata.send(formdata);
    
    sendinfo.onreadystatechange = function(){
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

    senddata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var html = this.responseText;
            var btn_div = document.getElementById("btn-div");
            btn_div.innerHTML = html;
        }
    }
}

function page(current_num){
    var current_page = parseInt(current_num);
    var items_per_page = 4;
    var items_to_skip = ((current_page-1)*items_per_page);
    var items_to_display = items_to_skip+4;

    var fdata = new FormData();
    fdata.append("items_to_display",items_to_display);
    fdata.append("items_to_skip",items_to_skip);
    fdata.append("clicked","true");

    const sendinfo = new XMLHttpRequest();

    var dish_page = document.getElementById("dishes-div");
    var beverage_page = document.getElementById("beverages-div");
    var desserts_page = document.getElementById("desserts-div");
    var snacks_page = document.getElementById("snacks-div");

    if(dish_page.className=="active"){
        sendinfo.open("POST","../database/dishes_page_db.php");
        sendinfo.send(fdata);   
    }
    else if(beverage_page.className=="active"){
        sendinfo.open("POST","../database/beverages_page_db.php");
        sendinfo.send(fdata);
    }
    else if(desserts_page.className=="active"){
        sendinfo.open("POST","../database/desserts_page_db.php");
        sendinfo.send(fdata);
    }
    else if(snacks_page.className=="active"){
        sendinfo.open("POST","../database/snacks_page_db.php");
        sendinfo.send(fdata);
    }
    else{
        sendinfo.open("POST","../database/dishes_page_db.php");
        sendinfo.send(fdata);
    }

    sendinfo.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var iframe = document.createElement("iframe");
            var html = sendinfo.responseText;
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
var old_data_list = [];
var data_list = [];
function show(){
    var iframe = document.getElementById("iframe-id");
    var table = iframe.contentWindow.document.getElementById("table-id");
    table.contentEditable = true;
    var table_cells = table.getElementsByTagName("td");
    
    for(var i=0;i<table_cells.length;i++){
        if(i%2==0){
            data_list.push({key: table_cells[i].innerHTML,
                value: table_cells[i+1].innerHTML
            });
        }        
    }
    console.log("called");
}

document.getElementById("done-btn").addEventListener("click",function(){
    var edit_btn = document.getElementById("edit-btn");
    var done_btn = document.getElementById("done-btn");
    edit_btn.className = "passive";
    done_btn.className = "active";

})

function hide(){
    var olddata = new FormData();
    var senddata = new XMLHttpRequest();
    var iframe = document.getElementById("iframe-id");
    var table_id = iframe.contentWindow.document.getElementById("table-id");
    table_id.contentEditable = false;
    var table_cells = table_id.getElementsByTagName("td");
    for(var i=0;i<=7;i++){
        olddata.append("new_data"+(i+1),table_cells[i].innerHTML);
    }

    for(var i=0;i<4;i++){
        olddata.append("key_value"+(i+1),data_list[i].key);
        olddata.append("val_value"+(i+1),data_list[i].value);
    }

    var snacks_id = document.getElementById("snacks-div");
    var dish_id = document.getElementById("dishes-div");
    var beverages_id = document.getElementById('beverages-div');
    var desserts_id = document.getElementById('desserts-div');

    if(dish_id.className=="active"){
        olddata.append("dish_page","active");
        senddata.open("POST","../database/prac_db.php");
        senddata.send(olddata);
    }
    else if(beverages_id.className=="active"){
        olddata.append("beverage_page","active");
        senddata.open("POST","../database/prac_db.php");
        senddata.send(olddata);
    }
    else if(desserts_id.className=="active"){
        olddata.append("dessert_page","active");
        senddata.open("POST","../database/prac_db.php");
        senddata.send(olddata);
    }
    else if(snacks_id.className=="active"){
        olddata.append("snack_page","active");
        senddata.open("POST","../database/prac_db.php");
        senddata.send(olddata);
    }

}

function get_reservations(){
    var getdata = new XMLHttpRequest();
    getdata.open("POST","../php/reservation_table_page.php");
    getdata.send(null);

    getdata.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            var iframe = document.createElement("iframe");
            var html = getdata.responseText;
            document.body.appendChild(iframe);
            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(html);
            iframe.contentWindow.document.close();
            iframe.setAttribute("id","reservation-iframe");
            iframe.setAttribute("frameborder","0");
            var iframe_old = document.getElementById("reservation-iframe");
            iframe_old.remove();
           
        
        }
    }

}
  

   