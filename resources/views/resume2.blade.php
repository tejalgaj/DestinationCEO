<!DOCTYPE html>

<html lang="en">

<!--[if IE 7]><html lang="en" class="ie7"><![endif]-->

<!--[if IE 8]><html lang="en" class="ie8"><![endif]-->

<!--[if IE 9]><html lang="en" class="ie9"><![endif]-->

<!--[if (gt IE 9)|!(IE)]><html lang="en"><![endif]-->

<!--[if !IE]><html lang="en-US"><![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Resume</title>
<style>
    body{
        padding:0px;
        margin:0px;
        font-family: arial;
    }
    *
    {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box
    }
</style>

</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td align="center" valign="top" style="background-color: #ffffff;" bgcolor="#ffffff;">
        <table width="1024px" cellpadding="0" cellspacing="0" border="0">
            
            <!--  Repeated Row End -->
            <tr>
                <td align="left" valign="top" style="padding:20px 0px;">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">


                        <!--  Repeated Row Start -->
                        <tr>
                            <td align="left" valign="top" style="padding:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        
                                        <td align="center" valign="top" style="text-align:center;font-size:42px; font-weight: bold;  line-height: normal;">
                                            {{ucfirst($user->details->firstname)}} {{ucfirst($user->details->lastname)}}
                                        </td>
                                     
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->


                        <!--  Repeated Row Start -->
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                       
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->address}}</td>
                                                </tr>
                                                <tr>
                                                                
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->city}}, {{$user->details->state}}, {{$user->details->zipcode}}</td>
                                                </tr>
                                                
                                               
                                               
                                            </table>
                                        </td>
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->phone}}</td>
                                                </tr>
                                               
                                            </table>
                                        </td>
                                        <td align="center" width="20%" valign="top" style=" font-weight:normal; line-height:28px;font-size: 12px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->email}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        @if (!is_null($user->details->linkedin))
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                    
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->linkedin}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                        @endif
                                        @if (!is_null($user->details->guthub))
                                        <td align="center" width="20%" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px;">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                              
                                               
                                                <tr>
                                                  
                                                    <td align="center" valign="top" style="line-height: 24px; padding-left: 15px;font-size: 12px;">{{$user->details->guthub}}</td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                                                    @endif
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">OBJECTIVE : JAVA Programmer with XYZ Organization</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:14px; text-transform: uppercase; padding-top:10px;">HIGHLIGHTS OF QUALIFICATIONS – 7 Bullets</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            <ul style="padding: 0 0 0 0px; margin: 0; list-style: none;">
                                            <li style="margin-bottom: 10px;">Recent graduate of the _____________ Diploma program at Humber College (May 2021)</li>
                                            <li style="margin-bottom: 10px;">Masters / Bachelor Degree in __________</li>
                                            <li style="margin-bottom: 10px;">2 bullets on “Must Have” Hard/Technical Skills</li>
                                            <li style="margin-bottom: 10px;">1 bullet on “Key-words” Soft/Transferrable Skills</li>
                                            <li style="margin-bottom: 10px;">1 bullet on communication languages</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">TECHNICAL SKILLS</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            <ul style="padding: 0 0 0 0px; margin: 0;">
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Troubleshooting : </span>Designed the front-end using HTML, CSS, jQuery and AJAX , Codeigniter, Magento, Yii etc...</li>
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Programming Languages : </span>	Java, C#,  HTML, JavaScript, XML, Shell Scripting. Proficient in writing code, testing, 
                                                    debugging, and documentation</li>
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Software : </span>NetBeans, Tomcat, MS Office (Word, Excel, PowerPoint, Access) SQL Server Management Studio, MS Visio,</li>
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Operating Systems : </span> Windows 7/8/XP, Linux, Mac iOS, Android, Blackberry</li>
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Database : </span> PL/SQL, MySQL, Oracle, MS SQL Server, JDBC</li>
                                                <li style="margin-bottom:10px; list-style: none;"><span style="width:200px; font-weight: bold; display: inline-block;">Web Technology : </span> HTML5, Java Script, XML, J2EE(Servlets), J2EE servers</li>
                                                
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                        <!--  Repeated Row Start -->
                        <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">Relevant Experience:</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">
                                            Relevant Project Work</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            Project Challenge<br>
                                            Action Steps<br>
                                            Result
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding:5px 0px; line-height:18px; font-weight:normal; font-size:14px; padding-top: 10px;">
                                            Project Challenge<br>
                                            Action Steps<br>
                                            Result
                                        </td>
                                    </tr>
                                   
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                         <!--  Repeated Row Start -->
                         <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td colspan="2" align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">Education</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">
                                            Information Technology Solutions, Postgraduate <br>
                                            <span style="font-weight: normal; font-size: 14px;">Humber College, Toronto, ON</span>
                                        
                                        </td>
                                        <td align="right" valign="top" style="text-align:right; line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">April 2020</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">
                                            Information Technology Solutions, Postgraduate <br>
                                            <span style="font-weight: normal; font-size: 14px;">Humber College, Toronto, ON</span>
                                        
                                        </td>
                                        <td align="right" valign="top" style="text-align:right; line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">April 2020</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">
                                            Information Technology Solutions, Postgraduate <br>
                                            <span style="font-weight: normal; font-size: 14px;">Humber College, Toronto, ON</span>
                                        
                                        </td>
                                        <td align="right" valign="top" style="text-align:right; line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">April 2020</td>
                                    </tr>
                                   
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                        <!--  Repeated Row Start -->
                        <tr>
                            <td align="left" valign="top" style="font-size: 14px; font-weight:normal; line-height:28px; padding-top:20px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td colspan="2" align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:18px; text-transform: uppercase; border-top: 1px solid #65c897; border-bottom:3px solid #65c897; padding:10px 0px 5px 0px;">OTHER EXPERIENCE</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">
                                            Information Technology Solutions, Postgraduate <br>
                                            <span style="font-weight: normal; font-size: 14px;">Humber College, Toronto, ON</span>
                                        
                                        </td>
                                        <td align="right" valign="top" style="text-align:right; line-height:24px; font-weight: bold; font-size:16px; padding:10px 0px 5px 0px;">April 2020</td>
                                    </tr>
                                   
                                   
                                    
                                </table>
                            </td>
                        </tr>
                        <!--  Repeated Row End -->
                    </table>
                </td>
            </tr>
          
        </table>
    </td>
</tr>
</table>

</body>
</html>
