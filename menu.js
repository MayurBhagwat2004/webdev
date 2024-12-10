function next_page(num_id)
{
    var current_page = Number(num_id);
    var items_per_page = 4;
    var items_to_skip = ((current_page-1)*items_per_page);
    var items_to_display = items_to_skip+4;

    const fdata = new FormData();
    fdata.append("items_to_skip",items_to_skip);
    fdata.append("items_to_display",items_to_display);
    fdata.append("clicked","true");

    const sendinfo = new XMLHttpRequest();

    var dishes_page ="dishes_page_db.php";
    var dishes_page_id = document.getElementById(dishes_page);
    var beverages_page ="beverages_page_db.php";
    var beverages_page_id = document.getElementById(beverages_page);
    var desserts_page = "desserts_page_db.php";
    var desserts_page_id = document.getElementById(desserts_page);
    var snacks_page = "snacks_page_db.php";
    var snacks_page_id = document.getElementById(snacks_page);

    if(dishes_page_id.className == "active")
    {

        sendinfo.open("POST","../database/"+dishes_page);
        sendinfo.send(fdata);
    
        sendinfo.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
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
    else if(beverages_page_id.className == "active")
    {
        sendinfo.open("POST","../database/beverages_page_db.php");
        sendinfo.send(fdata);

    
        sendinfo.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
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
    else if(desserts_page_id.className == "active")
    {
        sendinfo.open("POST","../database/desserts_page_db.php");
        sendinfo.send(fdata);

   }
    else if(snacks_page_id.className == "active")
    {
        sendinfo.open("POST","../database/snacks_page_db.php");
        sendinfo.send(fdata);

        dishes_page.className = "passive";
        beverages_page.className = "passive";
        desserts_page.className = "passive";
    }
    

    
}

function get_dishes(page)
{
    var page_class = document.getElementById(page);
    var beverages_page_class = document.getElementById("beverages_page_db.php");
    var desserts_page_class = document.getElementById("desserts_page_db.php");
    var snacks_page_class = document.getElementById("snacks_page_db.php");
    
    page_class.className = "active";
    beverages_page_class.className = "passive";
    desserts_page_class.className = "passive";
    snacks_page_class.className = "passive";

    

    var fdata = new FormData();
    fdata.append("dishes","true");

    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/dishes_page_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
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

function get_beverages(page_id)
{

    var page_class = document.getElementById(page_id);
    var dishes_page_class = document.getElementById("dishes_page_db.php");
    var desserts_page_class = document.getElementById("desserts_page_db.php");
    var snacks_page_class = document.getElementById("snacks_page_db.php");

    page_class.className = "active";
    dishes_page_class.className = "passive";
    desserts_page_class.className = "passive";
    snacks_page_class.className = "passive";


    var fdata = new FormData();
    fdata.append("beverages","true");

    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/beverages_page_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
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

function get_desserts(page_id)
{
    var page_class = document.getElementById(page_id);

    var dishes_page_class = document.getElementById("dishes_page_db.php");
    var beverages_page_class = document.getElementById("beverages_page_db.php");
    var snacks_page_class = document.getElementById("snacks_page_db.php");

    page_class.className = "active";
    dishes_page_class.className = "passive";
    beverages_page_class.className = "passive";
    snacks_page_class.className = "passive";


    var fdata = new FormData();
    fdata.append("desserts","true");

    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/desserts_page_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
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

function get_snacks(page_id)
{
    var page_class = document.getElementById(page_id);

    var dishes_page_class = document.getElementById("dishes_page_db.php");
    var beverages_page_class = document.getElementById("beverages_page_db.php");
    var desserts_page_class = document.getElementById("desserts_page_db.php");

    page_class.className = "active";
    dishes_page_class.className = "passive";
    beverages_page_class.className = "passive";
    desserts_page_class.className = "passive";


    var fdata = new FormData();
    fdata.append("snacks","true");

    const sendinfo = new XMLHttpRequest();
    sendinfo.open("POST","../database/snacks_page_db.php");
    sendinfo.send(fdata);

    sendinfo.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
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

function on_hover(div_id){
    var div = div_id;
    div.style.opacity = 1;
    // div.style.transform = "rotate(20deg)";
    div.style.borderRadius = '20px';
}

function on_leave(div_id){
    var div = div_id;
    div.style.opacity = 0.8;
    // div.style.transform = "rotate(0deg)";
    div.style.borderRadius = '';
}
