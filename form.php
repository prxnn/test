<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body class="vh-100" style="align-content: center;
">
    <form action="insert_into.php" method="post" enctype="multipart-form/data">
        <div class="row" style="justify-content: center;">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3 style="    place-self: center;">เพิ่มข้อมูล</h3>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <label for="sushi_name" class="form-label">ชื่อซูชิ</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-6">
                                <label for="sushi_style" class="form-label">ลักษณะของซูชิ</label>
                                <textarea name="sushi_style" id="sushi_style" class="form-control" row="2"></textarea>
                               

                            </div>
                        </div>
                        <div class="col-6">
                            <label for="sushi_img" class="form-label">รูปประกอบ</label>
                            <input type="file" class="form-control">


                        </div>

                        <button type="summit" class="btn btn-outline-success mt-3">ต่อไป</button>



                    </div>



                </div>
            </div>
        </div>

        </div>




    </form>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</html>