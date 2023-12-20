<?php get_header(); ?>
<!-- メインコンテンツ -->
            <main class="l-main">

<!-- メインビジュアル -->
                <div class="p-main-visual--shop">
                    <h1 class="p-main-visual__title c-title--main-visual-shop">ショップについて</h1>
                </div>

<!-- アーティクル -->
                <article class="p-article--single">
                    <section class="p-introduction">
                        <h2 class="p-introduction__title c-title--introduction">見出しh2</h2>
                        <p class="p-introduction__text c-text--p">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    </section>
                    <div class="p-htag">
                        <h3 class="p-htag__h3 c-title--h3">見出しh3</h3>
                        <h4 class="p-htag__h4 c-title--h">見出しh4</h4>
                        <h5 class="p-htag__h5 c-title--h">見出しh5</h5>
                        <h6 class="p-htag__h6 c-title--h">見出しh6</h6>
                    </div>

<!-- 引用 -->
                    <blockquote class="p-blockquote" cite="">
                        <p class="p-blockquote__text c-text--p">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用</p>
                        <footer class="p-blockquote__footer c-text--p">出典元：<cite><a href="">○○○○○○○○○○○○</a></cite></footer>
                    </blockquote>

<!-- 画像と説明文(逆位置) -->
                    <figure class="p-single-fig">
                        <img class="p-single-fig__img" src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt="">
                        <figcaption class="p-single-fig__caption">
                            <figure class="p-single-fig__child">
                                <div class="p-single-fig__img-child u-mgr10">
                                    <img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt="">
                                </div>
                                <figcaption class="p-single-fig__caption-child">
                                    <p class="p-single-fig__text c-text--p"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入りますテキストが入ります </p>
                                </figcaption>
                            </figure>
                            <figure class="p-single-fig__child">
                                <div class="p-single-fig__img-child u-mgl10">
                                    <img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt="">
                                </div>
                                <figcaption class="p-single-fig__caption-child">
                                    <p class="p-single-fig__text c-text--p"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </p>
                                </figcaption>
                            </figure>
                        </figcaption>
                    </figure>

<!-- 画像一覧 -->
                    <ul class="p-photos">
                        <li class="p-photos__top"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt="">
                            <ul class="p-photos__ul">
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                                <li class="p-photos__list"><img src="<?php echo get_theme_file_uri( '/img/single-fig.jpg' ); ?>" alt=""></li>
                            </ul>
                        </li>
                    </ul>

<!-- リスト -->
                    <ol class="p-ol">
                        <li class="p-ol__list">リストリストリスト</li>
                        <li class="p-ol__list">リストリストリスト</li>
                        <li>
                            <ol class="p-ol__child">
                                <li class="p-ol__child-list">リスト2リスト2リスト2</li>
                                <li class="p-ol__child-list">リスト2リスト2リスト2</li>
                            </ol>        
                        </li>
                    </ol>
                    <ol class="p-ol">
                        <li class="p-ol__list">リストリストリスト</li>
                        <li class="p-ol__list">リストリストリスト</li>
                    </ol>

                    <ul class="p-ul">
                        <li class="p-ul__list">リストリストリスト</li>
                        <li class="p-ul__list">リストリストリスト</li>
                        <li>
                            <ul class="p-ul__child">
                                <li class="p-ul__child-list">リスト2リスト2リスト2</li>
                                <li class="p-ul__child-list">リスト2リスト2リスト2</li>
                            </ul>
                        </li>    
                    </ul>
                    <ul class="p-ul">
                        <li class="p-ul__list">リストリストリスト</li>
                        <li class="p-ul__list">リストリストリスト</li>
                    </ul>

<!-- コード表示 -->
                    <pre class="p-code">
                        <code class="p-code__text">
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;
                        </code>
                    </pre>

<!-- 5*2の表 -->
                    <table class="p-table">
                        <tr class="p-table__tr">
                            <td class="p-table__td1">テーブル</td>
                            <td class="p-table__td2">テーブル</td>
                        </tr>
                        <tr class="p-table__tr">
                            <td class="p-table__td1">テーブル</td>
                            <td class="p-table__td2">テーブル</td>
                        </tr>
                        <tr class="p-table__tr">
                            <td class="p-table__td1">テーブル</td>
                            <td class="p-table__td2">テーブル</td>
                        </tr>
                        <tr class="p-table__tr">
                            <td class="p-table__td1">テーブル</td>
                            <td class="p-table__td2">テーブル</td>
                        </tr>
                        <tr class="p-table__tr">
                            <td class="p-table__td1">テーブル</td>
                            <td class="p-table__td2">テーブル</td>
                        </tr>
                    </table>

<!-- 下部 -->
                        <button class="c-button--large">ボタン</button>
                        <p class="c-text--bold-single">boldboldboldboldboldboldbold</p>
                </article>
            </main>
        </div>
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>