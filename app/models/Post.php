<?php

class Post extends Eloquent
{
	public function User()
	{
			// if there would be a foreign key different to user_id, declare it as second parameter like in this case which is author_id
		return belongsTo('user', 'author_id');
	}



}