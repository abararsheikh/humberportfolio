<?php
require_once('bootstrap.php');
$db = Database::getDB();

// Get products for selected category
$query = "SELECT * FROM students";
$statement1 = $db->prepare($query);
$statement1->execute();

$allcontacts = $statement1->fetchall();


?>
<!DOCTYPE>
<html>

<!-- the head section -->
<head>
    <title>Contacts and messages</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>

<!-- the body section -->
<body>
<div id="page">


    <div id="main">

        <div id="content">
            <!-- display a table of products -->
            <h2>Contact with messages</h2>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>

                </tr>
                <?php foreach ($allcontacts as $contact) : ?>
                    <tr>
                        <td><?php echo $contact['first_name']; ?></td>
                        <td><?php echo $contact['last_name']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td><form action="delete_accountdata.php" method="post"
                                  id="delete_contact_form">
                                <input type="hidden" name="id"
                                       value="<?php echo $contact['id']; ?>" />

                                <input type="submit" value="Delete" />
                            </form></td>
                        <td><form action="update_account.php" method="post"
                                  id="update_product_form">
                                <input type="hidden" name="id"
                                       value="<?php echo $contact['id']; ?>" />

                                <input type="submit" value="Update" />
                            </form></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="contact.php">Add contact</a></p>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Muzy, Inc.</p>
    </div>

</div><!-- end page -->
</body>
</html>