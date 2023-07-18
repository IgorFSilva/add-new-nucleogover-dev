<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ril+6TV(F+=2l#b/AC5D</x_SEv:6+vt_H|y>i?VRDRf#)N{dfP88S>X,X4%:It4' );
define( 'SECURE_AUTH_KEY',  'E0dym3fIC&FAC_^^r2c)EH5N5=bFK.L;ZTv?Oi;g9Pm?+qCC]j:]}wGHg$yw9g$>' );
define( 'LOGGED_IN_KEY',    '1-[)`%UvO7WOHKES(Z&*[-L?>dmH{zri vNsn+IZf#T}7u%*dqyBo*!:/Ll5|4qM' );
define( 'NONCE_KEY',        'ogYltmIQQH^Lp(8#ZSb2AoB.;-ZB`4GA8sN_@}Oa~JdiUf4J.Fn18/]6Ygl*uP)j' );
define( 'AUTH_SALT',        'CHc=oXO*HgBl~[f0^y*L_xQFvQkzu }m(]U)D[:IOX5cN?L&!Oyps2U*(,]uVHBK' );
define( 'SECURE_AUTH_SALT', 'GB@)~wf;#Ew_LC-I(Jv,^j!ikF[RSO3K7TpX_%1s%B{`]Sd4:+;z;_mh% O]@Lkg' );
define( 'LOGGED_IN_SALT',   '=A9YzlxUBG`D~y|qGT5.3XU6{e QK>YXh.MfFLpvRONxh6NONrfxLjj-F$(N.9s}' );
define( 'NONCE_SALT',       ']r(VX<Hz#[90E?7pJhd?AU mrEP8cy#]IHP7n|fRg_i.xSWw1Su|GB9D<-8Hku-{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
