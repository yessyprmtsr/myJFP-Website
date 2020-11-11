
    <?php
    
    
           echo '<table class="table">
           <tr>
           

';
           ?>
                

                </tr>
                <tr>
                    <td>Product ID: </td>
                    <td><?= $product_id?> </td>
                </tr>
                <tr>
                    <td>User ID: </td>
                    <td><?= $user_id?> </td>
                </tr>
                <tr>
                    <td>Sending Status: </td>
                    <td><?= $status?> </td>
                </tr>
                <tr>
                    <td> Current Location: </td>
                    <td><?= $current_location?> </td>
                </tr>
            </table>
            <div style="text-align: center;">
                <a href="index.php" class="btn btn-primary mb-2"> Back</a>
            </div>
        </fieldset>
    </div>
    <?php
    $query = mysqli-query (connection,"SELECT * FROM booking") or die ("Error Query");

    ?>
    <tr>
        <td><?php echo $sql['booking']; ?></td>
        <td><?php $sql['resi_number']; ?></td>
        <td><?=$sql['product_id']; ?></td>
        <td><?=$sql['user_id']; ?></td>
        <td><?=$sql['status']; ?></td>
        <td><?=$sql['current_location']; ?></td>
        <td>a href="index.php? booking=<?=$sql['booking']?>">Edit</a>
        </td>
    </tr>

</body>

</html>