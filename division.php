<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h2>Division & District List</h2>

<form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a Division:</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Rangpur ">Rangpur</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Khulna">Khulna</option>
    <option value="Barisal">Barisal</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Mymensingh">Mymensingh</option>
  </select>
</form>
<br>
<div id="txtHint">District will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "district.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>