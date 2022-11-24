function required()
{
var empt = document.forms["form1"]["title"].value;
var empt2 = document.forms["form1"]["price"].value;
    if (empt == "" || empt2 == "" )
    {
    alert("Product price and title cannot be empty");
    window.open('product.php')
    return false;
    }
    if (isNaN(empt2)) {
        alert("Product price must be numeric");
        window.open('product.php') 
    }

}

