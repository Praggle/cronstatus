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
	'CRON'								=> 'Cron',
	'CRON_LOCKED'						=> 'Cron gesperrt',
	'CRON_TIME_LOCKED'					=> 'Cron-Sperrzeit',
	'ACP_CRON_STATUS_TITLE'				=> 'Cron-Status',
	'ACP_CRON_STATUS_EXPLAIN'			=> 'Der Cron-Status zeigt eine Übersicht der Cron-Aufgaben deines Forums. Eine rot markierte Aufgabe wurde noch nie gestartet oder weist ein Problem auf.<br />Ein rotes Schloss bedeutet, dass die Aufgabe gerade ausgeführt oder vom Cron-Manager gesperrt wird und dadurch andere Aufgaben blockiert. Klicke auf das Schloss, um die Cron-Sperre aufzuheben, oder starte alle Cron-Aufgaben mit einem Klick. Eine bereite Aufgabe kannst du über den Link daneben starten. Die Einstellungen findest du unter Allgemein » Board-Konfiguration » Board-Einstellungen.',
	'CRON_STATUS_REFRESH'				=> 'Aktualisierungsintervall in Sekunden',
	'CRON_TASK_LOCKED'					=> 'Cron-Aufgabe gesperrt – Sperre aufheben!',
	'CRON_STATUS_READY_TASKS'			=> 'Bereite Aufgaben',
	'CRON_STATUS_NOT_READY_TASKS'		=> 'Noch nicht bereite Aufgaben',
	'CRON_STATUS_NEVER_STARTED_TASKS'	=> 'Noch nie gestartete Aufgaben',
	'CRON_STATUS_NO_TASKS'				=> 'Keine Cron-Aufgaben verfügbar',
	'CRON_STATUS_DATE_FORMAT'			=> 'Datumsformat für die Cron-Status-Seite',
	'CRON_STATUS_DATE_FORMAT_EXPLAIN'	=> 'Das Datumsformat entspricht der PHP-Funktion <code>date</code>.',
	'CRON_STATUS_MAIN_NOTICE'			=> 'Hinweis auf der ACP-Startseite',
	'CRON_STATUS_MAIN_NOTICE_EXPLAIN'	=> 'Zeigt einen Cron-Status-Hinweis auf der ACP-Startseite an, wenn Cron gesperrt ist.',
	'CRON_STATUS_RUN_ALWAYS'			=> 'Cron immer ausführen',
	'CRON_STATUS_RUN_ALWAYS_EXPLAIN'	=> 'Cron-Aufgaben auch dann ausführen, wenn sie durch Bots ausgelöst werden. Das ist besonders für wenig besuchte Foren nützlich.',
	'CRON_TASK_NAME'					=> 'Aufgabenname',
	'CRON_TASK_DATE'					=> 'Geplante / letzte Ausführung',
	'CRON_NEW_DATE'						=> 'Nächste / neue Ausführung',
	'CRON_TASK_NEVER_STARTED'			=> 'Noch nie gestartet',
	'CRON_TASK_AUTO'					=> 'Automatisch',
	'CRON_TASK_DATE_TIME'				=> 'Aktuelles Datum und Uhrzeit',
	'CRON_STATUS_ERROR'					=> 'Fehler beim Aktualisieren',
	'CRON_STATUS_TIMEOUT'				=> 'Zeitüberschreitung beim Aktualisieren',
	'CRON_STATUS_ERROR_EXPLAIN'			=> 'Beim Aktualisieren der Seite ist ein Fehler aufgetreten.',
	'CRON_TASK_RUN'						=> 'Starten',
	'CRON_TASK_RUNNING'					=> 'Wird ausgeführt …',
	'CRON_TASK_RUN_NOW'					=> 'Jetzt starten',
	'CRON_TASK_RUN_ALL'					=> 'Alle starten'
));
