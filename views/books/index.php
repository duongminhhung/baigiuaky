<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
<h1>Book List</h1>
<table border="1">
    <tr>
        <th>Book Code</th>
        <th>Book Name</th>
        <th>Quantity</th>
    </tr>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['MaSach']; ?></td>
            <td><?php echo $book['TenSach']; ?></td>
            <td><?php echo $book['SoLuong']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
