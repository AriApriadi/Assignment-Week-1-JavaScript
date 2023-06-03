<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="d-flex justify-content-center"> -->
    <div class="card text-center">
        <div class="card-header">
            Form Rekrutasi
        </div>
        <div class="card-body ">
            <div class="container d-grid gap-3">
                <form class="form-group row">
                    <label class="col-md-1">
                        Nama
                    </label>
                    <div class="col-md">
                        <input type="text" id="nama" class="form-control">
                    </div>
                </form>
                <form class="form-group row">
                    <label class="col-md-1">
                        Email
                    </label>
                    <div class="col-md">
                        <input type=" text" id="email" class="form-control">
                    </div>
                </form>
                <form class="form-group row">
                    <label class="col-md-1">
                        Phone Number
                    </label>
                    <div class="col-md">
                        <input type=" text" id="phone" class="form-control">
                    </div>
                </form>
                <form class="form-group row">
                    <label class="col-md-1">
                        Vacany
                    </label>
                    <div class="col-md">
                        <select class="form-select" id="vacany" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="System Administrator">System Administrator</option>
                            <option value="Data Scine">Data Scine</option>
                            <option value="Junior Programming">Junior Programming</option>
                        </select>
                    </div>
                </form>
                <form class="form-group row">
                    <label class="col-md-1">
                        Position
                    </label>
                    <div class="col-md">
                        <select class="form-select" id="position" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Jakarta">Jakarta</option>
                        </select>
                    </div>
                </form>
                <form class="form-group row">
                    <span class="col-md-3">
                    </span>
                    <div class="col-md-12 ">
                        <button type="button" class="btn btn-primary w-25" onclick="tampilData()">Kirim</button>
                    </div>
                </form>

                </table>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <div id="alert-nama" class="alert alert-success" role="alert">
                Terimakasih telah melakukan pengisian, permintaan anada akan segera kami proses.
            </div>
        </div>
        <div class="card-body">
            <!-- <form></form>
            <h5 class="card-title">Nama</h5>
            <p class="card-text">......</p>
            <h5 class="card-title">Email</h5>
            <p class="card-text">......</p>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text">......</p>
            <h5 class="card-title">Vacany</h5>
            <p class="card-text">......</p>
            <h5 class="card-title">Position</h5>
            <p class="card-text">......</p> -->
            <table class="table table-stripped" id="tableData">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Vacany</th>
                    <th>Position</th>
                </tr>
            </table>
          
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <script>
        function tampilData(){
            document.getElementById('tableData').insertRow(-1).innerHTML = `<tr>
                    <td>`+$("#nama").val()+`</td>
                    <td>`+$("#email").val()+`</td>
                    <td>`+$("#phone").val()+`</td>
                    <td>`+$("#vacany").val()+`</td>
                    <td>`+$("#position").val()+`</td>
                </tr>`
        }
        var alertName = document.getElementById('alertNmae');
        alertName.style.display = 'none'
    </script>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>