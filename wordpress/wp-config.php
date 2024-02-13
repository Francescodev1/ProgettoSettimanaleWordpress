<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'progettowordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X-OvI>*L CDR@lS8]P,s3KlH8 ,4@uyoL<d950,.S{JM(%*6>V#I5/_0o:m1?W)U' );
define( 'SECURE_AUTH_KEY',  'n)h/JC?|/|Y{b5ERA:i~%M?q1D2bU[D<li=^6$qmHR4-Kd2*H<L29W[@S.HA@KCw' );
define( 'LOGGED_IN_KEY',    'gc.- xrk%y=>=w*f^Of}Y<0F,=&k+,EenM$>~):#iZ_E7_TZqIviu((e[~]Wu9;X' );
define( 'NONCE_KEY',        '%X[|zT/C>*iY~A-5VDd]k5H}%B@B}Yiq j49iBL&(?sddGVqa9pw=b?cjGk,q]0|' );
define( 'AUTH_SALT',        'V&|#>yvXd}~{uYGA7SrWvbYVz5mnQYHt -,@k;O$q6On=^~J_?Q2EXS@mhY~Zb]i' );
define( 'SECURE_AUTH_SALT', 'b{D%bHtE%T_uo!]x# cpw%cV,X`;/IJOK>?,aKA[7jeOIJmo~-%,4::[*OCH23uH' );
define( 'LOGGED_IN_SALT',   '3sfo@qf-u{TI)Prxm6(gHyu[B~A-V2eci!vtPZx!jb7.zG2Wsl[{ioXvz/%sGz1x' );
define( 'NONCE_SALT',       'UgQiE|5<psDZ~slPX;xlAd1g8]CIU*}bB0 9y_ +y{5&Xfd5AOjc)W|#Nga7KBV ' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
