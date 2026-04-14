<div class="detail">
    <div class="flex">
        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title" width="31.25%">物件名</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">交通</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'traffic', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">階数</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'above_floor', true); ?>階</td>
                </tr>

                <tr>
                    <th class="spec__title">専有面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'building_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">築年月</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">勤務形態</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'administrator', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">向き</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'daylight_direction', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">管理費</th>
                    <td class="spec__detail"><?php echo number_format((int)get_post_meta(get_the_ID(), 'common_manage_fee', true)); ?>円</td>
                </tr>
                <tr>
                    <th class="spec__title">現状</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'situation_land', true); ?>

                        <?php
                        $situation_building = get_post_meta(get_the_ID(), 'situation_building', true);
                        $search = array('(居住用物件)');
                        echo esc_html(str_replace($search, '', $situation_building));
                        ?>

                        <?php echo get_post_meta(get_the_ID(), 'situation_parking', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">引渡時期</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'delivery', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">用途地域</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'zoning', true); ?></td>
                </tr>
            </tbody>
        </table>

        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title" width="31.25%">所在地</th>
                    <td class="spec__detail">
                        <?php
                        $zip = get_post_meta(get_the_ID(), 'zip', true);
                        if ($zip) {
                            echo esc_html(get_address_by_zip($zip));
                        } else {
                            echo '住所を取得できませんでした';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="spec__title">構造</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'structure', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">所在階</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor_num', true); ?>階</td>
                </tr>
                <tr>
                    <th class="spec__title">バルコニー</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'balcony_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">管理形態</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'manage_form', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">間取り</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">修繕積立金</th>
                    <td class="spec__detail"><?php echo number_format((int)get_post_meta(get_the_ID(), 'repair_reserve', true)); ?>円</td>
                </tr>
                <tr>
                    <th class="spec__title">取引形態</th>
                    <td class="spec__detail">
                        <?php
                        $transact_type = get_post_meta(get_the_ID(), 'transact_type', true);
                        // 「貸主」と、もしあればその後の「 / 」も消す
                        $search = array('/貸主', '貸主/');
                        echo esc_html(str_replace($search, '', $transact_type));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="spec__title">駐車場</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'parking', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title"></th>
                    <td class="spec__detail"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <table class="detail-spec single">
        <tbody>
            <tr>
                <th class="spec__title adjust" width="15%">リフォーム</th>
                <td class="spec__detail">
                    <?php
                    // reform_done_interior の値を取得
                    $done_interior = get_post_meta(get_the_ID(), 'reform_done_interior', true);
                    if ($done_interior) :
                    ?>
                        <p>
                            内装：<?php echo esc_html($done_interior); ?>施工済
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_interior', true)); ?>
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_etc_interior', true)); ?>
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_water', true)); ?>
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_etc_water', true)); ?>
                        </p>
                    <?php endif; ?>
                    <!-- 水回りは一旦内装に書く <?php echo get_post_meta(get_the_ID(), 'reform_done_water', true); ?>施工済　 -->
                    <?php
                    // reform_done_interior の値を取得
                    $done_exterior = get_post_meta(get_the_ID(), 'reform_done_exterior', true);
                    if ($done_exterior) :
                    ?>
                        <p>
                            内装：<?php echo esc_html($done_exterior); ?>施工済
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_exterior', true)); ?>
                            　<?php echo esc_html(get_post_meta(get_the_ID(), 'reform_etc_exterior', true)); ?>
                        </p>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="flex">
        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title" width="31.25%">設備</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'equipment', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title" width="31.25%">情報公開日</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'update_date', true); ?></td>
                </tr>
            </tbody>
        </table>

        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title" width="31.25%">備考</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'remark', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title" width="31.25%">次回更新予定日</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expiration_date', true); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>