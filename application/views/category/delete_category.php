<div class="row">
    <div class="col-md-6">
        <p><?php echo $confirmation; ?></p>
        <form action="<?php echo URL_X;?>Category/delete/<?php echo $category_id;?>" method="POST">
            <input type="hidden" name="category_id" 
                   value="<?php echo $category_id; ?>"/>
            <input type="submit" value="Delete" class="btn btn-danger"/>
            <a class="btn btn-default" href="<?php URL_X;?>Category/">Back</a>
        </form>
    </div>
</div>