/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addTextForm(form, name, title)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function addSelectForm(form, name, title, arrayname, arrayvalue)
{
    //arrayname.length === arrayvalue.length
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";
    div1.style = "width: 100%;";
    
    var select = document.createElement("select");
    select.className = "selectpicker";
    select.style = "margin-top: 7px;";
    select.id = name;
    
    if( arrayname !== null)
    {
        for (var i = 0; i < arrayname.length; i++) {
            var option = document.createElement("option");
            option.value = arrayvalue[i];
            option.text = arrayname[i];
            select.appendChild(option);
        }
    }
    
    div1.appendChild(select);
    div1.appendChild(label);
    form.appendChild(div1); 
}

function addBotonSubmit(form)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = "btn-save"; 

    var div1 = document.createElement("div");
    div1.className = "col-md-8";
    div1.style = "margin: 0 auto;";

    var button1 = document.createElement("button");
    button1.id = "btn-save";  
    button1.name = "btn-save";
    button1.className = "btn btn-primary";
    button1.innerHTML = "Guardar";

    div1.appendChild(button1);
    form.appendChild(div1);  
}

function addImageToUpload(form, img_id, texto, onchange_func)
{
    var label = document.createElement("label");
    label.class = "control-label";
    label.style = "padding-left: 15px; width: 100%;";
    label.for = "btn-save";
    label.innerHTML = texto;

    var span = document.createElement("span"); 
    span.className = "input-group-btn"; 
    var span2 = document.createElement("span"); 
    span2.className = "btn btn-default btn-file";
    span2.innerHTML = "Buscar…"; 
    var input2 = document.createElement("input");
    input2.type = "file"; 
    input2.onchange = onchange_func;

    span2.appendChild(input2);
    span.appendChild(span2);

    var input = document.createElement("input"); 
    input.type = "text";
    input.readOnly = true;
    input.className = "form-control";

    var div1 = document.createElement("div"); 
    div1.className = "input-group";
    div1.style = "width: 100%;";
    div1.appendChild(span);
    div1.appendChild(input);

    var img1 = document.createElement("img"); 
    img1.id = img_id;
    img1.style = "padding: 15px; width: 100%;";

    form.appendChild(label);
    form.appendChild(div1);
    form.appendChild(img1);
}

function addSwitch(record, nombre, titulo)
{
    var div1 = document.createElement("div");
    div1.style = "float: left;";
    
    var label1 = document.createElement("label");
    label1.style = "width: 150px;";
    label1.htmlFor = nombre;
    label1.innerHTML = titulo;
    
    var label2 = document.createElement("label");
    label2.className = "switch";
    
    var input1 = document.createElement("input");
    input1.type = "checkbox";
    input1.name = nombre;
    
    var span1 = document.createElement("span");
    span1.className = "slider round";
    
    label2.appendChild(input1);
    label2.appendChild(span1);
    div1.appendChild(label1);
    div1.appendChild(label2);
    record.appendChild(div1);
}


function createBtnMM(parent, name, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mm";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = name;
    parent.appendChild(btn);
}

function createBtnMesa(parent, number, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mesa";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = number;
    parent.appendChild(btn); 
}

function createBtnMesaDisable(parent, number, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mesa_disable";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = number;
    parent.appendChild(btn); 
}

function showQRImg(parent, idqr, url)
{
    var img = document.createElement("img");
    img.style = "margin:8px;"; 
    img.id = "qr"+idqr;
    img.src = url;
    img.width = 80;
    img.height = 80;
    parent.appendChild(img); 
}


function addCalendar(parent)
{
    var div1 = document.createElement("div");
    div1.className = "col-sm-6";
    div1.style = "width: 100%;";
    
    var input1 = document.createElement("input");
    input1.type = "text";
    input1.className = "form-control";
    input1.id = "datetimepicker";
    input1.placeholder = "Fecha";
    
    $('<input>').attr({
        type: 'text',
        class: 'form-control',
        id: 'datetimepicker',
        placeholder: 'Fecha'
    }).datepicker().appendTo(div1);
  
    
    parent.appendChild(div1);
     
}

function addBubTitle(parent, title)
{ 
    var div1 = document.createElement("div");
    div1.className = "col-sm-6";
    div1.style = "width: 100%; padding: 10px 4px 10px 4px;";  
    
    var h31 = document.createElement("h4");  
    h31.style = "background-color: #ccc; padding: 12px;";
    h31.innerHTML = title;
    
    div1.appendChild(h31); 
    parent.appendChild(div1); 
}

function addHiddenForm(parent, name, idname, value)
{ 
   var input1 = document.createElement("input");  
   input1.type = "hidden";
   input1.name = name;
   input1.id = idname;
   input1.value = value;
   input1.className = "form-control input-md";

   parent.appendChild(input1); 
}

function removeHiddenForm( idname )
{ 
    $("hid"+idname).remove(); 
}

function addNumberForm(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function pImg2Collection(form, img_id, texto, onchange_func)
{
    var label = document.createElement("label");
    label.class = "control-label";
    label.style = "padding-left: 15px; width: 100%;";
    label.for = "btn-save";
    label.innerHTML = texto;

    var span = document.createElement("span"); 
    span.className = "input-group-btn"; 
    var span2 = document.createElement("span"); 
    span2.className = "btn btn-default btn-file";
    span2.innerHTML = "Buscar…"; 
    var input2 = document.createElement("input");
    input2.type = "file"; 
    input2.onchange = onchange_func;

    span2.appendChild(input2);
    span.appendChild(span2);

    var input = document.createElement("input"); 
    input.type = "text";
    input.readOnly = true;
    input.className = "form-control";

    var div1 = document.createElement("div"); 
    div1.className = "input-group";
    div1.style = "width: 100%;";
    div1.appendChild(span);
    div1.appendChild(input);

    var select1 = document.createElement("select"); 
    select1.id = img_id; 
    select1.className = "image-picker show-html";

    //test
    var option1 = document.createElement("option");
    option1.value = "1";
    option1.innerHTML = "opcion 1";
    option1.setAttribute("data-img-src", "../images/samplerestaurant.png");
    option1.setAttribute("data-img-class", "first");
    option1.setAttribute("data-img-alt", "opcion 1");

    var option2 = document.createElement("option");
    option2.value = "2";
    option2.innerHTML = "opcion 2";
    option2.setAttribute("data-img-src", "../images/samplerestaurant.png"); 
    option2.setAttribute("data-img-alt", "opcion 2");


    select1.appendChild(option1);
    select1.appendChild(option2);
    div1.appendChild(select1);

    form.appendChild(label);
    form.appendChild(div1);
    form.appendChild(select1);

}

function createTipoCelular(parent, isapple, cantidad)
{
    var div1 = document.createElement("div");
    div1.style = "background-color: #fafafa; border-radius: 5px; border: 1px solid #d9d9d9; color: #747474; display: inline; width: 110px;";

    var img1 = document.createElement("img");
    if( isapple === 1 ){
        img1.src = "../images/apple.png";
    }
    else{
        img1.src = "../images/android.png";
    }
    img1.width = "25";
    img1.height = "25";
    img1.style = "display: inline;";

    var p1 = document.createElement("p");
    p1.innerHTML = cantidad.toString();
    p1.style = "display: inline;";

    div1.appendChild(img1);
    div1.appendChild(p1); 
    parent.appendChild(div1);
}

function addTextFormLarge(form, name, title)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function addTextFormMultilineLarge(form, name, title)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("textarea");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.rows = "7";
    input1.cols = "40";
    input1.className = "form-control";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function addNumberFormLarge(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}


function addSwitchLarge(record, nombre, titulo)
{
    var div1 = document.createElement("div"); 
    div1.className = "form-group";
    div1.style = "padding-left: 35px;";
    
    var label1 = document.createElement("label");
    label1.style = "margin-right: 8px;";
    label1.htmlFor = nombre;
    label1.innerHTML = titulo;
    
    var label2 = document.createElement("label");
    label2.className = "switch";
    
    var input1 = document.createElement("input");
    input1.type = "checkbox";
    input1.name = nombre;
    
    var span1 = document.createElement("span");
    span1.className = "slider round";
    
    label2.appendChild(input1);
    label2.appendChild(span1);
    div1.appendChild(label1);
    div1.appendChild(label2);
    record.appendChild(div1);
}

function addNumberFormLarge(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "form-group";
    div1.style = "padding-left: 35px;";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5; width: 180px;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.size = "40";
    input1.className = "form-control";

    div1.appendChild(label);
    div1.appendChild(input1);
 
    form.appendChild(div1); 
}

function readURL(input, img_id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(img_id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}














