function required()
{
var empt = document.forms["form1"]["cname"].value;
if (empt == "" )
{
alert("Please input a category");
window.open('category.php')
return false;
}

}
