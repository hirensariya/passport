<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ST9WB0MF3P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ST9WB0MF3P');
</script>

<?php
session_start();

include 'c.php';



    $applying_for = $_POST['applying-for'];
    $type_of_application = $_POST['type-of-application'];
    $type_of_passport_booklet = $_POST['type-of-passport-booklet'];
    $passport_reason = $_POST['passport_reason'];
    $date_of_expiry = $_POST['date-of-expiry'];
    $has_passport_expired = $_POST['has-passport-expired'];
    $passport_appearance = $_POST['passport_appearance'];
    $passport_signature = $_POST['passport_signature'];
    $passport_given_name = $_POST['passport_given_name'];
    $passport_surname = $_POST['passport_surname'];
    $passport_dof = $_POST['passport_dof'];
    $passport_spouse_name = $_POST['passport_spouse_name'];
    $passport_address = $_POST['passport_address'];
    $passport_delete_ecr = $_POST['passport_delete_ecr'];
    $passport_other = $_POST['passport_other'];
    $applicant_name = $_POST['applicant-name'];
    $middle_name = $_POST['middle-name'];
    $applicant_surname = $_POST['applicant-surname'];
    $aadhaar_no = $_POST['aadhaar-no'];
    $applicant_gender = $_POST['applicant-gender'];
    $marital_status = $_POST['marital-status'];
    $applicant_dob = $_POST['applicant-dob'];
    $is_birth_india = $_POST['is-birth-india'];
    $birth_city = $_POST['birth-city'];
    $applicant_country = $_POST['applicant-country'];
    $applicant_state = $_POST['applicant-state'];
    $applicant_district = $_POST['applicant-district'];
    $applicant_citizenship = $_POST['applicant-citizenship'];
    $applicant_pan = $_POST['applicant-pan'];
    $applicant_voter_id = $_POST['applicant-voter-id'];
    $applicant_educational = $_POST['applicant-educational'];
    $applicant_employment_type = $_POST['applicant-employment-type'];
    $applicant_employment_org = $_POST['applicant-employment-org'];
    $applicant_spouse = $_POST['applicant-spouse'];
    $applicant_ecr = $_POST['applicant-ecr'];
    $applicant_visible_distinguishing = $_POST['applicant-visible-distinguishing'];
    $applicant_other_name = $_POST['applicant-other-name'];
    $pplicant_ever_changed_name = $_POST['applicant-ever-changed-name'];
    $applicant_family_father_fname = $_POST['applicant-family-father-fname'];
    $applicant_family_father_mname = $_POST['applicant-family-father-mname'];
    $applicant_family_father_sname = $_POST['applicant-family-father-sname'];
    $applicant_family_mother_fname = $_POST['applicant-family-mother-fname'];
    $applicant_family_mother_mname = $_POST['applicant-family-mother-mname'];
    $applicant_family_mother_sname = $_POST['applicant-family-mother-sname'];
    $applicant_family_guardian_fname = $_POST['applicant-family-guardian-fname'];
    $applicant_family_guardian_mname = $_POST['applicant-family-guardian-mname'];
    $applicant_family_guardian_sname = $_POST['applicant-family-guardian-sname'];
    $applicant_present_address = $_POST['applicant-present-address'];
    $applicant_address = $_POST['applicant-address'];
    $applicant_village = $_POST['applicant-village'];
    $applicant_detail_state = $_POST['applicant-detail-state'];
    $applicant_detail_district = $_POST['applicant-detail-district'];
    $applicant_detail_pin = $_POST['applicant-detail-pin'];
    $applicant_police_station = $_POST['applicant-police-station'];
    $applicant_detail_mobile = $_POST['applicant-detail-mobile'];
    $applicant_detail_email = $_POST['applicant-detail-email'];
    $applicant_detail_permanent_address = $_POST['applicant-detail-permanent-address'];
    $applicant_emergency_address = $_POST['applicant-emergency-address'];
    $applicant_emergency_mobile = $_POST['applicant-emergency-mobile'];
    $applicant_emergency_email = $_POST['applicant-emergency-email'];
    $applicant_previous_identity_certificate = $_POST['applicant-previous-identity-certificate'];
    $applicant_identity_certificate = $_POST['applicant-identity-certificate'];
    $applicant_date_of_issue = $_POST['applicant-date-of-issue'];
    $applicant_diplomatic_date_of_expiry = $_POST['applicant-diplomatic-date-of-expiry'];
    $applicant_diplomatic_place_of_issue = $_POST['applicant-diplomatic-place-of-issue'];
    $applicant_previous_passport = $_POST['applicant-previous-passport'];
    $applicant_previous_passport_filenumber = $_POST['applicant-previous-passport-filenumber'];
    $applicant_previous_passport_issue = $_POST['applicant-previous-passport-issue'];
    $applicant_previous_passport_applied = $_POST['applicant-previous-passport-applied'];
    $applicant_other_criminal = $_POST['applicant-other-criminal'];
    $applicant_court = $_POST['applicant-court'];
    $applicant_fir = $_POST['applicant-fir'];
    $applicant_law = $_POST['applicant-law'];
    $applicant_other_criminal_offence = $_POST['applicant-other-criminal-offence'];
    $applicant_offence_court = $_POST['applicant-offence-court'];
    $applicant_offence_fir = $_POST['applicant-offence-fir'];
    $applicant_offence_law = $_POST['applicant-offence-law'];
    $applicant_other_refused = $_POST['applicant-other-refused'];
    $applicant_refused = $_POST['applicant-refused'];
    $applicant_other_revoked = $_POST['applicant-other-revoked'];
    $applicant_revoked_passport_number = $_POST['applicant-revoked-passport-number'];
    $applicant_revoked_reason = $_POST['applicant-revoked-reason'];
    $applicant_other_political = $_POST['applicant-other-political'];
    $political_country = $_POST['political-country '];
    $applicant_other_ec = $_POST['applicant-other-ec'];
    $applicant_other_ec_emergency = $_POST['applicant-other-ec-emergency'];
    $applicant_other_ec_date = $_POST['applicant-other-ec-date'];
    $applicant_other_ec_travelled = $_POST['applicant-other-ec-travelled'];
    $applicant_other_ec_authority = $_POST['pplicant-other-ec-authority'];
    $applicant_other_ec_repatriated = $_POST['applicant-other-ec-repatriated'];
    $applicant_proof_birth = $_POST['applicant-proof-birth'];
    $applicant_proof_residential_address = $_POST['applicant-proof-residential-address'];
    $price = $_POST['price'];
    $promo = $_POST['hcode'];


    $inster = "insert into temp_passport(applying_for,type_of_application, type_of_passport_booklet, passport_reason, date_of_expiry, has_passport_expired, passport_appearance,passport_signature, passport_given_name, passport_surname, passport_dof, passport_spouse_name, passport_address, passport_delete_ecr, passport_other, applicant_name, middle_name, applicant_surname, aadhaar_no, applicant_gender, marital_status, applicant_dob, is_birth_india, birth_city, applicant_country, applicant_state, applicant_district, applicant_citizenship, applicant_pan, applicant_voter_id, applicant_educational, applicant_employment_type, applicant_employment_org, applicant_spouse, applicant_ecr, applicant_visible_distinguishing, applicant_other_name, applicant_ever_changed_name, applicant_family_father_fname, applicant_family_father_mname, applicant_family_father_sname, applicant_family_mother_fname, applicant_family_mother_mname, applicant_family_mother_sname, applicant_family_guardian_fname, applicant_family_guardian_mname, applicant_family_guardian_sname, applicant_present_address, applicant_address, applicant_village, applicant_detail_state, applicant_detail_district,applicant_detail_pin, applicant_police_station, applicant_detail_mobile,applicant_detail_email, applicant_detail_permanent_address, applicant_emergency_address, applicant_emergency_mobile, applicant_emergency_email, applicant_previous_identity_certificate, applicant_identity_certificate, applicant_date_of_issue, applicant_diplomatic_date_of_expiry, applicant_diplomatic_place_of_issue, applicant_previous_passport, applicant_previous_passport_filenumber, applicant_previous_passport_issue, applicant_previous_passport_applied, applicant_other_criminal, applicant_court, applicant_fir, applicant_law, applicant_other_criminal_offence, applicant_offence_court, applicant_offence_fir, applicant_offence_law, applicant_other_refused, applicant_refused, applicant_other_revoked, applicant_revoked_passport_number, applicant_revoked_reason, applicant_other_political, political_country, applicant_other_ec, applicant_other_ec_emergency, applicant_other_ec_date, applicant_other_ec_travelled, pplicant_other_ec_authority, applicant_other_ec_repatriated, applicant_proof_birth, applicant_proof_residential_address, code) VALUES ('$applying_for', '$type_of_application', '$type_of_passport_booklet', '$passport_reason', '$date_of_expiry', '$has_passport_expired', '$passport_appearance', '$passport_signature','$passport_given_name', '$passport_surname', '$passport_dof', '$passport_spouse_name', '$passport_address', '$passport_delete_ecr', '$passport_other', '$applicant_name', '$middle_name', '$applicant_surname', '$aadhaar_no', '$applicant_gender', '$marital_status', '$applicant_dob', '$is_birth_india', '$birth_city', '$applicant_country', '$applicant_state', '$applicant_district', '$applicant_citizenship', '$applicant_pan', '$applicant_voter_id', '$applicant_educational', '$applicant_employment_type', '$applicant_employment_org', '$applicant_spouse', '$applicant_ecr', '$applicant_visible_distinguishing', '$applicant_other_name', '$applicant_ever_changed_name', '$applicant_family_father_fname', '$applicant_family_father_mname', '$applicant_family_father_sname', '$applicant_family_mother_fname', '$applicant_family_mother_mname', '$applicant_family_mother_sname', '$applicant_family_guardian_fname','$applicant_family_guardian_mname', '$applicant_family_guardian_sname', '$applicant_present_address', '$applicant_address', '$applicant_village', '$applicant_detail_state', '$applicant_detail_district','$applicant_detail_pin', '$applicant_police_station', '$applicant_detail_mobile','$applicant_detail_email', '$applicant_detail_permanent_address', '$applicant_emergency_address', '$applicant_emergency_mobile', '$applicant_emergency_email', '$applicant_previous_identity_certificate', '$applicant_identity_certificate', '$applicant_date_of_issue', '$applicant_diplomatic_date_of_expiry', '$applicant_diplomatic_place_of_issue', '$applicant_previous_passport', '$applicant_previous_passport_filenumber', '$applicant_previous_passport_issue', '$applicant_previous_passport_applied', '$applicant_other_criminal', '$applicant_court', '$applicant_fir', '$applicant_law', '$applicant_other_criminal_offence', '$applicant_offence_court', '$applicant_offence_fir', '$applicant_offence_law', '$applicant_other_refused', '$applicant_refused', '$applicant_other_revoked', '$applicant_revoked_passport_number', '$applicant_revoked_reason', '$applicant_other_political', '$political_country', '$applicant_other_ec', '$applicant_other_ec_emergency', '$applicant_other_ec_date', '$applicant_other_ec_travelled', '$pplicant_other_ec_authority', '$applicant_other_ec_repatriated', '$applicant_proof_birth', '$applicant_proof_residential_address', '$promo');";
    $res = mysqli_query($con, $inster);
    

// include 'submit.php';


include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('ef2286a861c5175074f0476aa6937795', 'ef4b2a65c57a2b12506d16ce2ad90a74','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" =>"passport",
        "amount" =>$price,
        "send_email" => true,
        "email" =>$applicant_detail_email,
        "buyer_name" =>$applicant_name,
        "phone"=>$phone,
        "send_sms"=>true,
        "allow_repeated_payments"=>false,
        "redirect_url" => "http://www.example.com/handle_redirect.php"
        ));

    print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());


}
session_destroy();
?>