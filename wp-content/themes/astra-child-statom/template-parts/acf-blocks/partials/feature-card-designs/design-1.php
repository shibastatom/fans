<div
    class="px-6 py-8 border-secondary border-t-8 bg-white shadow-lg st-reveal-scale"
    style="transition-delay: <?= $card_index * 0.1; ?>s;"
>
    <?php if ( $card['icon'] ) : ?>
        <i class="<?php echo esc_attr( $card['icon'] ); ?> text-5xl  mb-4" aria-hidden="true"></i>
    <?php endif; ?>

    <?php if ( $card['title'] ) : ?>
        <h3 class="mt-4 uppercase !text-secondary font-bold"><?php echo esc_html( $card['title'] ); ?></h3>
    <?php endif; ?>

    <?php if ( $card['copy'] ) : ?>
        <p class="mt-2"><?php echo esc_html( $card['copy'] ); ?></p>
    <?php endif; ?>
</div>