<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function hora_news_noticias_setup() {

	load_theme_textdomain( 'hora-news-noticias', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hora-news-noticias' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'hora_news_noticias_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'hora_news_noticias_setup' );

function hora_news_noticias_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hora_news_noticias_content_width', 640 );
}
add_action( 'after_setup_theme', 'hora_news_noticias_content_width', 0 );

function hora_news_noticias_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hora-news-noticias' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hora-news-noticias' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hora_news_noticias_widgets_init' );

function hora_news_noticias_scripts() {
	wp_enqueue_style( 'hora-news-noticias-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hora-news-noticias-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hora-news-noticias-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hora_news_noticias_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Classe para o bloco de consulta de posts

class WP_Query_Posts_Block {

    // Função para registrar o bloco
    public static function register_block() {
        register_block_type(
            'horanewsnoticias',
            array(
                'render_callback' => array( __CLASS__, 'render_block' ),
            )
        );
    }

    // Função de renderização do bloco

    public static function render_block( $attributes ) {
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();

                // Aqui você pode exibir as informações do post, como título, conteúdo ou miniatura
                echo '<div class="card">';
                echo '<img src="' . get_the_post_thumbnail_url() . '" alt="Imagem do Card" />';
                echo '<div class="card-content">';
                echo '<p>' . get_the_date( 'd M Y' ) . '</p>';
                echo '<h3>' . get_the_title() . '</h3>';
                echo '<button>leia mais</button>';
                echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
        } else {
            echo 'Nenhum post encontrado.';
        }
    }
}

// Registre o bloco

add_action( 'init', array( 'WP_Query_Posts_Block', 'register_block' ) );
