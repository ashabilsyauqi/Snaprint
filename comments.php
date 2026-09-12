<?php
/**
 * The template for displaying comments
 *
 * @package Snaprint
 * @version 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top:3.5rem; padding:2.5rem; background:var(--bg-card); border-radius:var(--radius-lg); border:1px solid var(--border-color); box-shadow:var(--card-shadow);">

    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title" style="font-size:1.35rem; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.6rem;">
            <i class="fa-regular fa-comments" style="color:var(--primary-blue);"></i>
            <span>
                <?php
                $comment_count = get_comments_number();
                printf(
                    /* translators: 1: comment count number. */
                    esc_html( _n( '%1$s Diskusi & Komentar', '%1$s Diskusi & Komentar', $comment_count, 'snaprint' ) ),
                    number_format_i18n( $comment_count )
                );
                ?>
            </span>
        </h3>

        <ol class="comment-list" style="list-style:none; padding:0; margin:0 0 2.5rem 0;">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation( array(
            'prev_text' => '<i class="fa-solid fa-arrow-left"></i> ' . esc_html__( 'Komentar Sebelumnya', 'snaprint' ),
            'next_text' => esc_html__( 'Komentar Selanjutnya', 'snaprint' ) . ' <i class="fa-solid fa-arrow-right"></i>',
        ) );
        ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments" style="color:var(--text-muted); font-size:0.95rem; font-style:italic; text-align:center;">
            <?php esc_html_e( 'Kolom komentar untuk artikel ini telah ditutup.', 'snaprint' ); ?>
        </p>
    <?php endif; ?>

    <?php
    $commenter     = wp_get_current_commenter();
    $user          = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';

    $req      = get_option( 'require_name_email' );
    $html_req = ( $req ? " required='required'" : '' );

    comment_form( array(
        'title_reply'          => '<i class="fa-regular fa-comment-dots" style="color:var(--primary-blue);"></i> ' . esc_html__( 'Tinggalkan Komentar atau Pertanyaan', 'snaprint' ),
        'title_reply_to'       => esc_html__( 'Balas Komentar kepada %s', 'snaprint' ),
        'cancel_reply_link'    => esc_html__( 'Batalkan Balasan', 'snaprint' ),
        'label_submit'         => esc_html__( 'Kirim Komentar', 'snaprint' ),
        'class_submit'         => 'btn btn-primary',
        'comment_notes_before' => '<p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1.25rem;">' . esc_html__( 'Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *', 'snaprint' ) . '</p>',
        'comment_field'        => '<div class="form-group" style="margin-bottom:1.25rem;"><label for="comment" style="display:block; font-weight:600; font-size:0.9rem; margin-bottom:0.4rem;">' . esc_html__( 'Komentar / Pertanyaan *', 'snaprint' ) . '</label><textarea id="comment" name="comment" cols="45" rows="5" required="required" class="form-control" style="width:100%; border-radius:var(--radius-md); border:1px solid var(--border-color); padding:0.8rem; font-family:inherit; font-size:0.95rem; outline:none; background:var(--bg-card);"></textarea></div>',
    ) );
    ?>

</div>
