</div>
                    </article>
                    <aside class="aside">
                        <div class="lnb">
                            <ul>
                                <li><a href="">금맥청소 소개</a></li>
                                <li class="on"><a href="">아파트입주청소</a></li>
                                <li><a href="">이사/상가청소</a></li>
                                <li><a href="">사무실청소</a></li>
                                <li><a href="">청소갤러리</a></li>
                                <li><a href="">질문과답변</a></li>
                            </ul>
                        </div>

                        <figure class="slogan">
                            <img src="./images/slogan.png" alt="">
                        </figure>

                        <ul class="sub_customer">
                            <li>Tel : <a href="tel:051-331-3354">051-331-3354</a></li>
                            <li>e-mail : <a href="mailto:jjs3354@naver.com">jjs3354@naver.com</a></li>
                        </ul>

                    </aside>
                </div>
            </section>
        </div>


        <?
        if($board['bo_table'] == 'qa') {
            $num = 3;
        } else if($board['bo_table'] == 'notice') {
            $num = 4;
        }else if($board['bo_table'] == 'gallery') {
            $num = 5;
        }
        ?>


        <script>
        $(function(){
            var num = <?= $num ?>;
            $('#aside ul>li').eq(num-1).addClass('on');
        })
        </script>