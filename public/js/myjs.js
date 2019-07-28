
document.getElementById('item_ar_page').onchange = function ()
{

    if(document.getElementById('item_ar_page').value !==""){
        document.getElementById("item_en_page").disabled = true;

    }else {
        document.getElementById("item_en_page").disabled = false;

    }

};


document.getElementById('item_en_page').onchange = function ()
{

    if(document.getElementById('item_en_page').value !==""){
        document.getElementById("item_ar_page").disabled = true;

    }else {
        document.getElementById("item_ar_page").disabled = false;

    }

};

document.getElementById('subitem_ar_page').onchange = function ()
{

    if(document.getElementById('subitem_ar_page').value !==""){
        document.getElementById("subitem_en_page").disabled = true;

    }else {
        document.getElementById("subitem_en_page").disabled = false;

    }

};


document.getElementById('subitem_en_page').onchange = function ()
{

    if(document.getElementById('subitem_en_page').value !==""){
        document.getElementById("subitem_ar_page").disabled = true;

    }else {
        document.getElementById("subitem_ar_page").disabled = false;

    }

};


