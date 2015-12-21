<div class="modal modal-danger fade" id="<?php echo $id ?>">
    <div class="modal-dialog modal-promo modal-lg">
        <div class="modal-content">
            <!-- <div class="modal-header">
            </div> -->
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php
                if( $blanket_modal_options['heading'] ): ?>
                    <h2 class="modal-title text-center text-uppercase"><?php echo $blanket_modal_options['heading'] ?></h2><?php
                endif; ?>
                <div class="row"><?php
                    if( $blanket_modal_options['image'] ): ?>
                        <div class="col-sm-6 text-center">
                            <img src="<?php echo $blanket_modal_options['image'] ?>" alt="" class="img-wide img-center">
                        </div><?php
                    endif; ?>
                    <div class="<?php echo ($blanket_modal_options['image']) ? 'col-sm-6' : 'col-sm-12' ?> page-scroll"><?php
                        echo do_shortcode( wpautop( $blanket_modal_options['content'] ) ); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->