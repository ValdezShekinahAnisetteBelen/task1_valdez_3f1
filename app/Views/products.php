<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom CSS for the purple and blue theme -->
    <style>
        body {
            background-color: #3f51b5; /* Blue */
            color: #673ab7; /* Purple */
        }

        .container {
            background-color: #ffffff; /* White */
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #673ab7 !important; /* Purple */
            border-color: #3f51b5 !important; /* Blue */
        }

        table {
            background-color: #ffffff; /* White */
            color: #3f51b5; /* Blue */
        }

        th, td {
            border-color: #3f51b5 !important; /* Blue */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Product Management</h1>
        <form action="/save" method="post">
            <div class="form-group">
                <label for="code">Code</label>
                <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?= isset($pro['code']) ? $pro['code'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?= isset($pro['quantity']) ? $pro['quantity'] : '' ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <h2 class="mt-5">Product Listing</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $pr): ?>
                    <tr>
                        <td><?= $pr['code'] ?></td>
                        <td><?= $pr['name'] ?></td>
                        <td><?= $pr['quantity'] ?></td>
                        <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JavaScript and jQuery libraries (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
