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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'animais' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'anwH)2mwX!JJAz&Yw%/*4iN-Isjd?8BvScx.>O}/[t+a^b4l5r-._fSE:Lyd@i_8' );
define( 'SECURE_AUTH_KEY',  'Gm1u2bk(4}0quwy ==3+3Rb t8SW(AB]]3{lGn8< GS~: [EOCxy4)gVD~1(aKg3' );
define( 'LOGGED_IN_KEY',    ';lV>PdvMFqL.?n*E$];_IEI$){mg9AmQNLrL2&&5Ah.i)F25]2E6G/~XS?!uVOvH' );
define( 'NONCE_KEY',        '_! >%2_>YOW]@UnhwDNw_17gtcMN?yg8lc^1}EYY!V~,I6Mxo&n+bE$ztPniKPvs' );
define( 'AUTH_SALT',        'lOwohUZjV?$&>uzph7r-j,^!WDS/%Oywe[b{#L&r$m[NaAxbo]`)7r!jIs)_uRx{' );
define( 'SECURE_AUTH_SALT', 'T(1E(mdv[A&U4kC2/<HKqe l%.0LT~-g+bd^8J#zo;Bbp=Pm0TF6w!w[X$/3&dT{' );
define( 'LOGGED_IN_SALT',   'l)$Pc/3k!Ajc{F.V!WJ43@N0(CZ5*NWiNY`05y_Hm0!Q&h25v9ql.*4wpfzyDEwM' );
define( 'NONCE_SALT',       'W2>veG[i2.Va=as}i}xPP3-WeCNXgzV83(}GzILRJ4}^:X@/va-]pR%ekA/M3vXS' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
