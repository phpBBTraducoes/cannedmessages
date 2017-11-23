<?php
/**
 *
 * Canned Messages. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0-dev] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'MCP_CANNEDMESSAGE_ADD_LOG'			=> '<strong>Mensagem enlatada adicionada</strong><br />» %s',
	'MCP_CANNEDMESSAGE_EDIT_LOG'		=> '<strong>Mensagem enlatada editada</strong><br />» %s',
	'MCP_CANNEDMESSAGE_DELETE_LOG'		=> '<strong>Mensagem enlatada deletada</strong><br />» %s',
	'MCP_CANNEDMESSAGE_MOVE_UP_LOG'		=> '<strong>Moveu mensagem enlatada</strong> %1$s <strong>para cima</strong> %2$s',
	'MCP_CANNEDMESSAGE_MOVE_DOWN_LOG'	=> '<strong>Moveu mensagem enlatada</strong> %1$s <strong>para baixo</strong> %2$s',
));
