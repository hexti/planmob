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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'planmob');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'N&;{X;^Djw,8=$9It1s}q,2T!Nlj5k=VeJk4asn +[|s|xXin@@S@)z5xBdcGw@~');
define('SECURE_AUTH_KEY', '|4j0g;E{)KKRDkfb+2c[|[;C:7fSD4Dz7lMk;pR!m13Ec0CJ<zNtQJ}:BU<~cAWs');
define('LOGGED_IN_KEY', 'OY:IIO+/fG;Fq dRUn[gga*7PWI;ku_{YOMp5?Q^TJOBH+]{%=DD, 6=H^Y;|4*+');
define('NONCE_KEY', 'NTUR CT)8BDJ$|tF%97SZO!0F6@_su@O1YRbijAj{@N&bGXwup(mOBg?[Z<mTd}}');
define('AUTH_SALT', 'f4@!Ap>|KjHl?CY@l`?0 tG62!~9AGF8)[sb2Q!3AN4z_PL_DpZ{V ^w_>@6b/Cu');
define('SECURE_AUTH_SALT', 'r56jO^xZ^XHNC@+qBzca0AIr`);@-S7i& %76PfsZN0i_*^V+^N>Ic4>/qb8A.E.');
define('LOGGED_IN_SALT', '#l9z}sL=1%*LTf3;W|{bb_C+vT|{=O-&C*w$g79CW2CCfP1LYRHmHTS< X-xY2-g');
define('NONCE_SALT', 'DK_Q1n}d-o=Lh:@?RHwm1UZcVP PEj([]ddE$@fNR#]7r|}B=S,r,d$PqZg_cufP');

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
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__).'/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once (ABSPATH.'wp-settings.php');
