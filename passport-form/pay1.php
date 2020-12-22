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
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$code = $_POST['code'];
$price = $_POST['price'];
$promo = $_POST['hcode'];



$_SESSION["applying_for"] = $applying_for;
$_SESSION["type_of_application"] = $type_of_application;
$_SESSION["type_of_passport_booklet"] = $type_of_passport_booklet;
$_SESSION["passport_reason"] = $passport_reason;
$_SESSION["date_of_expiry"] = $date_of_expiry;
$_SESSION["has_passport_expired"] = $has_passport_expired;
$_SESSION["passport_appearance"] = $passport_appearance;
$_SESSION["passport_signature"] = $passport_signature;
$_SESSION["passport_given_name"] = $passport_given_name;
$_SESSION["passport_surname"] = $passport_surname;
$_SESSION["passport_dof"] = $passport_dof;
$_SESSION["passport_spouse_name"] = $passport_spouse_name;
$_SESSION["passport_address"] = $passport_address;
$_SESSION["passport_delete_ecr"] = $passport_delete_ecr;
$_SESSION["passport_other"] = $passport_other;
$_SESSION["applicant_name"] = $applicant_name;
$_SESSION["phone"] = $phone;
$_SESSION["email"] = $email;
$_SESSION["age"] = $age;
$_SESSION["code"] = $code;
$_SESSION["price"] = $price;
$_SESSION["promo"] = $promo;

// 

$inster = "insert into service(applying_for,type_of_application, type_of_passport_booklet, passport_reason, date_of_expiry, has_passport_expired, passport_appearance,passport_signature, passport_given_name, passport_surname, passport_dof, passport_spouse_name, passport_address, passport_delete_ecr, passport_other, applicant_name, phone,email,age,code) VALUES ('$applying_for', '$type_of_application', '$type_of_passport_booklet', '$passport_reason', '$date_of_expiry', '$has_passport_expired', '$passport_appearance', '$passport_signature','$passport_given_name', '$passport_surname', '$passport_dof', '$passport_spouse_name', '$passport_address', '$passport_delete_ecr', '$passport_other', '$applicant_name', '$phone','$email','$age','$promo');";
$res = mysqli_query($con, $inster);
    




// include 'submit.php';

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('ef2286a861c5175074f0476aa6937795', 'ef4b2a65c57a2b12506d16ce2ad90a74','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" =>"passport",
        "amount" =>$price,
        "send_email" => true,
        "email" =>$email,
        "buyer_name" =>$applicant_name,
        "phone"=>$phone,
        "send_sms"=>true,
        "allow_repeated_payments"=>false,
        "redirect_url" => "http://passportservice.in/passport-form/thank.php"
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