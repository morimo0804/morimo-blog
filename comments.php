<div class="comment">
    <div class="comment-form">
        <?php
        $args = array(
            'title_reply' => '',
            'comment_notes_before' => '',
            // 'comment_notes_after'  => '<p>コメント記入欄の下に表示するメッセージ</p>',
            'label_submit' => 'SUBMIT',
            'fields' => array(
                'author' =>
                '<p class="comment-form-author"><label for="author">名前</label><span>※必須</span><input id="author" name="author" type="text" value="" autocomplete="name" placeholder="ハンドルネームでも可"></p>',
                'email' =>
                '<p class="comment-form-email"><label for="emailr">メール</label>
                <input id="email" name="email" type="email" placeholder="メールアドレスを入力">
                </p>',
                'url' => '',
            ),
            'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="" placeholder="コメントを入力"></textarea></p>',
            'label_submit' => '送信する',
        );
        ?>
        <?php comment_form($args); ?>
    </div>

    <div class="commets-list">
        <?php if (have_comments()): ?>
            <h3>みんなのコメント</h3>
            <ol>
                <?php wp_list_comments(); ?>
            </ol>
        <?php endif; ?>
    </div>
</div>