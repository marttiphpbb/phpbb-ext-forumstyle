<?php
/**
* phpBB Extension - marttiphpbb Forum Style
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\forumstyle\event;

use phpbb\event\data as event;
use phpbb\template\template;
use marttiphpbb\forumstyle\util\cnst;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $template;

	public function __construct(template $template)
	{
		$this->template = $template;
	}

	static public function getSubscribedEvents()
	{
		return [
			'core.mcp_view_forum_modify_sql'
				=> 'core_mcp_view_forum_modify_sql',
		];
	}

	public function core_mcp_view_forum_modify_sql(event $event)
	{
		$forum_id = $event['forum_id'];

		$this->template->assign_vars([
			'MARTTIPHPBB_FORUMSTYLE_FORUM_ID'	=> $forum_id,
		]);
	}
}
