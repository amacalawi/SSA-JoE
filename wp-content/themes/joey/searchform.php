<!-- search form -->
<form id="searchform" class="form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="input-group">
        <input type="text" id="s" name="s" class="search form-control <?php echo(is_404() ? 'input-lg' : '') ?>" placeholder="Search our blog posts..." value="<?php echo get_search_query(); ?>">
        <div class="input-group-btn">
            <button type="submit" class="btn btn-default btn-search <?php echo(is_404() ? 'btn-lg' : '') ?>"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>