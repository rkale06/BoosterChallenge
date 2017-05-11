<!DOCTYPE html>
<html>

    <a href="<?php echo base_url('fundraiser/add')?>" class="btn btn-primary">Add a Review</a>
    <h3> All Reviews</h3>

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <td>ID</td>
                <td>Fundraiser Name</td>
                <td>Rating</td>
                <td>Review</td>
                <td>Reviewer Name</td>
                <td>Reviewer Email</td>
                <td>Review Date</td>
            </tr>
        </thead>
        <tbody>
        <?php
            if($records) {
                foreach ($records as $rec) {
                    ?>
                    <tr>
                        <td> <?php echo $rec->id; ?></td>
                        <td> <?php echo $rec->fundraiser_name; ?> </td>
                        <td> <?php echo $rec->rating; ?></td>
                        <td> <?php echo $rec->review; ?></td>
                        <td> <?php echo $rec->reviewer_name; ?></td>
                        <td> <?php echo $rec->reviewer_email; ?></td>
                        <td> <?php echo $rec->review_date; ?></td>
                    </tr>
                    <?php
                }}
        ?>
        </tbody>
    </table>
</div>

</body>



</html>