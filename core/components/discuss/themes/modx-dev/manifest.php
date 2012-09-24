<?php
/**
 * Discuss
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Discuss, a native forum for MODx Revolution.
 *
 * Discuss is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Discuss is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Discuss; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package discuss
 */
/**
 * Theme manifest for default theme
 */
$manifest = array(
    'preview' => 'preview.png',
    'global' => array(
        'css' => array(
            'header' => array(
            ),
        ),
        'js' => array(
            'inline' => 'var DIS = {config: {}}; DIS.url = "'.$this->discuss->request->makeUrl().'";DIS.shJsUrl = "'.$this->discuss->config['jsUrl'].'sh/";DIS.config.connector = "'.$this->discuss->config['connectorUrl'].'"',
        ),
    ),
    'print' => array(
        'css' => array(
            'header' => array(
                'print.css',
            ),
        ),
    ),
    'home' => array(
        'options' => array(
            'showBoards' => true,
            'showBreadcrumbs' => true,
            'showRecentPosts' => false,
            'showStatistics' => true,
            'showLoginForm' => false,
            'bypassUnreadCheck' => true,
            'checkUnread' => true,
            'showLogoutActionButton' => false,
            'hideIndexBreadcrumbs' => false,
            'subBoardSeparator' => '',
        ),
    ),
    'board' => array(
        'options' => array(
            'showSubBoards' => true,
            'showPosts' => true,
            'showBreadcrumbs' => true,
            'showReaders' => true,
            'showModerators' => true,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'board.xml' => array(
        'options' => array(
            'showSubBoards' => false,
            'showPosts' => true,
            'showBreadcrumbs' => false,
            'showReaders' => false,
            'showModerators' => false,
            'useLastPost' => false,
        ),
    ),
    'thread' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showPosts' => true,
            'showBreadcrumbs' => true,
            'showViewing' => true,
            'showSubscribeOption' => true,
            'showPrintOption' => true,
            'showStickOption' => true,
            'showLockOption' => true,
            'showMarkAsSpamOption' => true,
            'showTitleInBreadcrumbs' => false,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'thread/new' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.new.js',
            ),
        ),
    ),
    'thread/reply' => array(
        'js' => array(
            'footer' => array(
                'dis.post.reply.js',
            ),
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'thread/modify' => array(
        'js' => array(
            'footer' => array(
                'dis.post.modify.js',
            ),
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'thread/move' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'thread/spam' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'thread/remove' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'post/report' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'post/spam' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showTitleInBreadcrumbs' => true,
        ),
    ),
    'search' => array(
        'js' => array(
            'footer' => array(
                'dis.search.js',
            ),
        ),
    ),
    'user' => array(
        'options' => array(
            'showRecentPosts' => true,
        ),
    ),
    'user/subscriptions' => array(
        'js' => array(
            'footer' => array(
                'user/dis.user.subscriptions.js',
            )
        ),
    ),
    'user/ignoreboards' => array(
        'js' => array(
            'footer' => array(
                'user/dis.user.ignoreboards.js',
            )
        ),
    ),
    'messages/index' => array(
        'options' => array(
            'showSubBoards' => true,
            'showPosts' => true,
            'showBreadcrumbs' => true,
            'showReaders' => true,
            'showModerators' => true,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'messages/new' => array(
        'js' => array(
            'footer' => array(
                'messages/dis.message.new.js',
            ),
        ),
    ),
    'messages/reply' => array(
        'js' => array(
            'footer' => array(
                'messages/dis.message.reply.js',
            ),
        ),
    ),
    'messages/modify' => array(
        'js' => array(
            'footer' => array(
                'messages/dis.message.modify.js',
            ),
        ),
    ),
    'messages/view' => array(
        'js' => array(
            'footer' => array(
                'dis.thread.js',
            )
        ),
        'options' => array(
            'showPosts' => true,
            'showBreadcrumbs' => true,
            'showViewing' => true,
            'showSubscribeOption' => false,
            'showPrintOption' => false,
            'showStickOption' => true,
            'showLockOption' => true,
            'showMarkAsSpamOption' => true,
            'showTitleInBreadcrumbs' => false,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'thread/recent' => array(
        'options' => array(
            'showTitleInBreadcrumbs' => true,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'thread/unread' => array(
        'options' => array(
            'showTitleInBreadcrumbs' => true,
            'showPaginationIfOnePage' => false,
        ),
    ),
    'thread/unread_last_visit' => array(
        'options' => array(
            'showTitleInBreadcrumbs' => true,
            'showPaginationIfOnePage' => false,
        ),
    ),
);
return $manifest;
