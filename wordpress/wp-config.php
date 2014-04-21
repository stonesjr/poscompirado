<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '#sars1d#');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V5v6)J|H+|+4|B7(]a_:GriDW~+`1EOI%Z#jQ)KsYa<)/|Bu@>jJ}(QN 5]n[w]k');
define('SECURE_AUTH_KEY',  '++P](Zh_W,) A0^[h}oZo+l#h|^-02?uefW=>c/jpwDOm:zoF|K0+]+-BneUG;8F');
define('LOGGED_IN_KEY',    'wcBPxEz}BWA}sT0?Y9WxC>RQf#[}M<3*3Lc~;9qlBm?3:-q+SjTDM> MAi!{**r-');
define('NONCE_KEY',        '#)LH6kN/xejhO=Ff1z!Diu+. ,T#+NfiNNI<&~>+`1dylv{Yjb-o@v9^m/IB2uGY');
define('AUTH_SALT',        '|-l};g/>q#>)&-(<{)| |q>~]y#c1@MSB&)yp%OPd`^i5+Yt{T[`!Wb1s%Q?k%YT');
define('SECURE_AUTH_SALT', 'jp6*e_)gn]4u|*}VQH 4+Z,FJD=j%o}kD|BUM^2gopF;-&,h+25dh`1i}Ntonj46');
define('LOGGED_IN_SALT',   'F{)39l@<:NVn;VpDRal;`j@e(HaAn#!V0-5^Yz12A,7HwCZLG?*p_=P~)?(riGL#');
define('NONCE_SALT',       'P-%CtHS/_O:h5FT!EoHmI: H-h3sD*MfKQh*pM0#(P,e!]QW=]8OsclBzzZ.j)s~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_desenvolv';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

