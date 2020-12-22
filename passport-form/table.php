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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
	<link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Passport seva</title>
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
<!-- <input type="text" class="form-control" id="myInput" placeholder="First name" onkeyup="searchFun()"> -->
    <table class="table" id="mytable">

        <thead class="sticky-top">
            <tr>
                <th scope="col">Promo_code</th>
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
                <th scope="col">Phone_no.</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                
                <!-- <th scope="col">delete</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $selectquery = "select * from service";
            $quary = mysqli_query($con, $selectquery);
            $num = mysqli_num_rows($quary);
            while ($res = mysqli_fetch_array($quary)) {
            ?>
                <tr>
                    <td><?php echo $res['code']; ?></td>
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
                    <td><?php echo $res['phone']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['age']; ?></td>
                    
                
                    <!-- <td>
                        <a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
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
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script> -->
    <script src="media/js/jquery.dataTables.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js "></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
</body>

</html>
 
<script>
 $(document).ready(function(){
	   $("#mytable").dataTable({
           paging:false,
           
           ordering: false,
           dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

       });
	 });
</script>

