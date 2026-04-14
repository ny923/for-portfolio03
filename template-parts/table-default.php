全項目控え

<div class="detail">
    <h2 class="detail__title">物件詳細情報</h2>

    <div class="flex">
        <table class="detail-spec">
            <tbody>

                <tr>
                    <th class="spec__title">物件名</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">価格</th>
                    <td class="spec__detail">
                        <?php
                        $price = get_post_meta(get_the_ID(), 'price', true);
                        if (!empty($price) && is_numeric($price)) {
                            if ($price >= 10000) {
                                $man_price = $price / 10000;
                                echo number_format($man_price) . '万';
                            } else {
                                echo number_format($price);
                            }
                        }
                        ?>円</td>
                </tr>
                <tr>
                    <th class="spec__title">築年月</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">間取り詳細</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor_detail', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">駐車場</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'parking', true); ?></td>
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
                    <th class="spec__title">建ぺい率</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'coverage', true); ?>%</td>
                </tr>
                <tr>
                    <th class="spec__title">接道状況</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_road', true); ?>m</td>
                </tr>
                <!-- <tr>
                      <th class="spec__title">下水道</th>
                      <td class="spec__detail"></td>
                    </tr> -->
                <tr>
                    <th class="spec__title">現況</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'situation_land', true); ?>
                        <?php echo get_post_meta(get_the_ID(), 'situation_building', true); ?>
                        <?php echo get_post_meta(get_the_ID(), 'situation_parking', true); ?>
                    </td>
                </tr>

            </tbody>
        </table>

        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title">住所</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">交通</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'traffic', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">間取り</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">構造</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'structure', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">土地権利</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'rights', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">土地面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'land_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">用途地域</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'zoning', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">容積率</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor_area_ratio', true); ?>%</td>
                </tr>
                <!-- <tr>
                      <th class="spec__title">上水道</th>
                      <td class="spec__detail"></td>
                    </tr>
                    <tr>
                      <th class="spec__title">ガス</th>
                      <td class="spec__detail"></td>
                    </tr> -->
                <tr>
                    <th class="spec__title">引渡</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'delivery', true); ?></td>
                </tr>


            </tbody>
        </table>
    </div>

    <table class="detail-spec single">
        <tbody>
            <tr>
                <th class="spec__title" width="24%">設備</th>
                <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'equipment', true); ?></td>
            </tr>
        </tbody>
    </table>

    <div class="flex">
        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title">建築確認番号</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'confirm_num', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">都市計画</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'planning', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">自社物フラグ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'flag', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">状態</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'condition', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建物名フリガナ(物件名フリガナ)</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'ruby', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">物件名公開</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'public_name', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">総戸数・総区画数</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'total_unit_plot', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">郵便番号</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'zip', true); ?></td>
                </tr>

                <tr>
                    <th class="spec__title">所在地コード</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'location_code', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">所在地詳細_表示部</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'location_detail_open', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">所在地詳細_非表示部</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'location_detail_hide', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">地勢</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'topography', true); ?></td>
                </tr>

                <tr>
                    <th class="spec__title">土地面積計測方式</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'land_measure_method', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">区画面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'plot_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">私道負担面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'burden_area', true); ?>㎡</td>
                </tr>
                <tr>
                    <th class="spec__title">私道負担割合(分子/分母)</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'share_burden', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">土地持分(分子/分母)</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'ownership', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">セットバック</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'setback', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">セットバック量</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'setback_amount', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道方向1</td>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_direction1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道間口1</td>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_frontage1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道種別1</td>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_type1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道幅員1</td>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_width1', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">位置指定道路1</td>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'private_road1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道方向2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_direction2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道間口2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_frontage2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道種別2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_type2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道幅員2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_width2', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">位置指定道路2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'private_road2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道方向3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_direction3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道間口3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_frontage3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道種別3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_type3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道幅員3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_width3', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">位置指定道路3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'private_road3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道方向4</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_direction4', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道間口4</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_frontage4', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道種別4</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_type4', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">接道幅員4</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'access_width4', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">位置指定道路4</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'private_road4', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">国土法届出</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'notification', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">法令上の制限</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'restriction', true); ?></td>
                </tr>
            </tbody>
        </table>

        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title">建物面積計測方式</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'building_measure_method', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">敷地全体面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'site_area', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">延べ床面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor_area', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建築面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'architect_area', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建物階数(地上)</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'above_floor', true); ?>階</td>
                </tr>
                <tr>
                    <th class="spec__title">建物階数(地下)</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'under_floor', true); ?>階</td>
                </tr>
                <tr>
                    <th class="spec__title">新築・未入居フラグ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">管理人</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">管理形態</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">管理組合有無</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">管理会社名</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">部屋階数</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">バルコニー面積</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">向き</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'hoge', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">
                        間取(要コメ確認)
                        <!-- 間取部屋数
                        間取部屋種類
                        間取(種類)1
                        間取(畳数)1
                        間取(所在階)1
                        間取(室数)1
                        間取(種類)2
                        間取(畳数)2
                        間取(所在階)2
                        間取(室数)2
                        間取(種類)3
                        間取(畳数)3
                        間取(所在階)3
                        間取(室数)3
                        間取(種類)4
                        間取(畳数)4
                        間取(所在階)4
                        間取(室数)4
                        間取(種類)5
                        間取(畳数)5
                        間取(所在階)5
                        間取(室数)5
                        間取(種類)6
                        間取(畳数)6
                        間取(所在階)6
                        間取(室数)6
                        間取(種類)7
                        間取(畳数)7
                        間取(所在階)7
                        間取(室数)7
                        間取(種類)8
                        間取(畳数)8
                        間取(所在階)8
                        間取(室数)8
                        間取(種類)9
                        間取(畳数)9
                        間取(所在階)9
                        間取(室数)9
                        間取(種類)10
                        間取(畳数)10
                        間取(所在階)10
                        間取(室数)10
                        間取り備考 -->
                    </th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'floor_detail', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">URL</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'url', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">価格公開フラグ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'public_flag', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">価格状態</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'price_state', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">税金</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'tax', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">税額</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'tax_amount', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">坪単価</th>
                    <td class="spec__detail">
                        <?php
                        $price = get_post_meta(get_the_ID(), 'unit_price', true);
                        if (!empty($price) && is_numeric($price)) {
                            if ($price >= 10000) {
                                $man_price = $price / 10000;
                                echo number_format($man_price) . '万';
                            } else {
                                echo number_format($price);
                            }
                        }
                        ?>円</td>
                </tr>
                <tr>
                    <th class="spec__title">共益費・管理費</th>
                    <td class="spec__detail"><?php echo number_format((int)get_post_meta(get_the_ID(), 'common_manage_fee', true)); ?>円</td>
                </tr>
                <tr>
                    <th class="spec__title">共益費・管理費 税</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'fee_tax', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">修繕積立金</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'repair_reserve', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">修繕積立基金</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'repair_fund', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用名目1</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_name1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用1</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_cost1', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用名目2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_name2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用2</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_cost2', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用名目3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_name3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">その他費用3</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'expense_cost3', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">取引態様</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'transact_type', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">所属グループ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'affiliate_group', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">おすすめポイント数</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'recommend_num', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">容積率制限備考</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'restrict_note', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建築条件備考</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'building_note', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">施工会社名</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'construct_name', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建築確認番号</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'renovation_date', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リノベーション実施年月</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'renovation_date', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リノベーション内容</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'renovation_detail', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">建物構造その他</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'structure_etc', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">コメントテンプレート番号</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'comment_temp_num', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">パノラマローカルID</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'panorama_id', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">パノラマ掲載フラグ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'panorama_flag', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">パノラマ紐付け削除フラグ</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'panorama_del_flag', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">スタッフコメント種別</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'staff_comment_type', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">スタッフコメント</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'staff_comment', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所（水回り）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_water', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所その他（水回り）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_etc_water', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">施工完了年月（水回り）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_done_water', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所（内装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_interior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所その他（内装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_etc_interior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">施工完了年月（内装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_done_interior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所（外装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_exterior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所その他（外装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_etc_exterior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">施工完了年月（外装）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_done_exterior', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム箇所（共用部分）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_share', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">施工完了年月（共用部分）</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_done_share', true); ?></td>
                </tr>
                <tr>
                    <th class="spec__title">リフォーム備考</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'reform_remark', true); ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- 仮組み -->
    <section>
        <h3 class="detail__title">周辺環境</h3>

        周辺画像ここに？

        <table class="detail-spec">
            <tbody>
                <tr>
                    <th class="spec__title">小学校</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'primary_school', true); ?> <?php echo get_post_meta(get_the_ID(), 'ps_distance', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">中学校</th>
                    <td class="spec__detail"><?php echo get_post_meta(get_the_ID(), 'junior_high', true); ?> <?php echo get_post_meta(get_the_ID(), 'jh_distance', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">コンビニ距離</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'conveni', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">スーパー距離</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'super', true); ?>m</td>
                </tr>
                <tr>
                    <th class="spec__title">総合病院距離</th>
                    <td class="spec__detail">
                        <?php echo get_post_meta(get_the_ID(), 'hospital', true); ?>m</td>
                </tr>
            </tbody>
        </table>
    </section>


    <?php // the_content()
    ?>
</div>