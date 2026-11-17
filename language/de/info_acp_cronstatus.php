<?php
/**
*
* @package cronstatus
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CRON_STATUS_TITLE'	=> 'Cron-Status',
	'LOG_CORE_INSTALLED'	=> 'Dateien erfolgreich geändert',
	'LOG_CORE_DEINSTALLED'	=> 'Dateien erfolgreich wiederhergestellt',
	'LOG_CORE_NOT_REPLACED'	=> 'Datei(en) konnten nicht ersetzt werden<br />» %s',
	'LOG_CORE_NOT_UPDATED'	=> 'Datei(en) konnten nicht aktualisiert werden<br />» %s',
	'FH_HELPER_NOTICE'		=> 'Die ForumHulp-Helper-Erweiterung ist nicht installiert!<br />Lade <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> herunter und installiere sie im Ordner für ForumHulp-Erweiterungen.',
	'CRONSTAT_NOTICE'		=> '<div class="phpinfo"><p class="entry">Diese Erweiterung findest du unter %1$s » %2$s » %3$s.</p></div>',
));

$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Beschreibung',
	'DESCRIPTION_NOTICE'	=> 'Erweiterungshinweis',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'	=> 'Übersicht der Cron-Aufgaben mit Sortierfunktion',
			'DESCRIPTION_2'	=> 'Zeigt den Status jeder Cron-Aufgabe an',
			'DESCRIPTION_3'	=> 'Bereite Aufgaben können manuell gestartet werden',
			'DESCRIPTION_4'	=> 'Cron-Sperre mit einem Klick aufheben',
		),
		'note' => array(
			'NOTICE_1'		=> 'Optionaler Cron-Status-Hinweis auf der ACP-Startseite',
			'NOTICE_2'		=> 'In den Board-Einstellungen konfigurierbar',
			'NOTICE_3'		=> 'Cron kann dauerhaft aktiviert werden',
			'NOTICE_4'		=> 'Bereit für phpBB 3.3'
		)
	)
));
