
document.getElementById("servicep").addEventListener("click",petson);
function petson()
{
    window.location.href="./service.php";

}


document.getElementById("subscribe").addEventListener("click",kisenya);
function kisenya()
{
    var xhr = new XMLHttpRequest();
    var name = document.getElementById("emailName").value;

    xhr.open("GET","subscribe.php?jina="+name,true);
    
    xhr.onload = function()
    {   

        if(this.status == 200)
        {
            console.log(this.responseText);
        }
        else if (this.status == 404) {
            console.log("makosa");
        } 
    }
    xhr.send();
}



