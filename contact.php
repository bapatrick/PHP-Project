<?php 

$pageTitle = "Contact The Pop List";

include("inc/header.php"); ?>
    <div id="email">
      <h3>Email Us!</h3>
    </div>
    <div id="email_p">
      <p>See a Pop with pricing that you think needs to be updated? Know of new Pops that aren't on here yet? Want to tell us how awesome we are? Send us some mail!</p>
    </div>
    <div id="email_form">
    <form name="contactform" method="post" action="send_form_email.php">
       <table width="450px">
        <tr>
          <td valign="top">
            <label for="first_name">First Name *</label>
          </td>
          <td valign="top">
            <input  type="text" name="first_name" maxlength="50" size="30">
          </td>
         </tr> 
         <tr>
          <td valign="top">
            <label for="last_name">Last Name</label>
          </td>
          <td valign="top">
            <input  type="text" name="last_name" maxlength="50" size="30">
          </td>
         </tr>
          <tr>
            <td valign="top">
              <label for="email">Email Address *</label>
            </td>
            <td valign="top">
              <input  type="text" name="email" maxlength="80" size="30">
            </td>
           </tr>
           <tr> 
            <td valign="top">
             <label for="comments">Comments *</label>
            </td>
            <td valign="top">
             <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
            </td>
           </tr>
           <tr>
            <td colspan="2" style="text-align:center">
              <input type="submit" value="Submit">
            </td>
          </tr>
        </table>
      </form>
    </div>
    <img src="img/vegeta-pop.jpg" id="vegeta">
    
   