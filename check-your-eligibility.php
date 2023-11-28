<?php include 'inc/header.php'; ?>
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                    <div class="bread-inner">
                        <div class="section-headline white-headline">
                            <h2>Canada PR  <span class="color">Eligibility Calculator</span></h2>
                        </div>
                        <ul class="breadcrumb-bg">
                             <li class="home-bread"><a href="index.php">Home</a></li>
                            <li>Canada PR Eligibility Calculator</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area bg-color pd-35">
    <div class="container">
        <!-- section head -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3></span> Canada  <span class="color">PR Eligibility Calculator</h3>
                </div>
            </div>
        </div>
        <div class="row">
            

            <div class='text-justify innerpage-text'><p>If Canada Immigration is on your mind and you want to check your eligibility for Successfully immigrating to Canada this tool is very useful to give you exact information on your profile and its eligibility for applying to Canada PR through Express Entry Program. <strong>Check Your Eligibility Now</strong>!<br />
&nbsp;</p>

    <form action="">
        <table class="datatable points-table-form">
            <tbody>
                <tr>
                    <td class="td"><span>Your Name</span><br />
                    <input class="txtb form-control" id="txt_your_name" onblur="validateFormthis()" type="text" />
                    <div id="txt_name_error_msg" style="display:none">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Your Email ID</span><br />
                    <input class="txtb form-control" id="txt_email" name="email" onblur="validateEmail12(this.value);" type="text" />
                    <div id="txt_email_error_msg" style="display:none">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Your City</span><br />
                    <input class="txtb form-control" id="txt_city" onblur="validateFormCity(this.value)" type="text" />
                    <div id="txt_city_error_msg" style="display:none">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Your Phone No.</span><br />
                    <input class="txtb form-control" id="txt_phone_no" onblur="validateFormPhone()" type="text" />
                    <div id="txt_phone_error_msg" style="display:none">&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Please Select Your Age</span><br />
                    <select class="txtdd form-control" id="ddl_age" onchange="show_ddl_age()"><option value="0">SELECT</option><option value="1">18 to 35</option><option value="2">36</option><option value="3">37</option><option value="4">38</option><option value="5">39</option><option value="6">40</option><option value="7">41</option><option value="8">42</option><option value="9">43</option><option value="10">44</option><option value="11">45</option><option value="12">46</option><option value="13">47 and more</option> </select> &nbsp;</td>
                </tr>
                <tr id="tr_English" style="display:none">
                    <td class="td">Please Select IELTS / English Proficiency<br />
                    <select class="txtdd form-control" id="ddl_English" onchange="show_ddl_English()"><option value="0">Select</option><option value="1">IELTS</option><option value="2">No Knowledge of English</option> </select></td>
                </tr>
                <tr id="tr_speaking" style="display:none">
                    <td class="td">Speaking:<br />
                    <select class="txtdd form-control" id="dll_speaking" onchange="show_ddl_speaking()"><option value="0">Select</option><option value="1">6.0 (Good)</option><option value="2">6.5 (Very Good)</option><option value="3">7.0 &ndash; 9.0 (Expert)</option> </select></td>
                </tr>
                <tr id="tr_Listening" style="display:none">
                    <td class="td">Listening:<br />
                    <select class="txtdd form-control" id="dll_Listening" onchange="show_ddl_speaking()"><option value="0">Select</option><option value="1">6.0 &ndash; 7.0 (Good)</option><option value="2">7.5 (Very Good)</option><option value="3">8.0 &ndash; 9.0 (Expert)</option> </select></td>
                </tr>
                <tr id="tr_Reading" style="display:none">
                    <td class="td">Reading:<br />
                    <select class="txtdd form-control" id="dll_Reading" onchange="show_ddl_speaking()"><option value="0">Select</option><option value="1">6.0 (Good)</option><option value="2">6.5 (Very Good)</option><option value="3">7.0 &ndash; 9.0 (Expert)</option> </select></td>
                </tr>
                <tr id="tr_Writing" style="display:none">
                    <td class="td">Writing:<br />
                    <select class="txtdd form-control" id="dll_Writing" onchange="show_ddl_speaking()"><option value="0">Select</option><option value="1">6.0 &ndash; 7.0 (Good)</option><option value="2">6.5 (Very Good)</option><option value="3">7.0 &ndash; 9.0 (Expert)</option> </select></td>
                </tr>
                <tr id="tr_qualification" style="display: none;">
                    <td class="td">Please Select Your Highest Qualification<br />
                    <select class="txtdd form-control" id="ddl_Qualification" onchange="show_ddl_Qualification()" style="width:100%; height:auto;"><option value="0">SELECT</option><option value="1">Doctoral level</option><option value="2">Master&rsquo;s level or professional degree</option><option style="width:100%; height:auto;" value="3">Two or more post-secondary credentials, one of which is a three-year or longer post-secondary credential</option><option value="4">Three-year or longer post-secondary credential</option><option value="5">Two-year post-secondary credential</option><option value="6">One-year post-secondary credential</option><option value="7">Secondary school</option><option value="8">Secondary school not completed</option> </select> &nbsp;</td>
                </tr>
                <tr id="tr_experience" style="display: none">
                    <td class="td">Your total work experience<br />
                    <select class="txtdd form-control" id="ddl_experience" onchange="show_ddl_experience()"><option value="0">SELECT</option><option value="1">Six years or more</option><option value="2">Four years</option><option value="3">Two years</option><option value="4">One years</option><option value="5">No Work Experience</option> </select> &nbsp;</td>
                </tr>
                <tr id="tr_ArrangedEmployment" style="display: none">
                    <td class="td">Arranged Employment<br />
                    <select class="txtdd form-control" id="dll_ArrangedEmployment" onchange="show_dll_ArrangedEmployment()" style="width:100%;"><option value="0">SELECT</option><option value="1">You have a permanent job offer from a Canadian employer, approved by the HRSDC</option><option style="width:100%;" value="2">You have a permanent job offer from a Canadian employer, without the necessity of HRSDC approval, if you are employed in Canada by the same employer</option><option value="3">Not Applicable</option> </select> &nbsp;</td>
                </tr>
                <tr id="tr_Adaptability" style="display: none">
                    <td class="td">Please Select Adaptability<br />
                    <select class="txtdd form-control" id="ddl_Adaptability" onchange="show_ddl_Adaptability()" style="width:100%;"><option value="0">SELECT</option><option value="1">Principal Applicant Previous Work in Canada (min. 1 yr at NOC 0, A, B)</option><option value="2">Accompanying Spouse/Partner Previous Work in Canada</option><option value="3">Principal Applicant Previous Study in Canada</option><option value="4">Accompanying Spouse/Partner Previous Study in Canada</option><option value="5">Arranged Employment</option><option style="width:100%;" value="6">Relative in Canada 18 years or over (parent, grandparent, child, grandchild, child of a parent, sibling, child of a grandparent, aunt or uncle, or grandchild of a parent, niece or nephew) who is residing in Canada and is a Canadian citizen or permanent resident.</option><option value="7">Accompanying spouse/partner&rsquo;s official language (CLB/NCLC 4)</option><option value="8">Not Applicable</option> </select> &nbsp;</td>
                </tr>
                <tr>
                    <td class="td">
                        <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LfXb3IaAAAAAH6aFm3pGuYlmOb5FsWDQty3KqXp"></div>
                    </td>
                </tr>
                <tr>
                    <td class="td"><input class="button" disabled="disabled" id="btn_show" onclick="show_btn_clickme(); return false;" name="show_points" type="button" value="SHOW POINTS" /></td>
                </tr>
                <tr>
                    <td class="td">
                        <div class="success-msg"></div>
                    </td>
                </tr>
                <tr id="tr_msg_show" style="display: none">
                    <td class="td">
                    <div>
                    <h1 id="sn_msg_show">&nbsp;</h1>

                    <div id="div_msg_age">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_qualification">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_experience">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_ArrangedEmployment">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_Adaptability">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_speaking" style="display:none">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_listening" style="display:none">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_reading" style="display:none">&nbsp;</div>
                    &nbsp;

                    <div id="div_msg_writing" style="display:none">&nbsp;</div>
                    &nbsp;

                    <div>For in depth analysis of your profile kindly <a href="mailto:info@primeimmigrationllp.com" target="_blank">mail your CV</a> and our experts will guide you.</div>
                    <br />
                    &nbsp;</div>
                    </td>
                </tr>
            </tbody>
        </table>    
    </form>
    
<script type="text/javascript">
    function validateFormthis(){
            var str_null =document.getElementById("txt_your_name").value;
            if (str_null == "")
            {
                document.getElementById("txt_name_error_msg").style.display = "block";
                document.getElementById("txt_name_error_msg").innerHTML = "Please Insert Your Name".fontcolor("red").bold();
            }
            else
            {
                document.getElementById("txt_name_error_msg").style.display = "none";
            }
    }
function validateFormPhone() {
    var str_null = document.getElementById("txt_phone_no").value;
    var reg_phone = /^[\d\.\-]+$/;
    if (!reg_phone.test(str_null)) {
        document.getElementById("txt_phone_error_msg").style.display = "block";
        document.getElementById("txt_phone_error_msg").innerHTML = "Please Insert Phone Number".fontcolor("red").bold();
    }
    else {
        document.getElementById("txt_phone_error_msg").style.display = "none";
    }
}
function validateFormCity() {
    var str_null = document.getElementById("txt_city").value;
    if (str_null == "") {
        document.getElementById("txt_city_error_msg").style.display = "block";
        document.getElementById("txt_city_error_msg").innerHTML = "Please Insert Your City".fontcolor("red").bold();
    }
    else {
        document.getElementById("txt_city_error_msg").style.display = "none";
    }


}
function validateEmail12(sEmail) {
    var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

    if (!sEmail.match(reEmail))
    {
        document.getElementById("txt_email_error_msg").style.display = "block";
        document.getElementById("txt_email_error_msg").innerHTML = "Please Insert Valid Email ID".fontcolor("red").bold();
        return false;
    }
    else
    {
        document.getElementById("txt_email_error_msg").style.display = "none";
    }

}
function show_ddl_age()
{
    if(document.getElementById("txt_your_name").value != "")
    {
        if (document.getElementById("txt_phone_no").value != "") {
            if (document.getElementById("txt_city").value != "") {
                if (document.getElementById("txt_email").value != "")
                {
                    var e = document.getElementById("ddl_age");
                    var strUser = e.options[e.selectedIndex].value;
                    if (strUser == "0" || strUser == "") {
                        document.getElementById("tr_qualification").style.display = "none";
                        document.getElementById("tr_English").style.display = "none";
                        document.getElementById("tr_speaking").style.display = "none";
                        document.getElementById("tr_Listening").style.display = "none";
                        document.getElementById("tr_Reading").style.display = "none";
                        document.getElementById("tr_Writing").style.display = "none";
                        document.getElementById("tr_experience").style.display = "none";
                        document.getElementById("tr_ArrangedEmployment").style.display = "none";
                        document.getElementById("tr_Adaptability").style.display = "none";
                        document.getElementById("btn_show").disabled = "disabled";

                    }

                    else {
                        document.getElementById("tr_qualification").style.display = "none";
                        document.getElementById("tr_English").style.display = "block";
                        document.getElementById("tr_speaking").style.display = "none";
                        document.getElementById("tr_Listening").style.display = "none";
                        document.getElementById("tr_Reading").style.display = "none";
                        document.getElementById("tr_Writing").style.display = "none";
                        document.getElementById("tr_experience").style.display = "none";
                        document.getElementById("tr_ArrangedEmployment").style.display = "none";
                        document.getElementById("tr_Adaptability").style.display = "none";
                        document.getElementById("btn_show").disabled = "disabled";

                    }
                }
            }
        }
    }
    else {
        alert("Please Fill All Details");
    }
  
   
}
function show_ddl_English() {
    var e = document.getElementById("ddl_English");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "")
    {
        document.getElementById("tr_speaking").style.display = "none";
        document.getElementById("tr_Listening").style.display = "none";
        document.getElementById("tr_Reading").style.display = "none";
        document.getElementById("tr_Writing").style.display = "none";
        document.getElementById("tr_qualification").style.display = "none";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
    else if(strUser== 2)
    {
        document.getElementById("tr_speaking").style.display = "none";
        document.getElementById("tr_Listening").style.display = "none";
        document.getElementById("tr_Reading").style.display = "none";
        document.getElementById("tr_Writing").style.display = "none";
        document.getElementById("tr_qualification").style.display = "block";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }

    else if(strUser==1)
        {
        document.getElementById("tr_speaking").style.display = "block";
        document.getElementById("tr_Listening").style.display = "block";
        document.getElementById("tr_Reading").style.display = "block";
        document.getElementById("tr_Writing").style.display = "block";
        document.getElementById("tr_qualification").style.display = "none";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }

}
function show_ddl_speaking()
{
    var e = document.getElementById("dll_speaking");
    var strUser = e.options[e.selectedIndex].value;
    var listen = document.getElementById("dll_Listening");
    var strUserListen = e.options[e.selectedIndex].value;
    var read = document.getElementById("dll_Reading");
    var strUserRead = e.options[e.selectedIndex].value;
    var write = document.getElementById("dll_Writing");
    var strUserWrite = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "")
    {
                   document.getElementById("tr_qualification").style.display = "none";
                    document.getElementById("tr_experience").style.display = "none";
                    document.getElementById("tr_ArrangedEmployment").style.display = "none";
                    document.getElementById("tr_Adaptability").style.display = "none";
                    document.getElementById("btn_show").disabled = "disabled";
               
               
    }
   
    else
        if (strUserListen == 0 || strUserListen == "")
    {
        document.getElementById("tr_qualification").style.display = "none";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }
       
   else if (strUserRead == 0 || strUserRead == "") 
    {
        document.getElementById("tr_qualification").style.display = "none";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }
   else if (strUserWrite == 0 || strUserWrite == "")
    {
        document.getElementById("tr_qualification").style.display = "none";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
    else {

        document.getElementById("tr_qualification").style.display = "block";
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }

}



function show_ddl_Qualification() {
    var e = document.getElementById("ddl_Qualification");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "") {
        document.getElementById("tr_experience").style.display = "none";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
    else {
        document.getElementById("tr_experience").style.display = "block";
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
}

function show_ddl_experience() {
    var e = document.getElementById("ddl_experience");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "") {
        document.getElementById("tr_ArrangedEmployment").style.display = "none";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
    else {
        document.getElementById("tr_ArrangedEmployment").style.display = "block";
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";
    }

}
function show_dll_ArrangedEmployment() {
    var e = document.getElementById("dll_ArrangedEmployment");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "") {
        document.getElementById("tr_Adaptability").style.display = "none";
        document.getElementById("btn_show").disabled = "disabled";

    }
    else {
        document.getElementById("tr_Adaptability").style.display = "block";
        document.getElementById("btn_show").disabled = "disabled";
    }

}
function show_ddl_Adaptability() {
    var e = document.getElementById("ddl_Adaptability");
    var strUser = e.options[e.selectedIndex].value;
    if (strUser == 0 || strUser == "") {
        document.getElementById("btn_show").disabled = "disabled";

    }
    else {
        document.getElementById("btn_show").disabled = false;
    }

}



function show_btn_clickme()
{

    var total;
    var str_age = document.getElementById("ddl_age").options[document.getElementById("ddl_age").selectedIndex].value;
    var str_Qualification = document.getElementById("ddl_Qualification").options[document.getElementById("ddl_Qualification").selectedIndex].value;
    var str_Adaptability = document.getElementById("ddl_Adaptability").options[document.getElementById("ddl_Adaptability").selectedIndex].value;
    var str_english = document.getElementById("ddl_English").options[document.getElementById("ddl_English").selectedIndex].value;
    var str_ArrangedEmployment = document.getElementById("dll_ArrangedEmployment").options[document.getElementById("dll_ArrangedEmployment").selectedIndex].value;
    var str_experience = document.getElementById("ddl_experience").options[document.getElementById("ddl_experience").selectedIndex].value;
    var str_speaking = document.getElementById("dll_speaking").options[document.getElementById("dll_speaking").selectedIndex].value;
    var str_listening = document.getElementById("dll_Listening").options[document.getElementById("dll_Listening").selectedIndex].value;
    var str_reading = document.getElementById("dll_Reading").options[document.getElementById("dll_Reading").selectedIndex].value;
    var str_writing = document.getElementById("dll_Writing").options[document.getElementById("dll_Writing").selectedIndex].value;

    if (str_age != 0 || str_age != "")
    {
        switch (parseInt(str_age))
        {
            case 1:
                str_age = "12";
                break;
            case 2:
                str_age = "11";
                break;
            case 3:
                str_age = "10";
                break;
            case 4:
                str_age = "9";
                break;
            case 5:
                str_age = "8";
                break;
            case 6:
                str_age = "7";
                break;
            case 7:
                str_age = "6";
                break;
            case 8:
                str_age = "5";
                break;
            case 9:
                str_age = "4";
                break;
            case 10:
                str_age = "3";
                break;
            case 11:
                str_age = "2";
                break;
            case 12:
                str_age = "1";
                break;
            case 13:
                str_age = "0";
                break;
            default:
                break;
        }

    }
   
   
    if (str_Qualification != 0 || str_Qualification != "")
    {
        switch (parseInt(str_Qualification))
        {
            case 1:
                str_Qualification = "25";
                break;
            case 2:
                str_Qualification = "23";
                break;
            case 3:
                str_Qualification = "22";
                break;
            case 4:
                str_Qualification = "21";
                break;
            case 5:
                str_Qualification = "19";
                break;
            case 6:
                str_Qualification = "15";
                break;
            case 7:
                str_Qualification = "5";
                break;
            case 8:
                str_Qualification = "0";
                break;
            default:
                break;
        }
    }
   
   
    if (str_speaking != 0 || str_speaking != "")
    {
        switch (parseInt(str_speaking))
        {
            case 1:
                str_speaking = "4";
                break;
            case 2:
                str_speaking = "5";
                break;
            case 3:
                str_speaking = "6";
                break;
            default:
                break;
        }
    }
    
    if (str_writing != 0 || str_writing != "")
    {
        switch (parseInt(str_writing))
        {
            case 1:
                str_writing = "4";
                break;
            case 2:
                str_writing = "5";
                break;
            case 3:
                str_writing = "6";
                break;
            default:
                break;
        }
    }
  
    if (str_listening != 0 || str_listening != "")
    {
        switch (parseInt(str_listening))
        {
            case 1:
                str_listening = "4";
                break;
            case 2:
                str_listening = "5";
                break;
            case 3:
                str_listening = "6";
                break;
            default:
                break;
        }
    }
   
    if (str_reading != 0 || str_reading != "") {
        switch (parseInt(str_reading)) {
            case 1:
                str_reading = "4";
                break;
            case 2:
                str_reading = "5";
                break;
            case 3:
                str_reading = "6";
                break;
            default:
                break;
        }
    }
    
    if (str_experience != 0 || str_experience != "") {
        switch (parseInt(str_experience)) {
            case 1:
                str_experience = "15";
                break;
            case 2:
                str_experience = "13";
                break;
            case 3:
                str_experience = "11";
                break;
            case 4:
                str_experience = "9";
                break;
            case 5:
                str_experience = "0";
                break;
            default:
                break;
        }

    }
   
    if (str_Adaptability != 0 || str_Adaptability != "") {
        switch (parseInt(str_Adaptability)) {
            case 1:
                str_Adaptability = "10";
                break;
            case 2:
                str_Adaptability = "5";
                break;
            case 3:
                str_Adaptability = "5";
                break;
            case 4:
                str_Adaptability = "5";
                break;
            case 5:
                str_Adaptability = "5";
                break;
            case 6:
                str_Adaptability = "5";
                break;
            case 7:
                str_Adaptability = "5";
                break;
            case 8:
                str_Adaptability = "0";
                break;
            default:
                break;
        }
    }
   
    if (str_ArrangedEmployment != 0 || str_ArrangedEmployment != "") {
        switch (parseInt(str_ArrangedEmployment)) {
            case 1:
                str_ArrangedEmployment = "10";
                break;
            case 2:
                str_ArrangedEmployment = "10";
                break;
            case 3:
                str_ArrangedEmployment = "0";
                break;
            default:
                break;
        }
    }
   

   total = parseInt(str_age) + parseInt(str_Qualification) + parseInt(str_speaking) + parseInt(str_listening) + parseInt(str_reading) + parseInt(str_writing) + parseInt(str_experience) + parseInt(str_Adaptability) + parseInt(str_ArrangedEmployment);

   
   var data = new FormData();
   data.append('Name', document.getElementById('txt_your_name').value);
   data.append('Email', document.getElementById('txt_email').value);
    data.append('City', document.getElementById('txt_city').value);
    data.append('Phone', document.getElementById('txt_phone_no').value);
    data.append('age', str_age);
    data.append('speak', str_speaking);
    data.append('listen', str_listening);
    data.append('read', str_reading);
    data.append('write', str_writing);
    data.append('qualification', str_Qualification);
    data.append('experience', str_experience);
    data.append('employment', str_ArrangedEmployment);
    data.append('adaptability', str_Adaptability);
    data.append('age_text', document.getElementById("ddl_age").options[document.getElementById("ddl_age").selectedIndex].text);
    data.append('english_text', document.getElementById("ddl_English").options[document.getElementById("ddl_English").selectedIndex].text);
    data.append('speak_text', document.getElementById("dll_speaking").options[document.getElementById("dll_speaking").selectedIndex].text);
    data.append('listen_text', document.getElementById("dll_Listening").options[document.getElementById("dll_Listening").selectedIndex].text);
    data.append('read_text', document.getElementById("dll_Reading").options[document.getElementById("dll_Reading").selectedIndex].text);
    data.append('write_text', document.getElementById("dll_Writing").options[document.getElementById("dll_Writing").selectedIndex].text);
    data.append('qualification_text', document.getElementById("ddl_Qualification").options[document.getElementById("ddl_Qualification").selectedIndex].text);
    data.append('experience_text', document.getElementById("ddl_experience").options[document.getElementById("ddl_experience").selectedIndex].text);
    data.append('employment_text', document.getElementById("dll_ArrangedEmployment").options[document.getElementById("dll_ArrangedEmployment").selectedIndex].text);
    data.append('adaptability_text', document.getElementById("ddl_Adaptability").options[document.getElementById("ddl_Adaptability").selectedIndex].text);


   data.append('recaptcha',grecaptcha.getResponse());
    data.append('total', total);
    data.append('show_points', 'show_points');
    data.append('action', 'details_sent_on_mail');

        $.ajax({
            url: 'admin_ajax_url.php',
            type: 'post',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                var data = JSON.parse(data);
                if (data == "0") {
                    alert("Some Errors Were Encountered While Submitting Your Request");
                    return;
                }
                else {
                    $('.success-msg').php(data.success);

                    alert("Your Details and points Send successfully");

                }
            },
            error: function () {

                alert("Your Details and points was not Send. Please Try Again.");
                return;
            }
        });
        if (total < 51) {
            document.getElementById("tr_msg_show").style.display = "block";
            document.getElementById("sn_msg_show").innerHTML = "Sorry !!! You seem to be short of few points <br/>Total Points:".fontcolor("red").bold() + total;

        }
        else if (51 < total) {
            if (total < 66) {
                document.getElementById("tr_msg_show").style.display = "block";
                document.getElementById("sn_msg_show").innerHTML = "You are on the edge. A careful assessment is required. <br/>Total Points:".fontcolor("red").bold() + total;

            }
            else if (67 < total) {
                if (total < 70) {
                    document.getElementById("tr_msg_show").style.display = "block";
                    document.getElementById("sn_msg_show").innerHTML = "Great !!! You seem to be meeting the points requirement <br/>Total Points:".fontcolor("red").bold() + total;

                }
                else if (total > 70) {
                    document.getElementById("tr_msg_show").style.display = "block";
                    document.getElementById("sn_msg_show").innerHTML = "Congratulations !!! You seem to be meeting the points requirement <br/>Total Points:".fontcolor("red").bold() + total;

                }

            }

        }
      if (str_english == 1) {

            document.getElementById("div_msg_speaking").style.display = "block";
            document.getElementById("div_msg_speaking").innerHTML = "Speaking Proficiency Points:".bold() + str_speaking;
            document.getElementById("div_msg_listening").style.display = "block";
            document.getElementById("div_msg_listening").innerHTML = "Listening Proficiency Points:".bold() + str_speaking;
            document.getElementById("div_msg_reading").style.display = "block";
            document.getElementById("div_msg_reading").innerHTML = "Reading Proficiency Points:".bold() + str_speaking;
            document.getElementById("div_msg_writing").style.display = "block";
            document.getElementById("div_msg_writing").innerHTML = "Writing Proficiency Points:".bold() + str_speaking;
        }
        else {

            document.getElementById("div_msg_speaking").style.display = "block";
            document.getElementById("div_msg_listening").style.display = "none";
            document.getElementById("div_msg_reading").style.display = "none";
            document.getElementById("div_msg_writing").style.display = "none";
            document.getElementById("div_msg_speaking").innerHTML = "Your IELTS / English Proficiency Points:".bold() + "0";
        }
        document.getElementById("div_msg_age").innerHTML = "Your Age Points:".bold() + str_age;
        document.getElementById("div_msg_qualification").innerHTML = "Your Education Points:".bold() + str_Qualification;
        document.getElementById("div_msg_experience").innerHTML = "Your Total Work Experience  Points:".bold() + str_experience;
        document.getElementById("div_msg_ArrangedEmployment").innerHTML = "Your Arranged Employment Points:".bold() + str_ArrangedEmployment;
        document.getElementById("div_msg_Adaptability").innerHTML = "Your Adaptability Points:".bold() + str_Adaptability;

   
        }
</script>
<p>&nbsp;</p>

<p>Are you keen to move to Canada as a skilled worker, through the Express Entry System</a>? If yes, you need to figure out first how bright your chances are for getting an Invitation to Apply (ITA) from the Immigration, Refugees and Citizenship Canada (IRCC).<br />
<br />
But how do you that? It&rsquo;s simple. Use the Canada Express Entry Points Calculator!<br />
<br />
<strong>What is Canada Express Entry Points Calculator?</strong></p>

<p>It is a very manageable point structure under which you get a total, on the basis of the details and facts shared by you in your Express Entry profile made for the object of Canada immigration.<br />
<br />
Fundamentally, the Express Entry Points Calculator<strong> </strong>assists you figure if you are entitled for the overseas movement to the Maple Leaf Country, and also how strong your chances are of getting an ITA for the prized Permanent Residence</a> (PR) standing in the country.<br />
<br />
<strong>Express Entry Points Calculator Tool How Does it Function?</strong></p>

<p>It computes your Comprehensive Ranking System</a> (CRS) Points total, on the basis of two different sections, namely, Core &amp; Additional. Under these two sections, you may get 600 points each.<br />
<br />
Under the first<strong> CRS Calculator</strong> Tool, certain specific factors like expertise and experience, significant other or common-law partner features, such as their language abilities, education and skills transferability are taken into consideration.<br />
<br />
Together with these aspects, many added factors are also taken into consideration and given a total, to improve the Core total.<br />
<br />
Degrees, diplomas or certificates earned in Canada, a legally valid offer of employment, a nomination from a Canadian province or territory, a sister or brother residing in the Maple Leaf Country who has either the nation&rsquo;s citizenship or its permanent residence status, and reasonably good French language abilities these are the said features.</p>
</div>
                <!-- Single team member -->
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>