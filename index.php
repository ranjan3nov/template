<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invitation Label</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container px-4 mt-5">
        <div class="row gx-5">
            <div class="col">
                <form action="data.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Sender Name</label>
                        <input type="text" class="form-control" name="sendersName">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senders Mobile Numbers</label>
                        <input type="number" class="form-control" name="senderNumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Attach the data file</label>
                        <input type="file" class="form-control" name="doc">
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit">
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>