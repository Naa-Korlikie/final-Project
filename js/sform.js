function need() {
    var empt2 = document.forms["form3"]["find"].value;
    if (empt2 == "" )
{
alert("Search cannot be empty");
window.open("../view/home.php")
return false;
}
}