<?php if( paginate_links()){ ?>
    <div class="col-12">
        <div class="pagination-wraper">
            <div class="pagination-box">
                <?php echo paginate_links(); ?>
            </div>
        </div>
    </div>  
<?php } ?>