<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('OGP_LANG_manage_listings', "Verwalte deine Nachrichten");
define('OGP_LANG_add_new_listing', "Nachricht veröffentlichen");
define('OGP_LANG_your_current_listings', "Ihre aktuellen Nachrichten");
define('OGP_LANG_edit', "Bearbeiten");
define('OGP_LANG_date', "Datum");
define('OGP_LANG_images', "Bilder");
define('OGP_LANG_title', "Titel");
define('OGP_LANG_description', "Nachrichten Inhalt");
define('OGP_LANG_written_by', "Geschrieben von");
define('OGP_LANG_details', "Weiterlesen");
define('OGP_LANG_modify', "Ändern");
define('OGP_LANG_save', "Speichern");
define('OGP_LANG_delete', "Löschen");
define('OGP_LANG_sure_to_delete', "Are you sure that you would like to delete these news?");
define('OGP_LANG_go_back', "Zurück");
define('OGP_LANG_new_added_success', "Die Neuigkeiten wurden erfolgreich veröffentlicht!");
define('OGP_LANG_add_another', "Noch einen hinzufügen");
define('OGP_LANG_or_message', "oder");
define('OGP_LANG_please_select', "Bitte auswählen");
define('OGP_LANG_submit', "einreichen");
define('OGP_LANG_edit_listing', "Nachrichten bearbeiten");
define('OGP_LANG_modifications_saved', "Die neuen Werte wurden erfolgreich gespeichert!");
define('OGP_LANG_modify_images', "Modify the new article images");
define('OGP_LANG_upload_more_images', "Mehr Bilder hochladen");
define('OGP_LANG_latest_news', "Neuesten Nachrichten");
define('OGP_LANG_search_results', "Suchergebnisse");
define('OGP_LANG_no_results', "Es wurde keine Nachricht gefunden.");
define('OGP_LANG_config_options', "Nachrichtenoptionen");
define('OGP_LANG_date_format', "Datumsformat");
define('OGP_LANG_results_per_page', "Nachrichten pro Seite");
define('OGP_LANG_enable_search', "Enable search engine");
define('OGP_LANG_image_quality', "Bildqualität (0-100)");
define('OGP_LANG_max_image_width', "Maximale Bildbreite (px)");
define('OGP_LANG_gallery_theme', "Image gallery skin");
define('OGP_LANG_images_bottom', "Position der Bildergalerie");
define('OGP_LANG_img_bottom', "Unter dem Artikel");
define('OGP_LANG_img_right', "Rechte Seite des Artikels");
define('OGP_LANG_no_word', "Nein");
define('OGP_LANG_yes_word', "Ja");
define('OGP_LANG_no_access', "Sie haben keinen Zugriff auf diese Seite. Diese Aktion wird für weitere Inspektionen protokolliert.");
define('OGP_LANG_write_permission_required', "Schreibberechtigung erforderlich");
define('OGP_LANG_fix_permission', "Korrigieren Sie die Berechtigungen. Das Modul funktioniert nicht wie beabsichtigt, bis Sie alle Berechtigungen beheben.");
define('OGP_LANG_check_permissions', "Berechtigungen prüfen");
define('OGP_LANG_permission_ok', "Erforderliche Berechtigungen sind alle OK!");
define('OGP_LANG_empty_title', "Bitte füllen Sie den Titel aus");
define('OGP_LANG_empty_description', "Bitte füllen Sie den Inhalt aus");
define('OGP_LANG_empty_author', "Bitte füllen Sie den Autorennamen aus");
define('OGP_LANG_gd_fail', "GD Erweiterung ist NICHT auf Ihren Server geladen. Bilder hochladen deaktiviert.");
define('OGP_LANG_search_news', "Suche nach den News");
define('OGP_LANG_help', "hilfe");
define('OGP_LANG_help_date', "Holen Sie sich Hilfe bei der unterschiedlichen Formatierung des Datums");
define('OGP_LANG_id_invalid', "The News ID does not exist");
define('OGP_LANG_id_not_set', "The News ID isn't set");
define('OGP_LANG_unauthorized_access', "Unauthorized access from");
define('OGP_LANG_wysiwyg', "WYSIWYG editor");
define('OGP_LANG_tinymce_lang', "Tiny MCE language");
define('OGP_LANG_da', "Dänisch");
define('OGP_LANG_de', "Deutsch");
define('OGP_LANG_en_GB', "Englisch");
define('OGP_LANG_es', "Spanisch");
define('OGP_LANG_fi', "Finnisch");
define('OGP_LANG_fr_FR', "Französisch");
define('OGP_LANG_it', "Italienisch");
define('OGP_LANG_pl', "Polnisch");
define('OGP_LANG_pt_PT', "Portugiesisch");
define('OGP_LANG_ru', "Russisch");
define('OGP_LANG_tinymce_skin', "Tiny MCE skin");
define('OGP_LANG_tinymce_skin_custom', "You absolutely need to upload your own custom skin in <b>modules/news/js/tinymce/skins/custom/</b> folder to be able to use this skin. If you select it without doing so, you'll encounter problems. Create your own custom skin here <a href='http://skin.tinymce.com/' target='_blank'>http://skin.tinymce.com/</a>.");
define('OGP_LANG_safe_HTML', "HTML Purifier");
define('OGP_LANG_safe_HTML_en', "HTML Purifier enabled");
define('OGP_LANG_safe_HTML_dis', "HTML Purifier disabled");
define('OGP_LANG_safe_HTML_en_info', "The HTML content of the article in the detailed view will be purified. This will lead in the removal of some HTML tags like iframes. Edit the file <b>modules/news/config.php</b> to change the setting 'safe_HTML' from value '1' (enabled) to value '0' (disabled) to disable this bahavior and allow usage of full HTML without restriction.");
define('OGP_LANG_safe_HTML_dis_info', "The HTML content of the article in the detailed view will not be purified. Edit the file <b>modules/news/config.php</b> to change the setting 'safe_HTML' from value '0' (disabled) to value '1' (enabled) to enable safe HTML tags usage only.");
?>