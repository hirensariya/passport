<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <title>Passport</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ST9WB0MF3P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ST9WB0MF3P');
</script>
</head>

<body>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">applying_for</th>
                <th scope="col">type_of_application</th>
                <th scope="col">type_of_passport_booklet</th>
                <th scope="col">passport_reason</th>
                <th scope="col">date_of_expiry</th>
                <th scope="col">has_passport_expired</th>
                <th scope="col">passport_appearance</th>
                <th scope="col">passport_signature</th>
                <th scope="col">passport_given_name</th>
                <th scope="col">passport_surname</th>
                <th scope="col">passport_dof</th>
                <th scope="col">passport_spouse_name</th>
                <th scope="col">passport_address</th>
                <th scope="col">passport_delete_ecr</th>
                <th scope="col">passport_other</th>
                <th scope="col">applicant_name</th>
                <th scope="col">middle_name</th>
                <th scope="col">applicant_surname</th>
                <th scope="col">aadhaar_no</th>
                <th scope="col">applicant_gender</th>
                <th scope="col">marital_status</th>
                <th scope="col">applicant_dob</th>
                <th scope="col">is_birth_india</th>
                <th scope="col">birth_city</th>
                <th scope="col">applicant_country</th>
                <th scope="col">applicant_state</th>
                <th scope="col">applicant_district</th>
                <th scope="col">applicant_citizenship</th>
                <th scope="col">applicant_pan</th>
                <th scope="col">applicant_voter_id</th>
                <th scope="col">applicant_educational</th>
                <th scope="col">applicant_employment_type</th>
                <th scope="col">applicant_employment_org</th>
                <th scope="col">applicant_spouse</th>
                <th scope="col">applicant_ecr</th>
                <th scope="col">applicant_visible_distinguishing</th>
                <th scope="col">applicant_other_name</th>
                <th scope="col">applicant_ever_changed_name</th>
                <th scope="col">applicant_family_father_fname </th>
                <th scope="col">applicant_family_father_mname</th>
                <th scope="col">applicant_family_father_sname</th>
                <th scope="col">applicant_family_mother_fname</th>
                <th scope="col">applicant_family_mother_mname</th>
                <th scope="col">applicant_family_mother_sname</th>
                <th scope="col">applicant_family_guardian_fname</th>
                <th scope="col">applicant_family_guardian_mname</th>
                <th scope="col">applicant_family_guardian_sname</th>
                <th scope="col">applicant_present_address</th>
                <th scope="col">applicant_address</th>
                <th scope="col">applicant_village</th>
                <th scope="col">applicant_detail_state</th>
                <th scope="col">applicant_detail_district</th>
                <th scope="col">applicant_detail_pin</th>
                <th scope="col">applicant_police_station</th>
                <th scope="col">applicant_detail_mobile</th>
                <th scope="col">applicant_detail_email</th>
                <th scope="col">applicant_detail_permanent_address</th>
                <th scope="col">applicant_emergency_address</th>
                <th scope="col">applicant_emergency_mobile</th>
                <th scope="col">applicant_emergency_email</th>
                <th scope="col">applicant_previous_identity_certificate</th>
                <th scope="col">applicant_identity_certificate</th>
                <th scope="col">applicant_date_of_issue</th>
                <th scope="col">applicant_diplomatic_date_of_expiry</th>
                <th scope="col">applicant_diplomatic_place_of_issue</th>
                <th scope="col">applicant_previous_passport</th>
                <th scope="col">applicant_previous_passport_filenumber</th>
                <th scope="col">applicant_previous_passport_issue</th>
                <th scope="col">applicant_previous_passport_applied</th>
                <th scope="col">applicant_other_criminal</th>
                <th scope="col">applicant_court</th>
                <th scope="col">applicant_fir</th>
                <th scope="col">applicant_law</th>
                <th scope="col">applicant_other_criminal_offence</th>
                <th scope="col">applicant_offence_court</th>
                <th scope="col">applicant_offence_fir</th>
                <th scope="col">applicant_offence_law</th>
                <th scope="col">applicant_other_refused</th>
                <th scope="col">applicant_refused</th>
                <th scope="col">applicant_other_revoked</th>
                <th scope="col">applicant_revoked_passport_number</th>
                <th scope="col">applicant_revoked_reason</th>
                <th scope="col">applicant_other_political</th>
                <th scope="col">political_country</th>
                <th scope="col">applicant_other_ec</th>
                <th scope="col">applicant_other_ec_emergency</th>
                <th scope="col">applicant_other_ec_date</th>
                <th scope="col">applicant_other_ec_travelled</th>
                <th scope="col">pplicant_other_ec_authority</th>
                <th scope="col">applicant_other_ec_repatriated</th>
                <th scope="col">applicant_proof_birth</th>
                <th scope="col">applicant_proof_residential_address</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $selectquery = "select * from temp_passport";
            $quary = mysqli_query($con, $selectquery);
            $num = mysqli_num_rows($quary);
            while ($res = mysqli_fetch_array($quary)) {
            ?>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['applying_for']; ?></td>
                    <td><?php echo $res['type_of_application']; ?></td>
                    <td><?php echo $res['type_of_passport_booklet']; ?></td>
                    <td><?php echo $res['passport_reason']; ?></td>
                    <td><?php echo $res['date_of_expiry']; ?></td>
                    <td><?php echo $res['has_passport_expired']; ?></td>
                    <td><?php echo $res['passport_appearance']; ?></td>
                    <td><?php echo $res['passport_signature']; ?></td>
                    <td><?php echo $res['passport_given_name']; ?></td>
                    <td><?php echo $res['passport_surname']; ?></td>
                    <td><?php echo $res['passport_dof']; ?></td>
                    <td><?php echo $res['passport_spouse_name']; ?></td>
                    <td><?php echo $res['passport_address']; ?></td>
                    <td><?php echo $res['passport_delete_ecr']; ?></td>
                    <td><?php echo $res['passport_other']; ?></td>
                    <td><?php echo $res['applicant_name']; ?></td>
                    <td><?php echo $res['middle_name']; ?></td>
                    <td><?php echo $res['applicant_surname']; ?></td>
                    <td><?php echo $res['aadhaar_no']; ?></td>
                    <td><?php echo $res['applicant_gender']; ?></td>
                    <td><?php echo $res['marital_status']; ?></td>
                    <td><?php echo $res['applicant_dob']; ?></td>
                    <td><?php echo $res['is_birth_india']; ?></td>
                    <td><?php echo $res['birth_city']; ?></td>
                    <td><?php echo $res['applicant_country']; ?></td>
                    <td><?php echo $res['applicant_state']; ?></td>
                    <td><?php echo $res['applicant_district']; ?></td>
                    <td><?php echo $res['applicant_citizenship']; ?></td>
                    <td><?php echo $res['applicant_pan']; ?></td>
                    <td><?php echo $res['applicant_voter_id']; ?></td>
                    <td><?php echo $res['applicant_educational']; ?></td>
                    <td><?php echo $res['applicant_employment_type']; ?></td>
                    <td><?php echo $res['applicant_employment_org']; ?></td>
                    <td><?php echo $res['applicant_spouse']; ?></td>
                    <td><?php echo $res['applicant_ecr']; ?></td>
                    <td><?php echo $res['applicant_visible_distinguishing']; ?></td>
                    <td><?php echo $res['applicant_other_name']; ?></td>
                    <td><?php echo $res['applicant_ever_changed_name']; ?></td>
                    <td><?php echo $res['applicant_family_father_fname']; ?></td>
                    <td><?php echo $res['applicant_family_father_mname']; ?></td>
                    <td><?php echo $res['applicant_family_father_sname']; ?></td>
                    <td><?php echo $res['applicant_family_mother_fname']; ?></td>
                    <td><?php echo $res['applicant_family_mother_mname']; ?></td>
                    <td><?php echo $res['applicant_family_mother_sname']; ?></td>
                    <td><?php echo $res['applicant_family_guardian_fname']; ?></td>
                    <td><?php echo $res['applicant_family_guardian_mname']; ?></td>
                    <td><?php echo $res['applicant_family_guardian_sname']; ?></td>
                    <td><?php echo $res['applicant_present_address']; ?></td>
                    <td><?php echo $res['applicant_address']; ?></td>
                    <td><?php echo $res['applicant_village']; ?></td>
                    <td><?php echo $res['applicant_detail_state']; ?></td>
                    <td><?php echo $res['applicant_detail_district']; ?></td>
                    <td><?php echo $res['applicant_detail_pin']; ?></td>
                    <td><?php echo $res['applicant_police_station']; ?></td>
                    <td><?php echo $res['applicant_detail_mobile']; ?></td>
                    <td><?php echo $res['applicant_detail_email']; ?></td>
                    <td><?php echo $res['applicant_detail_permanent_address']; ?></td>
                    <td><?php echo $res['applicant_emergency_address']; ?></td>
                    <td><?php echo $res['applicant_emergency_mobile']; ?></td>
                    <td><?php echo $res['applicant_emergency_email']; ?></td>
                    <td><?php echo $res['applicant_previous_identity_certificate']; ?></td>
                    <td><?php echo $res['applicant_identity_certificate']; ?></td>
                    <td><?php echo $res['applicant_date_of_issue']; ?></td>
                    <td><?php echo $res['applicant_diplomatic_date_of_expiry']; ?></td>
                    <td><?php echo $res['applicant_diplomatic_place_of_issue']; ?></td>
                    <td><?php echo $res['applicant_previous_passport']; ?></td>
                    <td><?php echo $res['applicant_previous_passport_filenumber']; ?></td>
                    <td><?php echo $res['applicant_previous_passport_issue']; ?></td>
                    <td><?php echo $res['applicant_previous_passport_applied']; ?></td>
                    <td><?php echo $res['applicant_other_criminal']; ?></td>
                    <td><?php echo $res['applicant_court']; ?></td>
                    <td><?php echo $res['applicant_fir']; ?></td>
                    <td><?php echo $res['applicant_law']; ?></td>
                    <td><?php echo $res['applicant_other_criminal_offence']; ?></td>
                    <td><?php echo $res['applicant_offence_court']; ?></td>
                    <td><?php echo $res['applicant_offence_fir']; ?></td>
                    <td><?php echo $res['applicant_offence_law']; ?></td>
                    <td><?php echo $res['applicant_other_refused']; ?></td>
                    <td><?php echo $res['applicant_refused']; ?></td>
                    <td><?php echo $res['applicant_other_revoked']; ?></td>
                    <td><?php echo $res['applicant_revoked_passport_number']; ?></td>
                    <td><?php echo $res['applicant_revoked_reason']; ?></td>
                    <td><?php echo $res['applicant_other_political']; ?></td>
                    <td><?php echo $res['political_country']; ?></td>
                    <td><?php echo $res['applicant_other_ec']; ?></td>
                    <td><?php echo $res['applicant_other_ec_emergency']; ?></td>
                    <td><?php echo $res['applicant_other_ec_date']; ?></td>
                    <td><?php echo $res['applicant_other_ec_travelled']; ?></td>
                    <td><?php echo $res['pplicant_other_ec_authority']; ?></td>
                    <td><?php echo $res['applicant_other_ec_repatriated']; ?></td>
                    <td><?php echo $res['applicant_proof_birth']; ?></td>
                    <td><?php echo $res['applicant_proof_residential_address']; ?></td>
                    <!-- <td>
                        <a href="delete_regular.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>