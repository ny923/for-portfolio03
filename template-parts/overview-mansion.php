<div class="overview">
    <div class="overview-texts">
        <dt class="overview__title">住所</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></dd>
    </div>
    <div class="overview-texts">
        <dt class="overview__title">間取</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></dd>
    </div>
    <div class="overview-texts">
        <dt class="overview__title">構造</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'structure', true); ?>　<?php echo get_post_meta(get_the_ID(), 'above_floor', true); ?>階建て</dd>
    </div>
    <div class="overview-texts">
        <dt class="overview__title">専有面積</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'building_area', true); ?>㎡</dd>
    </div>
    <div class="overview-texts">
        <dt class="overview__title">階数</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'above_floor', true); ?>階</dd>
    </div>
    <div class="overview-texts">
        <dt class="overview__title">築年月</dt>
        <dd class="overview__text"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></dd>
    </div>
</div>