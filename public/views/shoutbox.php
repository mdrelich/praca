


<?php
$con = mysqli_connect("localhost","root","","forum");
$query = "SELECT * FROM shout ORDER BY id DESC";
$shouts= mysqli_query($con, $query);
?>

<?php require_once VIEW_ROOT . '/includes/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href='public/css/style_s.css' />


</head>

<!--<body>-->
<div class="form">
    <h2>Czat pomocy</h2>
</div>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <ul>
                <?php while($row=mysqli_fetch_assoc($shouts)): ?>
                    <div>
                        <strong><?php echo ucwords(strtolower($row["user"]))?></strong>
                        <p><?php echo $row['message']?><small><?php echo $row["time"]?></small></p>


                    </div>


                    <!--
                    <table>
                        <tr>
                            <td><?php echo $row["user"]?> <p><?php echo $row['message']?></p> <span><?php echo $row["time"]?></span></td>
                        </tr>
                    </table>
-->
                    <!--
                    <table>
                        <th><?php echo $row["time"]?>-</th>
                        <th><?php echo $row["user"]?></th>:<?php echo $row['message']?>
                    </table>
-->
                <?php endwhile;?>
            </ul>
            <!--
                <ul>
                    <?php while($row=mysqli_fetch_assoc($shouts)): ?>
                    <li><span><?php echo $row["time"]?>-</span> <strong>
                            <?php echo $row["user"]?>
                        </strong>:<?php echo $row['message']?></li>
                    <?php endwhile;?>
                </ul>
-->

        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-sm-8 col-md-8 mt-2">
            <hr>
            <div>
                <?php if(isset($_GET['error'])): ?>
                    <div><?php echo $_GET['error']; ?></div>
                <?php endif;?>

                <form method="post">

                    <input class="mb-3" spellcheck="false" type="text" name="user" placeholder="Wpisz swoją nazwe" value="<?php echo $_SESSION['user'] ?>"/>
                    <!--                        <input type="text" spellcheck="false" name="message" placeholder="Enter A Message" />-->
                    <br>
                    <textarea class="comment" spellcheck="true" name="message"
                              placeholder="Wpisz wiadomość"></textarea>
                    <input class="shout-btn" type="submit" name="submit" value="Potwierdź" />

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--</body>-->
<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>