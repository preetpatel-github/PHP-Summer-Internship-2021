<!-- Registration Page -->
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration.in</title>
	</head>
	<body bgcolor="#008B8B">
            <form method="POST" action="Process.php">
                <table align="center">
                    <caption><h1><b>Internship Registration</b></h1></caption>
                            <tbody>
                                    <tr>
                                            <th>Full Name</th>
                                            <td><input type="text" name="name" placeholder="Enter your name"/></td>
                                    </tr>
                                    <tr>
                                            <th>E-Mail</th>
                                            <td><input type="email" name="email" placeholder="Enter your e-mail"/></td>
                                    </tr>
                                    <tr>
                                            <th>Contact</th>
                                            <td><input type="number" name="contact" placeholder="Enter your contact number"/></td>
                                    </tr>
                                    <tr>
                                            <th>Gender</th>
                                            <td>
                                                    <label for="Male">Male</label>
                                                    <input id="Male" name="gender" type="radio">
                                                    <label for="Female">Female</label>
                                                    <input id="Female" name="gender" type="radio">
                                            </td>
                                    </tr>
                                    <tr>
                                            <th>Branch</th>
                                            <td>
                                                <select name="branch">
                                                            <option> Computer Science </option>
                                                            <option> IT </option>
                                                    </select>
                                            </td>
                                    </tr>
                                    <tr>
                                            <th>Mode</th>
                                            <td>
                                                    <label for="Online">Online</label>
                                                    <input id="Online" name="mode" type="radio">
                                                    <label for="Offline">Offline</label>
                                                    <input id="Offline" name="mode" type="radio">
                                            </td>
                                    </tr>
                                    <tr>
                                            <th>Methods</th>
                                            <td>
                                                    <div>
                                                            <input id="LiveSession" type="checkbox"/>
                                                            <label for="LiveSession">Live Session</label>

                                                    </div>
                                                    <div>
                                                            <input id="DailyTask" type="checkbox"/>
                                                            <label for="DailyTask">Daily Task</label>
                                                    </div>
                                                    <div>
                                                            <input id="YoutubeVideo" type="checkbox"/>
                                                            <label for="YoutubeVideo"> Youtube Video</label>	
                                                    </div>
                                                    <div>
                                                            <input id="Project" type="checkbox"/>
                                                            <label for="Project">Project</label>
                                                    </div>
                                            </td>
                                    </tr>
                                    <tr>
                                            <th>Technology</th>
                                            <td>
                                                <select name="technology">
                                                            <option> PHP </option>
                                                            <option> JAVA </option>
                                                            <option> PYTHON </option>
                                                            <option> C# </option>
                                                            <option> .NET </option>
                                                    </select>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="border-bottom: 0px;">
                                                    <input type="submit" value="Submit"/>
                                            </td>
                                            <td style="border-bottom: 0px;">
                                                    <input type="reset" value="Reset"/>
                                            </td>
                                    </tr>
                            </tbody>
                    </table>
               </form>
	</body>
</html>

