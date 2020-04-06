<!DOCTYPE html>
<html>
<head>
    <title>Bangladesh</title>
</head>
<body>

<h2>Welcome to Bangladesh</h2>
<table>
    <tr>
        <td>Select Division :</td>
        <td>
            <select name="" id="txt1" onchange="showHint(this.value)">
                <option value=""></option>
                <option value="barishal">Barishal</option>
                <option value="chittagong">Chittagong</option>
                <option value="dhaka">Dhaka</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="khulna">Khulna</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rangpur">Rangpur</option>
                <option value="sylhet">Sylhet</option>
            </select>
        </td>
    </tr>
</table>



<h4>District: <span id="txtHint"></span></h4> 
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "show.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>