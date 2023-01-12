<div id="subPage">
            <div class="sub_bar">
                <div class="inner">
                    <span>
                        <?
                        if($board['bo_subject']) {
                            echo $board['bo_subject'];
                        }
                        else {
                            echo $title;
                        }
                        ?> / <?= $company ?>
                    </span>
                </div>  
            </div>
            <div class="inner">
                <article id="article">
                    <!-- 내용 들어갈 부분 -->
                    <h2>
                        <?
                        if($board['bo_subject']) {
                            echo $board['bo_subject'];
                        }
                        else {
                            echo $title;
                        }
                        ?>
                        /<span><?= $company ?></span>
                    </h2>
                    
                    <div class="content">