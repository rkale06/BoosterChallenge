<!DOCTYPE html>
<html>

    <a href="<?php echo base_url('fundraiser')?>" class="btn btn-primary">Home</a>
    <h3> Enter Fundraiser Details </h3>
    <form action="<?php echo base_url('fundraiser/submit')?>" method="post" class="form-horizontal">

        <div class="form-group">
            <label for="fname" class="col-md-2 text-right"> Fundraiser Name </label>
            <div class="col-md-10">
                <input type="text" name="fund_name" required class="form-control">
            </div>

        </div>

        <div class="form-group">
            <label for="rating" class="col-md-2 text-right"> Rating (1-5) </label>
            <div class="col-md-10">
                <input type="number" name="fund_rating" min="1" max="5" class="form-control">
            </div>

        </div>

        <div class="form-group">
            <label for="review" class="col-md-2 text-right"> Review </label>
            <div class="col-md-10">
                <textarea name="fund_review" class="form-control" required></textarea>
            </div>

        </div>


        <div class="form-group">
            <label for="rname" class="col-md-2 text-right"> Reviewer Name </label>
            <div class="col-md-10">
                <input type="text" name="rev_name"  required  class="form-control">
            </div>

        </div>

        <div class="form-group">
            <label for="email" class="col-md-2 text-right"> Reviewer Email </label>
            <div class="col-md-10">
                <input type="email" name="rev_email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required class="form-control">
            </div>

        </div>

        <div class="form-group">
            <label for="date" class="col-md-2 text-right"> Reviewer Date </label>
            <div class="col-md-10">
                <input type="date" name="rev_date" required class="form-control">
            </div>

        </div>

        <div class="form-group">
            <label class="col-md-2 text-right"> </label>
            <div class="col-md-10">
                <input type="submit" name="btnSave" class="btn btn-primary" value="Submit">
            </div>

        </div>



    </form>



</html>