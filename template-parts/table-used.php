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
                    <th class="spec__title">構造</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'structure', true); ?>　<?php echo get_post_meta(get_the_ID(), 'above_floor', true); ?>階建て</td>
                </tr>
                <tr>
                    <th class="spec__title">土地面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'land_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">都市計画</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'planning', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建ぺい率</th>
                    <td class="spec__detail">
                        <?php
                        $coverage = get_post_meta(get_the_ID(), 'coverage', true);
                        echo $coverage ? esc_html($coverage) . '%' : '';
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="spec__title">向き</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'daylight_direction', true); ?></td>
                </tr>
                <tr>
                    <!-- 割合(分子/分母) -->
                    <th class="spec__title">私道負担</th>
                    <td class="spec__detail">
                        <?php
                        $share_burden = get_post_meta(get_the_ID(), 'share_burden', true);
                        if ($share_burden) {
                            echo esc_html($share_burden);
                        } else {
                            echo 'なし';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="spec__title">建築番号</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'confirm_num', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">引渡時期</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'delivery', true); ?></td>
                </tr>

                <tr>
                    <th class="spec__title">接道状況</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'access_road', true); ?>

                        <?php
                        $access_direction1 = get_post_meta(get_the_ID(), 'access_direction1', true);
                        if ($access_direction1) :
                        ?>
                            <p>方向 <?php echo get_post_meta(get_the_ID(), 'access_direction1', true); ?></p>
                            <p>間口 <?php $access_frontage1 = get_post_meta(get_the_ID(), 'access_frontage1', true);
                                    echo $access_frontage1 ? esc_html($access_frontage1) . 'm' : '-'; ?></p>
                            <p>種別 <?php echo get_post_meta(get_the_ID(), 'access_type1', true); ?></p>
                            <p>幅員 <?php $access_width1 = get_post_meta(get_the_ID(), 'access_width1', true);
                                    echo $access_width1 ? esc_html($access_width1) . 'm' : '-'; ?></p>
                            <!-- <p>位置指定道路1 <?php echo get_post_meta(get_the_ID(), 'private_road1', true); ?></p> -->
                        <?php endif; ?>

                        <?php
                        $access_direction2 = get_post_meta(get_the_ID(), 'access_direction2', true);
                        if ($access_direction2) :
                        ?>
                            <p>方向 <?php echo get_post_meta(get_the_ID(), 'access_direction2', true); ?></p>
                            <p>間口 <?php $access_frontage2 = get_post_meta(get_the_ID(), 'access_frontage2', true);
                                    echo $access_frontage2 ? esc_html($access_frontage2) . 'm' : '-'; ?></p>

                            <p>種別 <?php echo get_post_meta(get_the_ID(), 'access_type2', true); ?></p>
                            <p>幅員 <?php $access_width2 = get_post_meta(get_the_ID(), 'access_width2', true);
                                    echo $access_width2 ? esc_html($access_width2) . 'm' : '-'; ?></p>
                            <!-- <p>位置指定道路2 <?php echo get_post_meta(get_the_ID(), 'private_road2', true); ?></p> -->
                        <?php endif; ?>

                        <?php
                        $access_direction3 = get_post_meta(get_the_ID(), 'access_direction3', true);
                        if ($access_direction3) :
                        ?>
                            <p>方向 <?php echo get_post_meta(get_the_ID(), 'access_direction3', true); ?></p>
                            <p>間口 <?php $access_frontage3 = get_post_meta(get_the_ID(), 'access_frontage3', true);
                                    echo $access_frontage3 ? esc_html($access_frontage3) . 'm' : '-'; ?></p>

                            <p>種別 <?php echo get_post_meta(get_the_ID(), 'access_type3', true); ?></p>
                            <p>幅員 <?php $access_width3 = get_post_meta(get_the_ID(), 'access_width3', true);
                                    echo $access_width3 ? esc_html($access_width3) . 'm' : '-'; ?></p>

                            <!-- <p>位置指定道路3 <?php echo get_post_meta(get_the_ID(), 'private_road3', true); ?></p> -->
                        <?php endif; ?>

                        <?php
                        $access_direction4 = get_post_meta(get_the_ID(), 'access_direction4', true);
                        if ($access_direction4) :
                        ?>
                            <p>方向 <?php echo get_post_meta(get_the_ID(), 'access_direction4', true); ?></p>
                            <p>間口 <?php $access_frontage4 = get_post_meta(get_the_ID(), 'access_frontage4', true);
                                    echo $access_frontage4 ? esc_html($access_frontage4) . 'm' : '-'; ?></p>

                            <p>種別 <?php echo get_post_meta(get_the_ID(), 'access_type4', true); ?></p>
                            <p>幅員 <?php $access_width4 = get_post_meta(get_the_ID(), 'access_width4', true);
                                    echo $access_width4 ? esc_html($access_width4) . 'm' : '-'; ?></p>
                            <!-- <p>位置指定道路4 <?php echo get_post_meta(get_the_ID(), 'private_road4', true); ?></p> -->
                        <?php endif; ?>

                    </td>
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
                    <th class="spec__title">地目</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'land_use', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建物面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'building_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">用途地域</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'zoning', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">容積率</th>
                    <td class="spec__detail">
                        <?php
                        $floor_area_ratio = get_post_meta(get_the_ID(), 'floor_area_ratio', true);
                        echo $floor_area_ratio ? esc_html($floor_area_ratio) . '%' : '';
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="spec__title">間取り</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">駐車場</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'parking', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">築年月</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">現況</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'situation_land', true); ?>



                        <?php
                        $situation_building = get_post_meta(get_the_ID(), 'situation_building', true);
                        $search = array('(居住用物件)');
                        echo esc_html(str_replace($search, '', $situation_building));
                        ?>

                        <?php echo get_post_meta(get_the_ID(), 'situation_parking', true); ?>
                    </td>
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
                    <th class="spec__title">法令上の制限</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'restriction', true); ?></td>
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