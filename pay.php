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
// include 'submit.php';
$name=$_POST['name'];
$phone = $_POST['phone'];
$amount=$_POST['amount'];
// if(!empty($_POST['check'])){
//     $cover = 11;
// }
// else{
//     $cover=10;
// }
include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('ef2286a861c5175074f0476aa6937795', 'ef4b2a65c57a2b12506d16ce2ad90a74','https://www.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" =>"passport",
        "amount" =>$amount,
        "send_email" => true,
        "email" =>'akash_senjaliya@yahoo.com',
        "buyer_name" =>$name,
        "phone"=>"9726206002",
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