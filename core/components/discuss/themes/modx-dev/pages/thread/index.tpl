<!-- thread/index.html -->
[[+top]]

[[+aboveThread]]
<div class="f1-f12 h-group [[+answered:notempty=`answered`]]">
    <h1 class="Category [[+locked:is=`1`:then=`locked`:else=`unlocked`]]" post="[[+id]]">
        <a href="[[+url]]" title="[[+title]]">[[+title]]<span class="idx">#[[+idx]]</span></a>
        [[+answered:notempty=`<span class="tag solved">Solved</span>`:default=``]]
    </h1>
</div>
<div class="f1-f9">
<div>
	
	[[+pagination:notempty=`<div class="paginate stand-alone top horiz-list"> [[+pagination]]</div>`]]


	<ul class="dis-list group-fix">
        [[+posts]]
    </ul>
	[[+pagination:notempty=`<div class="paginate stand-alone bottom horiz-list"> [[+pagination]]</div>`]]
	[[$thread-login-post]]
    [[+quick_reply_form]]

    <br class="clearfix" />
</div>

	[[+belowThread]]
	<br class="clearfix" />
	[[+discuss.error_panel]]
</div><!-- Close Content From Wrapper -->

[[+bottom]]

<aside class="sidebar twenty12 f10-f12">
    [[!+discuss.user.id:is=``:then=`
        <div class="box first">
           <p><a href="[[~[[*id]]]]login" class="primary-cta login dis-action-login">Login to Post</a></p>
           <p>Don't have a MODX.com account? <a href="#">Create one</a></p>
    </div>
    `]]
    <div class="panel-box">

[[!+discuss.user.id:notempty=`
        <div class="box">
            <h4>Actions</h4>
            [[- limit this to just the mark unread button, or move that somewhere ]]
            <p>[[+actionbuttons]]</p>

            <p>Subscribe: <a href="[[~[[*id]]]]thread/feed.xml?thread=[[+id]]">RSS</a>
                [[+actionlink_subscribe:notempty=`
                <a href="[[+actionlink_subscribe]]">By email</a>`]]
                [[+actionlink_unsubscribe:notempty=`
                <a href="[[+actionlink_unsubscribe]]">Stop emails</a>
                `]]
            </p>

            <p>[[+moderators]]</p>

        </div>
`]]

        <div class="Box GuestBox">
            <div class="a-faux-btn-grp">
                <a class="a-secondary-cta l-inline-btn a-bug" href="http://tracker.modx.com">Found a bug?</a>
                <a class="a-secondary-cta l-inline-btn a-proposal" href="http://tracker.modx.com/projects/modx-proposals">Have a feature request?</a>
            </div>
            <a class="a-secondary-cta" href="[[~316]]">Buy Emergency Support <span>(Priority Support from the Source)</span></a>
        </div>

        <div class="box">
            <h4>Who’s talking</h4>
            <p>Posted in this thread:<br />[[+participants_usernames]]</p>
            <p>[[+readers]]</p>
        </div>
    </div>
</aside>
<!--close thread/index.html -->