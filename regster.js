document.getElementById('meepet').addEventListener('click',now);

function now()
{
    var xhr = new XMLHttpRequest();
    xhr.open("GET","regsend.php",true);

    console.log(xhr);

}