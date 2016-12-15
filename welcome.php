
<html> 
    <head>
	
	<title>Home</title>
    
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
            
        
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>

    <script type="text/javascript">
                        
    
                        function loadCharts(){
                            google.charts.load("current", {packages:["corechart"]});
                            google.charts.setOnLoadCallback(getProjects);
                        }
                        
                        function drawChart(array) {
                            var data = google.visualization.arrayToDataTable(array);
                            
                        var options = {
                                title: 'Projects Progress',
                                is3D: true,
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                chart.draw(data, options);
                        }
                        
                        function getProjects(){
                            var completed = 0;
                            var inProgress = 0;
                            var notStarted = 0;
                            var misc=0;
                            
                                $.ajax({                                      
                                    url: 'getProjects.php',                           
                                    type: 'GET',                    
                                    dataType: 'json',                     
                                    success: function(data)          
                                    {
                                       for(var k in data){
                                           var milestone = data[k]["mileStone"].toUpperCase();
                                           if(milestone==="NOT STARTED")
                                               notStarted++;
                                           else if(milestone==="COMPLETED")
                                               completed++;
                                           else if(milestone ==="IN PROGRESS")
                                               inProgress++;
                                           else
                                               misc++;
                                           
                                       }
                                      
                                       var array = [
                                           ['Project', 'Hours per Day'],
                                           ["Completed", completed],
                                           ["InProgress", inProgress],
                                           ["Not Started",notStarted],
                                           ["Misc", misc]
                                           
                                       ];
                                       drawChart(array);
                                    } 
                                });
                                
                                
                        }
                        
                        
    </script>
    </head>
    
   
    <div id="body">
        
        <div id="nav">
            
            <ul>
                
                <li><img src="Project-Management.jpg" alt="Project-Management" style="width:100px;height:37px;margin-right: 180px;"></li>
                <li><a href="welcome.php" class="button">Home</a></li>
                <li><a href="employee.html" class="button">Employee</a></li>
                <li><a href="projects.html" class="button">Projects</a></li>
                <li><a href="reports.html" class="button">Reports</a></li>
                <li1><a href="login.php" class="button1">Logout</a></li1>
            
            </ul>
	</div>
        
        <div id="aside">
            
            <a><h2>Departments</h2></a>
            
            <div style="width:500px;height:100px;border:1px solid #000;">
                
                <a><ol>HR</h3></ol></a>
                
                <a><ol>FINANCE</ol></a>
            
                
            </div>


            
            
        </div>
        
        <div id="main">
		
            <a2><h2>Projects</h2></a2>
            
            
                    

                
            <body onload="loadCharts()">
                    
                           <div id="piechart_3d" style=" background:whitesmoke; width: 380px; height: 170px"></div>
                </body>
        
	</div>
            
        <div id="section1">
		
            <a><h2>Optional</h2></a>
		
	</div>
        <div id="section2">
            
            <a><h2>Optional</h2></a>
            
        </div>
    

    
    <div id="footer">
        <br>
        <p><center> &COPY;2016 Project Management. All rights reserved.</center></p> 

    </div>
    </div>
    
</html>




