<script type="text/javascript">
function ajaxObj( meth , url )
{
var x = new XMLHttpRequest();
x.open(meth , url , true);
x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
return x;
}
function ajaxReturn(x)
{
if(x.readyState == 4 && x.status == 200)
{
return true;
}
}
function ajax_post(){
var ajax = ajaxObj("POST","calc.php");
var inp1 = document.getElementById("input1").value;
var inp2 = document.getElementById("input2").value;
var operator = document.getElementById("operator").value;
var datastring = "name="+inp1+"&id="+inp2+"&op="+operator;
ajax.onreadystatechange = function()
{
if(ajaxReturn(ajax) == true)
{
document.getElementById("status").innerHTML ="Value = " + ajax.responseText;
}
}
ajax.send(datastring);
document.getElementById("status").innerHTML = "Processing...";
}
</script>