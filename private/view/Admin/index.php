<?php
$_SESSION["email"] = "";
if (isset($_SESSION["email"])) { ?>

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Police Station Name</th>
                                <th class="column2">Postal Code</th>
                                <th class="column3">Email</th>
                                <th class="column4">Tel Number&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while ($row = $stmt->fetch()) {  ?>
                                <tr>
                                    <td class="column1"><?php echo $row["policeStationName"] ?></td>
                                    <td class="column2"><?php echo $row["postalCode"] ?></td>
                                    <td class="column3"><?php echo $row["email"] ?></td>
                                    <td class="column4"><?php echo $row["telNo"] ?>&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                            <?php
                                }
                                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </table>

    <!--===============================================================================================-->
    <script src="../3rdParty/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../3rdParty/vendor/bootstrap/js/popper.js"></script>
    <script src="../3rdParty/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../3rdParty/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../3rdParty/js/main.js"></script>

    </body>

    </html>
<?php
} else {
    echo "Please Sign Up";
}

?>