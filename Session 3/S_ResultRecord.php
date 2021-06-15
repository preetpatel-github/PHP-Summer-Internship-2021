<!-- process page of S3-Task2-Out-print -->

<html>
    <head>
        <title>result.in</title>
        <style type="text/css">
            .pass {
                color: green;
            }
            .fail {
                color: red;
            }
        </style>
    </head>
    <body bgcolor="#D2691E">
        <table border="1" align="center" bgcolor="#F8F8FF">
            <caption><h1><b>Result Record</b></h1></caption>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $_POST["txt1"]; ?> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>Enrollment No:</td>
                        <td><?php echo $_POST["txt2"]; ?> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>Maths:</td>
                        <td><?php echo $_POST["txt3"]; ?> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>Science:</td>
                        <td><?php echo $_POST["txt4"]; ?> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>English:</td>
                        <td><?php echo $_POST["txt5"]; ?> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>S.S.:</td>
                        <td><?php echo $_POST["txt6"]; ?><br/>
                        </td>
                    </tr>
                    <tr>
                        <td>Gujarati:</td>
                        <td><?php echo $_POST["txt7"]; ?><br/>
                        </td>
                    </tr>
                    <tr>
                        <td>Total:</td>
                        <td><?php echo $total = ($_POST["txt3"] + $_POST["txt4"] + $_POST["txt5"] + $_POST["txt6"] + $_POST["txt7"]) ?></td>
                    </tr>
                    <tr>
                        <td>Percentage:</td>
                        <td><?php echo $percentage = ($total/5) ?></td>
                    </tr>
                       <tr>
                           <td colspan="2" style="color: green ">
                            <?php  
                                   if($total<35 || $_POST["txt3"]<35 || $_POST["txt4"]<35 || $_POST["txt5"]<35 || ["txt6"]<35 || $_POST["txt7"]<35)
                               {
                               echo "<p class='fail'><b>We're sorry. You've failed.</b></p>";
                               }
                               else
                               if($percentage<=50)
                               {
                               echo "Yo've got Third Class";
                               }
                               else
                               if($percentage>=51 && $percentage<65)
                               {
                               echo "Yo've got Second Class";
                               }
                               else
                               if($percentage>=66 && $percentage<75)
                               {
                               echo "Yo've got First Class";
                               }
                               else
                               {
                               echo "<p class='pass'><b>Congratulations! You're passed!</b></p>";
                               }
                               return 0;
                           ?>
        </table>
    </body>
</html>