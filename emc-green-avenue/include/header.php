<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Book an appointment </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="row">

        <form action="<?php echo $action; ?>" method="post" name="donationForm">

          <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />

          <input type="hidden" name="productinfo" value="Donation" />

          <input type="hidden" name="hash" value="<?php echo $hash ?>" />

          <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

          <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '300' : $posted['amount'] ?>" />

          <input type="hidden" name="service_provider" value="<?php echo (empty($posted['service_provider'])) ? 'payu_paisa' : $posted['service_provider'] ?>" size="64">

          <input name="surl" type="hidden" value="<?php echo (empty($posted['surl'])) ? 'https://emchospital.co.in/emc-green-avenue/payment-success.php' : $posted['surl'] ?>" size="64" />

          <input name="furl" type="hidden" value="<?php echo (empty($posted['furl'])) ? 'https://emchospital.co.in/emc-green-avenue/payment-failed.php' : $posted['furl'] ?>" size="64" />

        <div class="mh-title" style="margin-left:15px; margin-bottom:15px;">

            <h1 style="margin-bottom:5px; font-size:24px;">

                <label><strong>Personal details</strong></label>

                <label></label>

                <div class="pull-right" style="margin-right: 19px;"><small style="color:red;">*Mandatory fields</small></div>

            </h1>

        </div>

        <div class="col-sm-6 col-xs-6 col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" placeholder="First name*" name="firstname" id="first_name" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-6 col-xs-6 col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" placeholder="Last name" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <select class="form-control speciality_box" name="speciality" id="speciality" readonly>

                    <option value="">Select Gender</option>

                    <option value='Orthopaedics  & Joint Replacement'>Male</option>

                    <option value='Robotic Knee Replacement'> Female</option>

                    <option value='Robotic Knee Replacement'> Other</option>



                </select>

            </div>



        </div>

        <!--close col-first-->

        <div class="clear"></div>

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" name="city" placeholder="City" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input name="phone" class="form-control" placeholder="Mobile number" id="mobile" requiredvalue="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input type="email" class="form-control" placeholder="Email address" name="email" id="email_id" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        </div>

        <div class="inner-form row ">

            <div class="mh-title" style="margin-left:15px;">

                <h4 style="color:#f00; font-size: 22px;">

                    <label>Appointment details</label>

                    <label></label>

                </h4>

            </div>

            <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">
                    <select class="form-control speciality_box" name="speciality" value="speciality" id="speciality1" onChange="populate2(this.id,'location')" required>

                        <option value="">Select Speciality</option>

                        <option value='Cardiology'>Cardiologist</option>

                        <option value='Cardiology'>Cardiology</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Neuro Surgeon'>Neuro Surgeon</option>

                        <option value='Ortho Sr.Joint Replacement Surgeon'>Ortho Sr.Joint Replacement Surgeon</option>

                        <option value='Laparoscopic Surger'>Laparoscopic Surgeon </option>

                        <option value='Colo Rectal Lap. Surgeon'>Colo Rectal Lap. Surgeon</option>

                        <option value='Nephrology'>Nephrology Deptt</option>

                        <option value='Gynecologist'>Gynecologist</option>

                        <option value='Psychiatrist'>Psychiatrist</option>

                        <option value='MD Medicine'> MD Medicine </option>

                        <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                        <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                        <option value='DM Cardiologist MCH,CTVS'>DM Cardiologist MCH,CTVS</option>

                        <option value='DM Cardiologist MCH'>DM Cardiologist MCH</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Ortho Joint Replacement Surgeon'>Ortho Joint Replacement Surgeon</option>

                        <option value='Urology'>Urology</option>

                        <option value='MS, E.N.T'>MS, E.N.T</option>

                        <option value='MS , E.N.T'>MS , E.N.T</option>

                        <option value='MBBS, MCH Plastic Surgery'>MBBS, MCH Plastic Surgery</option>

                        <option value='MBBS,MD (Medicine)'>MBBS , MD (Medicine)</option>

                        <option value='Physiotherapy'>Physiotherapy</option>

                        <option value='Pathology'>Pathology</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='MS, DNB Surgical Oncologist'>MS, DNB Surgical Oncologist</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='Dr.Neeraj Jain'>Dr.Neeraj Jain</option>

                        <option value='Radiology'>Radiology</option>

                        <option value='Pulmonologist'>Pulmonologist</option>

                        <option value='DDHN'>DDHN</option>

                        <option value='Nutrition and Dietetics'>Nutrition and Dietetics</option>

                        <option value='MBBS'>MBBS</option>

                        <option value='Ortho'>Ortho</option>



                    </select>

                </div>

            </div>

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">

                    <select class="form-control hospital_box" name="hospital_location" id="location" required>

                        <noscript>

                            <option value="">Select Hospital</option>

                        </noscript>

                    </select>



                </div>

            </div>

            <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">



                </div>

            </div>

            <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">

                    <input type="text" class="form-control" placeholder="Date and time" name="date" id="datetime" required>

                </div>

            </div>

            <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">

                    <textarea name="comment" id="comment" cols="" class="form-control textarea" placeholder="Message" rows="" style="height:50px;" required></textarea>

                </div>

            </div>

            <!--close col-first-->

            <div class="col-sm-12 clear col-md-12">

                <div class="pull-right">                    

                    <?php if(!$hash) { ?>

                        <button type="submit" name=Submit value="submit" class="btn btn-primary mh-btn  mrg10">Request an appointment</button>

                    <?php } ?>

                </div>

            </div>

        </div>

        

        </form>

      </div>

    

    </div>

  </div>

</div>















<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Book an appointment </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="row">

        <form action="<?php echo $action; ?>" method="post" name="donationForm">

          <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />

          <input type="hidden" name="productinfo" value="Donation" />

          <input type="hidden" name="hash" value="<?php echo $hash ?>" />

          <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

          <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '300' : $posted['amount'] ?>" />

          <input type="hidden" name="service_provider" value="<?php echo (empty($posted['service_provider'])) ? 'payu_paisa' : $posted['service_provider'] ?>" size="64">

          <input name="surl" type="hidden" value="<?php echo (empty($posted['surl'])) ? 'https://emchospital.co.in/emc/emc-green-avenue/payment-success.php' : $posted['surl'] ?>" size="64" />

          <input name="furl" type="hidden" value="<?php echo (empty($posted['furl'])) ? 'https://emchospital.co.in/emc/emc-green-avenue/payment-failed.php' : $posted['furl'] ?>" size="64" />

        <div class="mh-title" style="margin-left:15px; margin-bottom:15px;">

            <h1 style="margin-bottom:5px; font-size:24px;">

                <label><strong>Personal details</strong></label>

                <label></label>

                <div class="pull-right" style="margin-right: 19px;"><small style="color:red;">*Mandatory fields</small></div>

            </h1>

        </div>

        <div class="col-sm-6 col-xs-6 col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" placeholder="First name*" name="firstname" id="first_name" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-6 col-xs-6 col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" placeholder="Last name" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <select class="form-control speciality_box" name="speciality" id="speciality" readonly>

                    <option value="">Select Gender</option>

                    <option value='Orthopaedics  & Joint Replacement'>Male</option>

                    <option value='Robotic Knee Replacement'> Female</option>

                    <option value='Robotic Knee Replacement'> Other</option>



                </select>

            </div>



        </div>

        <!--close col-first-->

        <div class="clear"></div>

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input type="text" class="form-control" name="city" placeholder="City" required>

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input name="phone" class="form-control" placeholder="Mobile number" id="mobile" requiredvalue="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />

            </div>

        </div>

        <!--close col-first-->

        <div class="col-sm-12  col-md-4">

            <div class="form-group ">

                <input type="email" class="form-control" placeholder="Email address" name="email" id="email_id" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" required>

            </div>

        </div>

        <!--close col-first-->

        </div>

        <div class="inner-form row ">

            <div class="mh-title" style="margin-left:15px;">

                <h4 style="color:#f00; font-size: 22px;">

                    <label>Appointment details</label>

                    <label></label>

                </h4>

            </div>

            <!--close col-first-->

            

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">
                    <h6 name="speciality" id="speciality"></h6>

                   <!--  <select class="form-control speciality_box" name="speciality" id="speciality1" onChange="populate2(this.id,'location')" required>

                        <option value="">Select Speciality</option>

                       <option value='Cardiology'>Cardiology</option>

                        <option value='Cardiology'>Cardiology</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Neuro Surgeon'>Neuro Surgeon</option>

                        <option value='Ortho Sr.Joint Replacement Surgeon'>Ortho Sr.Joint Replacement Surgeon</option>

                        <option value='Laparoscopic Surger'>Laparoscopic Surgeon </option>

                        <option value='Colo Rectal Lap. Surgeon'>Colo Rectal Lap. Surgeon</option>

                        <option value='Nephrology'>Nephrology Deptt</option>

                        <option value='Gynecologist'>Gynecologist</option>

                        <option value='Psychiatrist'>Psychiatrist</option>

                        <option value='MD Medicine'> MD Medicine </option>

                        <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                         <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                        <option value='DM Cardiologist MCH,CTVS'>DM Cardiologist MCH,CTVS</option>

                        <option value='DM Cardiologist MCH'>DM Cardiologist MCH</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Ortho Joint Replacement Surgeon'>Ortho Joint Replacement Surgeon</option>

                        <option value='Urology'>Urology</option>

                        <option value='MS, E.N.T'>MS, E.N.T</option>

                        <option value='MS , E.N.T'>MS , E.N.T</option>

                         <option value='MBBS, MCH Plastic Surgery'>MBBS, MCH Plastic Surgery</option>

                        <option value='MBBS,MD (Medicine)'>MBBS , MD (Medicine)</option>

                        <option value='Physiotherapy'>Physiotherapy</option>

                        <option value='Pathology'>Pathology</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='MS, DNB Surgical Oncologist'>MS, DNB Surgical Oncologist</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='Dr.Neeraj Jain'>Dr.Neeraj Jain</option>

                        <option value='Radiology'>Radiology</option>

                        <option value='Pulmonologist'>Pulmonologist</option>

                         <option value='DDHN'>DDHN</option>

                         <option value='Nutrition and Dietetics'>Nutrition and Dietetics</option>

                         <option value='MBBS'>MBBS</option>

                         <option value='Ortho'>Ortho</option>

                        

                      </select> -->

                    </div>

                  </div>

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">
                        <h6 name="doctor" id="doctor"></h6>

                      <!-- <select class="form-control doctor_box" readonly="readonly"  name="doctor" id="doctor" >

                        <option value="">Doctor</option>

                        <option value='Dr.Vivek Tandon'>Dr.Vivek Tandon </option>

                        <option value='Dr.Tariq Rashid Shah'>Dr.Tariq Rashid Shah</option>

                        <option value='Dr.Mushtaq Ahmad'>Dr. Mushtaq Ahmad </option>

                        <option value='Dr.Mukesh Vij'>Dr.Mukesh Vij</option>

                        <option value='Dr.Ranjit Singh'>Dr.Ranjit Singh </option>

                       

                        <option value='Dr.Asif Mehraj'>Dr.Asif Mehraj</option>

                        <option value='Dr.Harsharan Kaur'>Dr.Harsharan Kaur </option>

                        <option value='Dr.Ishita Sharma'>Dr.Ishita Sharma </option>

                        <option value='Dr.Monikeerthana'>Dr.Monikeerthana </option>

                        <option value='Dr.Amarnath'>Dr. Amarnath </option>

                        <option value='Dr.Pankaj Soni'>Dr.Pankaj Soni </option>

                        <option value='Dr.Sonia Saini'>Dr.Sonia Saini </option>

                        <option value='Dr.Rajeev Kumar'>Dr.Rajeev Kumar  </option>

                        <option value='Dr.Vardev Singh'>Dr.Vardev Singh  </option>



                          <option value='Dr.Sameer Goyal'>Dr.Sameer Goyal</option>

                        <option value='Dr.DP Marik'>Dr.DP Marik </option>

                        <option value='Dr.Anumeet'>Dr.Anumeet</option>

                        <option value='Dr.Ved Prakesh'>Dr.Ved Prakesh</option>

                        <option value='Dr.Vikas Rampal'>Dr.Vikas Rampal </option>

                        <option value='Dr.Rk Saini'>Dr.Rk Saini </option>

                        <option value='Dr.Parladd Duggal'>Dr.Parladd Duggal </option>

                        <option value='Dr.Mahipal Singh'>Dr.Mahipal Singh </option>

                        <option value='Dr.AP Singh'>Dr.AP Singh </option>

                        <option value='Dr.Prince'>Dr.Prince </option>



                        <option value='Dr.Naina vij'>Dr.Naina vij </option>

                        <option value='Dr.Navdeep Singh'>Dr.Navdeep Singh</option>

                        <option value='Dr.Vivek Gupta'>Dr.Vivek Gupta </option>

                        <option value='Dr.Neeraj Jain'>Dr.Neeraj Jain </option>

                        <option value='Dr.Jaipal Singh'>Dr.Jaipal Singh</option>

                        <option value='Dr.A.S. Bhatia'>Dr.A.S. Bhatia</option>

                        <option value='Harmeet Chadha'>Harmeet Chadha</option>

                        <option value='Puneet Kaur'>Puneet Kaur </option>

                         <option value='Dr.Rishab Arora'>Dr.Rishab Arora </option>

                          <option value='Dr.Guriqbal Singh Chhina'>Dr.Guriqbal Singh Chhina</option>

                      </select> -->

                    </div>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <select class="form-control hospital_box" name="hospital_location" id="hospital" onmouseover="populate('doctor','hospital')" required>

                        <noscript>

                        <option value="">Select Hospital</option>

                        </noscript>

                      </select>

                    </div>

                  </div>

                  <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">

                    <input type="text" class="form-control" placeholder="Date and time" name="date" id="datetime" required>

                </div>

            </div>

                  <!--close col-first-->

            <div class="col-sm-12 col-md-4">

                <div class="form-group ">

                    <textarea name="comment" id="comment" cols="" class="form-control textarea" placeholder="Message" rows="" style="height:50px;" required></textarea>

                </div>

            </div>

                  <!--close col-first-->

                  <div class="col-sm-12 clear col-md-12">

                      <div class="pull-right">                    

                          <?php if(!$hash) { ?>

                              <button type="submit" name=Submit value="submit" class="btn btn-primary mh-btn  mrg10">Book an appointment</button>

                          <?php } ?>

                      </div>

                  </div>

                  <!--close col-first-->

                </div>

              </form>

        </div>

      </div>

    

    </div>

  </div>

</div>



<div class="modal fade" id="exampleModalCenterxx" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Book an appointment </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="row">

             <form method="POST" action="" >

                <div class="mh-title" style="margin-left:15px; margin-bottom:15px;">

                  <h1 style="margin-bottom:5px; font-size:24px;">

                    <label><strong>Personal details</strong></label>

                    <label></label>

                    <div class="pull-right" style="margin-right: 19px;"><small style="color:red;">*Mandatory fields</small></div>

                  </h1>

                </div>

                <div class="col-sm-6 col-xs-6 col-md-4">

                  <div class="form-group ">

                    <input type="text" class="form-control" placeholder="First name*" name="first_name" id="first_name" required>

                  </div>

                </div>

                <!--close col-first-->

                <div class="col-sm-6 col-xs-6 col-md-4">

                  <div class="form-group ">

                    <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" required>

                  </div>

                </div>

                <!--close col-first-->

                <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <select class="form-control speciality_box" name="speciality" id="speciality" readonly >

                        <option value="">Select Gender</option>

                        <option value='Orthopaedics  & Joint Replacement'>Male</option>

                        <option value='Robotic Knee Replacement'> Female</option>

                        <option value='Robotic Knee Replacement'> Other</option>

                        

                      </select>

                    </div>

                 

                </div>

                <!--close col-first-->

                <div class="clear"></div>

                <div class="col-sm-12 col-md-4">

                  <div class="form-group ">

                    <input type="text" class="form-control" name="city"  placeholder="City" required>

                  </div>

                </div>

                <!--close col-first-->

                <div class="col-sm-12 col-xs-6 col-md-4">

                  <div class="form-group ">

                    <input type="text" class="form-control" placeholder="Mobile number" name="mobile" id="mobile" required>

                  </div>

                </div>

                <!--close col-first-->

                <div class="col-sm-12 col-xs-6 col-md-4">

                  <div class="form-group ">

                    <input type="email" class="form-control" placeholder="Email address" name="email" id="email_id" required>

                  </div>

                </div>

                <!--close col-first-->

                </div>

                <div class="inner-form row ">

                  <div class="mh-title" style="margin-left:15px;">

                    <h4 style="color:#f00; font-size: 22px;">

                      <label>Appointment details</label>

                      <label></label>

                    </h4>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <select class="form-control speciality_box" name="speciality" id="speciality" readonly >

                        <option value="">Select Speciality</option>

                       <option value='Cardiology'>Cardiology</option>

                        <option value='Cardiology'>Cardiology</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Neuro Surgeon'>Neuro Surgeon</option>

                        <option value='Ortho Sr.Joint Replacement Surgeon'>Ortho Sr.Joint Replacement Surgeon</option>

                        <option value='Laparoscopic Surger'>Laparoscopic Surgeon </option>

                        <option value='Colo Rectal Lap. Surgeon'>Colo Rectal Lap. Surgeon</option>

                        <option value='Nephrology'>Nephrology Deptt</option>

                        <option value='Gynecologist'>Gynecologist</option>

                        <option value='Psychiatrist'>Psychiatrist</option>

                        <option value='MD Medicine'> MD Medicine </option>

                        <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                         <option value='Anaesthesia Medical'>Anaesthesia Medical</option>

                        <option value='Cardiac Anaesthesia'>Cardiac Anaesthesia </option>

                        <option value='MBBS,DNB Cardiac Anaesthesia'>MBBS,DNB Cardiac Anaesthesia</option>

                        <option value='MD Anaesthesia'>MD Anaesthesia</option>

                        <option value='DM Cardiologist MCH,CTVS'>DM Cardiologist MCH,CTVS</option>

                        <option value='DM Cardiologist MCH'>DM Cardiologist MCH</option>

                        <option value='Gastroenterology'>Gastroenterology</option>

                        <option value='Ortho Joint Replacement Surgeon'>Ortho Joint Replacement Surgeon</option>

                        <option value='Urology'>Urology</option>

                        <option value='MS, E.N.T'>MS, E.N.T</option>

                        <option value='MS , E.N.T'>MS , E.N.T</option>

                         <option value='MBBS, MCH Plastic Surgery'>MBBS, MCH Plastic Surgery</option>

                        <option value='MBBS,MD (Medicine)'>MBBS , MD (Medicine)</option>

                        <option value='Physiotherapy'>Physiotherapy</option>

                        <option value='Pathology'>Pathology</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='MS, DNB Surgical Oncologist'>MS, DNB Surgical Oncologist</option>

                        <option value='MD, DM Oncology'>MD, DM Oncology</option>

                        <option value='Dr.Neeraj Jain'>Dr.Neeraj Jain</option>

                        <option value='Radiology'>Radiology</option>

                        <option value='Pulmonologist'>Pulmonologist</option>

                         <option value='DDHN'>DDHN</option>

                         <option value='Nutrition and Dietetics'>Nutrition and Dietetics</option>

                         <option value='MBBS'>MBBS</option>

                         <option value='Ortho'>Ortho</option>

                        

                      </select>

                    </div>

                  </div>

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <select class="form-control doctor_box" readonly="readonly"  name="doctor" id="doctor" >

                        <option value="">Doctor</option>

                        <option value='Dr.Vivek Tandon'>Dr.Vivek Tandon </option>

                        <option value='Dr.Tariq Rashid Shah'>Dr.Tariq Rashid Shah</option>

                        <option value='Dr.Mushtaq Ahmad'>Dr. Mushtaq Ahmad </option>

                        <option value='Dr.Mukesh Vij'>Dr.Mukesh Vij</option>

                        <option value='Dr.Ranjit Singh'>Dr.Ranjit Singh </option>

                       

                        <option value='Dr.Asif Mehraj'>Dr.Asif Mehraj</option>

                        <option value='Dr.Harsharan Kaur'>Dr.Harsharan Kaur </option>

                        <option value='Dr.Ishita Sharma'>Dr.Ishita Sharma </option>

                        <option value='Dr.Monikeerthana'>Dr.Monikeerthana </option>

                        <option value='Dr.Amarnath'>Dr. Amarnath </option>

                        <option value='Dr.Pankaj Soni'>Dr.Pankaj Soni </option>

                        <option value='Dr.Sonia Saini'>Dr.Sonia Saini </option>

                        <option value='Dr.Rajeev Kumar'>Dr.Rajeev Kumar  </option>

                        <option value='Dr.Vardev Singh'>Dr.Vardev Singh  </option>



                          <option value='Dr.Sameer Goyal'>Dr.Sameer Goyal</option>

                        <option value='Dr.DP Marik'>Dr.DP Marik </option>

                        <option value='Dr.Anumeet'>Dr.Anumeet</option>

                        <option value='Dr.Ved Prakesh'>Dr.Ved Prakesh</option>

                        <option value='Dr.Vikas Rampal'>Dr.Vikas Rampal </option>

                        <option value='Dr.Rk Saini'>Dr.Rk Saini </option>

                        <option value='Dr.Parladd Duggal'>Dr.Parladd Duggal </option>

                        <option value='Dr.Mahipal Singh'>Dr.Mahipal Singh </option>

                        <option value='Dr.AP Singh'>Dr.AP Singh </option>

                        <option value='Dr.Prince'>Dr.Prince </option>



                        <option value='Dr.Naina vij'>Dr.Naina vij </option>

                        <option value='Dr.Navdeep Singh'>Dr.Navdeep Singh</option>

                        <option value='Dr.Vivek Gupta'>Dr.Vivek Gupta </option>

                        <option value='Dr.Neeraj Jain'>Dr.Neeraj Jain </option>

                        <option value='Dr.Jaipal Singh'>Dr.Jaipal Singh</option>

                        <option value='Dr.A.S. Bhatia'>Dr.A.S. Bhatia</option>

                        <option value='Harmeet Chadha'>Harmeet Chadha</option>

                        <option value='Puneet Kaur'>Puneet Kaur </option>

                         <option value='Dr.Rishab Arora'>Dr.Rishab Arora </option>

                          <option value='Dr.Guriqbal Singh Chhina'>Dr.Guriqbal Singh Chhina</option>

                      </select>

                    </div>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <select class="form-control hospital_box" name="hospital_location" id="hospital" onmouseover="populate('doctor','hospital')" required>

                        <noscript>

                        <option value="">Select Hospital</option>

                        </noscript>

                      </select>

                    </div>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <input type="text" class="form-control date" data-provide="datepicker" placeholder="Date and time" name="date"  id="datetime" required>

                    </div>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 col-md-4">

                    <div class="form-group ">

                      <textarea name="comment" id="comment" cols="" class="form-control textarea" placeholder="Message" rows="" style="height:50px;" required></textarea>

                    </div>

                  </div>

                  <!--close col-first-->

                  <div class="col-sm-12 clear col-md-12">

                    <div class="pull-right">

                      <button type="submit" name=Submit value="submit" class="btn btn-primary mh-btn  mrg10">Book an appointment</button>

                    </div>

                  </div>

                  <!--close col-first-->

                </div>

              </form>

        </div>

      </div>

    

    </div>

  </div>

</div>

<!-- <script>

function gethospital(val) {

    $.ajax({

    type: "POST",

    url: "gethospital2.php",

    data:'speciality_id='+val,

    success: function(data){

        $("#loca").html(data);

        

    }

    });

}

</script> -->



<script type="text/javascript">

function populate2(s3,s4)

{

   var s3 = document.getElementById(s3);

   var s4 = document.getElementById(s4);

   s4.innerHTML="";

   if(s3.value == "Cardiology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue ,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s3.value == "Cardiology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s3.value == "Gastroenterology & Hepatology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Neuro Surgeon")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Ortho Sr.Joint Replacement Surgeon")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Laparoscopic Surger")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Colo Rectal Lap. Surgeon")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Nephrology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Gynecologist")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Psychiatrist")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "MD Medicine")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Anaesthesia Medical")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Cardiac Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s3.value == "Cardiac Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

     else if(s3.value == "MD Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s3.value == "Anaesthesia Medical")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

     else if(s3.value == "Cardiac Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MBBS,DNB Cardiac Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MD Anaesthesia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "DM Cardiologist MCH,CTVS")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "DM Cardiologist MCH")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

     else if(s3.value == "Gastroenterology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "Ortho joint Replacement Surgeon")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "Urology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s3.value == "MS, E.N.T")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MS , E.N.T")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MBBS, MCH Plastic Surgery")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MBBS,MD (Medicine)")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "Physiotherapy")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "Pathology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MD, DM Oncology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MS, DNB Surgical Oncologist")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s3.value == "MD, DM Oncology")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar| EMC Hospital Green Avenue , Amritsar ","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   

   

    for(var option in optionArray){

        var pair = optionArray[option].split("|");

        var newOption = document.createElement("option");

        newOption.value = pair[0];

        newOption.innerHTML = pair[1];

        s4.options.add(newOption);

    }

    

}

</script>

<script type="text/javascript">

function populate(s1,s2)

{  

    if(document.getElementById('hospital').value=="")

    {var s1 = document.getElementById(s1);

   var s2 = document.getElementById(s2);

   s2.innerHTML="";

   if(s1.value == "Dr.Vivek Tandon")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue ,Amritsar|EMC Hospital Green Avenue,Amritsar","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Tariq Rashid Shah")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar","EMC Hospital  Shakti Nagar,AmritsarEMC Hospital Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Mushtaq Ahmad")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Mukesh Vij")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Ranjit Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar","EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital Shakti Nagar,Amritsar"];

   }

  

    else if(s1.value == "Dr.Asif Mehraj")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Harsharan Kaur")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Ishita Sharma")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Rishab Arora")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Monikeerthana")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Amarnath")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Pankaj Soni")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Sonia Saini")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Rajeev Kumar")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Vardev Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

    else if(s1.value == "Dr.Sameer Goyal")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.DP Marik")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s1.value == "Dr.Anumeet")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Ved Prakesh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Vikas Rampal")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Rk Saini")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s1.value == "Dr.Parladd Duggal")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   

     else if(s1.value == "Dr.Mahipal Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s1.value == "Dr.AP Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s1.value == "Dr.Prince")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



     else if(s1.value == "Dr.Naina vij")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Navdeep Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Vivek Gupta")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }



    else if(s1.value == "Dr.Neeraj Jain")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Jaipal Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.A.S.Bhatia")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Harmeet Chadha")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Puneet Kaur")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Guriqbal Singh Chhina")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Kirpal Singh")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Himanshu Mehta")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }

   else if(s1.value == "Dr.Neha Aroa")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }
   
   else if(s1.value == "Dr.Pankaj Panwar")

   {var optionArray = ["|Select Hospital","EMC Hospital Green Avenue,Amritsar|EMC Hospital Green Avenue,Amritsar"," EMC Hospital  Shakti Nagar,Amritsar|EMC Hospital  Shakti Nagar,Amritsar"];

   }
   
   

  

   for(var option in optionArray){

        var pair = optionArray[option].split("|");

        var newOption = document.createElement("option");

        newOption.value = pair[0];

        newOption.innerHTML = pair[1];

        s2.options.add(newOption);

    }

    }

}



</script>





<!-- 

<div class="top-header" id="myHeader">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 col-md-6">

                            <ul class="header-contact-info">

                        

                                <li><i class="fa fa-phone"></i> Call Us: <a href="#">70091-82189 / 62395-11500</a></li>

                                <li><i class="fa fa-paper-plane"></i> <a href="mailto:emchelpline@gmail.com">emchelpline@gmail.com</a></li>

                            </ul>

                        </div>



                        <div class="col-lg-4 col-md-4">

                            <div class="header-right-content">

                                <ul class="top-header-social">

                                    <li> <a href="https://www.facebook.com/hospitalemc"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>

                        </a></li>

                                    <li>

                        <a href="https://www.pinterest.ca/hospitalemc/"  target="_blank"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> 

                        </a>

                    </li>

                    <li>

                        <a href="https://www.instagram.com/emchospital_amritsar/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>

                        </a>

                    </li>

                    <li>

                        <a href="https://www.youtube.com/channel/UCFGh4bLDZcEjm-xmAxUP73A?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i>

                        </a>

                    </li>

                    <li>

                        <a href="https://www.linkedin.com/in/hospitalemc/"  target="_blank"><i class="fa  fa-linkedin" aria-hidden="true"></i>

                        </a>

                    </li>

                                </ul>



                              

                            </div>

                        </div>



                        <div class="col-lg-2 col-md-2">

                         <div class="top_login">

                            <ul>

                                <li><i class="fa fa-download" aria-hidden="true"></i><a href="brochure.pdf">Brochure </a></li>

                            </ul>

                        </div>

                        </div>

                    </div>

                </div>

            </div>

 -->

   <style type="text/css">

    .emc-top-number {

    text-align: right;

    margin: 0px;

}

small {

    color: #919EAB;

    font-family: 'Titillium Web', sans-serif;

    font-size: 12px;

    font-weight: 600;

    letter-spacing: 0.33px;

    line-height: 14px;

    text-align: left;

}

     

      .emc-top-number li {

        display: inline-block;

    padding: 0 5px !important;

     }

     .emc-top-number li:nth-child(2) {

    padding: 0 5px 0 5px !important;

}

    .emc-top-number li:nth-child(3) {

    padding: 0 5px 0 5px !important;

}

 .emc-top-number .nav-emc-link {

    color: #637381;

    font-family:Poppins;

    font-size: 14px;

 

    letter-spacing: 0.4px;

    line-height: 17px;

    text-align: left;

    position: relative;

    padding: 0px;

    font-weight: 700;

}



.emc-top-number .nav-emc-link-2 {

    color: #637381;

    font-family:Poppins;

    font-size: 14px;

 

    letter-spacing: 0.4px;

    line-height: 17px;

    text-align: left;

    position: relative;

    padding: 0px;

    font-weight: 700;

}

.emergency::before {

    content: "";

    position: absolute;

   left: -125px;

    top: 3px;

    width: 26px;

    height: 26px;

    /* background: url(images/help.png) 104px 0px; */

}



.hospital::before {

    content: "";

    position: absolute;

    left: -107px;

    top: 5px;

    width: 23px;

    height: 27px;

    /* background: url(images/spirite1.png) 84px 0px; */

}

  

  .hospital-mail::before {

    content: "";

    position: absolute;

   left: -226px;

    top: 5px;

    width: 25px;

    height: 25px;

    /* background: url(images/sms.png) 75px 0px; */

}



.brochure{

 background-color: #06d755;

    padding: 10px 9px;

  border-color: #f7961e;



    -webkit-box-shadow: 0 9px 20px 0 #f7961e8f;

    box-shadow: 0 9px 20px 0 #f7961e8f;

    border-radius: 20px;

color: #fff;

}



.appwhats {

  font-size: 18px;

} 







/*.emergency::after {

    content: "";

    position: absolute;

    right: -10px;

    top: 6px;

    border-right: 1px solid #E3E3E3;

    height: 25px;

}*/



                                .fasili{

                                  left: 40px;

                                  top: 39px;

                               

                                }


   </style>


   <div id="mainNavbar" class="newnav-header desktopheader" >

                    <div class="container-md" style="margin:0px 90px">

                        <div class="row grid-new">

                            <div class="col-lg-9 col-md-3  col-xs-5 col-sm-03 asterLogo newasterlogo "style="
    padding-left:20px;
    padding-right:20px;
">
                                
                                <a href="index.php">
                                    <!-- <img src="images/bigemc-logo.png" alt="" data-toggle="tooltip" > -->
                                    <div class="logo-section" style="display:flex;gap:30px;align-items: baseline; ">
                                        <div class="logo">
                                            <img src="doctors/emc logo.png" style="width:116px" alt="" data-toggle="tooltip" >

                                        </div>
                                        <div class="titletext">
                                            <h1 style="font-family:times new roman;font-size:57px;
    margin-top: 32px;font-weight:bold;color:black">EMC HOSPITAL</h1>
                                            <p style="font-family: times new roman;font-weight:bold;text-align:center;font-size: 20px;margin:0px;
    color: black;">GREEN AVENUE, AMRITSAR</p>
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <div class="col-lg-12 col-md-9 col-xs-7 col-sm-09 mobile-spacing"style="
    padding-left: 0px;
    padding-right: 0px;
">

                             

                                <ul class="emc-top-number hidden-xs hidden-sm">

                                  <li><a class="nav-emc-link" href="#">

                                    <div class="emergency">

                                    <!-- <span class="d-none d-md-block">

                                        <small>Ambulance</small><br><a class="mailphnclicks" href="tel:+916239511500">62395-11500 </a>

                                    </span> -->

                                    <a href="tel:+917009182189">
                                        <small style="margin-bottom:-17px ;margin-left:32px;font-family: 'Titillium Web', sans-serif;
    font-size: 12px;
    font-weight: 600;color: #637381;">EMC Green Avenue</small>
                                        <span class="icon-box" style="display:flex;gap:10px;align-items: center;">
                                            <!-- <div class="img"><img src="http://localhost/emc-hospital/emc-green-avenue/images/help.png" style="margin-top:0px" alt="" srcset=""></div> -->
                                            <div class="img" style="margin-top:0px">
                                            <i class="fa-solid fa-phone-volume" style="color: #337af5;font-size: 20px;
"></i>
                                            </div>
                                            <p style="font-family: Poppins;
    font-size: 14px;font-weight: 700;color: #637381;">70091-82189</p>
                                        </span>

                                    </a>

                                </div></a>

                              </li>

                                  <li><a class="nav-emc-link" href="#">

                                    <div class="hospital">

                                    <!-- <span class="d-none d-md-block">

                                        <small>Hospital</small><br><a class="mailphnclicks" href="tel:+917009182189"> 7009182189 </a>

                                    </span> -->
                                    <a href="tel:+919216660516">
                                        <small style="margin-bottom:-17px ;margin-left:36px;font-family: 'Titillium Web', sans-serif;
    font-size: 12px;
    font-weight: 600;color: #637381;">EMC Shakti Nagar</small>
                                        <span class="icon-box" style="display:flex;gap:10px;align-items:center;">
                                            <!-- <div class="img"><img src="http://localhost/emc-hospital/emc-green-avenue/images/spirite1.png" style="margin-top:6px" alt="" srcset=""></div> -->

                                            <div class="img"><i class="fa-solid fa-phone-volume" style="color:#337af5;font-size: 20px;
"></i></div>
                                            <p style="font-family: Poppins;
    font-size: 14px;font-weight: 700;color: #637381;">92166-60516</p>
                                        </span>

                                    </a>

                                </div></a>

                              </li>

                              

                               <li><a class="nav-emc-link" href="#">

                                    <div class="hospital-mail">

                                    <!-- <span class="d-none d-md-block">

                                        <small>Email</small><br> <a class="mailphnclicks" href="mailto:emchelpline@gmail.com">emchelpline@gmail.com</a>

                                    </span> -->

                                    <a href="tel:7009182189">
                                        <small style="margin-bottom:-17px ;margin-left:40px;font-family: 'Titillium Web', sans-serif;
    font-size: 12px;
    font-weight: 600;color: #637381;">Pulse Hospital</small>
                                        <span class="icon-box" style="display:flex;gap:10px;align-items:center;">
                                            <!-- <div class="img"><img src="http://localhost/emc-hospital/emc-green-avenue/images/sms.png" style="margin-top:6px" alt="" srcset=""></div> -->
                                            <div class="img"><i class="fa-solid fa-phone-volume" style="color:#337af5;font-size: 20px;
"></i></div>
                                            <p style="font-family: Poppins;
    font-size: 14px;font-weight: 700;color: #637381;">70091-82189</p>
                                        </span>

                                    </a>

                                </div></a>

                                

                              </li>
                             
                              <li><a class="nav-emc-link" href="#">

<div class="hospital-mail">

<!-- <span class="d-none d-md-block">

    <small>Email</small><br> <a class="mailphnclicks" href="mailto:emchelpline@gmail.com">emchelpline@gmail.com</a>

</span> -->

<a href="tel:9216660516">
    <small style="margin-bottom:-17px ;margin-left:40px;font-family: 'Titillium Web', sans-serif;
font-size: 12px;
font-weight: 600;color: #637381;">Abrol Hospital</small>
    <span class="icon-box" style="display:flex;gap:10px;align-items:center;">
        <!-- <div class="img"><img src="http://localhost/emc-hospital/emc-green-avenue/images/sms.png" style="margin-top:6px" alt="" srcset=""></div> -->
        <div class="img"><i class="fa-solid fa-phone-volume" style="color:#337af5;font-size: 20px;
"></i></div>
        <p style="font-family: Poppins;
font-size: 14px;font-weight: 700;color: #637381;">92166-60516</p>
    </span>

</a>

</div></a>



</li>
<li><a class="nav-emc-link" href="#">

<div class="hospital-mail">

<!-- <span class="d-none d-md-block">

    <small>Email</small><br> <a class="mailphnclicks" href="mailto:emchelpline@gmail.com">emchelpline@gmail.com</a>

</span> -->

<a href="tel:9216660516">
    <small style="margin-bottom:-17px ;margin-left:40px;font-family: 'Titillium Web', sans-serif;
font-size: 12px;
font-weight: 600;color: #637381;"></small>
    <span class="icon-box" style="display:flex;gap:10px;align-items:center;">
        <!-- <div class="img"><img src="http://localhost/emc-hospital/emc-green-avenue/images/sms.png" style="margin-top:6px" alt="" srcset=""></div> -->
        <div class="img"><i class="fa-solid fa-phone-volume" style="color:#337af5;font-size: 20px;
"></i></div>
        <p style="font-family: Poppins;
font-size: 14px;font-weight: 700;color: #637381;">92166-60516</p>
    </span>

</a>

</div></a>



</li>

                              
                              
                            


                              <!-- <li class="whatsapp-icon">

                            <a href="#">

                          

                            </a>

                        </li>

                          

                             <li><a class="brochure" href="#"><i class="fab fa-whatsapp"></i></a></li> -->

                               

                                </ul>

                            



                                <ul>


                                    <li class="destopdisplaynone">

                                            <span class="caretMenuHamburger" onclick="removeblock();"></span></li>



                                </ul>



                            </div>
                        </div>
                        <ul class="bottam-nav mobiledisplaynone tabdisplaynone new-nav bst" style="
    margin-top: 0px;
    margin-bottom: 0px;
">

                                

                                   <li class="tabdisplynone">

                                    <a class="no_curser" href="about.php">About Us </a>

                                        <div class="ourspecialities about-us">

                                            <div class="arrow-up"></div>

                                            <ul class="drop">

                                              <div class="container">

                                                <div class="row">

                                                    <div class="col-md-3 col-lg-3">

                                                       

                                                        <div>

                                                            <ul class="padding-0 drop">

                                                                



                                                                 <a href="mangement-desk.php">

                                                                    <li>Mangement Desk</li>

                                                                </a>





                                                                  <a href="empanelment.php">

                                                                  <li>Empanelment</li>

                                                                  </a>

                                                                 <a href="events-news.php">

                                                                    <li> News & Events</li>

                                                                </a>

                                                                <a href="our-team.php">

                                                                    <li>Our Team</li>

                                                                </a>

                                                               <!--  <a href="opd-centres.php">

                                                                    <li>OPD Centres </li>

                                                                </a> -->



                                                                <a href="opd-centres.php">

                                                                    <li>OPD Centres </li>

                                                                </a>

                                                                 <a href="marketing-team.php">

                                                                    <li>Marketing Team</li>

                                                                </a>

                                                                

                                                                  <a href="gallery.php">

                                                                    <li>Gallery</li>

                                                                </a>



                                                                

                                                                <!--a  href="blog.php">  <li>Blog </li></a>



                                                                  <a href="careers.php">

                                                                    <li>Career</li>

                                                                </a-->

                                                                

                                                                

                                                                

                                                            </ul>

                                                        </div>

                                                      </div>



                                                    </div>

                                                   

                                                 

                                                </div>

                                            </ul>

                                        </div>



                                    </li>



                                    <style type="text/css">

                                      

                                        /*.bst ul a{

                                        color: #fff;

                                        }*/

                                      .scope-center ul li a:nth-child(1) {

                                        color: #fff;

                                      }

                                    </style>



                                 <li class="tabdisplynone">

                                    <a class="no_curser" href="#">Academics </a>

                                        <div class="ourspecialities about-us">

                                            <div class="arrow-up"></div>

                                            <ul class="drop">

                                              <div class="container">

                                                <div class="row">

                                                    <div class="col-md-3 col-lg-3">

                                                       

                                                        <div>

                                                            <ul class="padding-0 drop">

                                                                



                                                                 <a href="dnb_anaesthesia.php">

                                                                    <li>DNB-Anaesthesia</li>

                                                                </a>





                                                                 
                                                                

                                                                

                                                                

                                                            </ul>

                                                        </div>

                                                      </div>



                                                    </div>

                                                   

                                                 

                                                </div>

                                            </ul>

                                        </div>



                                    </li>

                                    <li><a  href="doctors.php">Our Doctors</a></li>

                                    <li class="tabdisplynone"><a class="no_curser"

                                          

                                            href="#">Our Departments </a>

                                        <div class="ourspecialities scope1">

                                            <div class="arrow-up"></div>

                                            <ul>

                                               <div class="container">

                                                <div class="row">

                                                    <div class="col-md-3 col-lg-3">

                                                      <br>

                                                        <h4> </h4>

                                                        <div class="bst" >

                                                            <ul class="padding-0">

                                                                <a href="cardiology.php">

                                                                    <li> <img src="images/icons/cardiology.png" alt="">  Cardiology</li>

                                                                </a>

                                                                <a href="cardiologist.php">

                                                                    <li> <img src="images/icons/cardiac-sciences.png" alt=""> Cardiothoracic Surgery</li>

                                                                </a>

                                                                 <a href="critical-trauma-care.php">

                                                                    <li> <img src="images/icons/critical.png" alt=""> Emergency & Trauma Care  </li>

                                                                </a>

                                                                 <a href="anaesthesia.php">

                                                                    <li> <img src="images/icons/critical.png" alt=""> Critical Care & Anaesthesia </li>

                                                                </a>



                                                                  <a href="nephrology.php">

                                                                    <li> <img src="images/icons/nephrology.png" alt=""> Nephrology & Dialysis</li>

                                                                </a>

                                                                <a href="neuro-surgeon.php">

                                                                    <li> <img src="images/icons/neurosurgery.png" alt=""> Neuro Surgery  </li>

                                                                </a>

                                                                

                                                               <a href="neurology.php">

                                                                    <li> <img src="images/icons/urology.png" alt="">Neurology </li>

                                                                </a>

                                                                <a href="gastroenterology.php">

                                                                    <li> <img src="images/icons/gastroenterology-hepatology.png" alt="">Gastroenterology  & Hepatology

                                                                    </li>

                                                                </a>



                                                                 <a href="ortho-joint-replacement-surgeon.php">

                                                                    <li> <img src="images/icons/orthopedic-advance-joint-replacement.png" alt="">Orthopaedics & Joint Replacement </li>

                                                                </a>



                                                                

                                                            </ul>

                                                        </div>

                                                   



                                                    </div>

                                                    <div class="col-md-3 col-lg-3">

                                                         <h4></h4>

                                                         <br>

                                                        <div>

                                                            <ul class="menu-multi-ul padding-0">

                                                              

 

                                                               

                                                                  <a href="general-medicine.php">

                                                                    <li> <img src="images/icons/medical-Oncology-OncoSurgery.png" alt="">Medicine & Endocrinology 

                                                                    </li>

                                                                </a>

                                                                 <a href="vascular-surgery.php">

                                                                    <li> <img src="images/icons/reconstructive-surgery.png" alt="">Plastic & Reconstructive  Surgery</li>

                                                                </a>



                                                                  <a href="laparoscopic-surgery.php">

                                                                    <li> <img src="images/icons/general-laparoscopic-surgery.png" alt="">General & Laproscopic Surgery </li>

                                                                </a>



                                                               <a href="urology.php">

                                                                    <li> <img src="images/icons/urology.png" alt="">Urology</li>

                                                                </a>





                                                              <a href="gynecologist.php">

                                                                <li> <img src="images/icons/obstetrics-gynaecology.png" alt=""> Gynaecology, Obstetrics <!-- and Infertility Medicine -->  </li>

                                                                </a>

                                                                  <a href="colon-rectal-surgery.php">

                                                                    <li> <img src="images/icons/colon-rectal-surgery.png" alt=""> Colon & Rectal Surgery </li>

                                                                </a>

                                                                 <a href="ent-oncology.php">

                                                                    <li> <img src="images/icons/ent-head-neck-oncology.png" alt=""> Ent / Ent Oncology</li>

                                                                </a>

                                                                   <a href="oncology.php">

                                                                    <li> <img src="images/icons/internal-family-medicine.png" alt="">Medical & Surgical Oncology 

                                                                    </li>

                                                                </a>

                                                                <a href="psychiatry.php">

                                                                    <li> <img src="images/icons/psychiatry.png" alt=""> Psychiatry & De-addiction</li>

                                                                </a>



                                                                



                                                                



                                                            </ul>

                                                        </div>



                                                    </div>

                                                    <div class="col-md-3" style="margin-top:20px;">

                                                        <h4></h4>

                                                        <div>

                                                            <ul>

                                                                <div style="margin-top:3px;">

                                                                    <h4></h4>

                                                                    <div style="">

                                                                        <ul class="padding-0">

                                                                    <a href="physiotherapy.php">

                                                                    <li> <img src="images/icons/physiotherapy.png" alt="">  Physiotheraphy & Rehabilitation</li>

                                                                </a>



                                                                 <a href="radiology-imaging.php">

                                                                    <li> <img src="images/icons/radiology-imaging.png" alt=""> Radiology & Imaging </li>

                                                                </a>



                                                                <a href="transfusion-services.php">

                                                                    <li> <img src="images/icons/blood-bank.png" alt=""> Transfusion Services ( Blood Bank ) </li>

                                                                </a>

                                                                 <a href="nutrition.php">

                                                                    <li> <img src="images/icons/dietetion-nutrition.png" alt=""> Dietician & Nutrition </li>

                                                                </a>



                                                                  <a href="pulmonology.php">

                                                                    <li> <img src="images/icons/pulmonology.png" alt="">Pulmonology </li>

                                                                </a>

                                                                 <a href="oral-and-maxillofacial-surgery.php">

                                                                    <li> <img src="images/icons/oral-and-maxillofacila-surgery.png" alt=""> Oral & Maxillofacial Surgery </li>

                                                                </a>

                                                               

                                                               

                                                                <!--    <a href="oncology.php">

                                                                    <li> <img src="images/icons/ent-head-neck-oncology.png" alt=""> ENT / ENT Oncology  </li>

                                                                </a>

                                                              -->

                                                                 <a href="pathology.php">

                                                                    <li> <img src="images/icons/pathology.png" alt=""> Pathology</li>

                                                                </a>



                                                                            

                                                                        </ul>

                                                                    </div>



                                                                </div>

                                                            </ul>

                                                        </div>



                                                    </div>  

                                                </div>

                                              </div>

                                            </ul>

                                        </div>



                                    </li>


									
                               

                                     <li><a  href="infrastructure.php">Infrastructure</a></li>

                                



                                 <li><a  href="careers.php">Careers</a></li>
                               

                
                                 <li><a  href="https://emchospital.co.in/emc-green-avenue/blog/">Blog</a></li>

                                  

                                  <li><a  href="contact.php">Contact Us</a></li>



                                 <!--    <li class="aster-number">

                                        <a class="nav-link aster-cmi-call" href="tel:000000">

                                            <div class="aster">



                                                <span class="d-none d-md-block">

                                                    <small>70091-82189</small> </a>

                                                    / <a  href="tel:0000"> <small>62395-11500</small></a>

                                                </span>

                                            </div>

                                       

                                    </li> -->

                                   <!--  <li>

                                       

                                        <form id="demo-2">

                                            <input type="search" placeholder="Search" class="typeahead">

                                        </form>

                                    </li> -->

                                    <li class="mobiledisplaynone tabdisplaynone"><span id="" class="destopmenuonly">

                                       

                                    <span class="baseline"></span></li> 

                                    <!--  <li class="tuneicon mobiledisplaynone tabdisplaynone">

                                        <a href="#"><img src="#"></a>

                                   </li> --> 

                                </ul>

                    </div>

                    <div class="nain destopdisplaynone">

                        <ul class="mobiledocspe">

                            <li><a href="doctors.php">Our Doctors</a> </li>

                            <li></li>

                            <div id="our-specialities-menu" class="our-spe">

                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                                <h6 class="our-center-ex">CENTRES OF EXCELLENCE  </h6>

                                <div class="list-of-center-ex">



                                <a href="cardiology.php">Cardiology</a>

                                <a href="cardiologist.php">Cardiothoracic Surgery</a>

                                <a href="critical-trauma-care.php">Emergency & Trauma Care </a>

                                <a href="anaesthesia.php">Critical Care & Anaesthesia </a>



                                <a href="nephrology.php">Nephrology & Dialysis</a>

                                <a href="neuro-surgeon.php">Neuro Surgery</a>



                                <a href="neurology.php">Neurology</a>

                                <a href="gastroenterology.php">Gastroenterology & Hepatology</a>

                                <a href="ortho-joint-replacement-surgeon.php">Orthopaedics & Joint Replacement</a>

                                <a href="general-medicine.php">Medicine & Endocrinology </a>

                                <a href="vascular-surgery.php">Plastic & Reconstructive Surgery </a>

                                <a href="laparoscopic-surgery.php">General & Laproscopic Surgery</a>

                                <a href="urology.php">Urology</a>

                                <a href="gynecologist.php"> Gynaecology, Obstetrics</a>

                                <a href="colon-rectal-surgery.php"> Colon & Rectal Surgery</a>

                                <a href="ent-oncology.php"> Ent / Ent Oncology</a>

                                <a href="oncology.php">Medical & Surgical Oncology </a>

                                <a href="psychiatry.php"> Psychiatry & De-addiction</a>

                                <a href="physiotherapy.php">Physiotheraphy & Rehabilitation</a>

                                <a href="radiology-imaging.php">Radiology & Imaging </a>

                                <a href="transfusion-services.php"> Transfusion Services ( Blood Bank ) </a>

                                <a href="nutrition.php"> Dietician & Nutrition </a>

                                <a href="pulmonology.php">Pulmonology</a>

                                <a href="oral-and-maxillofacial-surgery.php"> Oral & Maxillofacial Surgery</a>

                                <a href="pathology.php"> Pathology</a>









                                     



                                 

                                   <!--  <h6 class="our-center-ex">Facilities</h6> -->

                                    <div class="list-of-center-ex">

                                    <!-- <a href="#">Spine Surgery</a>

                                        <a href="#">Internal Medicine</a>

                                        <a href="#">Pulmonology</a>

                                        <a href="#">Bariatric &

                                            Metabolic

                                            Surgery</a>

                                        <a href="#">Plastic, Reconstructive

                                            &amp; Aesthetic

                                            Surgery</a>

                                        <a href="#"> ENT</a>

                                        <a href="#">IVF &amp; Fertility</a>

                                        <a href="#">Vascular Surgery</a>



                                        <a href="#">Anaesthesia

                                            &amp;

                                            Critical Care</a>

                                        <a href="#">Emergency Medicine</a>

                                        <a href="#">EMC NeuKIDS</a>

                                        <a href="#">Nuclear Medicine</a>

                                        <a href="#">Endocrinology</a>

                                        <a href="#">Rheumatology</a>

                                        <a href="#">Dermatology</a>

                                        <a href="#">Ophthalmology</a>

                                       

                                        <a class="well-menu" href="#"> EMC wellness</a> -->

                                    </li>

                                    </div>

                                </div>



                            </div>

                            <span class="ex-our-txt" onclick="openNav()">Our Departments</span>

                          <!--   <li class="headerline360"></li> -->

                            <!-- <li >  <a href="#"><img src="images/virtuals-tour.png"></a></li> -->

                        </ul>

                    </div>

                </div>



                

 <div id="sideNaveContainer">

            <div class="sidenav" id="mySidenav">

                <a href="#" class="closebtn" onclick="closeNav()">&times;</a>

                <a href="#" class="dropdow_a">

                    <button class="dropdown-btn">

                        Home 

                    </button>

                </a>

                <div class="dropdown-container"></div>



                <button class="dropdown-btn">

                    <ul>

                        <li><a href="about.php">About Us </a></li>

                        <li> <i class="fa fa-caret-down"></i></li>

                    </ul>

                </button>

                <div class="dropdown-container">

                 <a href="mangement-desk.php">Mangement Desk</a>

                 <a href="empanelment.php">Empanelment</a>

                <a href="events-news.php">News & Events</a>

                <a href="our-team.php">Our Team</a>

                <a href="opd-centres.php">OPD Centres</a>

                <a href="marketing-team.php">Marketing Team</a>

                <a href="gallery.php">Gallery</a>

                <a href="blog.php"></a>

               <a href="careers.php">Career</a>

               </div>
			    <div class="dropdown-container"></div>



                <button class="dropdown-btn">

                    <ul>

                        <li><a href="#">Academics </a></li>

                        <li> <i class="fa fa-caret-down"></i></li>

                    </ul>

                </button>

                <div class="dropdown-container">

                                                                                  <a href="dnb_anaesthesia.php">

                                                                    <li>DNB-Anaesthesia</li>

                                                                </a>

                

               </div>

                <!-- OUR SPECIALITY SECTION only mobile-->

                <button class="dropdown-btn hidden-lg hidden-md changetoactive">

                    <ul>

                        <li><a href="#clients">Our Departments</a></li>

                        <li> <i class="fa fa-caret-down"></i></li>

                    </ul>

                </button>

                <div class="dropdown-container triggers">

                    <button class="dropdown-btn">

                        <ul>

                            <li><a href="#clients" style="display:inline;padding:5px 0;">CENTRES OF EXCELLENCE  </a></li>

                            <li> <i class="fa fa-caret-down"></i></li>

                        </ul>

                    </button>

                    <div class="dropdown-container">

                          <a href="cardiology.php">Cardiology</a>

                                <a href="cardiologist.php">Cardiothoracic Surgery</a>

                                <a href="critical-trauma-care.php">Emergency & Trauma Care </a>

                                <a href="anaesthesia.php">Critical Care & Anaesthesia </a>



                                <a href="nephrology.php">Nephrology & Dialysis</a>

                                <a href="neuro-surgeon.php">Neuro Surgery</a>



                                <a href="neurology.php">Neurology</a>

                                <a href="gastroenterology.php">Gastroenterology & Hepatology</a>

                                <a href="ortho-joint-replacement-surgeon.php">Orthopaedics & Joint Replacement</a>

                                <a href="general-medicine.php">Medicine & Endocrinology </a>

                                <a href="vascular-surgery.php">Plastic & Reconstructive Surgery </a>

                                <a href="laparoscopic-surgery.php">General & Laproscopic Surgery</a>

                                <a href="urology.php">Urology</a>

                                <a href="gynecologist.php"> Gynaecology, Obstetrics</a>

                                <a href="colon-rectal-surgery.php"> Colon & Rectal Surgery</a>

                                <a href="ent-oncology.php"> Ent / Ent Oncology</a>

                                <a href="oncology.php">Medical & Surgical Oncology </a>

                                <a href="psychiatry.php"> Psychiatry & De-addiction</a>

                                <a href="physiotherapy.php">Physiotheraphy & Rehabilitation</a>

                                <a href="radiology-imaging.php">Radiology & Imaging </a>

                                <a href="transfusion-services.php"> Transfusion Services ( Blood Bank ) </a>

                                <a href="nutrition.php"> Dietician & Nutrition </a>

                                <a href="pulmonology.php">Pulmonology</a>

                                <a href="oral-and-maxillofacial-surgery.php"> Oral & Maxillofacial Surgery</a>

                                <a href="pathology.php"> Pathology</a>

                        

                    </div>



                   <!--  <button class="dropdown-btn">

                        <ul>

                            <li><a href="#clients" style="display:inline;padding:5px 0;">MULTISPECIALITIES</a></li>

                            <li> <i class="fa fa-caret-down"></i></li>

                        </ul>

                    </button> -->

                    <div class="dropdown-container">

                   <!--  <a href="#">Spine Surgery</a>

                        <a href="#">Internal Medicine</a>

                        <a href="#">Pulmonology</a>

                        <a href="#">Bariatric & Metabolic

                            Surgery</a>

                        <a href="#">Plastic, Reconstructive &amp; Aesthetic

                            Surgery</a>

                        <a href="#"> ENT</a>

                        <a href="#">IVF &amp; Fertility</a>

                        <a href="#">Vascular Surgery</a>



                        <a href="#">Anaesthesia &amp;

                            Critical Care</a>

                        <a href="#">Emergency Medicine</a>

                        <a href="#">EMC NeuKIDS</a>

                        <a href="#">Nuclear Medicine</a>

                        <a href="#">Endocrinology</a>

                        <a href="#">Rheumatology</a>

                        <a href="#">Dermatology</a>

                        <a href="#">Ophthalmology</a>

                        <a href="#">Clinical Imaging &

                            Interventional Radiology</a>

                        <a href="#">Infectious Disease &

                            Travel Medicine</a>

                        <a href="#">Psychiatry & Counselling Services</a>

                        <a href="#">Craniomaxillofacial Surgery</a>

                        <a href="#">Dental Sciences</a>

                        <a href="#">Physiotherapy & Rehabilitation</a>

                        

                        <a class="well-menu" href="#"> EMC wellness</a> -->

                    </li>

                    </div>

                </div>

                

             <!--    <div class="dropdown-container">

                    <a 

                        href="#">Operation

                        Theatres</a>

                    <a 

                        href="#">Ambulance

                        Service</a>

                    <a 

                        href="#">Diagnostics</a>

                    <a 

                        href="#">Blood Bank</a>

                    <a 

                        href="#">Pharmacy</a>

                    <a 

                        href="#">EMC

                        serve</a>

                </div> -->



                 <button  class="dropdown-btn">

                    <ul>

                        <li><a href="#clients">Facilities </a></li>

                        <li> <i class="fa fa-caret-down"></i></li>

                    </ul>

                </button>

                <div class="dropdown-container">

                 

                    <a href="blood-bank.php">Blood Bank 24/7</a>

                     <a href="flat-cath-labs.php">Flat Cath Labs</a>

                     <a href="fibro-scan-for-liver.php">Fibro Scan for Liver</a>

                     <a href="ct-scan.php">CT-Scan 27x7</a>

                     <a href="echo-cardiography.php">ECHO Cardigraphy</a>

                     <a href="digital-x-ray.php">Digital X-RAY 24x7</a>

                     <a href="eeg-emg-ecg.php">EEG/EMG/ECG </a>



                    

                </div>



               <!--  <button  class="dropdown-btn">

                    <ul>

                        <li><a

                        href="#" target="_blank">International

                                Patients</a></li>

                    </ul>

                </button> -->

                <div class="dropdown-container"></div>



                <a href="blog.php" class="dropdow_a">

                    <button  class="dropdown-btn">



                        <ul>

                            <li>Blog</li>

                        </ul>

                    </button>

                </a>



                <div class="dropdown-container"></div>



                <button  class="dropdown-btn">

                    <ul>

                        <li><a href="#clients">EMC Media Center</a></li>

                        <li> <i class="fa fa-caret-down"></i></li>

                    </ul>

                </button>

                <div class="dropdown-container">

                    <a  href="events-news.php">Events

                        & News</a>

                    <a 

                        href="gallery.php">Gallery</a>

                    <!-- <a  href="testimonials.php">Testimonials</a> -->

                   

                   

                </div>



                <button  class="dropdown-btn">

                    <ul>

                        <li><a href="careers.php">Career</a></li>

                        <li></li>

                    </ul>

                </button>

                <div class="dropdown-container"></div>



                <button  class="dropdown-btn">

                    <ul>

                        <li><a href="contact.php">Contact Us</a></li>

                        <li></li>

                    </ul>

                </button>

                <div class="dropdown-container"></div>

                <button  class="dropdown-btn">

                    <ul>

                        <!-- li><a href="#"> Virtual Tour</a></li> -->

                        <li></li>

                    </ul>

                </button>

                <div class="dropdown-container"></div>

            </div>

        </div>



                <div class="destopmenu">

                    <div class="container destoprow">

                        <div class="row">

                            <div class="col-lg-9 col-md-9 col-sm-9">

                                <div class="right_side_menu">

                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single_list">

                                                <a href="#"

                                                    class="single_list_main no_curser">About Us  </a>

                                                <ul class="single_list_sub">

                                                    <li><a class="single_list_inner"

                                                            href="about.php">About

                                                        </a></li>

                                                    <li><a class="single_list_inner"

                                                            href="mangement-desk.php">Mangement Desk</a></li>

                                                  

                                                </ul>

                                            </div>



                                            <div class="single_list">

                                                <a href="#" class="single_list_main no_curser">EMC Media Center </a>

                                                <ul class="single_list_sub">

                                                    <li><a class="single_list_inner"

                                                            href="events-news.php">Events and News</a></li>

                                                    <li><a class="single_list_inner"

                                                            href="gallery.php">Gallery</a></li>

                                                    <!-- <li><a class="single_list_inner"

                                                            href="testimonial.php">Testimonials</a></li> -->

                                                

                                            </ul>

                                            </div>

                                           <!--  <div class="single_list">

                                                <a href="#" class="single_list_main no_curser">EMC Clinic</a>

                                                <ul class="single_list_sub">

                                                    <li><a class="single_list_inner"

                                                            href="#">1</a>

                                                    </li>

                                                    <li><a class="single_list_inner"

                                                            href="#">2</a>

                                                    </li>

                                                    <li><a class="single_list_inner"

                                                            href="#">3

                                                        </a></li>



                                                </ul>

                                            </div> -->



                                        </div>

                                      

                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single_list">

                                                <a href="#" class="single_list_main no_curser">Our Departments </a>

                                                <ul class="single_list_sub">

                                                        <li><a class="single_list_inner"  href="cardiology.php">

                                                                    Cardiology

                                                                </a></li>

                                                                <li><a class="single_list_inner"  href="cardiologist.php">

                                                                    Cardiothoracic Surgery

                                                                </a></li>

                                                                <li><a class="single_list_inner"  href="critical-trauma-care.php">

                                                                   Emergency & Trauma Care 

                                                                </a></li>

                                                                <li><a class="single_list_inner"  href="anaesthesia.php">

                                                                  Critical Care & Anaesthesia

                                                                   

                                                                </a></li>

 

                                                               <li> <a class="single_list_inner"  href="nephrology.php">

                                                                   Nephrology & Dialysis

                                                                </a></li>



                                                                  <li><a class="single_list_inner"  href="neuro-surgeon.php">

                                                                   Neuroscience

                                                                    

                                                                </a></li>

                                                                 <li><a class="single_list_inner"  href="neurology.php">

                                                                   neurology 

                                                                </a></li>



                                                                  <li><a class="single_list_inner"  href="gastroenterology.php">

                                                                   Gastroenterlogy & Gastrointestinal Surgery 

                                                                </a></li>



                                                              <li> <a class="single_list_inner"  href="urology.php">

                                                                   Department of Urology

                                                                </a></li>



                                                                <li><a class="single_list_inner"  href="ortho-joint-replacement-surgeon.php">

                                                               Orthopaedics & Joint Replacement

                                                                </a></li>  





                                                                  <li><a class="single_list_inner"  href="general-medicine.php">

                                                                  Medcine & Endocrinology  

                                                                </a></li>

                                                                 <li><a class="single_list_inner"   href="vascular-surgery.php">

                                                                            Plastic & Reconstructive  Surgery

                                                                </a></li>

                                                                  <li> <a class="single_list_inner"  href="laparoscopic-surgery.php">

                                                                 General & Laproscopic Surgery

                                                                  

                                                                </a></li>

                                                                

 



                                                </ul>

                                            </div>

                                        </div> 



                                         <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single_list">

                                            

                                                <ul class="single_list_sub">

        

                                                                <li><a class="single_list_inner"  href="urology.php">

                                                                 Urology

                                                                </a></li>



                                                                <li><a class="single_list_inner"  href="gynecologist.php">

                                                                    Gynaecology, Obstetrics 

                                                                </a></li>



                                                                 <li><a class="single_list_inner"  href="colon-rectal-surgery.php">

                                                                     Colon & Rectal Surgery 

                                                                </a></li>



                                                                <li><a class="single_list_inner"  href="ent-oncology.php">

                                                                   ENT / ENT Oncology

                                                                </a></li>

                                                                <li> <a class="single_list_inner"  href="oncology.php">

                                                                  Medical & Surgical Oncology 

                                                                </a></li>



                                                                  <li><a class="single_list_inner"  href="psychiatry.php">

                                                                 Psychiary & De-addiction

                                                                </a></li>

                                                                <li> <a class="single_list_inner"  href="physiotherapy.php">

                                                                    Physiotheraphy & Rehblitation

                                                                </a></li>

                                                               

                                                               

                                                                  <li> <a class="single_list_inner"  href="radiology-imaging.php">

                                                                Radiology & Imaging

                                                                </a></li>

                                                             

                                                                 <li><a class="single_list_inner"  href="transfusion-services.php">

                                                                    Transfusion Services ( Blood Bank )

                                                                </a></li>



                                                                 <li><a class="single_list_inner"  href="nutrition.php">

                                                                   Dietician & Nutrition

                                                                </a></li>



                                                                  <li><a class="single_list_inner"  href="pulmonology.php">

                                                                   Pulmonology 

                                                                </a></li>



                                                                 <li><a class="single_list_inner"  href="oral-and-maxillofacial-surgery.php">

                                                            Oral & Maxillofacial Surgery

                                                                </a></li>





                                                                <li><a class="single_list_inner"  href="pathology.php">

                                                     Pathology

                                                                </a></li>





 



                                                </ul>

                                            </div>

                                            

                                        </div> 

                                    </div>

                                </div>



                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3">

                                <div class="left_side_menu">

                                    <div class="single_list_left">

                                        <a 

                                            href="index.php"

                                            class="single_list_main">Home  </a>

                                    </div>

                                  

                                    <div class="single_list_left">

                                        <a 

                                            href="blog.php"

                                            class="single_list_main">Blog</a>

                                    </div>

                                     <div class="single_list_left">

                                        <a 

                                            href="empanelment.php"

                                            class="single_list_main">Empanelment</a>

                                    </div>

                                    <div class="single_list_left">

                                        <a 

                                            href="careers.php"

                                            class="single_list_main">Career</a>

                                    </div>

                                    <div class="single_list_left">

                                        <a href="contact.php"

                                            class="single_list_main">Contact Us </a>

                                    </div>



                                    <div class="menu_book">

                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#"

                                            class="bookappointment">

                                            <img src="images/book.png" alt="">

                                            <p style="margin-top:30px"><img src="images/emc-accredited.jpg" alt=""></p>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div onclick="hidemainmenu()" class="menu_close_btn">

            

                        <span class="remove-button"></span>

                    </div>

                </div>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://kit.fontawesome.com/d1b555cbc6.js" crossorigin="anonymous"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-183765890-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-183765890-1');
</script>




