<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link https://wordpress.org/support/article/editing-wp-config-php/ Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'PlayEducacao' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'lv6&e}xV>;hH O`S4!_4j_IFij+}:>4h|SzzvkhRPrYWAZ_ $&9R~%IETwNLn]}Z' );
define( 'SECURE_AUTH_KEY', '4i]Ei&hbltr8;Dk8ilcFbi#yfc_q^_r/8Kk^xR)sJw_#gfPJ /D$~a?v?-roR:HO' );
define( 'LOGGED_IN_KEY', ' 7f)Gv3VN:(]oQ1u3=Y&65&,eIrf7bEr,<,-g^?+x67#Ri<E_20?d#:$}$A:#eE6' );
define( 'NONCE_KEY', ')r!zg`}k?+.F2ATt;iy#!1cVfjHZi0lv%gFr9R46j!&/n>Ih3ibp6NGkZno/)m^+' );
define( 'AUTH_SALT', 'l7/A_Ci`v;B.:fu3;!XaGJJEZr~:RTMaJaH[u]%#6(dWU&E]ily=c$`%#Co>dd8V' );
define( 'SECURE_AUTH_SALT', '?l?}<nd`Gjp5Yk!/|!Zm_Ys.P1p%POM>DeyI?.fWzG*IJWz4[GM6a$E;$m#4)9cW' );
define( 'LOGGED_IN_SALT', '526sZf#Ete!W<.v6W~a)Iw`J?YR9?Jw $9e^Q1]v/6dn a(s5!v1L</ZevDI-V-`' );
define( 'NONCE_SALT', 'L`n;7J2.<lokv/2E6urW h)~)k{V>fIW4kT#pOURh-C!z9P21=8c^dYR=P#OLcIb' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once ABSPATH . 'wp-settings.php';
