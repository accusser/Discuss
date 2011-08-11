
<form action="[[~[[*id]]]]thread/move?thread=[[+id]]" method="post" class="dis-form" id="dis-remove-thread-form">

	<ul class="DataList CategoryList CategoryListWithHeadings">
	
		<li class="Item CategoryHeading Depth1">
	    <div class="ItemContent Category">[[%discuss.thread_remove? &namespace=`discuss` &topic=`post`]]</div>
	    </li>
	</ul>

    
    <input type="hidden" name="thread" value="[[+id]]" />
    
    <p>[[%discuss.thread_move_message? &thread=`[[+title]]`]]</p>
    
    <span class="error">[[+error]]</span>

    <label for="dis-move-to-board">[[%discuss.board]]:
        <span class="error">[[+error.board]]</span>
    </label>
    <select name="board" id="dis-move-to-board">[[+boards]]</select>

    
    <br class="clearfix" />
    
    <div class="dis-form-buttons">
    <input type="submit" name="move-thread" class="Button" value="[[%discuss.thread_move]]" />
    <input type="button" class="Button" value="[[%discuss.cancel]]" onclick="location.href='[[+url]]';" />
    </div>
</form>