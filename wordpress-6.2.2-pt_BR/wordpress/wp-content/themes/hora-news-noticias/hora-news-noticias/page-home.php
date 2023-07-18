<?php
	//Template Name: Home
	get_header();
?>

<div class="clear"></div>
<div class="wpm">
    <h1>
        <span class="uppercase"><strong>Hora News</strong></span>
        <span class="uppercase not-bold">Notícias</span>
    </h1>
</div>
</div>
</section>

<!-- Bloco de consulta de posts -->
<section>
    <div class="glow">
        <div class="container">
            <div class="upt">
                <h2>Últimas Notícias</h2>
                <div class="bi">
                    <button>Ver todas as notícias</button>
                    <i class="fa-solid fa-layer-group"></i>
                </div>
            </div>
            <div class="cards">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                  while ($query->have_posts()) {
                    $query->the_post();

                    // Informações do post, como título, conteúdo ou miniatura
                    echo '<div class="card">';
                    echo '<img src="' . get_the_post_thumbnail_url() . '" alt="Imagem do Card" />';
                    echo '<div class="card-content">';
                    echo '<p>' . get_the_date('d M Y') . '</p>';
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo '<a href="' . get_permalink() . '"><button>leia mais</button></a>';
                    echo '</div>';
                    echo '</div>';
                }
                    wp_reset_postdata();
                } else {
                    echo 'Nenhum post encontrado.';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
