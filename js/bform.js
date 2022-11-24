function required()
{
var empt = document.forms["form1"]["bname"].value;

if (empt == "" )
{
alert("Please input a brand");
window.open('brand.php')
return false;
}


}

