<?php include 'includes/header.php';?>


      <span style="text-transform: capitalize; color: #203864">Hi <?=$user['fullname'];?>,</span>
      </td></tr></tbody></table>


    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777;">We are excited to have you join us at <?=project_name;?></b>
      <br>
      Please  click the confirm button to verify your email to continue.
      <br>
      <br>
       <a href="<?=domain;?>/register/confirm_email/<?=$data['email'];?>/<?=$data['email_verification_token'];?>" style="color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;">&nbsp; Confirm &nbsp;</a>
       <br>
       <br>
     <!--   Or
       <br>
        Enter Email Code: <?=$data['email_verification_token'];?>
       <br> -->
    </div>

  </td></tr></tbody></table>
</td></tr></tbody></table>
<div style="display: none;">
    






<?php include 'includes/footer.php';?>