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
	'CANNEDMESSAGES_EXPLAIN_MANAGE'		=> 'Use este formulário para adicionar, remover, editar e reordenar mensagens e categorias enlatadas.',
	'CANNEDMESSAGES_EXPLAIN_ADD_EDIT'	=> 'Este formulário é para criar e editar mensagens ou categorias.',
	'CREATE_CANNEDMESSAGE'				=> 'Criar nova mensagem enlatada',
	'CANNEDMESSAGE_NAME'				=> 'Nome da mensagem enlatada',
	'CANNEDMESSAGE_LIST'				=> 'Lista de mensagens enlatadas',
	'NO_CANNEDMESSAGES'					=> 'Sem mensagens enlatadas',
	'NO_CANNEDMESSAGE'					=> 'Mensagem enlatada não especificada.',
	'CANNEDMESSAGE_IS_CAT'				=> 'É categoria',
	'CANNEDMESSAGE_CONTENT'				=> 'Conteúdo da mensagem',
	'NO_PARENT'							=> 'Nenhum',
	'CANNEDMESSAGE_PARENT'				=> 'Mensagem Pai',
	'MESSAGE_NAME_REQUIRED'				=> 'O nome da mensagem é obrigatório',
	'MESSAGE_CONTENT_REQUIRED'			=> 'O conteúdo da mensagem é necessário quando a mensagem não é uma categoria',
	'CANNEDMESSAGE_UPDATED'				=> 'A mensagem enlatada foi atualizada.',
	'CANNEDMESSAGE_CREATED'				=> 'A mensagem enlatada foi criada.',
	'CANNEDMESSAGE_PARENT_NOT_EXIST'	=> 'O pai de mensagens enlatadas não existe.',
	'CANNEDMESSAGE_PARENT_IS_NOT_CAT'	=> 'O pai da mensagem enlatada não é uma categoria.',
	'CANNEDMESSAGE_HAS_CHILDREN'		=> 'A categoria de mensagem enlatada tem filhos e não pode ser alterada para ser uma mensagem. Por favor, remova as crianças primeiro.',
	'CANNEDMESSAGE_HAS_CHILDREN_DEL'	=> 'A categoria de mensagem enlatada tem filhos e não pode ser excluída. Exclua as crianças primeiro antes de tentar excluir a categoria.',
	'CANNEDMESSAGES_DEL_CONFIRM'		=> 'Tem certeza de que deseja excluir a mensagem enlatada <i>%s</i>?',
	'CANNEDMESSAGES_DEL_CAT_CONFIRM'	=> 'Tem certeza de que deseja excluir a categoria de mensagens enlatadas <i>%s</i>?',
	'CANNEDMESSAGE_DELETED'				=> 'A mensagem enlatada foi excluída.',
	'CANNEDMESSAGE_CAT_DELETED'			=> 'A categoria de mensagem enlatada foi excluída.',
));
