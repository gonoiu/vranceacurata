<?php if(have_rows('content') ):?>
    <?php while(have_rows('content') ): the_row();?>
        <?php if (get_row_layout() == "columns_section"):
            $test = get_subfield ('columns');
        ?>
            <div class="row">
                <?php foreach($columns as $column):?>
                    <div class="col-3">
                        <h3><?php echo $column['title']; ?></h3>
                        <p><?php echo $column['content']; ?></p>
                        <?php if($column['link']): ?>
                            <a href="<?php echo $column['link']['url']; ?>">xxx</a>
                        <?php endif; ?>
                    </div>
                <?php endforeach;?>    
            </div>
        <?php endif;?>    
    <?php endwhile;?>
<?php endif;?>    