<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product List</title>
    <style>
        .title_table {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container p-3">
        <div>
            <label for="" style="margin-right: 20px;">CRUD Example</label>
            <hr>
        </div>
        <h3>List users</h3>
        <hr>
        <button style="float: left;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="clearForm()">Create User</button>
        <table class="table" id="productTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>phone number</th>
                    <th>creatd at</th>
                    <th>update at</th>
                    <th>acction</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= ($user['id']) ?></td>
                        <td><?= ($user['name']) ?></td>
                        <td><?= ($user['email']) ?></td>
                        <td><?= ($user['address']) ?></td>
                        <td><?= ($user['phone_number']) ?></td>
                        <td><?= ($user['created_at']) ?></td>
                        <td><?= ($user['updated_at']) ?></td>
                        <td><button class="btn btn-warning" onclick="editProduct(this)">Edit</button> <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button></td>

                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>