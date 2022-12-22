<?php
$recieverName = "";
$recieverNumber = "";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invitation Label</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
    if (isset($_POST['submit'])) {
        $sendersName = $_POST['sendersName'];
        $senderNumber = $_POST['senderNumber'];

        require('PHPExcel/PHPExcel.php');
        require('PHPExcel/PHPExcel/IOFactory.php');

        $file = $_FILES['doc']['tmp_name'];

        $obj = PHPExcel_IOFactory::load($file);
        foreach ($obj->getWorksheetIterator() as $sheet) {
            $highestrow = $sheet->getHighestRow();
            for ($i = 2; $i <= $highestrow; $i++) {
                $recieverName = $sheet->getCellByColumnAndRow(0, $i);
                $recieverNumber = $sheet->getCellByColumnAndRow(1, $i);
                echo '
                <div class="container px-4 mt-5">
                <div class="row gx-5">
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <p class="card-text">From:- <br>
                                    Mr ' . $sendersName . ' <br>
                                    132, My Street, <br>
                                    Bigtown BG23 4YZ <br>
                                    England <br>
                                    Mobile -' . $senderNumber . '
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <p class="card-text">To:- <br>
                Mr. '
                    . $recieverName . '<br>
                                            132, My Street, <br>
                                            Bigtown BG23 4YZ <br>
                                            England <br>
                                            Mobile - ' . $recieverNumber . '
                                            </p>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>';
            }
        }
    }
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>