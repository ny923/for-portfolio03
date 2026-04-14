<div class="hero-numProperty">
    <div class="hero-num general">
        <div class="hero__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/home.svg" alt="">
        </div>

        <div class="wrap">
            <p class="hero__section">一般公開物件</p>
            <p class="hero__num">
                <?php
                $cat_id = 1;
                $cat = get_category($cat_id);
                echo $cat->count;
                ?><span>件</span></p>
        </div>

    </div>
    <div class="hero-num limited">
        <div class="hero__icon">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                <path class="st0" d="M458,168.9h-63.4v-30c0-3.5-.2-6.9-.4-10.4h.4C389.4,56.8,329.3,0,256.2,0h-.4C182.7,0,122.6,56.8,117.3,128.5h.4c-.2,3.4-.4,6.9-.4,10.4v30h-63.4c-22.7,0-40.8,19-39.6,41.7l14.4,263.7c1.1,21.1,18.5,37.7,39.6,37.7h375.3c21.1,0,38.6-16.6,39.6-37.7l14.4-263.7c1.2-22.7-16.9-41.7-39.6-41.7h0ZM276.6,341.8v57.5c0,9.9-8.1,18-18,18h0c-9.9,0-18-8.1-18-18v-57.5c-11.6-6.4-19.5-18.6-19.5-32.7,0-20.7,16.8-37.5,37.5-37.5s37.5,16.8,37.5,37.5-7.9,26.3-19.5,32.7h0ZM339.3,168.9h-166.7v-30c0-46,37.4-83.4,83.3-83.5,46,.1,83.3,37.5,83.3,83.5v30h0Z" />
            </svg>
        </div>

        <div class="wrap">
            <p class="hero__section">会員公開物件</p>
            <p class="hero__num">
                <?php
                $cat_id = 10;
                $cat = get_category($cat_id);
                echo $cat->count;
                ?><span>件</span></p>
        </div>

    </div>
</div>