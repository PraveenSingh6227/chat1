<form action="">
        <table class="datatable points-table-form" style="width:100%">
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