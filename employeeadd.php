<?php
   include("Config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['submit'])) {
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$EmployeeId = $_POST['EmployeeId'];
$Phone = $_POST['Phone'];


$data = mysql_query("INSERT INTO employee (FirstName, LastName,Email,EmployeeId,Phone) VALUES ('$FirstName', '$LastName,'$Email','$EmployeeId','$Phone')");

if ($data) {
    echo '<br>Input data is successful';
} else {
    echo '<br>Input data is not valid';
}
}
   }
?>

<html>
    
    <head>
        
        <title>Employment form</title>
        
        <style>
            
           
            #header {
                
            }
            
            #aside {
                width: 500px;
                height:250px;                
                border-right: 2px solid #0000ff;
                float: right;
            }
            
            #main {
                width: 742px;
                height: 250px;
                border-right: 2px solid #0000ff;
                float: left;
            }
            
            #section1 {
                width: 740px;
                height:220px;
                border-right: 2px solid #0000ff;
                border-top: 2px solid #0000ff;
                float: left;
            }
            
            #section2 {
                width: 606px;
                height:220px;
                border-right: 2px solid #0000ff;
                border-top: 2px solid #0000ff;
                float: right;
            }
            #footer {
                clear: both;
                color:red;
                background: white;
                box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.3), 
                            0px 2px 2px 0px rgba(0, 0, 0, 0.6);
            }
            
            #body{
        width:1350px;
                height:570px;
        background: white; 
                box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.3), 
                            0px 2px 2px 0px rgba(0, 0, 0, 0.6); 
            }
    
            #nav {
        padding:0.3px 4px;
                width:1340px;
        background:white;
                box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.3), 
                            0px 2px 2px 0px rgba(0, 0, 0, 0.6); 
                
            }
            ul {
                list-style-type: none;
                overflow: hidden;
            }
           
            li {
                float: left;
            }
            li1{
                float: right;
            }

            li a {
                display: inline;
                padding: 8px;
                
            }
            a{
                color: blueviolet;
                display:inline;
                margin-right: 2px;
                font-size: 14px;               
                text-align: center;
            }
            a1{
                color: #0095cd;
                display:inline;
                margin-right: 50px;
                font-size: 14px;               
                text-align: center;
            }
            a2{
                color: green;
                display:inline;
                margin-right: 60px;
                font-size: 14px;               
                text-align: center;
            }
            a3{
                color:tomato ;
                display:inline;
                margin-right: 70px;
                font-size: 14px;               
                text-align: center;
            }
            
            .button{
                display: inline-block;
                padding: 10px 75px;
                margin-right: 1px;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color:cornflowerblue ;
                border: none;
               
            }
            .button:hover {
                background-color: #008CBA;
            }            
            .button:active {
                background-color: white;               
                
            }
            .button1{
                display: inline-block;
                padding: 10px 18px;
                margin-right: 10px;
                margin-left: 5px;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color:cornflowerblue ;
                border: none;
                border-radius: 10px;
               
            }
            .button1:hover {
                background-color: #008CBA;
            }            
            .button1:active {
                background-color: white;               
                
            }
                        a{
                color: #4CAF50;
            }
            .button1{
                display: inline-block;
                padding: 10px 18px;
                margin-right: 2px;
                font-size: 12px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color:cornflowerblue ;
                border: none;
                border-radius: 10px;
               
            }
            .button1:hover {
                background-color: #008CBA;
            }            
            .button1:active {
                background-color: white;               
                
            }
            
            a {
                color: blue;
            }
            body{
                color: blue;
                background: white;
            }
            table {
            width: 400px;
            padding: 10px;
            border: 1px solid blue;
            }
           
        </style>
        
    </head>
    
    <body>
        
        <form action="employeeadd.php"  method="post" onsubmit="return ValidateForm(this);">
            
            <script type="text/javascript">
                function ValidateForm(frm) {
                   if (frm.FirstName.value == "") { alert('First name is required.'); frm.FirstName.focus(); return false; }
                   if (frm.LastName.value == "") { alert('Last name is required.'); frm.LastName.focus(); return false; }
                   if (frm.Email.value == "") { alert('Email address is required.'); frm.Email.focus(); return false; }
                   if (frm.Email.value.indexOf("@") < 1 || frm.Email.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email.focus(); return false; }
                   if (frm.EmployeeId.value == "") { alert('EmployeeId is required.'); frm.EmployeeId.focus(); return false; }
                   if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
                   return true;
   
                }
          
           </script>
        
           
           <div id="nav">
            
            <ul>
                
                <li><img src="Project-Management.jpg" alt="Project-Management" style="width:100px;height:37px;margin-right: 180px;"></li>
                <li><a href="welcome.php" class="button">Home</a></li>
                <li><a href="employee.html" class="button">Employee</a></li>
                <li><a href="projects.html" class="button">Projects</a></li>
                <li><a href="reports.html" class="button">Reports</a></li>
                <li1><a href="login.html" class="button1">Logout</a></li1>
            
            </ul>
            </div>
           
           
           <center><a2><h1>Employment form</h1></a2></center>
           
           <table border="0" cellpadding="5" cellspacing="0">
               
               <tr>
                   
                   <td style="width: 50%">
                       
                       <label >First name *</label><br/>
                       
                       <input name="FirstName" type="text" maxlength="50" style="width: 260px" />
                  
                    </td>
             
                </tr>
                   
                <tr>
                    <td style="width: 50%">
                       <label >Last name *</label><br/>
                       <input name="LastName" type="text" maxlength="50" style="width: 260px" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                       <label >E mail *</label><br/>
                       <input name="Email" type="text" maxlength="50" style="width: 260px" />
                    </td>
                </tr>
               
                <tr>
                    <td>
                      
                        <label >Employee Id*</label><br/>
                        <input name="EmployeeId" type="text" maxlength="50" style="width: 260px" />
                      
                    </td>
                </tr>
                <tr>
                    <td>
                       <label >Phone *</label><br/>
                       <input name="Phone" type="text" maxlength="50" style="width: 260px" />
                    </td>
                   
                </tr>
                <tr>
              
                    <td>
                   
                        <input name="Save" type="submit" value="Submit"/>
                   
                    </td>
                   
                   
                </tr>
            </table>
        </form>

    </body>
</html>