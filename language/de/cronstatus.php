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
	'CRON_TIME_LOCKED'					=> 'Cron-Zeit gesperrt',
	'ACP_CRON_STATUS_TITLE'				=> 'Cron-Status',
	'ACP_CRON_STATUS_EXPLAIN'			=> 'Cron-Status bietet eine Übersicht über die Cron-Aufgaben in deinem Forum. Eine rot markierte Aufgabe wurde noch nie gestartet oder weist ein Problem auf. Ein rotes Schloss bedeutet, dass diese Aufgabe gerade ausgeführt oder vom Cron-Manager gesperrt wird und dadurch andere Aufgaben blockiert. Setze die Cron-Sperre zurück, indem du auf das Schloss klickst, oder führe alle Cron-Aufgaben mit einem Klick aus. Eine startbereite Aufgabe kannst du über „Ausführen“ neben ihrem Namen starten. Cron-Status lässt sich unter Allgemein » Board-Konfiguration » Board-Einstellungen konfigurieren.',
	'CRON_STATUS_REFRESH'				=> 'Sekunden bis zur Aktualisierung',
	'CRON_TASK_LOCKED'					=> 'Cron-Aufgabe gesperrt, Sperre aufheben!',
	'CRON_STATUS_READY_TASKS'			=> 'Startbereite Aufgaben',
	'CRON_STATUS_NOT_READY_TASKS'		=> 'Nicht startbereite Aufgaben',
	'CRON_STATUS_NEVER_STARTED_TASKS'	=> 'Noch nie gestartete Aufgaben',
	'CRON_STATUS_NO_TASKS'				=> 'Keine Cron-Aufgaben verfügbar',
	'CRON_STATUS_DATE_FORMAT'			=> 'Datumsformat für die Cron-Status-Seite',
	'CRON_STATUS_DATE_FORMAT_EXPLAIN'	=> 'Das Datumsformat entspricht dem der PHP-Funktion <code>date</code>.',
	'CRON_STATUS_MAIN_NOTICE'			=> 'Hinweis auf der ACP-Startseite',
	'CRON_STATUS_MAIN_NOTICE_EXPLAIN'	=> 'Cron-Status-Hinweis auf der ACP-Startseite anzeigen, wenn Cron gesperrt ist.',
	'CRON_STATUS_RUN_ALWAYS'			=> 'Cron immer ausführen',
	'CRON_STATUS_RUN_ALWAYS_EXPLAIN'	=> 'Cron-Aufgaben auch ausführen, wenn sie von Bots ausgelöst werden. Praktisch für weniger stark besuchte Foren.',
	'CRON_TASK_NAME'					=> 'Aufgabenname',
	'CRON_TASK_DATE'					=> 'Geplantes / letztes Aufgabendatum',
	'CRON_NEW_DATE'						=> 'Ausführungs- / neues Aufgabendatum',
	'CRON_TASK_NEVER_STARTED'			=> 'Noch nie gestartet',
	'CRON_TASK_AUTO'					=> 'Automatisch',
	'CRON_TASK_DATE_TIME'				=> 'Aktuelles Datum und Uhrzeit',
	'CRON_STATUS_ERROR'					=> 'Aktualisierungsfehler',
	'CRON_STATUS_TIMEOUT'				=> 'Zeitüberschreitung bei der Aktualisierung',
	'CRON_STATUS_ERROR_EXPLAIN'			=> 'Beim Aktualisieren der Seite ist ein Fehler aufgetreten.',
	'CRON_TASK_RUN'						=> 'Ausführen',
	'CRON_TASK_RUNNING'					=> 'Wird ausgeführt ...',
	'CRON_TASK_RUN_NOW'					=> 'Jetzt ausführen',
	'CRON_TASK_RUN_ALL'					=> 'Alle ausführen'
));
