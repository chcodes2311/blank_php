<h1>Memberlist</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>E-Mail Address</th>
    </tr>
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td> <!-- htmlentities is not needed here because $row['id'] is always an integer -->
            <td><?php echo htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlentities($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlentities($row['naam'], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlentities($row['fk_rol'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?page=home">Go Back</a><br />
