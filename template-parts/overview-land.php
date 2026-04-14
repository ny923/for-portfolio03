<div class="overview">
    <div class="overview-texts">
        <dt class="overview__title">住所</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></dd>
    </div>

    <div class="overview-texts">
        <dt class="overview__title">土地面積</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'land_area', true); ?>㎡</dd>
    </div>

    <div class="overview-texts">
        <dt class="overview__title">現状</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'situation_land', true); ?>
            <?php echo get_post_meta(get_the_ID(), 'situation_building', true); ?>
            <?php echo get_post_meta(get_the_ID(), 'situation_parking', true); ?></dd>
    </div>
</div>