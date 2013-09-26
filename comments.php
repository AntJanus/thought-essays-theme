<?php if(comments_open()): ?>
        <section>
            <?php if(has_comments()): ?>
            <ul>
                <?php $i = 0; while(comments()): $i++; ?>
                <li id="comment-<?php echo comment_id(); ?>">
                    <div >
                        <h2><?php echo comment_name(); ?></h2>
                        <time><?php echo relative_time(comment_time()); ?></time>

                        <div >
                            <?php echo comment_text(); ?>
                        </div>

                        <span class="counter"><?php echo $i; ?></span>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>

            <form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
                <?php echo comment_form_notifications(); ?>

                <p>
                    <label for="name">Your name:</label>
                    <?php echo comment_form_input_name('placeholder="Your name"'); ?>
                </p>

                <p>
                    <label for="email">Your email address:</label>
                    <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
                </p>

                <p>
                    <label for="text">Your comment:</label>
                    <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
                </p>

                <p>
                    <?php echo comment_form_button(); ?>
                </p>
            </form>

        </section>
        <?php endif; ?>
